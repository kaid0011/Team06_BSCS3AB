<?php
    class SupportTeam_model extends CI_Model
    {
        public function __construct()
        {
            parent::__construct();
        }

        public function viewAllReports()
        {
            $query = $this->db->get('report');
            return $query;
        }

        public function findReport($reportedUser_ID)
        {
            $this->db->where('reportedUser_ID', $reportedUser_ID);
            $reportedID = $this->db->get('report');
            return $reportedID;
        }

        public function viewIndivReport($report_ID)
        {
            $this->db->where('report_ID', $report_ID);
            $report = $this->db->get('report');
            return $report;
        }

        public function viewAllUserReports($reportedUser_ID)
        {
            $this->db->where('reportedUser_ID', $reportedUser_ID);
            $reports = $this->db->get('report');
            return $reports;
        }

        public function getReportedUserData($reportedUser_ID)
        {
            $this->db->where('user_ID', $reportedUser_ID);
            $reported = $this->db->get('user');
            return $reported;
        }

        public function updateReport($report_ID, $reportedUser_ID, $userStatus, $reportStatus, $comment)
        {
            $this->db->where('report_ID', $report_ID);
            $this->db->set('reportStatus', $reportStatus);
            $this->db->set('staff_Comment', $comment);
            $this->db->update('report');

            $this->db->where('user_ID', $reportedUser_ID);
            $this->db->set('status', $userStatus);
            $this->db->update('user');

            return true;
        }

        public function deleteReport($report_ID)
        {
            $this->db->where('report_ID', $report_ID);
            $this->db->delete('report');
            return true;
        }
    }
?>