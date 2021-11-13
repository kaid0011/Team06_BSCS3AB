<?php
    class Register_model extends CI_model{
        function insert($data){
            $this->db->insert('accounts', $data);
            return $this->db->insert_id();
        }
    }
?>