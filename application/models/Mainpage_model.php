<?php

        class Mainpage_model extends CI_Model
        {
                public function __construct()
                {
                        parent::__construct();
                        
                        $this->load->database();
                }

                public function findUser($user)
                {
                        $this->db->where('userName', $user);
                        //$this->db->from('user');
                        //$this->db->join('publicnb_pages', 'publicnb_pages.publicNB_ID = user.user_ID');
                        $query = $this->db->get('user');
                        return $query;
                }

                public function findUser_PublicNB($findUser_ID)
                {
                        $this->db->where('publicNB_ID', $findUser_ID);
                        $this->db->order_by('publicNBPage_ID', 'desc');
                        $query = $this->db->get('publicnb_pages');
                        return $query;
                }

                public function addReact($page_ID, $visited_ID)
                {
                        $this->db->where('publicNB_ID', $visited_ID);
                        $this->db->where('publicNBPage_ID', $page_ID);
                        $this->db->set('pageReact_Count', 'pageReact_Count+1', FALSE);
                        $result = $this->db->update('publicnb_pages');
                        if($result)
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