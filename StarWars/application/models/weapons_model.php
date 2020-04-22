<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of weapons_model
 *
 * @author Acer
 */
class weapons_model extends CI_Model{
    public function __construct() {
        parent::__construct();
        
        $this->load->database();
    }
    
    public function get_list(){
        $this->db->select("*");
        $this->db->from('weapons');
        
        $this->db->order_by('id','ASC');
        
        $query = $this->db->get();
        $result = $query->result();
        
        return $result;
    }
    
    public function select_by_id($id){
        $this->db->select("*");
        $this->db->from('weapons');
        $this->db->where('id',$id);
        
        return $this->db->get()->row();
    }
    
    public function insert($name, $type, $image){
        
        $records = [
            'name' => $name,
            'type' => $type,
            'image' => $image
        ];
        
        $this->db->insert('weapons',$records);
        
        return $this->db->insert_id();
    }
    
    public function update($id, $name, $type){
        $records = [
            'name' => $name,
            'type' => $type
        ];
        
        $this->db->where('id',$id);
        return $this->db->update('weapons',$records);
    }
    
    public function delete($id){
        $this->db->where('id',$id);
        
        return $this->db->delete('weapons');
    }
}
