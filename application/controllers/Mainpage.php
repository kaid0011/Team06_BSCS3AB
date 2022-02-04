<?php
    defined('BASEPATH') or exit('No direct script access allowed');

    class Mainpage extends CI_Controller
    {

        public function __construct()
        {
            parent::__construct();
            $this->load->model('Mainpage_model');
            $this->load->model('UpdateProfile_model');

            if($this->session->userdata('userName') == 'admin')
            {
                redirect('supportteam');
            }
            else if(!$this->session->userdata('user_ID'))
            {
                redirect('login');
            }
        }

        public function index() {
            $data['navbar'] = 'main';
            $this->sitelayout->loadTemplate('pages/mainpage/mainpage', $data); 
        }


        public function searchuser()
        { 
            $user = $this->input->get('userName');
            $data['findUser'] = $this->Mainpage_model->findUser($user);
            $findUser_ID = NULL;
            foreach($data['findUser']->result() as $row)
            {
                $findUser_ID = $row->user_ID;
            }
            
            if($findUser_ID != NULL)
            {
                $data['findUserPublicNB'] = $this->Mainpage_model->findUser_PublicNB($findUser_ID);
            }
           
            $data['navbar'] = 'main';
            $this->sitelayout->loadTemplate('pages/navbar/visitedprofile', $data); 

        }
        
    }