<?php
    defined('BASEPATH') OR exit('No direct script access allowed');
    
    class Verification extends CI_Controller
    {
        public function __construct()
        {
            parent::__construct();
            
            $this->load->library('form_validation');    #preload form_validation library
            $this->load->model('Verification_model');
            $this->load->model('UpdateProfile_model');
        }

        public function index() {
            $data['navbar'] = 'registration';
            $this->sitelayout->loadTemplate('pages/registration/verification', $data); 
        }


        public function validation()
        {
            $action = $this->input->post('action');

            if($action == 'Resend') {
                $this->resendCode();
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
            $is_verification_correct = '1';

            $response = $this->Verification_model->verify($verification_Key, $username);
            if($response)
                {
                    $result = $this->Verification_model->updateStatus($is_verification_correct, $username);
                    
                    if($result)
                    {
                        $userdata = array(
                            'user_ID' => $response->user_ID,
                            'userName' => $response->userName,
                            'displayName' => $response->displayName,
                        );

                        $this->session->set_userdata($userdata);

                        $data['navbar'] = 'main';
                        $this->sitelayout->loadTemplate('pages/mainpage/mainpage', $data); 
                    }
                }
                else
                {
                    $this->session->set_flashdata('message', 'Invalid Code');

                    $data['navbar'] = 'registration';
                    $this->sitelayout->loadTemplate('pages/registration/verification', $data); 
                }
        }

        public function resendCode()
        {
            $verification_key = random_string('numeric', 6);
            $userName = $this->session->userdata('userName');
            $response = $this->Verification_model->resendCode($verification_key, $userName);
            if($response)
            {
                $this->session->set_userdata('verification_Key', $verification_key);
                $this->resendEmail();
            }
        }

        public function resendEmail()
        {
            $key = $this->session->userdata('verification_Key');
            $name = $this->session->userdata('userName');

            $subject = "Verify your email";
            $message = "
            <h3>Hello, ".$name."!</h3>
            <p>Here is your verification code.</p><br>
            <h4>$key</h4>
            ";
            $to = $this->session->userdata('email');

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
        }
    }
?>