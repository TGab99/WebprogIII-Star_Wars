<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Senators
 *
 * @author Acer
 */
class Senators extends CI_Controller{
    public function __construct() {
        parent::__construct();
        
        $this->load->model('senators_model');
    }
    
    public function index(){
        $records = $this->senators_model->get_list();
        
        $view_params = [
            'senator' => $records
        ];
        
        $this->load->helper('url');
        
        $this->load->view('senators/list',$view_params);
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
            $upload_config['upload_path'] = './uploads/image/senators/';
            $upload_config['file_ext_tolower'] = TRUE;
            $upload_config['overwrite'] = TRUE;
            
            $this->load->library('upload');
            $this->upload->initialize($upload_config);
            
            $this->load->library('form_validation');
            
            $this->form_validation->set_rules('name','Név','required');
            $this->form_validation->set_rules('homeworld','Anyabolygó','required');
            $this->form_validation->set_rules('species','Faj','required');
            $this->form_validation->set_rules('gender','nem','required');
            
            if($this->form_validation->run() && $this->upload->do_upload('file') == TRUE){
                $this->senators_model->insert($this->input->post('name'), $this->input->post('homeworld'), $this->input->post('species'), 
                        $this->input->post('gender'), $upload_config['file_name']);
                
                $this->load->helper('url');
                redirect(base_url('senators'));
            }
        }
        $this->load->helper('form');
        $this->load->view('senators/insert');
    }
    
    public function profile($id = NULL){
        if($id == NULL){
            show_error('Az adatlap megtekintéséhez hiányzik az id!');
        }
        
        $record = $this->senators_model->select_by_id($id);
        
        if($record == NULL){
            show_error('Nincs ilyen id-val ellátott mező!');
        }
        
        $view_params = [
            'senator' => $record
        ];
        
        $this->load->helper('form');
        $this->load->view('senators/profile',$view_params);
    }
    
    public function edit($id = NULL){
        if($id == NULL){
            show_error('A szerkesztéshez hiányzik az id!');
        }
        
        $record = $this->senators_model->select_by_id($id);
        
        if($record == NULL){
            show_error('Nincs ilyen id-val ellátott mező!');
        }
        
        $this->load->library('form_validation');
            
        $this->form_validation->set_rules('name','Név','required');
        $this->form_validation->set_rules('homeworld','Anyabolygó','required');
        $this->form_validation->set_rules('species','Faj','required');
        $this->form_validation->set_rules('gender','Nem','required');
        
        if($this->form_validation->run() == TRUE){
            $this->senators_model->update($id,$this->input->post('name'), $this->input->post('homeworld'), $this->input->post('species'), 
                        $this->input->post('gender'));
            
            $this->load->helper('url');
            redirect(base_url('senators'));
        }else{
            $view_params = [
                'senator' => $record
            ];
            
            $this->load->helper('form');
            $this->load->view('senators/edit',$view_params);
        }
    }
    
    public function delete($id = NULL){
        if($id == NULL){
            show_error('A törléshez hiányzik az id értéke!');
        }
        
        $record = $this->senators_model->select_by_id($id);
        
        if($record == NULL){
            show_error('Nincs ilyen id-vel ellátott mező!');
        }
        
        $this->senators_model->delete($id);
        
        $this->load->helper('url');
        redirect(base_url('senators'));
    }
}