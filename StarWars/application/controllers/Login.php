<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Login
 *
 * @author Acer
 */
class Login extends CI_Controller{
    public function __construct() { 
         parent::__construct(); 
         
         $this->load->model('login_model');
         
         $this->load->helper(array('form', 'url')); 
      } 
	
      public function index() {
         $this->load->library('form_validation');
	
	 $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
	 $this->form_validation->set_rules('password', 'Password', 'required');	 
			
         if ($this->form_validation->run() == FALSE) { 
            $this->load->view('login_form'); 
         } 
         else { 
			$result = $this->login_model->login();
			if ($result > 0)
			redirect('home');
			else 
			  { 
				$msg = "The email or password you entered is incorrect.";
				$this->load->view('login_form',$msg);
			  } 
		}
	} 
		
    public function home()
    {
        $this->load->view('home');
    }
}
