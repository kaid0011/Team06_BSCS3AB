<?php

        class Mainpage_model extends CI_Model
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

?>