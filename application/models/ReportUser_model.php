<?php
    defined('BASEPATH') or exit('No direct script access allowed');

    class ReportUser_model extends CI_Model
    {
        public function __construct()
        {
            parent::__construct();
            $this->load->database();
        }

<<<<<<< HEAD
        public function IDsubmitReport($reportedpostid)
        {
            $this->db->where('stickyNotes_ID',$reportedpostid);
            $query = $this->db->get('sticky_notes');
            return $query;
        }
        public function submitReportModel($data)
=======
        public function getNoteData($reportedpostid)
        {
            $this->db->where('stickyNotes_ID', $reportedpostid);
            $query = $this->db->get('sticky_notes');
            return $query;
        }
        public function submitNoteReport($data)
>>>>>>> f28bcf6f08cc6585ed5faf18663703561385777f
        {
            $this->db->insert('report',$data);
            return true;
        }
<<<<<<< HEAD
=======

        public function getPublicNBData($reportedPageID)
        {
            $this->db->where('publicNBPage_ID', $reportedPageID);
            $query = $this->db->get('publicnb_pages');
            return $query;
        }
        public function submitPublicNBReport($data)
        {
            $this->db->insert('report',$data);
            return true;
        }

        
>>>>>>> f28bcf6f08cc6585ed5faf18663703561385777f
    }
?>