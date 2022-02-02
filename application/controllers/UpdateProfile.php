<?php
    defined('BASEPATH') or exit('No direct script access allowed');
    
    $target_directory = APPPATH.'/uploads/profile/';
    class UpdateProfile extends CI_Controller
    {

        public function __construct()
        {
            parent::__construct(); 
            $this->load->model('UpdateProfile_model');  
            $this->load->library('form_validation');
        }

        public function index() 
        {
            $data['navbar'] = 'main';
            $this->sitelayout->loadTemplate('pages/navbar/updateprofile', $data); 
        }
        
        public function updatepassword() 
        {
            $id = $this->session->userdata('user_ID');
            $action = $this->input->post('action');
            
            if($action == 'Update')
            {
                $originPass = $this->session->userdata('password');
                $this->form_validation->set_rules('oldPassword', 'Old Password', 'required|trim');
                $this->form_validation->set_rules('newPassword', 'New Password', 'required|trim');
                $this->form_validation->set_rules('confirmPassword', 'Confirm Password', 'required|matches[newPassword]');    #checks if confirm_password matches password
                $oldPass = md5($this->input->post('oldPassword'));

                if($originPass == $oldPass)
                {
                    if($this->form_validation->run())
                    {
                        $newPass = md5($this->input->post('newPassword'));
                        $this->UpdateProfile_model->updatePassword($newPass, $id);
                        echo("Password changed successfully");

                        $userdata = array(
                                'userName' => $this->session->userdata('userName'),
                                'displayName' => $this->session->userdata('displayName'),
                                'email' => $this->session->userdata('email'),
                                'password' => $newPass
                            );
                
                        $this->session->set_userdata($userdata);
                        $data['navbar'] = 'main';
                        $this->sitelayout->loadTemplate('pages/navbar/updatepassword', $data); 
                    }
                    else 
                    {
                        $data['navbar'] = 'main';
                        $this->sitelayout->loadTemplate('pages/navbar/updatepassword', $data);
                    }
                }
                else
                {
                        $this->session->set_flashdata('message', 'Invalid Password');
                        $data['navbar'] = 'main';
                        $this->sitelayout->loadTemplate('pages/navbar/updatepassword', $data);
                }
             }
            else
            {
                $data['navbar'] = 'main';
                $this->sitelayout->loadTemplate('pages/navbar/updateprofile', $data); 
            }

        }

        public function deleteaccount()
        {
            $action = $this->input->post('action');

            if($action == "YES")
            {
                $id = $this->session->userdata('user_ID');
                $link = mysqli_connect("localhost", "root", "team6", "virtual_diary");
                $sql = "DELETE FROM user WHERE user_ID=$id";

                if (mysqli_query($link, $sql)) 
                {
                    $this->session->sess_destroy();
                    $data['navbar'] = 'home';
                    $this->sitelayout->loadTemplate('pages/home/home', $data);   
                } 
                    
            }
            else
            {
                $data['navbar'] = 'main';
                $this->sitelayout->loadTemplate('pages/navbar/updateprofile', $data); 
            }
        }

        public function updatedprofile()
        {
  
            $action = $this->input->post('action');

            if($action == 'Change Password')
            {
                $data['navbar'] = 'main';
                $this->sitelayout->loadTemplate('pages/navbar/updatepassword', $data); 
            }
            else if($action == 'Deactivate Account')
            {  
                $data['navbar'] = 'main';
                $this->sitelayout->loadTemplate('pages/navbar/deactivateaccount', $data); 
            }
  
        }

        public function updateusername()
        {
            $this->form_validation->set_rules('userName', 'Username', 'trim|required|min_length[3]|max_length[12]|is_unique[user.userName]',
                array(
                    'is_unique'     => 'This %s already exists.'    #custom error message for is_unique in userName
                ));
            if($this->form_validation->run())
            {
                $id = $this->session->userdata('user_ID');
                $userName = $this->input->post('userName');
                $this->UpdateProfile_model->updateUsername($userName, $id);
                $userdata = array(
                    'userName' => $this->input->post('userName'),
                    'displayName' => $this->session->userdata('displayName'),
                    'email' => $this->session->userdata('email'),
                    'password' => $this->session->userdata('password')
                );

                $this->session->set_userdata($userdata); 
                $this->index();

            }
            else
            {
                $data['navbar'] = 'main';
                $this->sitelayout->loadTemplate('pages/navbar/updateprofile', $data);   
            }
        }

        public function updatedisplayname()
        {
            $this->form_validation->set_rules('displayName', 'Display Name', 'trim|required|min_length[3]');

            if($this->form_validation->run())
            {
                $id = $this->session->userdata('user_ID');
                $displayName = $this->input->post('displayName');
                $this->UpdateProfile_model->updateDisplayname($displayName, $id);
                $userdata = array(
                    'userName' => $this->session->userdata('userName'),
                    'displayName' => $this->input->post('displayName') ,
                    'email' => $this->session->userdata('email'),
                    'password' => $this->session->userdata('password')
                );

                $this->session->set_userdata($userdata); 
                $this->index();
            }
            else
            {
                $data['navbar'] = 'main';
                $this->sitelayout->loadTemplate('pages/navbar/updateprofile', $data);   
            }
        }

        public function updateemail()
        {
            $this->form_validation->set_rules('email', 'Email', 'trim|min_length[8]|valid_email|is_unique[user.email]',
                array(
                    'is_unique'     => 'This %s already exists.'    #custom error message for is_unique in email
                ));
            if($this->form_validation->run())
            {
                $id = $this->session->userdata('user_ID');
                $verification_key = random_string('numeric', 6); 
                $this->UpdateProfile_model->updateVerificationKey($verification_key, $id);
                $userdata = array(
                    'userName' => $this->session->userdata('userName'),
                    'displayName' => $this->session->userdata('displayName') ,
                    'email' => $this->input->post('email'),
                    'password' => $this->session->userdata('password')
                );

                $this->session->set_userdata($userdata); 
                $data['navbar'] = 'main';
                $this->sitelayout->loadTemplate('pages/navbar/updateverification', $data); 
            }
            else
            {
                $data['navbar'] = 'main';
                $this->sitelayout->loadTemplate('pages/navbar/updateprofile', $data);                         
            }
        }

        public function updateverification()
        {
            $action = $this->input->post('action');

            if($action == 'Resend') {
                $this->resendCode();
            }
            else if($action == "Verify") {
                $this->form_validation->set_rules('ver_code', 'Verification Code', 'required');

                if($this->form_validation->run())
                {
                    $this->verifyEmail();
                }
                else
                {
                    $data['navbar'] = 'main';
                    $this->sitelayout->loadTemplate('pages/navbar/updateverification', $data); 
                }
            }
            else {

                $id = $this->session->userdata('user_ID');
                $query = $this->UpdateProfile_model->get_Email($id);

                foreach($query->result() as $row)
                {
                    $query = $row->email;
                }

                $userdata = array(
                    'userName' => $this->session->userdata('userName'),
                    'displayName' => $this->session->userdata('displayName') ,
                    'email' => $query,
                    'password' => $this->session->userdata('password')
                );

                $this->session->set_userdata($userdata); 
                $data['navbar'] = 'main';
                $this->sitelayout->loadTemplate('pages/navbar/updateprofile', $data); 
            }
        }

        public function verifyEmail()
        {
            $verification_Key = $this->input->post('ver_code');
            $username = $this->session->userdata('userName');
            $response = $this->UpdateProfile_model->verify($verification_Key, $username);
           
            if($response)
            {
                $id = $this->session->userdata('user_ID');
                $email = $this->session->userdata('email');
                $this->UpdateProfile_model->updateEmail($email, $id);
        
                $userdata = array(
                    'userName' => $response->userName,
                    'displayName' => $response->displayName,
                    'email' => $this->session->userdata('email'),
                    'password' => $response->password
                );
                        
                $this->session->set_userdata($userdata); 
                $this->index();
            }
            else
            {
                $this->session->set_flashdata('message', 'Invalid Code');
                $userdata = array(
                    'userName' => $response->userName,
                    'displayName' => $response->displayName,
                    'email' => $response->email,
                    'password' => $response->password
                );

                $this->session->set_userdata($userdata); 
                $data['navbar'] = 'main';
                $this->sitelayout->loadTemplate('pages/navbar/updateverification', $data); 
            }
        }


        public function resendCode()
        {
            $verification_key = random_string('numeric', 6);
            $userName = $this->session->userdata('userName');
            $response = $this->UpdateProfile_model->resendCode($verification_key, $userName);
            if($response)
            {
                $this->session->set_userdata('verification_Key', $verification_key);
                $this->resendEmail();
            }
        }

        public function resendEmail()
        {
            $key = $this->session->userdata('verification_Key');
            $name = $this->session->userdata('userName');
            $subject = "Verify your email";
            $message = "
            Heads up! You recently tried to update your account settings! Use the code below in order to verify it's you to accept the changes.

            ".$key."

            If this attempt wasn't made by you, please log-in immedietly and change your password to secure your account.
            ";
            $to = $this->session->userdata('email');

            $config = array(
                'protocol'  => 'smtp',
                'smtp_host' => 'ssl://smtp.googlemail.com',
                'smtp_port' => 465,
                'smtp_user' => 'Team6.VirtualDiary2022@gmail.com',
                'smtp_pass' => 'team6@3ab',
                'mailtype'  => 'html', 
                'charset'   => 'iso-8859-1'
            );
            
            $this->load->library('email');
            $this->email->initialize($config);
            $this->email->set_newline("\r\n");
            $this->email->from('Team6.VirtualDiary2022@gmail.com', 'Virtual Diary');
            $this->email->to($to);
            $this->email->subject($subject);
            $this->email->message($message);
            $send = $this->email->send();

            if($send)
            {
                $data['navbar'] = 'main';
                $this->sitelayout->loadTemplate('pages/navbar/updateverification', $data); 
            }
        }

        public function image()
        {
            $action = $this->input->post('action');

            if($action == 'Update Image')
            {
                $id = $this->session->userdata('user_ID');

                if(($_FILES['file']['name'] != ""))
                {
                    $file = $_FILES['file']['name'];
                    $path = pathinfo($file);
                    $filename = $id."_profileImage";
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
                            $filename = $id."_profileImage";
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
                        header("Refresh:0; url =../updateprofile");
                    }
                    else
                    {
                        echo("Error uploading image.");
                        $this->index();
                    }
                    header("Refresh:0; url =../updateprofile");
                }
            }
            else
            {
                $this->removeImage();
            }
            header("Refresh:0; url =../updateprofile");
        }

        public function removeImage()
        {
            $id = $this->session->userdata('user_ID');
            $filename = $id."_profileImage";
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
            header("Refresh:0; url =../updateprofile");
        }
    }