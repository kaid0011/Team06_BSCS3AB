<?php
    defined('BASEPATH') or exit('No direct script access allowed');

    class Mainpage extends CI_Controller
    {

        public function __construct()
        {
            parent::__construct();
    
            $this->load->model('Mainpage_model');
            $this->load->model('UpdateProfile_model');

            #redirect to login if userID is NULL
            if(!$this->session->userdata('user_ID'))
            {
                redirect('login');
            }
        }

        public function index() {
            $data['navbar'] = 'main';
            $this->sitelayout->loadTemplate('pages/mainpage/mainpage', $data); 
        }

        public function admin() {
            $data['navbar'] = 'main';
            $this->sitelayout->loadTemplate('pages/mainpage/adminmainpage', $data); 
        }

        public function findUser()
        { 
            $user = $this->input->post('userName');
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

        public function addReact()
        {
            $action = $this->input->post('action');
            $page_ID = $this->input->post('page_ID');
            $visited_ID = $this->input->post('visitedUser_ID');

            if($action == 'React')
            {
                $response = $this->Mainpage_model->addReact($page_ID, $visited_ID);
                if($response)
                {
                    $this->findUser(); 
                }
            }
        }

        
    }

?>