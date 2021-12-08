<?php
    defined('BASEPATH') or exit('No direct script access allowed');

    class StickyNotesWall extends CI_Controller
    {

        public function __construct()
        {
            parent::__construct(); 
            $this->load->model('StickyNotesWall_model');
        }
        
        public function index() 
        {
            $data['navbar'] = 'main';
            $this->sitelayout->loadTemplate('pages/stickynoteswall/viewstickynotes', $data); 
        }

        public function createStickyNotes() {
            $data['navbar'] = 'main';
            $this->sitelayout->loadTemplate('pages/stickynoteswall/createStickyNotes', $data); 
        } 

    /////////////////////////////////////////////////////////
        public function createNotes()
        {
            $id = $this->session->userdata('user_ID');
            $action = $this->input->post('action');
            $notetheme = $this->input->post('theme');
            $noteInput = $this->input->post('input');
            $noteReceiver = $this->input->post('receiver');
            if ($notetheme == NULL) 
            {$notetheme = "light";} 
            
            $data = array(
                'user_ID' => $id,
                'noteInput' => $noteInput, 
                'noteReceiver' => $noteReceiver,
                'noteTheme' => $notetheme,
                'noteReact_Count' => 0);
            if ($action == 'Submit')
            {
                $this->StickyNotesWall_model->createStickyNotes($data);
                $this->index();
            }
            else if ($action == 'Back')
            {
                $this->index();
            }
    }
    } 
?>