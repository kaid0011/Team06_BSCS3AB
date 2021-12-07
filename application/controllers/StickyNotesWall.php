<?php
    defined('BASEPATH') or exit('No direct script access allowed');

    class StickyNotesWall extends CI_Controller
    {

        public function __construct()
        {
            parent::__construct(); 
            $this->load->model('StickyNotesWall_model');
        }

        public function index() {
            $data['navbar'] = 'main';
            $this->sitelayout->loadTemplate('pages/stickynoteswall/viewstickynotes', $data); 
        }

        public function createStickyNotes() {
            $data['navbar'] = 'main';
            $this->sitelayout->loadTemplate('pages/stickynoteswall/createStickyNotes', $data); 
        }

        public function createNotes() {
            $id = $this->session->userdata('user_ID');
            $action = $this->input->post('action');
            $noteReceiver = $this->input->post('receiver');
            $noteInput = $this->input->post('input');
            $notetheme = $this->input->post('theme');
            if($notetheme == NULL)
            {
                $notetheme = 'Light';
            }


            $data = array(
                'user_ID' => $id,
                'noteReceiver' => $noteReceiver,
                'noteInput' => $noteInput,
                'noteTheme' => $notetheme,
                'noteReact_Count' => 0
            );

            if($action == 'Submit')
            {
                $this->StickyNotesWall_model->createStickyNotes($data);
                $this->index();
            }
            else if($action == 'Back')
            {
                $this->index();
            }

        }

    }

?>