<?php

        class UpdateProfile_model extends CI_Model
        {
                public function __construct(){
                        parent::__construct();
                        
                        $this->load->database();
                }

                public function get_Data($user){

                        $this->db->where('userName', $user);
                        $this->db->select('userName, displayName, email');
                        $query = $this->db->get("user");
                        return $query;
                }

                public function updateProfile($userName, $displayName, $emailAdd, $id)
                {
                
                    $this->db->where('user_ID',$id);
                    $this->db->set('userName',$userName);
                    $this->db->set('displayName',$displayName);
                    $this->db->set('email',$emailAdd);
                
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

                public function updatePassword($password, $id)
                {
                
                    $this->db->where('user_ID',$id);
                    $this->db->set('password',$password);
                    
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