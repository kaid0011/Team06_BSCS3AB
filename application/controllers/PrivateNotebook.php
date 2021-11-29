<?php
    defined('BASEPATH') or exit('No direct script access allowed');

    class PrivateNotebook extends CI_Controller
    {

        public function __construct()
        {
            parent::__construct(); 
            $this->load->model('PrivateNotebook_model');  
        }

        public function index() {

            $privateNB_ID = $this->session->userdata('user_ID');
            $data['viewPrivateNotebook']=$this->PrivateNotebook_model->get_PrivateNotebookInput($privateNB_ID);
            
            $data['navbar'] = 'main';
            $this->sitelayout->loadTemplate('pages/privatenotebook/viewprivatenotebook', $data); 

        }

        public function updatePrivateNotebook() {
            $data['navbar'] = 'main';
            $this->sitelayout->loadTemplate('pages/privatenotebook/updateprivatenotebook', $data); 
        }

    }

?>