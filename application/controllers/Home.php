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
            else if($this->session->userdata('userName') == 'admin')
            {
                redirect('supportteam');
            }
        }

        public function index() {
            
            $data['navbar'] = 'home';
            $this->sitelayout->loadTemplate('pages/home/home', $data);
        }
        public function pbfeaturespage() {
            
            $data['navbar'] = 'home';
            $this->sitelayout->loadTemplate('pages/home/pbfeaturespage', $data);
        }
        public function privnbfeatures() {
            
            $data['navbar'] = 'home';
            $this->sitelayout->loadTemplate('pages/home/privnbfeatures', $data);
        }
        
        public function stickynotesfeatures() {
            
            $data['navbar'] = 'home';
            $this->sitelayout->loadTemplate('pages/home/stickynotesfeatures', $data);
    }
}
    
?>