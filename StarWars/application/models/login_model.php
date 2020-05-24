<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of login_model
 *
 * @author Acer
 */
class login_model extends CI_Model{
    public function __construct() {
        parent::__construct();
        
        $this->load->database();
    }
    public function login()
    {
	   $email = $this->input->post('email');
	   $password = md5($this->input->post('password'));
	   $query = $this->db->where(['email' => $email, 'password' => $password])->get('users');
	   return (int) $query->num_rows();
    }
}
