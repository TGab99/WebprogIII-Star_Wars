<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Register
 *
 * @author Acer
 */
class Register extends CI_Controller{
    public function __construct() { 
         parent::__construct(); 
         $this->load->helper(array('form', 'url'));
         $this->load->model('reg_model');
      } 
	
      public function index() {
         $this->load->library('form_validation');
         
	 $this->form_validation->set_rules('first_name', 'Firstname', 'required');
         $this->form_validation->set_rules('last_name', 'Lastname', 'required');
         $this->form_validation->set_rules('username', 'Username', 'required');
	 $this->form_validation->set_rules('email', 'Email', 'required|valid_email|callback_check_user');
	 $this->form_validation->set_rules('password', 'Password', 'required|min_length[6]|max_length[15]');	 
			
         if ($this->form_validation->run() == FALSE) { 
            $this->load->view('reg_form'); 
         } 
         else {
		    $this->reg_model->saveUser();
		    $success = "Your account has been successfully created!";
                    
                    redirect(base_url('index'),compact($success)); 
         } 
      }
        public function check_user($email)
        {
            $query = $this->db->where('email', $email)->get("users");
            if ($query->num_rows() > 0)
            {
                $this->form_validation->set_message('check_user','The '.$email.' belongs to an existing account');
                return FALSE;
            }
            else
                return TRUE;
	  }	
}