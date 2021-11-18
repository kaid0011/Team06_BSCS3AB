<?php
    defined('BASEPATH') OR exit('No direct script access allowed');

    class Register extends CI_Controller
    {
        public function __construct()
        {
            parent::__construct();
            
            $this->load->library('form_validation');
            #$this->load->library('encrypt');
            $this->load->model('Register_model');
        }

        public function validation()
        {
            $this->form_validation->set_rules('userName', 'Username', 'required|trim|min_length[3]|max_length[12]|is_unique[user.userName]',
                array(
                    'is_unique'     => 'This %s already exists.'
                ));
            $this->form_validation->set_rules('displayName', 'Display Name', 'required|trim');
            $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email|is_unique[user.email]',
                array(
                    'is_unique'     => 'This %s already exists.'
                ));
            $this->form_validation->set_rules('password', 'Password', 'required');
            $this->form_validation->set_rules('confirm_password', 'Confirm Password', 'required|matches[password]');

            if($this->form_validation->run())
            {
                $verification_key = md5(rand());
                $encrypted_password = md5($this->input->post('password'));
                $this->addUser($verification_key, $encrypted_password);
            }
            else
            {
                $this->load->view('pages/registration');
            }

        }

        public function addUser($verification_key, $encrypted_password)
        {          
            $var = $this->input->post();

            if(isset($var) && $var != null)
            {
                $data = array(
                    'userName' => $this->input->post('userName'),
                    'displayName' => $this->input->post('displayName'),
                    'email' => $this->input->post('email'),
                    'password' => $encrypted_password,
                    'verification_Key' => $verification_key
                );

                $response = $this->Register_model->addNewUser($data);
                if($response == true)
                {
                    echo "mama mo";
                }
                else
                {
                    echo "Error";
                }
            }
            $this->load->view('pages/registration');
        }
    }
?>