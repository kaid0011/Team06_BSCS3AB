<?php
class Login_model extends CI_model
{
    function can_login($userName,$password)
    {
        $this->db->where($userName,$password);
        $query = $this->db->get('users');
        if($query->num_rows()>0)
        {
            foreach($query->result() as $row)
            {

                $store_password = md5($password);
                if($password == $store_password)
                {
                    $this->session->set_userdata('id',$row->user_ID)
                }

                else
                {
                     return 'Wrong Password';
                }
                ///if($row->is_password_verified == 'yes') {}
                ///Comment: Originally the code above is INSIDE this if statement.
                else
                {
                    return 'Verify Username';
                }
            
            }
  
        }

        else
        {
            return 'Wrong Username'
        }
    }
}

?>