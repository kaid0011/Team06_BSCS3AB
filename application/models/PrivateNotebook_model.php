<?php

        class PrivateNotebook_model extends CI_Model
        {
                public function __construct(){
                        parent::__construct();
                        
                        $this->load->database();
                }

                public function get_PrivateNotebookInput($privateNB_ID){

                        $this->db->where('privateNB_ID', $privateNB_ID);
                        $this->db->select('pageInput, pageTheme, pageTimer');
                        $query = $this->db->get("privatenb_pages");
                        return $query;
        
                }

                public function updateTimer($pageTimer, $pageTheme, $pageInput, $id)
                {

                    $this->db->where('privateNB_ID',$id);
                    $this->db->set('pageTimer',$pageTimer);
                    $this->db->set('pageTheme',$pageTheme);
                    $this->db->set('pageInput',$pageInput);
                    
                    
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
       }

?>