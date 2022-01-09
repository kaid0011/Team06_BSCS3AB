<?php
    class StickyNotesWall_model extends CI_Model
    {
        public function __construct()
        {
            parent::__construct();
                        
            $this->load->database();
            
        }

        public function get_StickyNotesWallInput()
        {
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

        public function get_receiver($user)
        {
            $this->db->where('noteReceiver', $user);
            $viewReceiver = $this->db->get("sticky_notes");
            return $viewReceiver; 
        }

        public function get_input ($user)
        {
            $this->db->where('noteReceiver', $user);
            $viewStickyNotes = $this->db->get("sticky_notes");

            foreach( $viewStickyNotes->result() as $row)
            {
                echo $row->noteInput;
                echo $row->noteReceiver;
                echo $row->noteTheme;
            }
        }

        public function get_stickyinput($stickyNotes_ID)
        {   
            $this->db->where('stickyNotes_ID', $stickyNotes_ID);
            $this->db->select('noteReceiver, noteInput, noteTheme');
            $this->db->order_by('stickyNotes_ID', 'desc');
            $query = $this->db->get('sticky_notes');
            return $query;
        }

        public function get_Note($note_ID)
        {
            $this->db->where('stickyNotes_ID', $note_ID);
            $page = $this->db->get('sticky_notes');
            return $page;
        }
    }
?>