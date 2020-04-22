<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of droid_model
 *
 * @author Acer
 */
class droid_model extends CI_Model{
    public function __construct() {
        parent::__construct();
        
        $this->load->database();
    }
    
    public function get_list(){
        $this->db->select("*");
        $this->db->from('droid');
        
        $this->db->order_by('id','ASC');
        
        $query = $this->db->get();
        $result = $query->result();
        
        return $result;
    }
    
    public function select_by_id($id){
        $this->db->select("*");
        $this->db->from('droid');
        $this->db->where('id',$id);
        
        return $this->db->get()->row();
    }
    
    public function insert($name, $homeworld, $creator, $model, $class, $image){
        
        $records = [
            'name' => $name,
            'homeworld' => $homeworld,
            'creator' => $creator,
            'model' => $model,
            'class' => $class,
            'image' => $image
        ];
        
        $this->db->insert('droid',$records);
        
        return $this->db->insert_id();
    }
    
    public function update($id, $name, $homeworld, $creator, $model, $class){
        $records = [
            'name' => $name,
            'homeworld' => $homeworld,
            'creator' => $creator,
            'model' => $model,
            'class' => $class
        ];
        
        $this->db->where('id',$id);
        return $this->db->update('droid',$records);
    }
    
    public function delete($id){
        $this->db->where('id',$id);
        
        return $this->db->delete('droid');
    }
}
