<?php
    defined('BASEPATH') or exit('No direct script access allowed');
    $target_directory = "C:/xampp/htdocs/Team06_BSCS3AB/assets/images/privatenotebook/";

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

        public function updateprivatepage()
        {
            $id = $this->session->userdata('user_ID');
            $action = $this->input->post('action');
            $pageTheme = $this->input->post('theme');
            
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

                if($_FILES['file']['name'] != "")
                {
                    $file = $_FILES['file']['name'];
                    $path = pathinfo($file);
                    $filename = $id."_privateNotebookImage";
                    $ext = $path['extension'];

                    if($ext == "jpg" || $ext == "jpeg" || $ext == "png")
                    {
                        $temp_name = $_FILES['file']['tmp_name'];
                        $path_filename_ext = $GLOBALS['target_directory'].$filename.".".$ext;

                        if(file_exists($path_filename_ext))
                        {
                            unlink($path_filename_ext);
                            $file = $_FILES['file']['name'];
                            $path = pathinfo($file);
                            $filename = $id."_privateNotebookImage";
                            $ext = $path['extension'];
                            $temp_name = $_FILES['file']['tmp_name'];
                            $path_filename_ext = $GLOBALS['target_directory'].$filename.".".$ext;
                            move_uploaded_file($temp_name, $path_filename_ext);
                        }
                        else
                        {
                            $ext = "jpg";
                            $path_filename_ext = $GLOBALS['target_directory'].$filename.".".$ext;
                            if(file_exists($path_filename_ext))
                            {
                                unlink($path_filename_ext);
                            }
                            else
                            {
                                $ext = "jpeg";
                                $path_filename_ext = $GLOBALS['target_directory'].$filename.".".$ext;
                                if(file_exists($path_filename_ext))
                                {
                                    unlink($path_filename_ext);
                                }
                                else
                                {
                                    $ext = "png";
                                    $path_filename_ext = $GLOBALS['target_directory'].$filename.".".$ext;
                                    if(file_exists($path_filename_ext))
                                    {
                                        unlink($path_filename_ext);
                                    }
                                }
                            }
                            move_uploaded_file($temp_name, $path_filename_ext);
                        }
                        
    
                    }
                    else
                    {
                        echo("Error uploading image.");
                        $this->index();
                    }
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
            else if($action == 'Delete')
            {  
                $this->PrivateNotebook_model->updatePage("00:00:00", "Light", NULL, $id);
                $this->index();
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
?>