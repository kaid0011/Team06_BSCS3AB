<?php
    defined('BASEPATH') or exit('No direct script access allowed');

    class StickyNotesWall extends CI_Controller
    {

        public function __construct()
        {
            parent::__construct(); 
        }

        public function index() {
            $data['navbar'] = 'main';
            $this->sitelayout->loadTemplate('pages/stickynoteswall/viewstickynotes', $data); 
        }

        public function createStickyNotes() {
            $data['navbar'] = 'main';
            $this->sitelayout->loadTemplate('pages/stickynoteswall/createStickyNotes', $data); 
        }
    }

?>