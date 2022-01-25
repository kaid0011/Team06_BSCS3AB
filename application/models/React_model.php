<?php
    class React_model extends CI_Model
    {
        public function __construct()
        {
            parent::__construct();
        }

        //sticky note react
        public function addReact_StickyNote($data)
        {
            return $this->db->insert('stickynotes_reacts', $data);
        }

        public function reactCount_StickyNote($stickyNotes_ID)
        {
            $this->db->where('stickyNotes_ID', $stickyNotes_ID);
            $count = $this->db->count_all_results('stickynotes_reacts');
            
            $this->db->where('stickyNotes_ID', $stickyNotes_ID);
            $this->db->set('noteReact_Count', $count);
            $this->db->update('sticky_notes');
        }

        public function checkReact_StickyNote($accountVisitor_ID, $stickyNotes_ID)
        {
            $this->db->where('accountVisitor_ID', $accountVisitor_ID);
            $this->db->where('stickyNotes_ID', $stickyNotes_ID);
            $query = $this->db->count_all_results('stickynotes_reacts');
            
            if($query == 0)
            {
                return true;
            }
            else
            {
                return false;
            }
        }

        public function deleteReact_StickyNote($accountVisitor_ID, $stickyNotes_ID)
        {
            $this->db->where('accountVisitor_ID', $accountVisitor_ID);
            $this->db->where('stickyNotes_ID', $stickyNotes_ID);
            $this->db->delete('stickynotes_reacts');
            return true;
        }

        //public page react
        public function addReact_PublicPage($data)
        {
            return $this->db->insert('publicpage_reacts', $data);
        }

        public function reactCount_PublicPage($publicNBPage_ID)
        {
            $this->db->where('publicNBPage_ID', $publicNBPage_ID);
            $count = $this->db->count_all_results('publicpage_reacts');
            
            $this->db->where('publicNBPage_ID', $publicNBPage_ID);
            $this->db->set('pageReact_Count', $count);
            $this->db->update('publicnb_pages');
        }

        public function checkReact_PublicPage($accountVisitor_ID, $publicNBPage_ID)
        {
            $this->db->where('accountVisitor_ID', $accountVisitor_ID);
            $this->db->where('publicNBPage_ID', $publicNBPage_ID);
            $query = $this->db->count_all_results('publicpage_reacts');
            
            if($query == 0)
            {
                return true;
            }
            else
            {
                return false;
            }
        }

        public function deleteReact_PublicPage($accountVisitor_ID, $publicNBPage_ID)
        {
            $this->db->where('accountVisitor_ID', $accountVisitor_ID);
            $this->db->where('publicNBPage_ID', $publicNBPage_ID);
            $this->db->delete('publicpage_reacts');
            return true;
        }
    }
?>