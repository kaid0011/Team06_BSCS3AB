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
        
        public function createPublicPage() {
            $id = $this->session->userdata('user_ID');
            $action = $this->input->post('action');
            $input = $this->input->post('input');
            $theme = $this->input->post('theme');
            if($theme == NULL)
            {
                $theme = 'Light';
            }

            $data = array(
                'publicNB_ID' => $id,
                'pageInput' => $input,
                'pageTheme' => $theme,
                'pageReact_Count' => 0
            );

            if($action == 'Submit')
            {
                $this->PublicNotebook_model->createPublicPage($data);
                $this->PublicNotebook_model->pageCount($id);
                $this->index();
            }
            else if($action == 'Back')
            {
                $this->index();
            }
        }

        public function updatePublicNotebook()
        {
            $page_ID = $this->uri->segment(3);
            //$id = $this->session->userdata('user_ID');
            $data['viewPublicPage']=$this->PublicNotebook_model->get_PublicPage($page_ID);

            $data['navbar'] = 'main';
            $this->sitelayout->loadTemplate('pages/publicnotebook/updatepublicnotebook', $data); 
        }

        public function updatePublicPage()
        {
            $id = $this->session->userdata('user_ID');
            $page_ID = $this->input->post('page_ID');
            $action = $this->input->post('action');
            $pageTheme = $this->input->post('theme');
            
            if($action == 'Update')
            {
                $pageInput = $this->input->post('input');
                $this->PublicNotebook_model->updatePage($id, $page_ID, $pageTheme, $pageInput);
                $this->index();
            }
            else if($action == 'Back')
            {
                $this->index();
            }
            else
            {  
                //$this->PublicNotebook_model->updatePage($id, $page_ID, "Light", NULL);
                $this->deletePublicPage();
            }
        }

        public function deletePublicPage()
        {
            $id = $this->session->userdata('user_ID');
            $page_ID = $this->input->post('page_ID');

            $response = $this->PublicNotebook_model->deletePublicPage($id, $page_ID);
            if($response)
            {
                $this->index();
            }
        }
    }
?>