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

        public function resendCode($verification_key, $userName)
        {
            $this->db->where('userName', $userName);
            $this->db->set('verification_Key', $verification_key);
                    
            $result = $this->db->update('user');

            if($result == true)
            {
                return true;
            }
        }
    }
?>