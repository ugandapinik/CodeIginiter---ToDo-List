<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */



class Model_lists extends CI_Model{
    
    public function getList(){
        
        $query = $this->db->get('lists');
        return $query->result();
    }
    
    
    public function getSingleList($id){
        
        $query = $this->db->get('lists');
        $this->db->where('id', $id);
        
        
        return $query->row();
        
    }
    
}

