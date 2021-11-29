<?php
    defined('BASEPATH') or exit('No direct script access allowed');

    class PrivateNotebook extends CI_Controller
    {

        public function __construct()
        {
            parent::__construct(); 
            $this->load->model('PrivateNB_model');
        }

        public function index() {
            $data['navbar'] = 'main';
            $this->sitelayout->loadTemplate('pages/privatenotebook/viewprivatenotebook', $data); 
            $action = $this->input->post('action');
            if($action == 'Update')
            {
                $this->updatePrivateNotebook();
            }
        }

        public function updatePrivateNotebook()
        {
            $data['navbar'] = 'main';
            $this->sitelayout->loadTemplate('pages/privatenotebook/updateprivatenotebook', $data); 
            
            
                $id = $this->session->userdata('user_ID');
                $pageTimer = $this->input->post('appt');
                $response = $this->PrivateNB_model->updateTimer($pageTimer, $id);
    
                if($response)
                {
                    echo 'kahitano';
                }
    
                else
                {
                    echo 'garaba';
                }
            
        }

        public function updateTimer()
        {
            
           
        }
    }

?>