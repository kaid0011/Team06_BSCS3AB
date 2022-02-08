<?php
    defined('BASEPATH') or exit('No Direct script Access allowed');

    class Login extends CI_Controller
    {
        public function __construct()
        {
            parent::__construct();
            $this->load->library('form_validation');
            $this->load->library('session');
            $this->load->model('Login_model');

            if($this->session->userdata('userName') == 'admin')
            {
                redirect('supportteam');
            }
            else if($this->session->userdata('user_ID'))
            {
                redirect('mainpage');
            }
        }

        public function index() 
        {
            $data['navbar'] = 'login';
            $this->sitelayout->loadTemplate('pages/authentication/login', $data);
        }

        public function validation()
        {
            $action = $this->input->post('action');

            if($action == 'Log In') 
            {
                $this->form_validation->set_rules('userName', 'Username', 'required');
                $this->form_validation->set_rules('password', 'Password', 'required');

                if ($this->form_validation->run()) 
                {
                    $username = $this->input->post('userName');
                    $raw_password = $this->input->post('password');
                    $password = hash("sha512", $this->input->post('password'));
                    $result = $this->Login_model->can_login($username, $password);

                    if($result) 
                    {
                        $status = 'Active';
                        $response = $this->Login_model->checkStatus($username, $status);

                        // $response =  $this->Login_model->checkStatus($username);
                        // foreach($response->result() as $row)
                        // {
                        //     $status = $row->status;
                        //     echo $status;
                        // }  

                        if($response)
                        {
                            if($username == "admin" && $raw_password == "team6bscs3ab")
                            {
                                $userdata = array(
                                    'user_ID' => $response->user_ID,
                                    'userName' => $response->userName,
                                    'displayName' => $response->displayName,
                                    'password' => $response->password,
                                    'email' => $response->email
                                );
                                $this->session->set_userdata($userdata);
                                redirect('supportteam');
                            }
                            else
                            {
                                $userdata = array(
                                    'user_ID' => $response->user_ID,
                                    'userName' => $response->userName,
                                    'displayName' => $response->displayName,
                                    'password' => $response->password,
                                    'email' => $response->email
                                );
                                $this->session->set_userdata($userdata);
                                redirect('mainpage'); 
                            }
                        }
                        else
                            {
                                $userdata = array(
                                    'user_ID' => $response->user_ID,
                                    'userName' => $response->userName,
                                    'displayName' => $response->displayName,
                                    'password' => $response->password,
                                    'email' => $response->email
                                );
                                $this->session->set_userdata($userdata);
                                redirect('mainpage'); 
                            }
                        }
                        else
                        {
                            $this->session->set_userdata('userName', $username);
                            $data['navbar'] = 'registration';
                            $this->sitelayout->loadTemplate('pages/registration/verification', $data);
                        }
                    }
                    else 
                    {
                        $this->session->set_flashdata('message', 'Invalid Username or Password'); 
                        $data['navbar'] = 'login';
                        $this->sitelayout->loadTemplate('pages/authentication/login', $data); 
                    } 
                } 
                else 
                {
                    $data['navbar'] = 'login';
                    $this->sitelayout->loadTemplate('pages/authentication/login', $data); 
                }
            }
        }

