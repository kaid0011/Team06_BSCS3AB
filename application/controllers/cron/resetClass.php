<?php

 class Resetclass extends CI_Controller 
 {
   //  function resetPage()
   //   {
   //      date_default_timezone_set("Asia/Manila");
   //      $currentTime = date("H:i s");

   //      $reset = "UPDATE privatenb_pages SET pageInput = 'This is my private page.', pageTheme = 'Light', pageTimer = '00:00:00' WHERE pageTimer BETWEEN '00:00:00' AND '$currentTime'";
   //      $this->query($reset);
   //   }

   public function index()
   {
      $this->load->model("PrivateNotebook_model");
      $this->PrivateNotebook_model->resetPage();
      echo "done";
   }
 }
