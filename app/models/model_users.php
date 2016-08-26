<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


class Model_users extends CI_Model{
    
    
    public function create_member(){
        
        $enc_password = md5($this->input->post('password'));
        
        $data = array(
            'firstname' => $this->input->post('first_name'),
            'lastname'  =>  $this->input->post('last_name'),
            'username'  =>  $this->input->post('display_name'),
            'email'     =>  $this->input->post('email'),
            'password'  =>  $enc_password,
        );
        
        
        $query = $this->db->insert('users', $data);
        
        return $query;
        
    }
    
    
    
    public function login_user($username, $password){
        
        $enc_password = md5($password);
        echo $enc_password;
        
        //where Clause
        $this->db->where('username',$username);
        $this->db->where('password',$enc_password);
        
        
        $result = $this->db->get('users');
        
        if($result->num_rows() == 1){
            
            return $result->row(0)->id;
            
            
        }else{
            return false;
        }
    }
    
}

