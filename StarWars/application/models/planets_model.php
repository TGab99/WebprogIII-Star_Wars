<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of planets_model
 *
 * @author Acer
 */
class planets_model extends CI_Model{
    public function __construct() {
        parent::__construct();
        
        $this->load->database();
    }
    
    public function get_list(){
        $this->db->select("*");
        $this->db->from('planets');
        
        $this->db->order_by('id','ASC');
        
        $query = $this->db->get();
        $result = $query->result();
        
        return $result;
    }
    
    public function select_by_id($id){
        $this->db->select("*");
        $this->db->from('planets');
        $this->db->where('id',$id);
        
        return $this->db->get()->row();
    }
    
    public function insert($name, $regio, $sector, $system, $image){
        
        $records = [
            'name' => $name,
            'regio' => $regio,
            'sector' => $sector,
            'system' => $system,
            'image' => $image
        ];
        
        $this->db->insert('planets',$records);
        
        return $this->db->insert_id();
    }
    
    public function update($id, $name, $regio, $sector, $system){
        $records = [
            'name' => $name,
            'regio' => $regio,
            'sector' => $sector,
            'system' => $system
        ];
        
        $this->db->where('id',$id);
        return $this->db->update('planets',$records);
    }
    
    public function delete($id){
        $this->db->where('id',$id);
        
        return $this->db->delete('planets');
    }
}
