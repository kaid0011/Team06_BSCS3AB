<?php
    defined('BASEPATH') or exit('No direct script access allowed');

    class Main extends CI_Controller
    {

        public function __construct()
        {
            parent::__construct();
    
            $this->load->model('Main_model');  
        }

        public function index() {
            $data['navbar'] = 'main';
            $this->sitelayout->loadTemplate('pages/mainpage/mainpage', $data); 
        }

        public function findUser()
        { 
            $user = $this->input->post('userName');
            $data['findUser'] = $this->Main_model->get_Data($user);
            
            $data['navbar'] = 'main';
            $this->sitelayout->loadTemplate('pages/finduser/visitedprofile', $data); 
        }
    }

?>