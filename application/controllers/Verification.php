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

        public function index() {
            $data['navbar'] = 'registration';
            $this->sitelayout->loadTemplate('pages/registration/verification', $data); 
        }


        public function validation()
        {
            $action = $this->input->post('action');

            if($action == 'Resend') {
                echo "Wala pang resend :)";
            }
            else if($action == "Verify") {
                $this->form_validation->set_rules('ver_code', 'Verification Code', 'required');

                if($this->form_validation->run())
                {
                    $this->verifyEmail();
                }
                else
                {
                    $data['navbar'] = 'registration';
                    $this->sitelayout->loadTemplate('pages/registration/verification', $data); 
                }
            }
            else {
                $data['navbar'] = 'registration';
                $this->sitelayout->loadTemplate('pages/registration/registration', $data); 
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

                    $data['navbar'] = 'main';
                    $this->sitelayout->loadTemplate('pages/mainpage/mainpage', $data); 
                }
                else
                {
                    $this->session->set_flashdata('message', 'Invalid Code');

                    $data['navbar'] = 'registration';
                    $this->sitelayout->loadTemplate('pages/registration/verification', $data); 
                }
        }
    }
?>