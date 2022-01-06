<?php
        
        class UpdateProfile_model extends CI_Model
        {
                public function __construct(){
                        parent::__construct();
                        
                        $this->load->database();
                }

                public function get_Email($id)
                {
                        $this->db->where('user_ID', $id);
                        $this->db->select('email');
                        $query = $this->db->get("user");
                        return $query;
                }

                public function updateUsername($userName, $id)
                {
                
                    $this->db->where('user_ID',$id);
                    $this->db->set('userName',$userName);
                
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

                public function updateDisplayname($displayName, $id)
                {
                
                    $this->db->where('user_ID',$id);
                    $this->db->set('displayName',$displayName);
                
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

                public function updateEmail($email, $id)
                {
                
                    $this->db->where('user_ID',$id);
                    $this->db->set('email',$email);
                
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

                public function updateVerificationKey($verification_Key, $id)
                {
                
                    $this->db->where('user_ID',$id);
                    $this->db->set('verification_Key',$verification_Key);
                    
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

                public function getImage()
                {
                    $id = $this->session->userdata('user_ID');
                    $target_directory = "C:/xampp/htdocs/Team06_BSCS3AB/assets/images/upload/";
                    $filename = $id."_profileImage";
                    $extension = ".jpg";
                    $path_filename_ext = $target_directory.$filename.$extension;
                    if(file_exists($path_filename_ext))
                    {
                        $extension = ".jpg";
                    }
                    else
                    {
                        $extension = ".jpeg";
                        $path_filename_ext = $target_directory.$filename.$extension;
                        if(file_exists($path_filename_ext))
                        {
                            
                            $extension = ".jpeg";
                        }
                        else
                        {
                            $extension = ".png";
                        }
                    }
                    $path_filename_ext = $target_directory.$filename.$extension;
                    $file = $id."_profileImage".$extension;
                    if(file_exists($path_filename_ext))
                        {
                            return "assets/images/upload/$file";
                        }
                        else
                        {
                            return "assets/images/upload/profile.png";
                        }
                }

        }

?>