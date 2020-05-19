<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of series_model
 *
 * @author Acer
 */
class series_model extends CI_Model{
    public function __construct() {
        parent::__construct();
        
        $this->load->database();
    }
    
    public function get_list(){
        $this->db->select("*");
        $this->db->from('series');
        
        $this->db->order_by('id','ASC');
        
        $query = $this->db->get();
        
        $result = $query->result();
        
        return $result;
    }
    
    public function select_by_id($id){
        $this->db->select("*");
        $this->db->from('series');
        $this->db->where('id',$id);
        
        return $this->db->get()->row();
    }
    
    public function insert($title, $release_date, $image){
        
        $records = [
            'title' => $title,
            'release_date' => $release_date,
            'image' => $image
        ];
        
        $this->db->insert('series', $records);
        
        return $this->db->insert_id();
    }
    
    public function update($id, $title, $release_date){
        $records = [
            'title' => $title,
            'release_date' => $release_date
        ];
        
        $this->db->where('id',$id);
        return $this->db->update('series',$records);
    }
    
    public function delete($id){
        $record = $this->db->where('id',$id);
        
        return $this->db->delete('series');
    }
}
