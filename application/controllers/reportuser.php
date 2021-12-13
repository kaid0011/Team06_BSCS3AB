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
        public function submitReport()
        {
            
            $reporterid =  $this->session->userdata('user_ID'); //  ID of the reporter
            $reporteduserid = 1; // ID of the user being reported
            
            $reportCategory = $this->input->post('category');
            $reportDetails = $this->input->post('details');
            $reportStatus = "For Review";
            $action = $this->input->post('action');
            
            $data = array( 
                'user_ID' => $reporterid, 
                'reportedUser_ID' => $reporteduserid,
                'reportCategory' => $reportCategory,
                'reportDetails' => $reportDetails,
                'reportStatus' => $reportStatus);

            if ($action == 'Submit')
            {
                $this->ReportUser_model->submitReportModel($data);
                $this->index();
            }
            else if ($action == 'Back')
            {$this->index();}
        }
    }

?>