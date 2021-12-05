<?php

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

