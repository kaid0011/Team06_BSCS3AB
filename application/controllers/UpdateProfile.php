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

            $data['navbar'] = 'main';
            $this->sitelayout->loadTemplate('pages/navbar/updateprofile', $data); 
        }

        public function deactivateaccount() 
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

                $this->form_validation->set_rules('oldPassword', 'Old Password', 'required|trim');
                $this->form_validation->set_rules('newPassword', 'New Password', 'required|trim');
                $this->form_validation->set_rules('confirmPassword', 'Confirm Password', 'required|matches[newPassword]');    #checks if confirm_password matches password

               
                if($this->form_validation->run())   #If no error,
                {
                    
                    $originPass = $this->session->userdata('password');
                    $oldPass = md5($this->input->post('oldPassword'));
                    $newPass = md5($this->input->post('newPassword'));
                    
                        if($originPass == $oldPass)
                        {   
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
                            echo("Wrong Old Password");
                            $data['navbar'] = 'main';
                            $this->sitelayout->loadTemplate('pages/navbar/updatepassword', $data); 
                        }
                }
                else
                {
                    echo("Incorrect Password");
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
            $id = $this->session->userdata('user_ID');
            $action = $this->input->post('action');
            $link = mysqli_connect("localhost", "root", "team6", "virtual_diary");
            $sql = "DELETE FROM user WHERE user_ID=$id";

            if (mysqli_query($link, $sql)) 
            {
                echo "Record deleted successfully";
                $this->session->sess_destroy();
            } 
            else 
            {
                echo "Error deleting record";
            }

                $data['navbar'] = 'home';
                $this->sitelayout->loadTemplate('pages/home/home', $data);   
        }

        public function updatedprofile()
        {
  
            $id = $this->session->userdata('user_ID');
            $action = $this->input->post('action');
            
            if($action == 'Update')
            {
                $this->form_validation->set_rules('userName', 'Username', 'required|trim|min_length[3]|max_length[12]|is_unique[user.userName]',
                array(
                    'is_unique'     => 'This %s already exists.'    #custom error message for is_unique in userName
                ));
                $this->form_validation->set_rules('displayName', 'Display Name', 'required|trim');
                $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email|is_unique[user.email]',
                array(
                    'is_unique'     => 'This %s already exists.'    #custom error message for is_unique in email
                ));

            
                if($this->form_validation->run())   #If no error,
                {
                    $data['navbar'] = 'maim';
                    $this->sitelayout->loadTemplate('pages/registration/verification', $data); 

                    $userName = $this->input->post('userName'); //userName
                    $displayName = $this->input->post('displayName'); //displayName
                    $emailAdd = $this->input->post('email'); //emailAddress
                    $this->UpdateProfile_model->updateProfile($userName, $displayName, $emailAdd, $id);
    
                    $userdata = array(
                        'userName' => $this->input->post('userName'),
                        'displayName' => $this->input->post('displayName'),
                        'email' => $this->input->post('email'),
                        'password' => $this->session->userdata('password')
                    );
                    
                    $this->session->set_userdata($userdata);
                    
                    $this->index();
                }
                else    #If there is error,
                {
                    $data['navbar'] = 'main';
                    $this->sitelayout->loadTemplate('pages/navbar/updateprofile', $data);                         #load registration page again with error messages.
                }
               
            }
            else if($action == 'Change Password')
            {
                $data['navbar'] = 'main';
                $this->sitelayout->loadTemplate('pages/navbar/updatepassword', $data); 
            }
            else
            {  
                $this->deleteaccount();
            }
  
        }
    }

?>