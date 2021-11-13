<?php
    defined('BASEPATH') OR exit('No direct script access allowed');

    class Register extends CI_Controller{
        public function __construct(){
            parent::__construct();
            
            $this->load->library('form_validation');
            $this->load->library('encrypt');
            $this->load->model('register_model');
        }

        function index(){
            $this->load->view('registration');
        }

        function validation(){
            $this->form_validation->set_rules('user_lname', 'LName', 'required|trim');
            $this->form_validation->set_rules('user_fname', 'FName', 'required|trim');
            $this->form_validation->set_rules('user_email', 'Email Address', 'required|trim|valid_email|is_unique[accounts.email]');
            $this->form_validation->set_rules('user_password', 'Password', 'required');
            if($this->form_validation->run()){
                $verification_key = md5(rand());
                $encrypted_password = $this->encrypt->encode($this->input->post('user_password'));
                $data = array(
                    'lname'     =>  $this->input->post('user_lname'),
                    'fname'     =>  $this->input->post('user_fname'),
                    'email'     =>  $this->input->post('user_email'),
                    'password'  =>  $encrypted_password,
                    'verification_key'  => $verification_key
                );
                $id = $this->register_model->insert($data);
                if($id > 0){
                    
                }
            }
            else{
                $this->index();
            }
        }
    }
?>