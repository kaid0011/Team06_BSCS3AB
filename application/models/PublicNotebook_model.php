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

        public function getImage($page_ID)
        {
            $connect = mysqli_connect("localhost", "root", "team6", "virtual_diary");
            $query = "SELECT * FROM publicnb_pages WHERE publicNBPage_ID = $page_ID";
            $result = mysqli_query($connect, $query);
            while ($image = mysqli_fetch_array($result))
                {
                    if($image['page_InputImage'] != NULL)
                        {
                            echo '<img style="width: 200px; height: 200px;" src="data:image/jpeg;base64, '.base64_encode($image['page_InputImage'] ). '"';
                        }
                }
        }
    }
?>