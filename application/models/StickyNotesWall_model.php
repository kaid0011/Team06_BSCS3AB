<?php
<<<<<<< HEAD
    defined('BASEPATH') or exit('No direct script access allowed');

=======
>>>>>>> 9d4a8fdbddb80cf766b9982f36ec6e49c4e0f387
    class StickyNotesWall_model extends CI_Model
    {
        public function __construct()
        {
            parent::__construct();
<<<<<<< HEAD
            $this->load->database();
=======
                        
            $this->load->database();
            
>>>>>>> 9d4a8fdbddb80cf766b9982f36ec6e49c4e0f387
        }

        public function get_StickyNotesWallInput($user_ID)
        {
<<<<<<< HEAD
            $this->db->where('user_ID',$user_ID);
            $this->db->select('stickyNotes_ID, noteInput, noteTheme');
=======
            $this->db->where('user_ID', $user_ID);
            $this->db->select('stickyNotes_ID, noteInput, noteTheme');
            
>>>>>>> 9d4a8fdbddb80cf766b9982f36ec6e49c4e0f387
            $query = $this->db->get('sticky_notes');
            return $query;
        }

        public function createStickyNotes($data)
        {
<<<<<<< HEAD
            $this->db->insert('sticky_notes',$data);
=======
            $this->db->insert('sticky_notes', $data);
>>>>>>> 9d4a8fdbddb80cf766b9982f36ec6e49c4e0f387
            return true;
        }

        public function get_Stickynotes($page_ID)
        {
<<<<<<< HEAD
            $this->db->where('stickyNotes_ID',$page_ID);
            $page = $this->db->get('sticky_notes');
            return $page;
        }
    }

=======
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
>>>>>>> 9d4a8fdbddb80cf766b9982f36ec6e49c4e0f387
?>