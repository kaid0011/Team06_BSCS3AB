<?php
    class Home extends CI_Controller{
        
        public function index() {
            
            $data['navbar'] = 'home';
            $this->sitelayout->loadTemplate('pages/home/home', $data);
        }
    }
?>