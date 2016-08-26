<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Users extends CI_Controller{
    
    
    public function register(){
        
        $this->form_validation->set_rules('first_name', 'First Name', 'trim|required|max_length[50]|min_length[3]|xss_clean');
        $this->form_validation->set_rules('last_name', 'Last Name', 'trim|required|max_length[50]|min_length[3]|xss_clean');
        $this->form_validation->set_rules('middle_name', 'Middle Name', 'trim|required|max_length[50]|min_length[3]|xss_clean');
        $this->form_validation->set_rules('display_name', 'Display Name', 'trim|required|max_length[50]|min_length[3]|xss_clean');
        $this->form_validation->set_rules('display_name', 'Display Name', 'trim|required|max_length[50]|min_length[3]|xss_clean');
        $this->form_validation->set_rules('email', 'Email Address', 'trim|required|max_length[100]|xss_clean|valid_email');
        $this->form_validation->set_rules('password', 'Password', 'trim|required|max_length[100]|min_length[6]|xss_clean');
        $this->form_validation->set_rules('password_confirmation', 'Confirm Password', 'trim|required|max_length[100]|xss_clean|matches[password]');
        
        
        
        if($this->form_validation->run() === FALSE){
            $data['title']  =   'Register';
            $data['main_content']  =  'users/register';
            $this->load->view('layouts/main', $data);
            
        }else{
            $this->load->model('Model_users');
            $this->Model_users->create_member();
            
            $this->session->set_flashdata('register', 'You are successfully registerd');
            redirect('home/index');
            
        }
        
    }
    
    
    public function login(){
        
        $this->form_validation->set_rules('username', 'Username', 'trim|required|xss_clean');
        $this->form_validation->set_rules('password', 'Password', 'trim|required|xss_clean');
        
        if($this->form_validation->run() === FALSE){
           //nothing to show;
        } else{
            
            $username = $this->input->post('username');
            $password = $this->input->post('password');
            
            //get user id
            
            $this->load->model('Model_users');
            $user_id = $this->Model_users->login_user($username, $password);
            
            
            //valid user check
            if($user_id){
                //creat an array;
                $user_data = array(
                                'user_id'   =>  $user_id,
                                'username'  =>  $username,
                                'logged_in' =>  true,
                    
                );
                
                $this->session->set_userdata($user_data);
                $this->session->set_flashdata('login_succesful', 'Login Successfully');
                
                
                redirect('home/index');
            }else{
                $this->session->set_flashdata('login_failed', 'Sorry, the login is in valid');
                redirect('home/index');
                
            }
            
        }
        
        
        
        $data['title']  =   'Login';
        $data['main_content']   =   '/users/login';
        $this->load->view('layouts/main', $data);
        
        
        
    }
    
    
    public function logout(){
        
        $this->session->unset_userdata('logged_in');
        $this->session->unset_userdata('user_id');
        $this->session->unset_userdata('username');
        
        $this->session->sess_destroy();
        
        $this->session->set_flashdata('logout', 'Comeback again!');
        redirect('home/index');
        
        
    }
    
}