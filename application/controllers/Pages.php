<?php
    class Pages extends CI_Controller{
        public function view($page = 'home'){
            #check if home.php doesn't exist, if true show 404 error page
            #else load home.php 
            if(!file_exists(APPPATH.'views/pages/'.$page.'.php')){
                show_404();
            }
            #$data['title'] = ucfirst($page);

            #$this->load->view('templates/header');
            $this->load->view('pages/'.$page);
            #$this->load->view('templates/footer');
         }
    }
?>