<?php

        class PrivateNotebook_model extends CI_Model
        {
                public function __construct(){
                        parent::__construct();
                        
                        $this->load->database();
                }

                public function get_PrivateNotebookInput($privateNB_ID){

                        $pvNB_ID = $this->session->userdata('user_ID');
                        if($pvNB_ID == $privateNB_ID)
                        {
                            $this->db->where('privateNB_ID', $privateNB_ID);
                            $this->db->select('pageInput');
                            $query = $this->db->get("privatenb_pages");
                            return $query;
                        }
                        else
                        {
                            return NULL;
                        }
                        
                }
        }

?>