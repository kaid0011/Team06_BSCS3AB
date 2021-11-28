<?php
    class Verification_model extends CI_model
    {
        public function __construct()
        {
            parent::__construct();
        }

        public function verify($verification_Key, $username)
        {
            $this->db->where('userName', $username);
            $this->db->where('verification_Key', $verification_Key);
            $this->db->limit(1);
            $query = $this->db->get('user');
            if($query->num_rows() == 1)
            {
                return $query->row();
            }
            else
            {
                return false;
            }
        }
    }
?>