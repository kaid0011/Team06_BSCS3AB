<?php
    defined('BASEPATH') or exit('No direct script access allowed');

    class PublicNotebook extends CI_Controller
    {

        public function __construct()
        {
            parent::__construct(); 
            $this->load->model('PublicNotebook_model');
        }

        public function index() {

            $publicNB_ID = $this->session->userdata('user_ID');
            $data['viewPublicNotebook']=$this->PublicNotebook_model->get_PublicNotebookInput($publicNB_ID);

            $data['navbar'] = 'main';
            $this->sitelayout->loadTemplate('pages/publicnotebook/viewpublicnotebook', $data); 
        }

       public function createPublicNotebook() {
                $data['navbar'] = 'main';
                $this->sitelayout->loadTemplate('pages/publicnotebook/createpublicnotebook', $data);         
        }
        
        public function createdPublicPage() {
            $id = $this->session->userdata('user_ID');
            $action = $this->input->post('action');
            $input = $this->input->post('input');
            $theme = $this->input->post('theme');

            $data = array(
                'publicNB_ID' => $id,
                'pageInput' => $input,
                'pageTheme' => $theme,
                'pageReact_Count' => 0
            );

            if($action == 'Submit')
            {
                $this->PublicNotebook_model->createPublicPage($data);
                $this->index();
            }
            else if($action == 'Back')
            {
                $this->index();
            }
        }

        /* public function createNewPage()
        {

            $id = $this->session->userdata('user_ID');
            $action = $this->input->post('action');
            $pageInput = $this->input->post('pageInput');
            $pageTheme = $this->input->post('theme');
            //$pageDate = $this->input->post('date');
            $pageReact_Count = $this->input->post('');

            
            if($action == 'Submit')
            {
                $userdata = array
                (
                    
                    'pageInput' => $pageInput,
                    //'pageTheme' => $pageTheme,
                   // 'pageDate' => $pageDate,
                    'pageReact_Count' => 0,

                );
        
                //$pageTheme = $this->input->post('theme'); //Theme
               // $pageInput = $this->input->post('input'); //Input
                $response=$this->PublicNotebook_model->Submit($id,$userdata);
                $this->index();

                if($response)
                {
                    echo 'pang check lng';
                }
            }
            else if($action == 'Back')
            {
                $this->index();
            }
        }*/

        public function updatePublicNotebook()
        {
            $id = $this->session->userdata('user_ID');
            $data['viewPageNotebook']=$this->PublicNotebook_model->get_PublicNotebookInput($id);

            $data['navbar'] = 'main';
            $this->sitelayout->loadTemplate('pages/publicnotebook/updatepublicnotebook', $data); 
        }

        public function updatedPublicPage()
        {

            $id = $this->session->userdata('user_ID');
            $action = $this->input->post('action');
            $pageTheme = $this->input->post('theme');
            

            if($action == 'Update')
            {
                $pageInput = $this->input->post('input'); //Input
                $this->PublicNotebook_model->updatePage($pageTheme, $pageInput, $id);
                $this->index();
            }
            else if($action == 'Back')
            {
                $this->index();
            }
            else
            {  
                $this->PublicNotebook_model->updatePage("Light", NULL, $id);
                $this->index();
            }
  
        }
    }
?>