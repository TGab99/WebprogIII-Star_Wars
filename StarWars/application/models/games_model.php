<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of games_model
 *
 * @author Acer
 */
class games_model extends CI_Model{
    public function __construct() {
        parent::__construct();
        
        $this->load->database();
    }
    
    public function get_list(){
        $this->db->select("*");
        $this->db->from('games');
        
        $this->db->order_by('id','ASC');
        
        $query = $this->db->get();
        
        $result = $query->result();
        
        return $result;
    }
    
    public function select_by_id($id){
        $this->db->select("*");
        $this->db->from('games');
        $this->db->where('id',$id);
        
        return $this->db->get()->row();
    }
    
    public function insert($name, $developers, $publishers, $release_date, $models, $platforms, $image){
        
        $records = [
            'name' => $name,
            'developers' => $developers,
            'publishers' => $publishers,
            'release_date' => $release_date,
            'models' => $models,
            'platforms' => $platforms,
            'image' => $image
        ];
        
        $this->db->insert('games', $records);
        
        return $this->db->insert_id();
    }
    
    public function update($id, $name, $developers, $publishers, $release_date, $models, $platforms){
        $records = [
            'name' => $name,
            'developers' => $developers,
            'publishers' => $publishers,
            'release_date' => $release_date,
            'models' => $models,
            'platforms' => $platforms
        ];
        
        $this->db->where('id',$id);
        return $this->db->update('games',$records);
    }
    
    public function delete($id){
        $record = $this->db->where('id',$id);
        
        return $this->db->delete('games');
    }
}
