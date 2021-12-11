<?php
    defined('BASEPATH') OR exit('No direct script access allowed');
    
    class SupportTeam extends CI_Controller
    {
        public function __construct()
        {
            parent::__construct();
            
            //$this->load->model('SupportTeam_model');
        }

        public function index()
        {
            $data['navbar'] = 'main';
            $this->sitelayout->loadTemplate('pages/mainpage/AdminMainpage', $data);
        }
    }
?>