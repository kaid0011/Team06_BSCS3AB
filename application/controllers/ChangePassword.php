<?php
    defined('BASEPATH') OR exit('No direct script access allowed');
    
    class ChangePassword extends CI_Controller
    {
        public function __construct()
        {
            parent::__construct();
            
            $this->load->library('form_validation');
            $this->load->model('ForgotPassword_model');
        }

        public function index() 
        {
            $data['navbar'] = 'login';
            $this->sitelayout->loadTemplate('pages/authentication/changepassword', $data); 
        }

        public function validation()
        {
            $action = $this->input->post('action');

            if($action == 'Confirm')    #confirm
            {
                $this->form_validation->set_rules('password', 'Password', 'required');
                $this->form_validation->set_rules('confirm_password', 'Confirm Password', 'required|matches[password]');

                if($this->form_validation->run())
                {
                    $encrypted_password = md5($this->input->post('password'));
                    $this->updatePassword($encrypted_password);
                }
                else
                {
                    $data['navbar'] = 'login';
                    $this->sitelayout->loadTemplate('pages/authentication/changepassword', $data);
                }
            }
            else    #back
            {
                $data['navbar'] = 'login';
                $this->sitelayout->loadTemplate('pages/authentication/confirmation', $data); 
            }
        }

        public function updatePassword($encrypted_password)
        {
            $email = $this->session->userdata('email');
            $password = $encrypted_password;

            $response = $this->ForgotPassword_model->updatePassword($email, $password);
            if($response)
            {
                $data['navbar'] = 'login';
                $this->sitelayout->loadTemplate('pages/authentication/login', $data);
            }
            else
            {
                echo 'Error changing password';
                #will change laturrr
            }
        }
    }
?>