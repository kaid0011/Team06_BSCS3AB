<?php
    class PublicNotebook_model extends CI_Model
    {
        public function __construct()
        {
            parent::__construct();
                        
            $this->load->database();
        }

        public function get_PublicNotebookInput($publicNB_ID)
        {
            
            $this->db->where('publicNB_ID', $publicNB_ID);
            
            $this->db->select('publicNBPage_ID, pageInput, pageTheme');
            $this->db->order_by('publicNB_ID', 'desc');
            $query = $this->db->get('publicnb_pages');
            return $query;
        }

        public function createPublicPage($id, $input, $pageTheme, $pageReact_Count)
        {
            $this->db->set('publicNB_ID', $id);
            $this->db->set('pageInput', $input);
            $this->db->set('pageTheme', $pageTheme);
            $this->db->set('pageReact_Count', $pageReact_Count);
            $this->db->insert('publicnb_pages');
            return true;
        }

        public function get_PublicPage($page_ID)
        {
            $this->db->where('publicNBPage_ID', $page_ID);
            $page = $this->db->get('publicnb_pages');
            return $page;
        }

        public function updatePage($id, $page_ID, $pageTheme, $pageInput)
        {
            $this->db->where('publicNBPage_ID', $page_ID);
            $this->db->where('publicNB_ID',$id);
            $this->db->set('pageTheme',$pageTheme);
            $this->db->set('pageInput',$pageInput);                    
                    
            $result = $this->db->update('publicnb_pages');                                 

            if($result == true)
            {
                return true;
            }

            else
            {
                return false;
            }                    
        }

        public function deletePublicPage($id, $page_ID)
        {
            $this->db->where('publicNB_ID', $id);
            $this->db->where('publicNBPage_ID', $page_ID);
            $result = $this->db->delete('publicnb_pages');
            return true;
        }

        public function getImage($data)
        {
            $id = $this->session->userdata('user_ID');
            $target_directory = "C:/xampp/htdocs/Team06_BSCS3AB/assets/images/publicnotebook/";
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
                    return "assets/images/publicnotebook/$file";
                }
                else
                {
                    return "No image";
                }
        }

        public function getPageUsingDate($user, $date)
        {
            $this->db->where('publicNB_ID' , $user);
            $this->db->where('pageDate', $date);
            $this->db->select('publicNBPage_ID, pageInput, pageTheme');
            $this->db->order_by('publicNBPage_ID', 'desc');
            $query = $this->db->get('publicnb_pages');
            return $query;
        }
    }
?>