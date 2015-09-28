<?php
/***
 * Module Name : Login and Registration Module
 * Creator's Name : India Infotech Team
 * Module Description : This 
 ***/
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
         
        public function __construct() {
                parent::__construct();
                $this->load->model('common_model');
                $this->load->model('login_model');
                // Load url helper class
                $this->load->helper('url_helper');
                // Load form validation library
                $this->load->library('form_validation');
               // Load session library
                $this->load->library('session');
        }
        
        //Function load landing page for the site
        public function index() {
            
	    $this->load->view('header');
            $data['title'] = 'Login Page';
            $this->load->view('page_templates/login');
            $this->load->view('footer');
        }
                      
        // Check for user login process
        public function user_Login_Process() {
            
            $data = array(
                        'username' => $this->input->post('username'),
                        'password' => md5($this->input->post('password'))
                    );
            $result = $this->login_model->login($data,'users');
            if ($result == TRUE) {
                $username = $this->input->post('username');
                $result = $this->login_model->read_user_information($username,'users','usermeta');
                
                if ($result != false) {
                    $session_data = array(
                                        'user_login' => $result[0]->user_login,
                                        'user_email' => $result[0]->user_email,
                                        'user_role'  => $result[0]->meta_value
                                    );
                    // Add user data in session
                    $this->session->set_userdata('logged_in', $session_data);
                    $data['title'] = 'Exclushare';
                    $this->load->view('header');
                    $this->load->view('home');
                    $this->load->view('footer');
                }
            } else {
                
                $data['error_message'] = 'Invalid Username or Password';
                $data['title'] = 'Login Page';
                $this->load->view('header');
                $this->load->view('page_templates/login', $data);
                $this->load->view('footer');
                
            }
        }
        
        // Logout from admin page
        public function logout() {

            // Removing session data
            $sess_array = array(
                              'username' => ''
                          );
            $this->session->unset_userdata('logged_in', $sess_array);
            $data['message_display'] = 'Successfully Logout';
            $data['title'] = 'Login Page';
            $this->load->view('header');
            $this->load->view('login_form', $data);
            $this->load->view('footer');
        }
                       
        // Validate and store registration data in database
        public function new_User_Registration() {
           
            $data = array(
                        'user_login'        => $this->input->post('usernamesignup'),
                        'user_email'        => $this->input->post('emailsignup'),
                        'user_pass'         => md5($this->input->post('passwordsignup'))
                    );
            
            $result = $this->login_model->check_User_Exists($data,'users');
            if ($result != TRUE) {
                $data['error_message'] = 'User Already Exist';
                $data['title'] = 'Login Page';
                $this->load->view('header');
                $this->load->view('page_templates/login', $data);
                $this->load->view('footer');
            } else {
                $result = $this->login_model->check_Password_Duplicacy($data,$this->input->post('passwordsignup_confirm'));
                if($result != TRUE) {
                    $data['error_message'] = 'Password and Confirm Password not matched';
                    $data['title'] = 'Registration Page';
                    $this->load->view('header');
                    $this->load->view('page_templates/login#toregister', $data);
                    $this->load->view('footer');
                } else {
                    $result = $this->common_model->insert_Data($data,'users');
                    
                    if($result == TRUE) {
                        //$result = $this->common_model->insert_Data($data,'usermeta');
                        $meta_data = array(
                                        'user_id'    => $this->common_model->last_Insert_Data(),
                                        'meta_key'   => 'user_role',
                                        'meta_value' => $this->input->post('user_role')
                                    );
                        $result = $this->common_model->insert_Meta_Data($meta_data,'usermeta');
                        if($result == TRUE) {
                            $data['success_message'] = 'User Added Successfully!';
                            $data['title'] = 'Login Page';
                            $this->load->view('header');
                            $this->load->view('page_templates/login', $data);
                            $this->load->view('footer');
                        } else {
                            $data['error_message'] = 'Please enter correct data.';
                            $data['title'] = 'Registration Page';
                            $this->load->view('header');
                            $this->load->view('page_templates/login#toregister', $data);
                            $this->load->view('footer');
                        }
                        
                    } else {
                        $data['error_message'] = 'Please Enter Correct Data';
                        $data['title'] = 'Registration Page';
                        $this->load->view('header');
                        $this->load->view('page_templates/login#toregister', $data);
                        $this->load->view('footer');
                    }
                }
            }
        }
}
