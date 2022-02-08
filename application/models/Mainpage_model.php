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

                public function getImage($id)
                {
                    $target_directory = APPPATH.'/uploads/profile/';
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
                            return "/application/uploads/profile/$file";
                        }
                        else
                        {
                            return "/application/uploads/profile/profile.png";
                        }
                        
                }

                public function getImagePage($data)
                {
                    $id = $this->session->userdata('user_ID');
                    $target_directory = APPPATH.'/uploads/publicnotebook/';
                    $filename = $id."_".$data."_publicNotebookImage";
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
                        $file = $id."_".$data."_publicNotebookImage".$extension;
                        if(file_exists($path_filename_ext))
                        {
                            return "application/uploads/publicnotebook/$file";
                        }
                        else
                        {
                            return "No image";
                        }
                }
        }