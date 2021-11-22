<?php
    defined('BASEPATH') or exit('No direct script access allowed');

    class Main extends CI_Controller
    {

        public function __construct()
        {
            parent::__construct();
    
            $this->load->model('Main_model');  
        }

        public function findUser()
        { 
            $user = $this->input->post('userName');
            $data['findUser'] = $this->Main_model->get_Data($user);
            
            //print_r($data);
            $this->sitelayout->loadTemplate('pages/visitedprofile', $data);
            
        }
    }
?>