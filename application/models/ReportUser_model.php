<?php
    defined('BASEPATH') or exit('No direct script access allowed');

    class ReportUser_model extends CI_Model
    {
        public function __construct()
        {
            parent::__construct();
            $this->load->database();
        }

        public function submitReportModel($data)
        {
            $this->db->insert('report',$data);
            return true;
        }


    }
?>