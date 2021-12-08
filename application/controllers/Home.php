<?php
    class Home extends CI_Controller
    {
        public function __construct()
        {
            parent::__construct();

            if($this->session->userdata('user_ID'))
            {
                redirect('mainpage');
            }
        }

        public function index() {
            
            $data['navbar'] = 'home';
            $this->sitelayout->loadTemplate('pages/home/home', $data);
        }
    }
?>