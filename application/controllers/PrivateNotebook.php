<?php
    defined('BASEPATH') or exit('No direct script access allowed');

    class PrivateNotebook extends CI_Controller
    {

        public function __construct()
        {
            parent::__construct(); 
        }

        public function index() {
            $data['navbar'] = 'main';
            $this->sitelayout->loadTemplate('pages/privatenotebook/viewprivatenotebook', $data); 
        }

        public function updatePrivateNotebook() {
            $data['navbar'] = 'main';
            $this->sitelayout->loadTemplate('pages/privatenotebook/updateprivatenotebook', $data); 
        }
    }

?>