<?php
defined('BASEPATH') or exit('No Direct script Access allowed');

class Logout extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('session');
    }

    public function index()
    {
        $this->session->sess_destroy();
        $data['navbar'] = 'home';
        $this->sitelayout->loadTemplate('pages/home/home', $data); 
    }
}
?>