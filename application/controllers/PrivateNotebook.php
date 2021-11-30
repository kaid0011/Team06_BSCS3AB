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

        public function updatePrivateNotebook()
        {
            $id = $this->session->userdata('user_ID');
            $data['viewPageNotebook']=$this->PrivateNotebook_model->get_PrivateNotebookInput($id);

            $data['navbar'] = 'main';
            $this->sitelayout->loadTemplate('pages/privatenotebook/updateprivatenotebook', $data); 
        }

        public function updatedprivatepage()
        {

            $id = $this->session->userdata('user_ID');
            $action = $this->input->post('action');
            $pageTheme = $this->input->post('theme');
            

            if($action == 'Update')
            {
                $pageTimer = $this->input->post('appt');
                $pageTheme = $this->input->post('theme');
                $pageInput = $this->input->post('input');
                $this->PrivateNotebook_model->updateTimer($pageTimer, $pageTheme, $pageInput, $id);
                $this->index();
            }
            else if($action == 'Back')
            {
                $this->index();
            }
            else
            {  
                $this->PrivateNotebook_model->updateTimer("00:00:00", "Light", NULL, $id);
                $this->index();
            }
  
        }
    }
?>