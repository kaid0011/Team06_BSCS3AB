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
            $this->sitelayout->loadTemplate('pages/updateprofile', $data); 
        }
    }

?>