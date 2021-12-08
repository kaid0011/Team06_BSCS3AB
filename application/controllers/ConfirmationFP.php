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
                $resend_code = random_string('numeric', 6);
                $this->resendEmail($resend_code);
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

        public function verifyCode($input_code)
        {
            $code = $this->session->userdata('code');

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
            $message = "
            <h3>Hello!</h3>
            <p>Here is your verification code.</p><br>
            <h4>$resend_code</h4>
            ";      #will change laturrr

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
            $this->email->to($email);

            $this->email->subject($subject);
            $this->email->message($message);

            $send = $this->email->send();

            if($send)
            {
                $data['navbar'] = 'login';
                $this->sitelayout->loadTemplate('pages/authentication/changepassword', $data);
            }
        }
    }
?>