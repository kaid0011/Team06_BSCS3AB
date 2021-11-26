<?php

        class Main_model extends CI_Model
        {
                public function __construct(){
                        parent::__construct();
                        
                        $this->load->database();
                }

                public function get_Data($user){

                        $this->db->where('userName', $user);
                        $this->db->select('userName, displayName');
                        $query = $this->db->get("user");
                        return $query;
                }
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

?>