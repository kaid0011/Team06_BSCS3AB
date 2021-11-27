<?php

        class Main_model extends CI_Model
        {
                public function __construct(){
                        parent::__construct();
                        
                        $this->load->database();
                }

                function delete_data ($id)
                {       
                $this->db->where("privateNBPage_ID",$id) 
                // Another comment on this cause I'm not very sure myself but...
                // the formatting for this is suppose to be "(columen name, column value)
                // but I'm not very sure if this right, like, very very t sure.
                $this->db->delete("privatenb_pages")  // tells which table to delete from
                return true;
        }
                }
        }




?>