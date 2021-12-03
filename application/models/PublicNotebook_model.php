<?php

        class PublicNotebook_model extends CI_Model
        {
                public function __construct(){
                        parent::__construct();
                        
                        $this->load->database();
                }

                public function get_PublicNotebookInput($publicNB_ID){

                        $this->db->where('publicNB_ID', $publicNB_ID);
                        $this->db->select('pageInput, pageTheme, pageDate, pageReact_Count');
                        $query = $this->db->get("publicnb_pages");
                        return $query;
        
                }

                public function Submit($id,$userdata)
                {

                    /*$this->db->where('publicNB_ID',$id);
                    $this->db->set('pageDate',$pageDate);
                    $this->db->set('pageTheme',$pageTheme);
                    $this->db->set('pageInput',$pageInput);
                    $this->db->set('pageReact_Count',$pageReact_Count);
                    */
                    $this->db->where('publicNB_ID',$id);
                    $result = $this->db->update('publicnb_pages',$userdata);
                
                

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