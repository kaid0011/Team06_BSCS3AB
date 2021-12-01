<?php
    class ForgotPassword_model extends CI_model
    {
        public function __construct()
        {
            parent::__construct();
        }

        public function checkEmail($email)
        {
            $this->db->where('email', $email);
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

        public function updatePassword($email, $password)
        {
            $this->db->where('email', $email);
            $this->db->set('password', $password);
            $result = $this->db->update('user');
            if($result == true)
            {
                return true;
            }
            else
            {
                return false;
            }
        }
    }
?>