<?php
    defined('BASEPATH') OR exit('No direct script access allowed');

    class Register extends CI_Controller
    {
        public function __construct()
        {
            parent::__construct();
            
            $this->load->library('form_validation');    #preload form_validation library
            #$this->load->library('encrypt');
            $this->load->model('Register_model');       #preload Register_model for registration
        }

        public function validation()
        {
            # $this->form_validation->set_rules([variable(?)], [name], [rules])
            # [variable] = name assigned from view page
            # [name] = to be used in error meesage
            # [rules] = set rules like required, is_unique, etc.

            $this->form_validation->set_rules('userName', 'Username', 'required|trim|min_length[3]|max_length[12]|is_unique[user.userName]',
                array(
                    'is_unique'     => 'This %s already exists.'    #custom error message for is_unique in userName
                ));
            $this->form_validation->set_rules('displayName', 'Display Name', 'required|trim');
            $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email|is_unique[user.email]',
                array(
                    'is_unique'     => 'This %s already exists.'    #custom error message for is_unique in email
                ));
            $this->form_validation->set_rules('password', 'Password', 'required');
            $this->form_validation->set_rules('confirm_password', 'Confirm Password', 'required|matches[password]');    #checks if confirm_password matches password

            if($this->form_validation->run())   #If no error,
            {
                $verification_key = md5(rand());                                #create random string for verification,
                $encrypted_password = md5($this->input->post('password'));      #create hash value for password,
                $this->addUser($verification_key, $encrypted_password);         #then proceed to addUser function.
            }
            else    #If there is error,
            {
                $this->load->view('pages/registration');                        #load registration page again with error messages.
            }

        }

        public function addUser($verification_key, $encrypted_password)
        {          
            $var = $this->input->post();

            if(isset($var) && $var != null)
            {
                #create $data variable for array containing keys(userName, displayName, etc.) with assigned values
                $data = array(
                    'userName' => $this->input->post('userName'),
                    'displayName' => $this->input->post('displayName'),
                    'email' => $this->input->post('email'),
                    'password' => $encrypted_password,
                    'verification_Key' => $verification_key
                );
                
                #get a response from Register_model if insert to database is succesful
                #pass $data array to model
                $response = $this->Register_model->addNewUser($data);
                if($response == true)
                {
                    redirect('verification');
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