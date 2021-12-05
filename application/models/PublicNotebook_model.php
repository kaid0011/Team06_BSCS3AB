<?php
<<<<<<< HEAD

        class PublicNotebook_model extends CI_Model
        {
                public function __construct(){
                        parent::__construct();
                        
                        $this->load->database();
                }

  ///////////////////////////// Public Notebook Delete Model
    
                public function PublicNotebook_delete($id, $publicid)
                {
                        $this->db->where('publicNB_ID', $id);
                        $this->db->where('publicNBPage_ID', $publicid);
                        $this->db->delete('publicnb_pages');
                }


?>

=======
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

        public function createPublicPage($data)
        {
            $this->db->insert('publicnb_pages', $data);
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
    }
?>
>>>>>>> e2f5d0a836c5183fab679978817d41ed99e17bc3
