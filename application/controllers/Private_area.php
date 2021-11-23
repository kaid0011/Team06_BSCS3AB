<?php defined('BASEPATH') OR exit ('NO direct script access allowed');

class Private_area extends CI_Controller {
    public function _construct()
    {
        parent::__construct();
        if(!$this->session->userdata('user_ID'))
        {
            redirect('login');
        }
    }

    function index()
    {
        echo 'Welcome User';
        echo '<p align="center"><a href="'.base_url().'private_area/logout">Logout</a></p>';
    }

    function logout()
    {
        $data = $this->session->all_userdata();
        foreach($data as $row => $rows_value)
        {
            $this->session->unset_userdata($row);
        }
        redirect('login');
    }
} ?>