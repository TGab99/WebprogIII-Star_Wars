<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of reg_model
 *
 * @author Acer
 */
class reg_model extends CI_Model{
    public function __construct() {
        parent::__construct();
        
        $this->load->database();
    }
    
    public function saveUser()
    {
	   $data['first_name'] = $this->input->post('first_name');
           $data['last_name'] = $this->input->post('last_name');
           $data['username'] = $this->input->post('username');
	   $data['email'] = $this->input->post('email');
	   $data['password'] = md5($this->input->post('password'));
	   $this->db->insert('users', $data);
    }
}
