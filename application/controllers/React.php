<?php
    defined('BASEPATH') OR exit('No direct script access allowed');
    
    class React extends CI_Controller
    {
        public function __construct()
        {
            parent::__construct();
            
            $this->load->model('React_model');
        }

        public function addReact_StickyNote()
        {
            if($this->input->is_ajax_request())
            {
                $ajax_data = $this->input->post();
                $accountVisitor_ID = $this->input->post('accountVisitor_ID');
                $stickyNotes_ID = $this->input->post('stickyNotes_ID');

                $response = $this->React_model->checkReact_StickyNote($accountVisitor_ID, $stickyNotes_ID);

                if($response == true)
                {
                    $this->React_model->addReact_StickyNote($ajax_data);
                    $this->React_model->reactCount_StickyNote($stickyNotes_ID);
                    $data = array('response' => "added");
                }
                else
                {
                    $this->React_model->deleteReact_StickyNote($accountVisitor_ID, $stickyNotes_ID);
                    $this->React_model->reactCount_StickyNote($stickyNotes_ID);
                    $data = array('response' => "deleted");
                }  
            }

            echo json_encode($data);
        }

        public function addReact_PublicPage()
        {
            if($this->input->is_ajax_request())
            {
                $ajax_data = $this->input->post();
                $accountVisitor_ID = $this->input->post('accountVisitor_ID');
                $publicNBPage_ID = $this->input->post('publicNBPage_ID');

                $response = $this->React_model->checkReact_PublicPage($accountVisitor_ID, $publicNBPage_ID);

                if($response == true)
                {
                    $this->React_model->addReact_PublicPage($ajax_data);
                    $this->React_model->reactCount_PublicPage($publicNBPage_ID);
                    $data = array('response' => "added");
                }
                else
                {
                    $this->React_model->deleteReact_PublicPage($accountVisitor_ID, $publicNBPage_ID);
                    $this->React_model->reactCount_PublicPage($publicNBPage_ID);
                    $data = array('response' => "deleted");
                }  
            }

            echo json_encode($data);
        }
    }