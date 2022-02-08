<?php
    defined('BASEPATH') or exit('No direct script access allowed');

    class ReportUser extends CI_Controller
    {
        public function __construct()
        {
            parent::__construct(); 
            $this->load->model('ReportUser_model');
            $this->load->model('UpdateProfile_model');
        }

        public function index() 
        {
            $data['navbar'] = 'main';
            $this->sitelayout->loadTemplate('pages/reportuser/reportuser', $data); 
        }

        public function getNoteData()
        {
            $action = $this->input->post('action');
            $reportedpostid = $this->input->post('post_ID'); // ID of the post being reported

            if($action == 'Report')
            {
                $data['notesdata']= $this->ReportUser_model->getNoteData($reportedpostid);
                $data['navbar'] = 'main';
                $this->sitelayout->loadTemplate('pages/reportuser/reportUserStickyNotes', $data); 
            }
        }

        public function submitNoteReport()
        {
            $reporterid =  $this->session->userdata('user_ID'); //  ID of the reporter
            $reporteduserid = $this->input->post('reporteduser_ID'); // ID of the user being reported
            $reportedpostid = $this->input->post('post_ID'); // ID of the post being reported
            $reportCategory = $this->input->post('category');
            $reportDetails = $this->input->post('details');
            $reportStatus = "For Review";
            $action = $this->input->post('action'); 
       
            if ($action == 'Submit')
            {
                $type = "Sticky Notes";
                $data = array( 
                    'user_ID' => $reporterid, 
                    'reportedUser_ID' => $reporteduserid,
                    'reported_ID' => $reportedpostid,
                    'type' => $type,
                    'reportCategory' => $reportCategory,
                    'reportDetails' => $reportDetails,
                    'reportStatus' => $reportStatus
                );

                $response = $this->ReportUser_model->submitNoteReport($data);
                if($response)
                {
                    redirect('stickynoteswall');
                }
            }
        }

        public function getPublicNBData()
        {
            $action = $this->input->post('action');
            $reportedPageID = $this->input->post('page_ID'); // ID of the post being reported

            if($action == 'Report')
            {
                $data['publicnbdata']= $this->ReportUser_model->getPublicNBData($reportedPageID);
                $data['navbar'] = 'main';
                $this->sitelayout->loadTemplate('pages/reportuser/reportUserPublicNB', $data); 
            }
        }

        public function submitPublicNBReport()
        {
            $reporterid =  $this->session->userdata('user_ID'); //  ID of the reporter
            $reporteduserid = $this->input->post('reporteduser_ID'); // ID of the user being reported
            $reportedpostid = $this->input->post('page_ID'); // ID of the post being reported
            $reportCategory = $this->input->post('category');
            $reportDetails = $this->input->post('details');
            $reportStatus = "For Review";
            $action = $this->input->post('action'); 

            if ($action == 'Submit')
            {
                $type = "Public Notebook";
                $data = array( 
                    'user_ID' => $reporterid, 
                    'reportedUser_ID' => $reporteduserid,
                    'reported_ID' => $reportedpostid,
                    'type' => $type,
                    'reportCategory' => $reportCategory,
                    'reportDetails' => $reportDetails,
                    'reportStatus' => $reportStatus
                );

                $response = $this->ReportUser_model->submitPublicNBReport($data);
                
                if($response)
                {
                    redirect('mainpage');
                }
            }
        }

        public function termsofservice() {
            $data['navbar'] = 'main';
            $this->sitelayout->loadTemplate('pages/registration/termsofservice', $data); 
        }
        
        public function privacypolicy() {
            $data['navbar'] = 'main';
            $this->sitelayout->loadTemplate('pages/registration/privacypolicy', $data); 
        }
    }