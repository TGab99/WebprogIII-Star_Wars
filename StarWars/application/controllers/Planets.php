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
    
    public function insert(){
        if($this->input->post('submit')){
            
            $upload_config['allowed_types'] = 'jpg|jpeg|gif|png';
            $upload_config['max_size'] = 2355;
            $upload_config['min_width'] = 250;
            $upload_config['max_width'] = 2000;
            $upload_config['min_height'] = 250;
            $upload_config['max_height'] = 1200;
            
            $upload_config['file_name'] = $_FILES['file']['name'];
            $upload_config['upload_path'] = './uploads/image/planet/';
            $upload_config['file_ext_tolower'] = TRUE;
            $upload_config['overwrite'] = TRUE;
            
            $this->load->library('upload');
            $this->upload->initialize($upload_config);
            
            $this->load->library('form_validation');
            
            $this->form_validation->set_rules('name','Name','required');
            $this->form_validation->set_rules('regio','Regio','required');
            $this->form_validation->set_rules('sector','Sector','required');
            $this->form_validation->set_rules('system','System','required');
            
            if($this->form_validation->run() && $this->upload->do_upload('file') == TRUE){
                $this->planets_model->insert($this->input->post('name'), $this->input->post('regio'), $this->input->post('sector'), 
                        $this->input->post('system'), $upload_config['file_name']);
                
                $this->load->helper('url');
                redirect(base_url('planets'));
            }
        }
        $this->load->helper('form');
        $this->load->view('planets/insert');
    }
    
    public function profile($id = NULL){
        if($id == NULL){
            show_error('You should give the id!');
        }
        
        $record = $this->planets_model->select_by_id($id);
        
        if($record == NULL){
            show_error('No such record in the table!');
        }
        
        $view_params = [
            'planets' => $record
        ];
        
        $this->load->helper('form');
        $this->load->view('planets/profile',$view_params);
    }
    
    public function edit($id = NULL){
        if($id == NULL){
            show_error('You should give the id!');
        }
        
        $record = $this->planets_model->select_by_id($id);
        
        if($record == NULL){
            show_error('No such record in the table!');
        }
        
        $this->load->library('form_validation');
            
        $this->form_validation->set_rules('name','Name','required');
        $this->form_validation->set_rules('regio','Regio','required');
        $this->form_validation->set_rules('sector','Sector','required');
        $this->form_validation->set_rules('system','System','required');
        
        if($this->form_validation->run() == TRUE){
            $this->planets_model->update($id,$this->input->post('name'), $this->input->post('regio'), $this->input->post('sector'), 
                        $this->input->post('system'));
            
            $this->load->helper('url');
            redirect(base_url('planets'));
        }else{
            $view_params = [
                'planets' => $record
            ];
            
            $this->load->helper('form');
            $this->load->view('planets/edit',$view_params);
        }
    }
    
    public function delete($id = NULL){
        if($id == NULL){
            show_error('You should give the id!');
        }
        
        $record = $this->planets_model->select_by_id($id);
        
        if($record == NULL){
            show_error('No such record in the table!');
        }
        
        $this->planets_model->delete($id);
        
        $this->load->helper('url');
        redirect(base_url('planets'));
    }
}
