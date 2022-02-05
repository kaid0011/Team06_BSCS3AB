<?php
    defined('BASEPATH') or exit('No direct script access allowed');
    $target_directory = APPPATH.'/uploads/privatenotebook/';

    class PrivateNotebook extends CI_Controller
    {
        public function __construct()
        {
            parent::__construct(); 
            $this->load->model('PrivateNotebook_model');  
            $this->load->model('UpdateProfile_model');
        }

        public function index() {

            $privateNB_ID = $this->session->userdata('user_ID');
            $data['viewPrivateNotebook']=$this->PrivateNotebook_model->get_PrivateNotebookInput($privateNB_ID);
            $data['navbar'] = 'main';
            $this->sitelayout->loadTemplate('pages/privatenotebook/withpicviewprivate', $data); 
        }

        public function updatePrivateNotebook()
        {
            $id = $this->session->userdata('user_ID');
            $data['viewPageNotebook']=$this->PrivateNotebook_model->get_PrivateNotebookInput($id);
            $data['navbar'] = 'main';
            $this->sitelayout->loadTemplate('pages/privatenotebook/updateprivatenotebook', $data); 
        }

        public function do_upload($file)
        {
            $id = $this->session->userdata('user_ID');

            $config['upload_path'] = APPPATH.'/uploads/privatenotebook/';
            $config['allowed_types'] = 'gif|jpg|jpeg|png';
            $config['file_name'] = $id.'_privateNotebookImage';
            $config['max_size'] = 10240;
            $config['overwrite'] = TRUE;

            $this->load->library('upload', $config);
            $this->upload->do_upload($file);

            if( ! $this->upload->do_upload($file))
            {
                echo '<script language="javascript">';
                echo 'alert("Error Uploading")';
                echo '</script>';
            }
            else
            {
                header("Refresh:0; url =../privatenotebook"); 
            }
        }

        public function updateprivatepage()
        {
            $id = $this->session->userdata('user_ID');
            $action = $this->input->post('action');
            $pageTheme = $this->input->post('theme');

            $this->form_validation->set_rules('input', 'Input', 'max_length[1000]');

            if($this->form_validation->run())
            {
                if($action == 'Update')
                {
                    $pageTimer = $this->input->post('appt'); //Timer

                    if($pageTimer == "00:00:00")
                    {
                        date_default_timezone_set("Asia/Manila");
                        $pageTimer = date("H:i s");
                    }
                    $pageTheme = $this->input->post('theme'); //Theme
                    $pageInput = $this->input->post('input'); //Input
                    $this->PrivateNotebook_model->updatePage($pageTimer,$pageTheme, $pageInput, $id);

                    if(($_FILES['file']['name'] != ""))
                    {
                        $this->do_upload('file');
                    }
                    
                    $remove = $this->input->post('remove');
                    if($remove == 'Remove')
                    {
                        $this->removeImage();
                    }
                    header("Refresh:0; url = ../privatenotebook");
                }
                else if($action == 'Back')
                {
                    $this->index();
                    header("Refresh:0; url = ../privatenotebook");
                }
                else if($action == 'YES')
                {  
                    $this->PrivateNotebook_model->updatePage("00:00:00", "Light", NULL, $id);
                    $this->removeImage();
                    $this->index();
                    header("Refresh:0; url = ../privatenotebook");
                }
            }
            else
            {
                $id = $this->session->userdata('user_ID');
                $data['viewPageNotebook']=$this->PrivateNotebook_model->get_PrivateNotebookInput($id);
                $data['navbar'] = 'main';
                $this->sitelayout->loadTemplate('pages/privatenotebook/updateprivatenotebookfd', $data);  
            }
        }

        public function removeImage()
        {
            $id = $this->session->userdata('user_ID');
            $filename = $id."_privateNotebookImage";
            $extension = ".jpg";
            $path_filename_ext = $GLOBALS['target_directory'].$filename.$extension;

            if(file_exists($path_filename_ext))
            {
                $extension = ".jpg";
                unlink($path_filename_ext);
            }
            else
            {
                $extension = ".jpeg";
                $path_filename_ext = $GLOBALS['target_directory'].$filename.$extension;
                if(file_exists($path_filename_ext))
                {
                            
                    $extension = ".jpeg";
                    unlink($path_filename_ext);
                }
                else
                {
                    $extension = ".png";
                    $path_filename_ext = $GLOBALS['target_directory'].$filename.$extension;
                    
                    if(file_exists($path_filename_ext))
                    {
                        $extension = ".png";
                        unlink($path_filename_ext);
                        
                    }
                }
            }
        }
    }