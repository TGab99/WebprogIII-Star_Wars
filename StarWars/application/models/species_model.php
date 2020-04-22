<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of species_model
 *
 * @author Acer
 */
class species_model extends CI_Model{
    public function __construct() {
        parent::__construct();
        
        $this->load->database();
    }
    
    public function get_list(){
        $this->db->select("*");
        $this->db->from('species');
        
        $this->db->order_by('id','ASC');
        
        $query = $this->db->get();
        $result = $query->result();
        
        return $result;
    }
    
    public function select_by_id($id){
        $this->db->select("*");
        $this->db->from('species');
        $this->db->where('id',$id);
        
        return $this->db->get()->row();
    }
    
    public function insert($name, $homeworld, $species, $gender, $image){
        
        $records = [
            'name' => $name,
            'homeworld' => $homeworld,
            'species' => $species,
            'gender' => $gender,
            'image' => $image
        ];
        
        $this->db->insert('species',$records);
        
        return $this->db->insert_id();
    }
    
    public function update($id, $name, $homeworld, $species, $gender){
        $records = [
            'name' => $name,
            'homeworld' => $homeworld,
            'species' => $species,
            'gender' => $gender
        ];
        
        $this->db->where('id',$id);
        return $this->db->update('species',$records);
    }
    
    public function delete($id){
        $this->db->where('id',$id);
        
        return $this->db->delete('species');
    }
}
