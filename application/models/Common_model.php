<?php
/***
 * Module Name : Common Module
 * Creator's Name : India Infotech Team
 * Module Description : This module will perform common crud operations,the functions which are common to most of the operations are kept here.
 ***/
defined('BASEPATH') OR exit('No direct script access allowed');

class Common_model extends CI_Model {

	public function __construct()
        {
                $this->load->database();
        }
        
        public function insert_Data($data,$table_name=null) {
            // Query to insert data in database
            $this->db->insert($table_name, $data);
            if ($this->db->affected_rows() > 0) {
                return true;
            } else {
                return false;
            }    
        }
        
        //function to get the last inserted id
        public function last_Insert_Data() {
            // Query to insert data in database
            return $this->db->insert_id();
        }
        
        public function insert_Meta_Data($data,$table_name=null) {
            // Query to insert data in database
            $this->db->insert($table_name, $data);
            if ($this->db->affected_rows() > 0) {
                return true;
            } else {
                return false;
            }    
        }
                
        public function delete_Data() {
                
        }
        
        public function select_Data() {
                
        }
        
}