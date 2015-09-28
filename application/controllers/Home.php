<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
         
        public function __construct() {
                parent::__construct();
                $this->load->model('home_model');
                $this->load->helper('url_helper');
        }
        
        public function index()
	{       
	    $this->load->view('header');
            $data['title'] = 'Exclushare';
            $this->load->view('home',$data);
            $this->load->view('footer');
            //$this->load->view('admin/admin_home');
	}
}
