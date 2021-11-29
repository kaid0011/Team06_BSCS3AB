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

        #redirect to login if userID exists
        if($this->session->userdata('user_ID'))
        {
            redirect('mainpage');
            //$data['navbar'] = 'main';
            //$this->sitelayout->loadTemplate('pages/mainpage/mainpage', $data);
        }
    }

    public function index() {
        $data['navbar'] = 'login';
        $this->sitelayout->loadTemplate('pages/authentication/login', $data);
    }

    function validation()
    {
        $action = $this->input->post('action');

        if($action == 'Log In') {

            $this->form_validation->set_rules('userName', 'Username', 'required');
            $this->form_validation->set_rules('password', 'Password', 'required');

            if ($this->form_validation->run()) {
                $username = $this->input->post('userName');
                $password = md5($this->input->post('password'));

                $result = $this->Login_model->can_login($username, $password);
                if ($result) {
                    $userdata = array(
                        'user_ID' => $result->user_ID,
                        'userName' => $result->userName,
                        'displayName' => $result->displayName,
                        'status' => TRUE
                    );
                    $this->session->set_userdata($userdata);
                    redirect('mainpage'); 
                } 
                else {
                    $this->session->set_flashdata('message', 'Invalid Username or Password');
                    
                    $data['navbar'] = 'login';
                    $this->sitelayout->loadTemplate('pages/authentication/login', $data); 
                }
            } 
            else {
                $data['navbar'] = 'login';
                $this->sitelayout->loadTemplate('pages/authentication/login', $data); 
            }
        }
        else { }
    }
}

?>