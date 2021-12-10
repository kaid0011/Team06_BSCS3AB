<?php
    class StickyNotesWall_model extends CI_Model
    {
        public function __construct()
        {
            parent::__construct();
                        
            $this->load->database();
            
        }

        public function get_StickyNotesWallInput($user_ID)
        {
            $this->db->where('user_ID', $user_ID);
            $this->db->select('stickyNotes_ID, noteInput, noteTheme');
            
            $query = $this->db->get('sticky_notes');
            return $query;
        }

        public function createStickyNotes($data)
        {
            $this->db->insert('sticky_notes', $data);
            return true;
        }

        public function get_Stickynotes($page_ID)
        {
            $this->db->where('stickyNotes_ID', $page_ID);
            $page = $this->db->get('sticky_notes');
            return $page;
        }

        public function get_receiver($user){

            $this->db->where('noteReceiver', $user);
            //$this->db->select('noteReceiver','noteInput');
            $query = $this->db->get("sticky_notes");

            foreach( $query->result() as $row){
                
                echo $row->noteInput;
                echo $row->noteReceiver;
                echo $row->noteTheme;
            }

            //return $query;
        }

        public function get_input ($user)
        {
            $this->db->where('noteReceiver', $user);
            $query = $this->db->get("sticky_notes");

            foreach( $query->result() as $row)
            {

                echo $row->noteInput;
                echo $row->noteReceiver;
            }
        }
    }
?>