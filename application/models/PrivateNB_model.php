<?php

        class PrivateNB_model extends CI_Model
        {
                public function __construct()
                {
                        parent::__construct();
                        
                        $this->load->database();
                }

            

                public function updateTimer($pageTimer, $id)
                {

                    $this->db->where('privateNB_ID',$id);
                    $this->db->set('pageTimer',$pageTimer);
                    
                    
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