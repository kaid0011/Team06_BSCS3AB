<?php

        class Mainpage_model extends CI_Model
        {
                public function __construct()
                {
                        parent::__construct();
                        
                        $this->load->database();
                }

                public function findUser($user)
                {
                        $this->db->where('userName', $user);
                        //$this->db->from('user');
                        //$this->db->join('publicnb_pages', 'publicnb_pages.publicNB_ID = user.user_ID');
                        $query = $this->db->get('user');
                        return $query;
                }

                public function findUser_PublicNB($findUser_ID)
                {
                        $this->db->where('publicNB_ID', $findUser_ID);
                        $this->db->order_by('publicNBPage_ID', 'desc');
                        $query = $this->db->get('publicnb_pages');
                        return $query;
                }

                public function addReact($page_ID, $visited_ID)
                {
                        $this->db->where('publicNB_ID', $visited_ID);
                        $this->db->where('publicNBPage_ID', $page_ID);
                        $this->db->set('pageReact_Count', 'pageReact_Count+1', FALSE);
                        $result = $this->db->update('publicnb_pages');
                        if($result)
                        {
                                return true;
                        }
                        else
                        {
                                return false;
                        }
                }

                public function getImage($id)
                {
                    $target_directory = "F:/XAMPP/htdocs/Team06_BSCS3AB/assets/images/upload/";
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