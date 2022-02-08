<?php
    defined('BASEPATH') or exit('No direct script access allowed');
    $target_directory = APPPATH.'/uploads/publicnotebook/';

    class PublicNotebook extends CI_Controller
    {
        public function __construct()
        {
            parent::__construct(); 
            $this->load->model('PublicNotebook_model');
            $this->load->model('UpdateProfile_model');
        }

        public function index() 
        {
            $publicNB_ID = $this->session->userdata('user_ID');
            $data['viewPublicNotebook']=$this->PublicNotebook_model->get_PublicNotebookInput($publicNB_ID);
            $data['navbar'] = 'main';
            $this->sitelayout->loadTemplate('pages/publicnotebook/withpicviewpublic', $data); 
        }

        public function createPublicNotebook() 
        {
            $data['navbar'] = 'main';
            $this->sitelayout->loadTemplate('pages/publicnotebook/createpublicnotebook', $data);         
        }

        public function do_upload($file, $page_ID)
        {
            $id = $this->session->userdata('user_ID');

            $config['upload_path'] = APPPATH.'/uploads/publicnotebook/';
            $config['allowed_types'] = 'gif|jpg|jpeg|png';
            $config['file_name'] = $id."_".$page_ID."_publicNotebookImage";
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
                header("Refresh:0; url =../publicnotebook"); 
            }
        }
        
        public function createPublicPage() 
        {
            $this->form_validation->set_rules('input', 'Input', 'max_length[300]');

            if($this->form_validation->run())
            {
                $id = $this->session->userdata('user_ID');
                $action = $this->input->post('action');
                $input = $this->input->post('input');
                $pageTheme = $this->input->post('theme');
                $pageReact_Count = 0;

                if($pageTheme == NULL)
                {
                    $pageTheme = 'Light';
                }          
            
                if($action == 'Submit')
                {
                    $this->PublicNotebook_model->createPublicPage($id, $input, $pageTheme, $pageReact_Count);
                    $this->PublicNotebook_model->pageCount($id);
                    $data = $this->PublicNotebook_model->get_PublicNotebookInput($id);

                    foreach($data->result() as $row)
                    {
                        if($input == $row->pageInput && $pageTheme == $row->pageTheme)
                        {
                            $page_ID = $row->publicNBPage_ID;

                            if(($_FILES['file']['name'] != ""))
                            {
                                $this->do_upload('file', $page_ID);
                            }
                        }
                    }
                    header("Refresh:0; url = ../publicnotebook");
                }
                else if($action == 'Back')
                {
                    $this->index();
                }
            }
            else
            {
                $data['navbar'] = 'main';
                $this->sitelayout->loadTemplate('pages/publicnotebook/createpublicnotebook', $data); 
            }
        }

        public function updatePublicNotebook()
        {
            $page_ID = $this->uri->segment(3);
            $data['viewPublicPage']=$this->PublicNotebook_model->get_PublicPage($page_ID);
            $data['navbar'] = 'main';
            $this->sitelayout->loadTemplate('pages/publicnotebook/updatepublicnotebook', $data); 
        }

        public function updatePublicPage()
        {
            $id = $this->session->userdata('user_ID');
            $page_ID = $this->input->post('page_ID');
            $action = $this->input->post('action');
            $pageTheme = $this->input->post('theme');

            $this->form_validation->set_rules('input', 'Input', 'max_length[300]');

            if($this->form_validation->run())
            {   
                if($action == 'Update')
                {
                    $pageInput = $this->input->post('input');
                    $this->PublicNotebook_model->updatePage($id, $page_ID, $pageTheme, $pageInput);
            
                    if(($_FILES['file']['name'] != ""))
                    {
                        $this->do_upload('file', $page_ID);
                    }
                    
                    $remove = $this->input->post('remove');

                    if($remove == 'Remove')
                        {
                            $this->removeImage($page_ID);
                            header("Refresh:0; url = ../publicnotebook");
                        }
                    header("Refresh:0; url = ../publicnotebook");
                }
                else if($action == 'Back')
                {
                    redirect('publicnotebook');
                }
                else if($action == 'YES')
                {  
                    $this->deletePublicPage();
                }
                else if($action == 'NO')
                {
                    header("Refresh:0; url = ../publicnotebook/updatepublicnotebook/$page_ID");
                }
            }
            else
            {
                $data['navbar'] = 'main';
                $data['pageID'] = $page_ID;
                $this->sitelayout->loadTemplate('pages/publicnotebook/updatepublicnotebookfd', $data); 
            }
        }

        public function deletePublicPage()
        {
            $id = $this->session->userdata('user_ID');
            $page_ID = $this->input->post('page_ID');
            $response = $this->PublicNotebook_model->deletePublicPage($id, $page_ID);

            if($response)
            {
                $this->removeImage($page_ID);
                redirect('publicnotebook');
            }
        }

        public function removeImage($page_ID)
        {
            $id = $this->session->userdata('user_ID');
            $filename = $id."_".$page_ID."_publicNotebookImage";
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

        public function searchpage()
        {
            $date = $this->input->post('date');
            $publicNB_ID = $this->session->userdata('user_ID');
            $data['viewPublicNotebook']=$this->PublicNotebook_model->getPageUsingDate($publicNB_ID, $date);
            
            $data['navbar'] = 'main';
            $this->sitelayout->loadTemplate('pages/publicnotebook/viewusingtimestamp', $data); 
        }
    }