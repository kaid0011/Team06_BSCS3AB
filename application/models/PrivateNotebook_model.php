<?php

        class PrivateNotebook_model extends CI_Model
        {
                public function __construct(){
                        parent::__construct();
                        
                        $this->load->database();
                }

                public function get_PrivateNotebookInput($privateNB_ID){

                        $this->db->where('privateNB_ID', $privateNB_ID);
                        $this->db->select('pageInput, pageTheme, pageTimer, page_InputImage');
                        $query = $this->db->get("privatenb_pages");
                        return $query;
        
                }

                public function updatePage($pageTimer, $pageTheme, $pageInput, $pageImage, $id)
                {

                    $this->db->where('privateNB_ID',$id);
                    $this->db->set('pageTimer',$pageTimer);
                    $this->db->set('pageTheme',$pageTheme);
                    $this->db->set('pageInput',$pageInput);
                    $this->db->set('page_InputImage', $pageImage);
                    
                    
                    $result = $this->db->update('privatenb_pages');
                
                    

                    if($result == true)
                    {
                        return true;
                    }

                    else
                    {
                        return false;
                    }
                    
                

                }

                public function getImage()
                {
                    $id = $this->session->userdata('user_ID');
                    $target_directory = "F:/XAMPP/htdocs/Team06_BSCS3AB/assets/images/privatenotebook/";
                    $filename = $id."_privateNotebookImage";
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
                    $file = $id."_privateNotebookImage".$extension;
                    if(file_exists($path_filename_ext))
                        {
                            return "assets/images/privatenotebook/$file";
                        }
                        else
                        {
                            return "No image";
                        }
                }


       }

?>