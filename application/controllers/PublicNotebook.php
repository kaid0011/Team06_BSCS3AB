<?php
    defined('BASEPATH') or exit('No direct script access allowed');

    class PublicNotebook extends CI_Controller
    {

        public function __construct()
        {
            parent::__construct(); 
        }

        public function index() {
            $data['navbar'] = 'main';
            $this->sitelayout->loadTemplate('pages/publicnotebook/viewpublicnotebook', $data); 
        }

        public function updatePublicNotebook() {
            $data['navbar'] = 'main';
            $this->sitelayout->loadTemplate('pages/publicnotebook/updatepublicnotebook', $data); 
        }

        public function createPublicNotebook() {
            $data['navbar'] = 'main';
            $this->sitelayout->loadTemplate('pages/publicnotebook/createpublicnotebook', $data); 
        }

        ///////////////////////////// Public Notebook Delete Controller
    
        public function deletepublicpage()
        {
            $this->load->model("publicNotebook_model");
            $id = 1; //$this->session->userdata('user_ID');
            $publicid = 1; //$this->session->userdata('user_ID'); 
            /// This needs to be a seperate declaration
            $this->publicNotebook_model->publicNotebook_delete($id);
            $this->publicNotebook_model->publicNotebook_delete($publicid);
            
        }

    }
