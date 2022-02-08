<?php
    defined('BASEPATH') or exit('No direct script access allowed');
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
            $id = $this->session->userdata('user_ID');
            if($id == '1')
            {
                $data['navbar'] = 'admin';
                $this->sitelayout->loadTemplate('pages/navbar/updateprofile', $data); 
            }
            else
            {
                $data['navbar'] = 'main';
                $this->sitelayout->loadTemplate('pages/navbar/updateprofile', $data); 
            }
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
                $oldPass = hash("sha512", $this->input->post('oldPassword'));

                if($originPass == $oldPass)
                {
                    if($this->form_validation->run())
                    {
                        $newPass = hash("sha512", $this->input->post('newPassword'));
                        $this->UpdateProfile_model->updatePassword($newPass, $id);
                        
                        echo '<script language="javascript">';
                        echo 'alert("Password successfully changed.")';
                        echo '</script>';

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

                $this->UpdateProfile_model->deleteUser($id);

                    $this->session->sess_destroy();
                    redirect('/');   
                
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

                echo '<script language="javascript">';
                echo 'alert("Username successfully changed.")';
                echo '</script>';

                $this->session->set_userdata($userdata); 

                header("Refresh:0; url =../updateprofile"); 

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
            $this->form_validation->set_rules('email', 'E-mail', 'trim|required|min_length[8]|valid_email|is_unique[user.email]',
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
                $this->resendCode();
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
            $subject = "Verify your email";
            $message = '
            <h4 align="center">Heads up! You recently tried to update your account settings! Use the code below in order to verify it is you to accept the changes.</h4>

            <h1 align="center">'.$key.'</h1>
            
            <h4 align="center">If this attempt was not made by you, please log-in immedietly and change your password to secure your account.</h4>
            ';
            $to = $this->session->userdata('email');
            
            $this->load->library('email');
            $this->email->initialize($this->config->item('email'));
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

        public function do_upload()
        {
            $id = $this->session->userdata('user_ID');
            $action = $this->input->post('action');
            
            if($action == 'Update Image')
            {

                $config['upload_path'] = APPPATH.'/uploads/profile/';
                $config['allowed_types'] = 'gif|jpg|jpeg|png';
                $config['file_name'] = $id.'_profileImage';
                $config['max_size'] = 10240;
                $config['overwrite'] = TRUE;

                $this->load->library('upload', $config);

                if( ! $this->upload->do_upload('userfile'))
                {
                    echo '<script language="javascript">';
                    echo 'alert("Error Uploading")';
                    echo '</script>';
                }
                else
                {
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
            $target_directory = APPPATH.'/uploads/profile/';
            $filename = $id."_profileImage";
            $extension = ".jpg";
            $path_filename_ext = $target_directory.$filename.$extension;

            if(file_exists($path_filename_ext))
            {
                $extension = ".jpg";
                unlink($path_filename_ext);
            }
            else
            {
                $extension = ".jpeg";
                $path_filename_ext = $target_directory.$filename.$extension;
                if(file_exists($path_filename_ext))
                {
                            
                    $extension = ".jpeg";
                    unlink($path_filename_ext);
                }
                else
                {
                    $extension = ".png";
                    $path_filename_ext = $target_directory.$filename.$extension;
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

?>
