<?php
    defined('BASEPATH') OR exit('No direct script access allowed');
    
    class ConfirmationFP extends CI_Controller
    {
        public function __construct()
        {
            parent::__construct();
            $this->load->library('form_validation');
        }

        public function index() 
        {
            $data['navbar'] = 'login';
            $this->sitelayout->loadTemplate('pages/authentication/confirmation', $data); 
        }

        public function validation()
        {
            $action = $this->input->post('action');

            if($action == 'Resend')     #Resend button
            {
                $this->resendCode();
            }
            else if($action == 'Confirm')   #Confirm button
            {
                $this->form_validation->set_rules('conf_code', 'Confirmation Code', 'required');

                if($this->form_validation->run())
                {
                    $input_code = $this->input->post('conf_code');
                    $this->verifyCode($input_code);
                }
                else
                {
                    $data['navbar'] = 'login';
                    $this->sitelayout->loadTemplate('pages/authentication/confirmation', $data); 
                }
            }
            else    #Back button
            {
                $data['navbar'] = 'login';
                $this->sitelayout->loadTemplate('pages/authentication/forgotpassword', $data);
            }
        }

        public function resendCode()
        {
            $resend_code = random_string('numeric', 6);
            $this->session->set_userdata('resend_code', $resend_code);
            $this->resendEmail($resend_code);
        }

        public function verifyCode($input_code)
        {
            $code = $this->session->userdata('resend_code');

            if($code == $input_code)
            {
                $data['navbar'] = 'login';
                $this->sitelayout->loadTemplate('pages/authentication/changepassword', $data);
            }
            else
            {
                $this->session->set_flashdata('message', 'Invalid Code');
                $data['navbar'] = 'login';
                $this->sitelayout->loadTemplate('pages/authentication/confirmation', $data);
            }
        }

        public function resendEmail($resend_code)
        {
            $email = $this->session->userdata('email');
            $subject = "Forgot Password";
            $message = '
            <h4 align="center">This is an automated email for providing you a code to reset your password in Virtual Diary.</h4>

            <h1 align="center">'.$resend_code.'</h1>

            <h4 align="center">If this request is done by you, take the code above in order to progress.
            If you did not request this, ignore this message.</h4>
            ';

            $this->load->library('email');
            $this->email->initialize($this->config->item('email'));
            $this->email->set_newline("\r\n");
            $this->email->from('Team6.VirtualDiary2022@gmail.com', 'Virtual Diary');
            $this->email->to($email);
            $this->email->subject($subject);
            $this->email->message($message);

            $send = $this->email->send();

            if($send)
            {
                $data['navbar'] = 'login';
                $this->sitelayout->loadTemplate('pages/authentication/confirmation', $data);
            }
        }
    }