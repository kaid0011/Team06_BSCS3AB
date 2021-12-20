<?php
    defined('BASEPATH') or exit('No direct script access allowed');

    class reportuser extends CI_Controller
    {

        public function __construct()
        {
            parent::__construct(); 
            $this->load->model('ReportUser_model');
        }

        public function index() 
        {
            $data['navbar'] = 'main';
            $this->sitelayout->loadTemplate('pages/reportuser/reportuser', $data); 
        }

        public function reportuserwall() 
        {
            $data['navbar'] = 'main';
            $this->sitelayout->loadTemplate('pages/reportuser/reportuserwall', $data); 
        }
        public function viewindividualreport() 
        {
            $data['navbar'] = 'main';
            $this->sitelayout->loadTemplate('pages/reportuser/viewindividualreport', $data); 
        }
        public function updateindivreport() 
        {
            $data['navbar'] = 'main';
            $this->sitelayout->loadTemplate('pages/reportuser/updateindivreport', $data); 
        }
        
        public function detailedreport() 
        {
            $data['navbar'] = 'main';
            $this->sitelayout->loadTemplate('pages/reportuser/detailedreport', $data); 
        }
        public function support() 
        {
            $data['navbar'] = 'main';
            $this->sitelayout->loadTemplate('pages/reportuser/support', $data); 
        }
        
        public function termsofservices() 
        {
            $data['navbar'] = 'main';
            $this->sitelayout->loadTemplate('pages/reportuser/termsofservices', $data); 
        }
        public function privacypolicy() 
        {
            $data['navbar'] = 'main';
            $this->sitelayout->loadTemplate('pages/reportuser/privacypolicy', $data); 
        }
        
        /////////////////////////////////////////////////////////

        public function IDsubmitReport()
        {
            //// we left off here--- you said about the action button in view sticky notes..
            
            $reportedpostid = $this->input->post('post_ID'); // ID of the post being reported
            echo $reportedpostid;
            exit;
            $data['notesdata']= $this->ReportUser_model->IDsubmitReport($reportedpostid);
            $data['navbar'] = 'main';
            $this->sitelayout->loadTemplate('pages/reportuser/reportuser', $data); 
        }

        public function submitReport()
        {
            
            $reporterid =  $this->session->userdata('user_ID'); //  ID of the reporter
            $reporteduserid = $this->input->post('reporteduser_ID'); // ID of the user being reported
            $reportedpostid = $this->input->post('post_ID'); // ID of the post being reported
            $reportCategory = $this->input->post('category');
            $reportDetails = $this->input->post('details');
            $reportStatus = "For Review";
            $action = $this->input->post('action'); 

            // * Code to differentiate if this came from a sticky note or Public Notebook button of report *//
            // This basically requires a different view for each (so 2 views) with the same identical UI
            // on difference is the internal Value of the button so the if else will trigger.
            // As of now, this only works for the sticky note report button (since there's no seperate report view for PublicNB)
            
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
                    'reportStatus' => $reportStatus);

                $this->ReportUser_model->submitReportModel($data);
                $this->index();
            }
            else if ($action == 'PublicNB_Submit')
            {
                $type = "Public Notebook";
                $data = array( 
                    'user_ID' => $reporterid, 
                    'reportedUser_ID' => $reporteduserid,
                    'reported_ID' => $reportedpostid,
                    'type' => $type,
                    'reportCategory' => $reportCategory,
                    'reportDetails' => $reportDetails,
                    'reportStatus' => $reportStatus);

                $this->ReportUser_model->submitReportModel($data);
                $this->index();
            } else if ($action == 'Back')
            {$this->index();}
        }
    }

?>