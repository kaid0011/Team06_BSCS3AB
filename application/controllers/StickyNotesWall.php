<?php
    defined('BASEPATH') or exit('No direct script access allowed');

    class StickyNotesWall extends CI_Controller
    {

        public function __construct()
        {
            parent::__construct(); 
            $this->load->model('StickyNotesWall_model');
        }
<<<<<<< HEAD
        
        public function index() 
        {
=======

        public function index() {

            $stickyNotes_ID = $this->session->userdata('user_ID');
            $data['viewStickyNotes']=$this->StickyNotesWall_model->get_StickyNotesWallInput($stickyNotes_ID);

>>>>>>> 9d4a8fdbddb80cf766b9982f36ec6e49c4e0f387
            $data['navbar'] = 'main';
            $this->sitelayout->loadTemplate('pages/stickynoteswall/viewstickynotes', $data); 
            
        }

        public function createStickyNotes() {
            $data['navbar'] = 'main';
<<<<<<< HEAD
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
=======
            $this->sitelayout->loadTemplate('pages/stickynoteswall/createstickynotes', $data); 
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

        public function findReceiver()
        { 

            $action = $this->input->post('action');

            if($action == 'Search')
            {
                $user = $this->input->post('userName');
                $data['viewstickynotes'] = $this->StickyNotesWall_model->get_receiver($user);
            }
           
            /*foreach( $data['viewstickynotes']-> result() as $row){
                
                echo $row->noteInput;
            }*/


            $data['navbar'] = 'main';
            $this->sitelayout->loadTemplate('pages/stickynoteswall/viewstickynotes', $data); 
        }
        
        public function input()
        { 

            $action = $this->input->post('action');

            if($action == 'Submit')
            {
                $user = $this->input->post('noteReceiver, noteInput');
                $data['viewstickynotes'] = $this->StickyNotesWall_model->get_input($user);
            }

            $data['navbar'] = 'main';
            $this->sitelayout->loadTemplate('pages/stickynoteswall/viewstickynotes', $data); 
        }
    }

    
>>>>>>> 9d4a8fdbddb80cf766b9982f36ec6e49c4e0f387
?>