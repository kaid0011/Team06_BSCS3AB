<?php
    defined('BASEPATH') OR exit('No Direct script Access allowed');

    class Login extends CI_Controller 
    {

        public function __construct()
        {
            parent::__construct();
            $this->load->library('form_validation');
            $this->load->library('session');
            //$this->load->library('encrypt')
            $this->load->model('Login_model');
        }

        function index()
        {
            $this->load->view('pages/login');
        }

        function logged_in()
        {
            if(!$this->session->userdata('status'))
            {
                redirect('login');
            }
        }

        function validation()
        {
            $this->form_validation->set_rules('userName', 'Username', 'required');
            $this->form_validation->set_rules('password', 'Password', 'required');

            if($this->form_validation->run())
            {
                $username = $this->input->post('userName');
                $password = md5($this->input->post('password'));

                $result=$this->Login_model->can_login($username, $password);
                if($result)
                {  
                    $userdata = array(
                        'user_ID' => $result->user_ID,
                        'userName' => $result->userName,
                        'displayName' => $result->displayName,
                        'status' => TRUE
                    );
                    $this->session->set_userdata($userdata);
                    redirect('mainpage');
                }
                else
                {
                    $this->session->set_flashdata('message', 'Invalid Username or Password');
                    redirect('login');
                }
            }
            else
            {
                $this->sitelayout->loadTemplate('pages/login');
            }
        }

        public function logout()
        {
            $this->session->sess_destroy();
            redirect('home');
        }
    }
?>

