<?php
defined('BASEPATH') OR exit('No Direct script Access allowed');

class Login extends CI_Controller 
{

    public function __construct()
    {
    parent::__construct();
    $this->load->library('form_validation');
    //$this->load->library('encrypt')
    $this->load->model('login_model');
    }

function index()
{
    $this->load->view('login');
}

function validation()
{
    $this->form_validation->set_rules('userName', 'Username', 'required|trim|valid_email');
    $this->form_validation->set_rules('password', 'Password', 'required');
    if($this->form_validation->run())
    {
        //////////////////////////////////////////////////////
        $result=$this->login_model->can_login($this->input->post('userName'),$this->inputpost('password'));
        if($result == '')
        {  
            #redirects the user to a page upon login, might be changed in the future.
            redirect('private_area');
        }
        else
        {
            $this->session->set_flashdata('message',$result);
            redirect('login');
        }
        /////////////////////////////////////////////////////
        echo "successful";
        exit();
    } else
    {
        echo "failed";
        exit();
        $this->index();
    }
    }
}