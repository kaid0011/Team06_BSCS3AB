<?php
class Login_model extends CI_model
{
    function can_login($userName,$password)
    {
        $this->db->where('userName',$password);
        $query = $this->db->get('codeigniter_register');
        if($query->num_rows()>0)
        {
            foreach($query->result() as $row)
            {
                if($row->is_password_verified == 'yes')
                {
                    $store_password = $this->encrypt->decode($row->password);
                    if($password == $store_password)
                    {
                        $this->session->set_userdata('id',$row->id)
                    }

                    else
                    {
                        return 'Wrong Password';
                    }

                
                }

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