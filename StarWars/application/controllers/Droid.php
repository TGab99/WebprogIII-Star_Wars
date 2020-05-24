<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Droid
 *
 * @author Acer
 */
class Droid extends CI_Controller{
    public function __construct() {
        parent::__construct();
        
        $this->load->model('droid_model');
    }
    
    public function index(){
        $records = $this->droid_model->get_list();
        
        $view_params = [
            'droid' => $records
        ];
        
        $this->load->helper('url');
        
        $this->load->view('droid/list',$view_params);
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
            $upload_config['upload_path'] = './uploads/image/droid/';
            $upload_config['file_ext_tolower'] = TRUE;
            $upload_config['overwrite'] = TRUE;
            
            $this->load->library('upload');
            $this->upload->initialize($upload_config);
            
            $this->load->library('form_validation');
            
            $this->form_validation->set_rules('name','Name','required');
            $this->form_validation->set_rules('homeworld','Homeworld','required');
            $this->form_validation->set_rules('creator','Creator','required');
            $this->form_validation->set_rules('model','Model','required');
            $this->form_validation->set_rules('class','Class','required');
            
            if($this->form_validation->run() && $this->upload->do_upload('file') == TRUE){
                $this->droid_model->insert($this->input->post('name'), $this->input->post('homeworld'), $this->input->post('creator'), 
                        $this->input->post('model'), $this->input->post('class'), $upload_config['file_name']);
                
                $this->load->helper('url');
                redirect(base_url('droid'));
            }
        }
        $this->load->helper('form');
        $this->load->view('droid/insert');
    }
    
    public function profile($id = NULL){
        if($id == NULL){
            show_error('You should give the id!');
        }
        
        $record = $this->droid_model->select_by_id($id);
        
        if($record == NULL){
            show_error('No such record in the table!');
        }
        
        $view_params = [
            'droid' => $record
        ];
        
        $this->load->helper('form');
        $this->load->view('droid/profile',$view_params);
    }
    
    public function edit($id = NULL){
        if($id == NULL){
            show_error('You should give the id!');
        }
        
        $record = $this->droid_model->select_by_id($id);
        
        if($record == NULL){
            show_error('No such record in the table!');
        }
        
        $this->load->library('form_validation');
            
        $this->form_validation->set_rules('name','Name','required');
            $this->form_validation->set_rules('homeworld','Homeworld','required');
            $this->form_validation->set_rules('creator','Creator','required');
            $this->form_validation->set_rules('model','Model','required');
            $this->form_validation->set_rules('class','Class','required');
        
        if($this->form_validation->run() == TRUE){
            $this->droid_model->update($id,$this->input->post('name'), $this->input->post('homeworld'), $this->input->post('creator'), 
                        $this->input->post('model'), $this->input->post('class'));
            
            $this->load->helper('url');
            redirect(base_url('droid'));
        }else{
            $view_params = [
                'droid' => $record
            ];
            
            $this->load->helper('form');
            $this->load->view('droid/edit',$view_params);
        }
    }
    
    public function delete($id = NULL){
        if($id == NULL){
            show_error('You should give the id!');
        }
        
        $record = $this->droid_model->select_by_id($id);
        
        if($record == NULL){
            show_error('No such record in the table!');
        }
        
        $this->droid_model->delete($id);
        
        $this->load->helper('url');
        redirect(base_url('droid'));
    }
}
