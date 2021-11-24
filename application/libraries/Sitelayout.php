<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sitelayout {

    private $CI;

    public function __construct() {
        $this->CI =& get_instance();
    }

    public function loadTemplate($content = null, $data = null) {
        $layout = array();

        $layout['header'] = $this->CI->load->view('header', null, true);
        $layout['navbar'] = $this->CI->load->view('navbar', array("navbar" => $data['navbar']), true);
        $layout['footer'] = $this->CI->load->view('footer', null, true);

        $layout['content'] = $this->CI->load->view($content, $data, true);

        $this->CI->load->view('content', $layout);
    }
}