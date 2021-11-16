<?php
    class Register_model extends CI_model{
        public function __construct()
        {
            parent::__construct();
        }
        
        public function addNewUser($data)
        {
            $this->db->insert('accounts', $data);
            #echo $this->db->last_query();
            #exit;
            return true;
        }
    }
?>