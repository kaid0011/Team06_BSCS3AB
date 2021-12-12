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
            $this->sitelayout->loadTemplate('pages/privatenotebook/withpicviewprivate', $data); 


        }

        public function updatePrivateNotebook()
        {
            $id = $this->session->userdata('user_ID');
            $data['viewPageNotebook']=$this->PrivateNotebook_model->get_PrivateNotebookInput($id);

            $data['navbar'] = 'main';
            $this->sitelayout->loadTemplate('pages/privatenotebook/updateprivatenotebook', $data); 
        }

        public function updateprivatepage()
        {

            $id = $this->session->userdata('user_ID');
            $action = $this->input->post('action');
            $pageTheme = $this->input->post('theme');
            

            if($action == 'Update')
            {
                $pageTimer = $this->input->post('appt'); //Timer
                if($pageTimer == "00:00:00")
                {
                    date_default_timezone_set("Asia/Manila");
                    $pageTimer = date("H:i s");
                }
                $pageTheme = $this->input->post('theme'); //Theme
                $pageInput = $this->input->post('input'); //Input
                $this->PrivateNotebook_model->updatePage($pageTimer,$pageTheme, $pageInput, $id);
                $this->index();
            }
            else if($action == 'Back')
            {
                $this->index();
            }
            else
            {  
                $this->PrivateNotebook_model->updatePage("00:00:00", "Light", NULL, NULL, $id);
                $this->index();
            }
  
        }
    }
?>