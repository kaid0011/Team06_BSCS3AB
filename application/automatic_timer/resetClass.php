<?php
 include_once 'db_connectionClass.php';

 class resetClass extends dbConnectionClass 
 {
    function resetPage()
     {
        date_default_timezone_set("Asia/Manila");
        $currentTime = date("H:i s");

        $reset = "UPDATE privatenb_pages SET pageInput = 'This is my private page.', pageTheme = 'Light', pageTimer = '00:00:00' WHERE pageTimer BETWEEN '00:00:00' AND '$currentTime'";
        $this->query($reset);
     }
 }
?>