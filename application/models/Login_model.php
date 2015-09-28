<?php
/***
 * Module Name : Login Model
 * Creator's Name : India Infotech Team
 * Module Description : This model will handle all the login and registration check and functionality
 ***/

defined('BASEPATH') OR exit('No direct script access allowed');

class Login_model extends CI_Model {

    public function __construct()
        {
                $this->load->database();
        }
        
        //Function to check if user or email already exist
        public function check_User_Exists($data,$table_name=null) {
            
            $condition = "user_login =" . "'" . $data['user_login'] . "' OR user_email =" . "'" . $data['user_email'] . "'";
            $this->db->select('*');
            $this->db->from($table_name);
            $this->db->where($condition);
            $this->db->limit(1);
            $query = $this->db->get();
            
            if ($query->num_rows() == 0) {
                return true;
            } else {
                return false;
            }    
        }
        
        //This function checks if confirm  password is matching with entered password or not
        public function check_Password_Duplicacy($data,$confirm_pass) {
            $confirm_pass = md5($confirm_pass);
            if($data['user_pass'] == $confirm_pass) {
                return true;
            } else {
                return false;
            }
        }
        
        // Read data using username and password
        public function login($data,$table) {

            $condition = "(user_login =" . "'" . $data['username'] . "' OR user_email =" . "'" . $data['username'] . "' ) AND " . "user_pass =" . "'" . $data['password'] . "'";
            $this->db->select('*');
            $this->db->from($table);
            $this->db->where($condition);
            $this->db->limit(1);
            $query = $this->db->get();

            if ($query->num_rows() == 1) {
                return true;
            } else {
                return false;
            }
        }
        
        // Read data from database to show data in admin page
        public function read_user_information($username,$table_user,$table_usermeta) {

            $condition = "{$table_user}.user_login =" . "'" . $username . "' OR {$table_user}.user_email =" . "'" . $username . "'";
            $this->db->select("{$table_user}.*,{$table_usermeta}.*");
            $this->db->from($table_user);
            $this->db->join($table_usermeta,"{$table_usermeta}.user_id = {$table_user}.ID");
            $this->db->where($condition);
            $this->db->limit(1);
            $query = $this->db->get();

            if ($query->num_rows() == 1) {
                return $query->result();
            } else {
                return false;
            }
        }
        //This function sends user a verification mail
        public function user_Verification_Mail($useremail) {
            
        }
}