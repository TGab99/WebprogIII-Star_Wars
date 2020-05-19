<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Games
 *
 * @author Acer
 */
class Games extends CI_Controller{
    public function __construct() {
        parent::__construct();
        
        $this->load->model('games_model');
    }
    
    public function index(){
        $records = $this->games_model->get_list();
        
        $view_params = [
            'game' => $records
        ];
        
        $this->load->helper('url');
        
        $this->load->view('games/list',$view_params);
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
            $upload_config['upload_path'] = './uploads/image/games/';
            $upload_config['file_ext_tolower'] = TRUE;
            $upload_config['overwrite'] = TRUE;
            
            $this->load->library('upload');
            $this->upload->initialize($upload_config);
            
            $this->load->library('form_validation');
            
            $this->form_validation->set_rules('name','Név','required');
            $this->form_validation->set_rules('developers','Fejlesztők','required');
            $this->form_validation->set_rules('publishers','Publikálók','required');
            $this->form_validation->set_rules('release_date','Megjelenési dátum','required');
            $this->form_validation->set_rules('models','Model','required');
            $this->form_validation->set_rules('platforms','Platformok','required');
            
            if($this->form_validation->run() && $this->upload->do_upload('file') == TRUE){
                $this->games_model->insert($this->input->post('name'), $this->input->post('developers'), $this->input->post('publishers'), 
                        $this->input->post('release_date'), $this->input->post('models'), $this->input->post('platforms'), $upload_config['file_name']);
                
                $this->load->helper('url');
                redirect(base_url('games'));
            }
        }
        $this->load->helper('form');
        $this->load->view('games/insert');
    }
    
    public function profile($id = NULL){
        if($id == NULL){
            show_error('Az adatlap megtekintéséhez hiányzik az id!');
        }
        
        $record = $this->games_model->select_by_id($id);
        
        if($record == NULL){
            show_error('Nincs ilyen id-val ellátott mező!');
        }
        
        $view_params = [
            'game' => $record
        ];
        
        $this->load->helper('form');
        $this->load->view('games/profile',$view_params);
    }
    
    public function edit($id = NULL){
        if($id == NULL){
            show_error('A szerkesztéshez hiányzik az id!');
        }
        
        $record = $this->games_model->select_by_id($id);
        
        if($record == NULL){
            show_error('Nincs ilyen id-val ellátott mező!');
        }
        
        $this->load->library('form_validation');
            
        $this->form_validation->set_rules('name','Név','required');
        $this->form_validation->set_rules('developers','Fejlesztők','required');
        $this->form_validation->set_rules('publishers','Publikálók','required');
        $this->form_validation->set_rules('release_date','Megjelenési dátum','required');
        $this->form_validation->set_rules('models','Model','required');
        $this->form_validation->set_rules('platforms','Platformok','required');
        
        if($this->form_validation->run() == TRUE){
            $this->games_model->update($id,$this->input->post('name'), $this->input->post('developers'), $this->input->post('publishers'), 
                        $this->input->post('release_date'), $this->input->post('models'), $this->input->post('platforms'));
            
            $this->load->helper('url');
            redirect(base_url('games'));
        }else{
            $view_params = [
                'game' => $record
            ];
            
            $this->load->helper('form');
            $this->load->view('games/edit',$view_params);
        }
    }
    
    public function delete($id = NULL){
        if($id == NULL){
            show_error('A törléshez hiányzik az id értéke!');
        }
        
        $record = $this->games_model->select_by_id($id);
        
        if($record == NULL){
            show_error('Nincs ilyen id-vel ellátott mező!');
        }
        
        $this->games_model->delete($id);
        
        $this->load->helper('url');
        redirect(base_url('games'));
    }
}
