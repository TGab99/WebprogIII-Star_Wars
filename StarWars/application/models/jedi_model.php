<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of jedi_model
 *
 * @author Acer
 */
class jedi_model extends CI_Model{
    public function __construct() {
        parent::__construct();
        
        $this->load->database();
    }
    
    public function get_list(){
        $this->db->select("*");
        $this->db->from('jedi');
        
        $this->db->order_by('id','ASC');
        
        $query = $this->db->get();
        $result = $query->result();
        
        return $result;
    }
    
    public function select_by_id($id){
        $this->db->select("*");
        $this->db->from('jedi');
        $this->db->where('id',$id);
        
        return $this->db->get()->row();
    }
    
    public function insert($name, $homeworld, $species, $gender, $rank, $image){
        
        $records = [
            'name' => $name,
            'homeworld' => $homeworld,
            'species' => $species,
            'gender' => $gender,
            'rank' => $rank,
            'image' => $image
        ];
        
        $this->db->insert('jedi', $records);
        
        return $this->db->insert_id();
    }
    
    public function update($id, $name, $homeworld, $species, $gender, $rank){
        $records = [
            'name' => $name,
            'homeworld' => $homeworld,
            'species' => $species,
            'gender' => $gender,
            'rank' => $rank
        ];
        
        $this->db->where('id',$id);
        return $this->db->update('jedi',$records);
    }
    
    public function delete($id){
        $record = $this->db->where('id',$id);
        
        return $this->db->delete('jedi');
    }
}
