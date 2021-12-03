<?php
    defined('BASEPATH') or exit('No direct script access allowed');

    class UpdateProfile extends CI_Controller
    {

        public function __construct()
        {
            parent::__construct(); 
        }

        public function index() 
        {
            $data['navbar'] = 'main';
            $this->sitelayout->loadTemplate('pages/navbar/updateprofile', $data); 
        }

        public function deactivateaccount() 
        {
            $data['navbar'] = 'main';
            $this->sitelayout->loadTemplate('pages/navbar/updateprofile', $data); 
        }
        
        public function updatepassword() 
        {
            $action = $this->input->post('action');

            if($action == 'Change Password') {
                $data['navbar'] = 'main';
                $this->sitelayout->loadTemplate('pages/navbar/updatepassword', $data); 
            }
            else {
                $this->index();
            }
        }
    }

?>