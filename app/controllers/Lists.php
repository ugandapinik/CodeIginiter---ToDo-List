<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Lists extends CI_Controller{
    
    public function __construct() {
        parent::__construct();
        
        //if user dont logged in
        if(! $this->session->userdata('logged_in') ){
            $this->session->set_flashdata('noaccess', 'you are not logged in.');
            redirect('home/index');
        }
        
    }
    
    public function index(){
        
        $id = $this->session->userdata('user_id');
        
        $this->load->model('Model_lists');
        $data['lists'] = $this->Model_lists->getList();
        
        
        $data['title']  =   'Work List';
        $data['main_content']   =   'lists/index';
        
        $this->load->view('layouts/main', $data);
        
        
    }
    
    
    public function show($id){
        
        $this->load->model('Model_lists');
        $data['lists'] = $this->Model_lists->getSingleList($id);
        
        
        $data['title']  =  'Show-List';
        $data['main_content'] = 'lists/show';
        
        $this->load->view('layouts/main', $data);
    }
    
}