<?php
    defined('BASEPATH') or exit('No direct script access allowed');

    class ReportUser_model extends CI_Model
    {
        public function __construct()
        {
            parent::__construct();
            $this->load->database();
        }

        public function IDsubmitReport($reportedpostid)
        {
            $this->db->where('stickyNotes_ID',$reportedpostid);
            $query = $this->db->get('sticky_notes');
            return $query;
        }
        public function submitReportModel($data)
        {
            $this->db->insert('report',$data);
            return true;
        }
    }
?>