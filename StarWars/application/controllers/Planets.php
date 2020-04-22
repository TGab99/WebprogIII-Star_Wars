<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Planets
 *
 * @author Acer
 */
class Planets extends CI_Controller{
    public function __construct() {
        parent::__construct();
        
        $this->load->model('planets_model');
    }
    
    public function index(){
        $records = $this->planets_model->get_list();
        
        $view_params = [
            'planets' => $records
        ];
        
        $this->load->helper('url');
        
        $this->load->view('planets/list',$view_params);
    }
}
