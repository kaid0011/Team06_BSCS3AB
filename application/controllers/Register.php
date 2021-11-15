<?php
    defined('BASEPATH') OR exit('No direct script access allowed');

    class Register extends CI_Controller
    {
        public function __construct()
        {
            parent::__construct();
            
            $this->load->model('Register_model');
        }

        public function addUser()
        {
        
            
            $var = $this->input->post();
            

            if(isset($var) && $var != null)
            {
                $data['last_name'] = $this->input->post('last_name');
                $data['first_name'] = $this->input->post('first_name');
                $data['middle_name'] = $this->input->post('middle_name');
                $data['email'] = $this->input->post('email');
                $data['password'] = $this->input->post('password');

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