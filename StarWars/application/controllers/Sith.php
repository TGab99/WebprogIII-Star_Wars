<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Sith
 *
 * @author Acer
 */
class Sith extends CI_Controller{
   public function __construct() {
       parent::__construct();
       
       $this->load->model('sith_model');
   }
    
    public function index(){
        $records = $this->sith_model->get_list();
        
        $view_params = [
            'sith' => $records
        ];
        
        $this->load->helper('url');
        
        $this->load->view('sith/list',$view_params);
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
            $upload_config['upload_path'] = './uploads/image/sith/';
            $upload_config['file_ext_tolower'] = TRUE;
            $upload_config['overwrite'] = TRUE;
            
            $this->load->library('upload');
            $this->upload->initialize($upload_config);
            
            $this->load->library('form_validation');
            
            $this->form_validation->set_rules('name','Név','required');
            $this->form_validation->set_rules('homeworld','Anyabolygó','required');
            $this->form_validation->set_rules('species','Faj','required');
            $this->form_validation->set_rules('gender','Nem','required');
            $this->form_validation->set_rules('rank','Rang','required');
            
            if($this->form_validation->run() && $this->upload->do_upload('file') == TRUE){
                $this->sith_model->insert($this->input->post('name'), $this->input->post('homeworld'), $this->input->post('species'), 
                        $this->input->post('gender'), $this->input->post('rank'), $upload_config['file_name']);
                
                $this->load->helper('url');
                redirect(base_url('sith'));
            }
        }
        $this->load->helper('form');
        $this->load->view('sith/insert');
    }
    
    public function profile($id = NULL){
        if($id == NULL){
            show_error('Az adatlap megtekintéséhez hiányzik az id!');
        }
        
        $record = $this->sith_model->select_by_id($id);
        
        if($record == NULL){
            show_error('Nincs ilyen id-val ellátott mező!');
        }
        
        $view_params = [
            'sith' => $record
        ];
        
        $this->load->helper('form');
        $this->load->view('sith/profile',$view_params);
    }
    
    public function edit($id = NULL){
        if($id == NULL){
            show_error('A szerkesztéshez hiányzik az id!');
        }
        
        $record = $this->sith_model->select_by_id($id);
        
        if($record == NULL){
            show_error('Nincs ilyen id-val ellátott mező!');
        }
        
        $this->load->library('form_validation');
            
        $this->form_validation->set_rules('name','Név','required');
        $this->form_validation->set_rules('homeworld','Anyabolygó','required');
        $this->form_validation->set_rules('species','Faj','required');
        $this->form_validation->set_rules('gender','Nem','required');
        $this->form_validation->set_rules('rank','Rang','required');
        
        if($this->form_validation->run() == TRUE){
            $this->sith_model->update($id,$this->input->post('name'), $this->input->post('homeworld'), $this->input->post('species'), 
                        $this->input->post('gender'), $this->input->post('rank'));
            
            $this->load->helper('url');
            redirect(base_url('sith'));
        }else{
            $view_params = [
                'sith' => $record
            ];
            
            $this->load->helper('form');
            $this->load->view('sith/edit',$view_params);
        }
    }
    
    public function delete($id = NULL){
        if($id == NULL){
            show_error('A törléshez hiányzik az id értéke!');
        }
        
        $record = $this->sith_model->select_by_id($id);
        
        if($record == NULL){
            show_error('Nincs ilyen id-vel ellátott mező!');
        }
        
        $this->sith_model->delete($id);
        
        $this->load->helper('url');
        redirect(base_url('sith'));
    }
}
