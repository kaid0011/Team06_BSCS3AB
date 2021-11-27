<?php
    class Pages extends CI_Controller{
        public function view($page = 'home'){
            #check if home.php doesn't exist, if true show 404 error page
            #else load home.php 
            if(!file_exists(APPPATH.'views/pages/'.$page.'.php')){
                show_404();
            }
            #$data['title'] = ucfirst($page);
            
            switch($page) {
                case 'home':
                    $data['navbar'] = 'home';
                    break;
                case 'registration':
                case 'verification':
                    $data['navbar'] = 'registration';
                    break;
                case 'login':
                case 'forgotpassword':
                case 'changepassword':
                case 'confirmation':
                    $data['navbar'] = 'login';
                    break;
                case 'mainpage':
                case 'privatenotebook':
                case 'visitedprofile':
                default:
                    $data['navbar'] = 'main';
            }
           
            $this->sitelayout->loadTemplate('pages/'.$page, $data);
         }
    }
