<?php
    defined('BASEPATH') OR exit('No direct script access allowed');
    
    class SupportTeam extends CI_Controller
    {
        public function __construct()
        {
            parent::__construct();
            
            $this->load->model('SupportTeam_model');
        }

        public function index()
        {
            $data['navbar'] = 'main';
            $this->sitelayout->loadTemplate('pages/supportteam/AdminMainpage', $data);
        }

        public function reportUserWall()
        {
            $data['viewAllReports'] = $this->SupportTeam_model->viewAllReports();

            $data['navbar'] = 'main';
            $this->sitelayout->loadTemplate('pages/supportteam/reportuserwall', $data);
        }

        public function updateIndivReport()
        {
            $action = $this->input->post('action');
            $report_ID = $this->input->post('report_ID');
            $reportedUser_ID = $this->input->post('reportedUser_ID');

            if($action == 'View Report')
            {
                $data['viewIndivReport'] = $this->SupportTeam_model->viewIndivReport($report_ID);
                $data['getReportedUserData'] = $this->SupportTeam_model->getReportedUserData($reportedUser_ID);
                $data['viewAllReports'] = $this->SupportTeam_model->viewAllReports();

                $data['navbar'] = 'main';
                $this->sitelayout->loadTemplate('pages/supportteam/updateindivreport', $data);
            }
        }

        public function updateReport()
        {
            $action = $this->input->post('action');
            $report_ID = $this->input->post('report_ID');
            $reportedUser_ID = $this->input->post('reportedUser_ID');
            $userStatus = $this->input->post('userStatus');
            $reportStatus = $this->input->post('reportStatus');
            $comment = $this->input->post('comment');
            
            if($action == 'Update')
            {
                $response = $this->SupportTeam_model->updateReport($report_ID, $reportedUser_ID, $userStatus, $reportStatus, $comment);
                if($response)
                {
                    $this->reportUserWall();
                }
            }
            else if($action == 'Delete')
            {
                $response = $this->SupportTeam_model->deleteReport($report_ID);
                if($response)
                {
                    $this->reportUserWall();
                }
            }
        }

    }
?>