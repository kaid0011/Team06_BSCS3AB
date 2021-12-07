<?php
    class Registration_model extends CI_model{
        public function __construct()
        {
            parent::__construct();
        }
        
        public function addNewUser($data)
        {
            $this->db->insert('user', $data);       #load database then insert $data in 'user' table in database
            #echo $this->db->last_query();
            #exit;
            return true;                            #return true if successful
        }

        public function getID($userName)
        {
            $this->db->where('userName', $userName);
            $this->db->select('user_ID');
            $query = $this->db->get('user');
            return $query;
        }

        public function dbConnections($publicNBData, $privateNBData)
        {
            $this->db->insert('public_notebook', $publicNBData);


            //$this->db->insert('publicnb_pages', $publicPageData);
            //echo $this->db->last_query();

            $this->db->insert('private_notebook', $privateNBData);

    
            //$this->db->insert('privatenb_pages', $privatePageData);
            //echo $this->db->last_query();


            return true;
        }

        public function dbConnectionsPages($publicPageData,  $privatePageData)
        {
            $this->db->insert('publicnb_pages', $publicPageData);
            $this->db->insert('privatenb_pages', $privatePageData);
            return true;
        }
    }
?>