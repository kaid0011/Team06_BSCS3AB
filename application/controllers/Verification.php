<?php
    defined('BASEPATH') OR exit('No direct script access allowed');
    
    class Verification extends CI_Controller
    {
        public function __construct()
        {
            parent::__construct();
            
            $this->load->library('form_validation');    #preload form_validation library
            #$this->load->library('encrypt');
            $this->load->model('Verification_model');
        }

        public function validation()
        {
            $action = $this->input->post('action');
            if($action == 'Resend')
            {
                echo "resend";
                exit;
            }
            else
            {
                $this->form_validation->set_rules('ver_code', 'Verification Code', 'required');

                if($this->form_validation->run())
                {
                    $this->verifyEmail();
                }
                else
                {
                    $this->load->view('pages/verification');
                }
            }
            
        }

        public function verifyEmail()
        {
            $verification_Key = $this->input->post('ver_code');
            $username = $this->session->userdata('userName');

            $response = $this->Verification_model->verify($verification_Key, $username);
            if($response)
                {  
                    $userdata = array(
                        'user_ID' => $response->user_ID,
                        'userName' => $response->userName,
                        'displayName' => $response->displayName,
                        'authentication' => TRUE
                    );

                    $this->session->set_userdata($userdata);

                    redirect('mainpage');
                }
                else
                {
                    $this->session->set_flashdata('message', 'Invalid Code');
                    redirect('verification');
                }
        }
    }
?>