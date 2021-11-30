<?php
    class Registration_model extends CI_model{
        public function __construct()
        {
            parent::__construct();
        }
        
        public function addNewUser($data)
        {
            $this->db->insert('user', $data);       #load database then insert $data in 'user' table in database
            #echo $this->db->last_query();
            #exit;
            return true;                            #return true if successful
        }
    }
?>