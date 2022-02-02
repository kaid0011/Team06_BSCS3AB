<?php
    defined('BASEPATH') or exit('No direct script access allowed');

    class StickyNotesWall extends CI_Controller
    {

        public function __construct()
        {
            parent::__construct(); 
            $this->load->model('StickyNotesWall_model');
            $this->load->model('UpdateProfile_model');
        }

        public function index() 
        {
            $data['viewStickyNotes']=$this->StickyNotesWall_model->get_StickyNotesWallInput();
            $data['navbar'] = 'main';
            $this->sitelayout->loadTemplate('pages/stickynoteswall/viewstickynotes', $data); 
        }

        public function createStickyNotes() 
        {
            $data['navbar'] = 'main';
            $this->sitelayout->loadTemplate('pages/stickynoteswall/createstickynotes', $data); 
        }

        public function createNotes() 
        {
            $this->form_validation->set_rules('input', 'Input', 'max_length[100]');

            if($this->form_validation->run())
            {
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
                    redirect('stickynoteswall');
                }
                else if($action == 'Back')
                {
                    $this->index();
                }
            }
            else
            {
                $data['navbar'] = 'main';
                $this->sitelayout->loadTemplate('pages/stickynoteswall/createstickynotes', $data); 
            }
        }

        public function findReceiver()
        { 

            $action = $this->input->post('action');

            if($action == 'Search')
            {
                $user = $this->input->post('userName');
                $data['viewreceiver'] = $this->StickyNotesWall_model->get_receiver($user);
                $data['navbar'] = 'main';
                $this->sitelayout->loadTemplate('pages/stickynoteswall/viewusingreceiver', $data); 
            }       
        }
    }