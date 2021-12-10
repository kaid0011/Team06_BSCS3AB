<?php
    defined('BASEPATH') or exit('No direct script access allowed');

    class reportuser extends CI_Controller
    {

        public function __construct()
        {
            parent::__construct(); 
        }

        public function index() 
        {
            $data['navbar'] = 'main';
            $this->sitelayout->loadTemplate('pages/reportuser/reportuser', $data); 
        }

        public function reportuserwall() 
        {
            $data['navbar'] = 'main';
            $this->sitelayout->loadTemplate('pages/reportuser/reportuserwall', $data); 
        }
        public function viewindividualreport() 
        {
            $data['navbar'] = 'main';
            $this->sitelayout->loadTemplate('pages/reportuser/viewindividualreport', $data); 
        }
        public function updateindivreport() 
        {
            $data['navbar'] = 'main';
            $this->sitelayout->loadTemplate('pages/reportuser/updateindivreport', $data); 
        }
        
        public function detailedreport() 
        {
            $data['navbar'] = 'main';
            $this->sitelayout->loadTemplate('pages/reportuser/detailedreport', $data); 
        }
        
    }

?>