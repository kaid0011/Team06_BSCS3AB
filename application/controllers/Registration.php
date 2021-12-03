<?php
    defined('BASEPATH') OR exit('No direct script access allowed');
    
    class Registration extends CI_Controller
    {
        public function __construct()
        {
            parent::__construct();
            
            $this->load->library('form_validation');    #preload form_validation library
            $this->load->model('Registration_model');       #preload Registration_model for registration
        }

        public function index() {
            $data['navbar'] = 'registration';
            $this->sitelayout->loadTemplate('pages/registration/registration', $data); 
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
                $verification_key = random_string('numeric', 6);                #create random string for verification,
                $encrypted_password = md5($this->input->post('password'));      #create hash value for password,
                $this->addUser($verification_key, $encrypted_password);         #then proceed to addUser function.
            }
            else    #If there is error,
            {
                $data['navbar'] = 'registration';
                $this->sitelayout->loadTemplate('pages/registration/registration', $data);                        #load registration page again with error messages.
            }

        }

        public function addUser($verification_key, $encrypted_password)
        {          
            $data['navbar'] = 'registration';
            $this->sitelayout->loadTemplate('pages/registration/verification', $data); 

            $var = $this->input->post();

            if(isset($var) && $var != null)
            {
                #create $data variable for array containing keys(userName, displayName, etc.) with assigned values
                $userdata = array(
                    'userName' => $this->input->post('userName'),
                    'displayName' => $this->input->post('displayName'),
                    'email' => $this->input->post('email'),
                    'password' => $encrypted_password,
                    'status'    => 'Pending',
                    'verification_Key' => $verification_key
                );
                
                #get a response from Registration_model if insert to database is succesful
                #pass $data array to model
                $response = $this->Registration_model->addNewUser($userdata);
                if($response == true)
                {
                    $this->session->set_userdata($userdata);
                    $this->sendEmail();
                }
                else
                {
                    echo "Error";
                }
            }
            $data['navbar'] = 'registration';
            $this->sitelayout->loadTemplate('pages/registration/registration', $data);
        }

        public function sendEmail()
        {
            $key = $this->session->userdata('verification_Key');
            $name = $this->session->userdata('userName');

            $subject = "Verify your email";
            $message = "
            <h3>Hello, ".$name."!</h3>
            <p>Here is your verification code.</p><br>
            <h4>$key</h4>
            ";
            $to = $this->input->post('email');

            $config = array(
                'protocol'  => 'smtp',
                'smtp_host' => 'ssl://smtp.googlemail.com',
                'smtp_port' => 465,
                'smtp_user' => 'Team6.VirtualDiary2022@gmail.com',
                'smtp_pass' => 'team6@3ab',
                'mailtype'  => 'html', 
                'charset'   => 'iso-8859-1'
            );
            
            $this->load->library('email');
            $this->email->initialize($config);

            $this->email->set_newline("\r\n");
            
            $this->email->from('Team6.VirtualDiary2022@gmail.com', 'Virtual Diary');
            $this->email->to($to);

            $this->email->subject($subject);
            $this->email->message($message);

            $send = $this->email->send();

            if($send)
            {
                $data['navbar'] = 'registration';
                $this->sitelayout->loadTemplate('pages/registration/verification', $data);
            }
            else
            {
                echo "Error";
            }
        }
    }
?>