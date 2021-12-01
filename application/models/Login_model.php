<?php
class Login_model extends CI_model
{

    public function __construct()
    {
        parent::__construct();
    }

    public function can_login($username, $password)
    {
        $this->db->where('userName', $username);
        $this->db->where('password', $password);
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