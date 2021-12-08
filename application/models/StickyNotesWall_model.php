<?php
    defined('BASEPATH') or exit('No direct script access allowed');

    class StickyNotesWall_model extends CI_Model
    {
        public function __construct()
        {
            parent::__construct();
            $this->load->database();
        }

        public function get_StickyNotesWallInput($user_ID)
        {
            $this->db->where('user_ID',$user_ID);
            $this->db->select('stickyNotes_ID, noteInput, noteTheme');
            $query = $this->db->get('sticky_notes');
            return $query;
        }

        public function createStickyNotes($data)
        {
            $this->db->insert('sticky_notes',$data);
            return true;
        }

        public function get_Stickynotes($page_ID)
        {
            $this->db->where('stickyNotes_ID',$page_ID);
            $page = $this->db->get('sticky_notes');
            return $page;
        }
    }

?>