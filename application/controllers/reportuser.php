<?php
    defined('BASEPATH') or exit('No direct script access allowed');

    class reportuser extends CI_Controller
    {

        public function __construct()
        {
            parent::__construct(); 
        }

        public function index() {
            $data['navbar'] = 'main';
            $this->sitelayout->loadTemplate('pages/reportuser/reportuser', $data); 
        }
    }

?>