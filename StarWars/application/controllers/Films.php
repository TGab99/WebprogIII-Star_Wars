<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Films
 *
 * @author Acer
 */
class Films extends CI_Controller{
    public function __construct() {
        parent::__construct();
        
        $this->load->model('films_model');
    }
    
    public function index(){
        $records = $this->films_model->get_list();
        
        $view_params = [
            'film' => $records
        ];
        
        $this->load->helper('url');
        
        $this->load->view('films/list',$view_params);
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
            $upload_config['upload_path'] = './uploads/image/films/';
            $upload_config['file_ext_tolower'] = TRUE;
            $upload_config['overwrite'] = TRUE;
            
            $this->load->library('upload');
            $this->upload->initialize($upload_config);
            
            $this->load->library('form_validation');
            
            $this->form_validation->set_rules('title','Title','required');
            $this->form_validation->set_rules('release_date','Release date','required');
            
            if($this->form_validation->run() && $this->upload->do_upload('file') == TRUE){
                $this->films_model->insert($this->input->post('title'), $this->input->post('release_date'), $upload_config['file_name']);
                
                $this->load->helper('url');
                redirect(base_url('films'));
            }
        }
        $this->load->helper('form');
        $this->load->view('films/insert');
    }
    
    public function profile($id = NULL){
        if($id == NULL){
            show_error('You should give the id!');
        }
        
        $record = $this->films_model->select_by_id($id);
        
        if($record == NULL){
            show_error('No such record in the table!');
        }
        
        $view_params = [
            'film' => $record
        ];
        
        $this->load->helper('form');
        $this->load->view('films/profile',$view_params);
    }
    
    public function edit($id = NULL){
        if($id == NULL){
            show_error('You should give the id!');
        }
        
        $record = $this->films_model->select_by_id($id);
        
        if($record == NULL){
            show_error('No such record in the table!');
        }
        
        $this->load->library('form_validation');
            
       $this->form_validation->set_rules('title','Title','required');
       $this->form_validation->set_rules('release_date','Release date','required');
        
        if($this->form_validation->run() == TRUE){
            $this->films_model->update($id,$this->input->post('title'), $this->input->post('release_date'));
            
            $this->load->helper('url');
            redirect(base_url('films'));
        }else{
            $view_params = [
                'film' => $record
            ];
            
            $this->load->helper('form');
            $this->load->view('films/edit',$view_params);
        }
    }
    
    public function delete($id = NULL){
        if($id == NULL){
            show_error('You should give the id!');
        }
        
        $record = $this->films_model->select_by_id($id);
        
        if($record == NULL){
            show_error('No such record in the table!');
        }
        
        $this->films_model->delete($id);
        
        $this->load->helper('url');
        redirect(base_url('films'));
    }
}
