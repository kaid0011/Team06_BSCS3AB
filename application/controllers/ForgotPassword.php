<?php
    defined('BASEPATH') OR exit('No direct script access allowed');
    
    class ForgotPassword extends CI_Controller
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
            $this->sitelayout->loadTemplate('pages/authentication/forgotpassword', $data); 
        }

        public function validation()
        {
            $action = $this->input->post('action');

            if($action == 'Confirm')
            {
                $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email');

                if($this->form_validation->run())
                {
                    $email = $this->input->post('email');

                    $result = $this->ForgotPassword_model->checkEmail($email);
                    if($result)
                    {
                        $code = random_string('numeric', 6);

                        $userdata = array(
                            'email' => $email,
                            'code'  =>  $code
                        );
                        $this->session->set_userdata($userdata);
                        $this->sendEmail();
                    }
                    else
                    {
                        $this->session->set_flashdata('message', 'This email is not registered.');
                        $this->index();
                    }
                }
                else
                {
                    $data['navbar'] = 'login';
                    $this->sitelayout->loadTemplate('pages/authentication/forgotpassword', $data); 
                }
            }
            else    #if ($action == 'Back')
            {
                $data['navbar'] = 'login';
                $this->sitelayout->loadTemplate('pages/authentication/login', $data); 
            }
        }

        public function sendEmail()
        {
            $email = $this->session->userdata('email');
            $code = $this->session->userdata('code');

            $subject = "Forgot Password";
            $message = "
            <h3>Hello!</h3>
            <p>Here is your verification code.</p><br>
            <h4>$code</h4>
            ";      #will change laturrr

            $config = array(
                'protocol'  => 'smtp',
                'smtp_host' => 'ssl://smtp.googlemail.com',
                'smtp_port' =>  465,
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
                $this->sitelayout->loadTemplate('pages/authentication/confirmation', $data);
            }
        }
    }
?>