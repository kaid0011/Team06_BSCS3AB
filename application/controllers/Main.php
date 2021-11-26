<?php
    defined('BASEPATH') or exit('No direct script access allowed');

    class Main extends CI_Controller
    {

        public function __construct()
        {
            parent::__construct();
    
            $this->load->model('Main_model');  
        }

        public function findUser()
        { 
            $user = $this->input->post('userName');
            $data['findUser'] = $this->Main_model->get_Data($user);
            
            //print_r($data);
            $this->sitelayout->loadTemplate('pages/visitedprofile', $data);
            
        }
    }

        {public function inserted();}

        public function delete_data()
        {
        $id = 1;
        /// this is just a dummy variable to identify which column to nuke.
        /// this is due to login not being polished yet

        $response = $this->Main_Model->del($id);
        $this->load->model("main_model"); 
        //// little comment on this, supposebly you're gonna load the model
        //// here we'll use "main_model".
        redirect(base_url(). "main/deleted";)
    }

        public function deleted ()
    {
        $this->index();
    }

?>