<section id="learn" class="p-5" style="min-height: 75vh;">
  <div class="container my-5">
    <div class="card-3d-wrap mx-auto">
      <div class="card-front" id="card" >
        <div class="d-flex p-5">
          <div class="section ">
            <?php
                  foreach($viewPageNotebook->result() as $row)
                  { 
                    $theme = $row->pageTheme;
                        if ($theme == "Dark") 
                        {
                          $themecolor = '#495057';
                          $themecardcolor = '#f8f9fa';
                          $themecardbgcolor = '#212529';
                          $fontcolor = '#f8f9fa';
                        } 
                        else if ($theme == "Light") 
                        {
                          $themecolor = '#e9ecef';
                          $themecardcolor = '#212529';
                          $themecardbgcolor = '#adb5bd';
                          $fontcolor = '#212529';
                        } 
                        else if ($theme == "Apple") 
                        {
                          $themeurl = "assets/images/themes/Theme1_Apple.jpg";
                          $themecolor = "transparent";
                          $themecardcolor = '#212529';
                          $themecardbgurl = 'assets/images/themes/Applecard.jpg';
                          $fontcolor = '#212529';
                        } 
                        else if ($theme == "Orange") 
                        {
                          $themeurl = "assets/images/themes/Theme2_Orange.jpg";
                          $themecolor = "transparent";
                          $themecardcolor = '#212529';
                          $themecardbgurl = 'assets/images/themes/Orangecard.jpg';
                          $fontcolor = '#212529';
                        } 
                        else if ($theme == "Kiwi") 
                        {
                          $themeurl = "assets/images/themes/Theme3_Kiwi.jpg";
                          $themecolor = "transparent";
                          $themecardcolor = '#212529';
                          $themecardbgurl = 'assets/images/themes/Kiwicard.jpg';
                          $fontcolor = '#212529';
                        }
                  }
            ?>
            <div class="row">
              <div class="col mr-auto  h5">
                <div class="mb-2">Theme</div>

                <form method="post" id ="updateform" action="<?=base_url('privatenotebook/updatedprivatepage')?>">
                <div class="row">
               
                 
                  <!-- Light Theme Button -->
                  <div class="col">
                    <input type="button" onclick="changeColor('#e9ecef', '#adb5bd', '#212529', 'Light' );" value ="Light" class="p-2 btn"></input>

                    <!-- <button class="p-2 btn" disabled>Light</button> -->
                  </div>

                  <!-- Dark Theme Button -->
                  <div class="col">
                  <input type="button" onclick="changeColor('#495057', '#212529', '#f8f9fa', 'Dark');" value ="Dark" class="p-2 btn"></input>
                    <!-- <button class="p-2 btn" disabled>Dark</button> -->
                  </div> 
                  
                  <!-- Apple Theme Button -->
                  <div class="col">
                  <input type="button" onclick="changeImgFruits('url(<?=base_url('assets/images/themes/Theme1_Apple.jpg')?>)', 'url(<?=base_url('assets/images/themes/Applecard.jpg')?>)', '#212529', 'Apple');"  value ="Apple" class="p-2 btn"></input>
                    <!-- <button class="p-2 btn" disabled>Apple</button> -->
                  </div>

                  <!-- Orange Theme Button -->
                  <div class="col">
                  <input type="button" onclick="changeImgFruits('url(<?=base_url('assets/images/themes/Theme2_Orange.jpg')?>)', 'url(<?=base_url('assets/images/themes/Orangecard.jpg')?>)', '#212529', 'Orange');" value ="Orange" class="p-2 btn"></input>
                    <!-- <button class="p-2 btn" disabled>Orange</button> -->
                  </div>

                  <!-- Kiwi Theme Button -->
                  <div class="col">
                  <input type="button" onclick="changeImgFruits('url(<?=base_url('assets/images/themes/Theme3_Kiwi.jpg')?>)', 'url(<?=base_url('assets/images/themes/Kiwicard.jpg')?>)', '#212529', 'Kiwi');" value ="Kiwi" class="p-2 btn"></input>
                    <!--  <button class="p-2 btn" disabled>Kiwi</button>-->
                  </div>


                </div>
              </div>
              
              <!-- Timer -->
              <div class="col ml-auto h5">
                <div class="mb-2">Reset Timer</div>

                <div class="row">
                  <div class="col mt-2">
                    <input type="time" id="appt" name="appt" value="<?php echo $row->pageTimer; ?>">
                    <input type="text" name="theme" id="submittext" class="btn float-end mt-1" hidden value="<?php echo $row->pageTheme ?>">
                    <!-- <input type="time" id="appt" name="appt"  min="09:00" max="18:00" disabled> -->
                  </div>


                  <div class="col ">
      
                    
                 <!-- <button href="#" class="delete_data" action="<?= base_url(); ?>delete/delete_data/"><i class="bi bi-trash-fill h4"></i></button> -->
                    <input type="submit" value="Delete" name="action" class="p-2 btn float-end mt-1 me-4" >
                  </div>
                </div>

              </div>

              <hr class="bg-light">
              
              <!--Input Area-->
              <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label"></label>
                <?php
                  foreach($viewPageNotebook->result() as $row)
                  { 
                    ?>
                    <textarea name="input" class="form-control" id="" rows="13"><?php echo $row->pageInput; ?></textarea>
                    <?php
                  }
                ?>

                <!-- <textarea class="form-control" id="" rows="13" disabled></textarea>-->
                <hr id="inputbox" class="bg-light">
                <!-- Button-->
                <input type="submit" value= "Update" name="action" onclick="updateTheme()" class="p-2 btn float-end mt-1">
                <!-- Back Button -->
                <input type="submit" value= "Back" name="action" class="p-2 btn float-end mt-1 me-4">
            
                </a>
              </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<style>
  body {
    font-weight: 300;
    font-size: 15px;
    color: <?php echo $fontcolor ?>;
    background-color: <?php echo $themecolor ?>;
    background-image: url(<?= base_url($themeurl) ?>);
    overflow-x: hidden;
  }

  p {
    font-weight: 500;
    font-size: 14px;
    line-height: 1.7;
  }

  .inputbox {
    background-color: #f8f9fa;
  }

  textarea 
  {
    resize: none;
  }

  h6 span {
    padding: 0 20px;
    text-transform: uppercase;
  }

  .section {
    position: relative;
    width: 100%;
  }

  .full-height {
    min-height: 100vh;
  }

  [type="checkbox"]:checked,
  [type="checkbox"]:not(:checked) {
    position: absolute;
    left: -9999px;
  }

  .checkbox:checked+label,
  .checkbox:not(:checked)+label {
    position: relative;
    display: block;
    text-align: center;
    width: 100px;
    height: 16px;
    border-radius: 8px;
    padding: 0;
    cursor: pointer;
    background-color: #adb5bd;
  }

  .card-3d-wrap {
    position: relative;
    width: 1200px;
    max-width: 100%;
    height: 600px;
  }

  .btn {
    width: 80px;
    color: #212529;
    background-color: #e9ecef;
  }

  .card-front {
    width: 100%;
    height: 100%;
    color: <?php echo $$themecardcolor ?>;
    background-color: <?php echo $themecardbgcolor ?>;
    background-image: url(<?= base_url($themecardbgurl) ?>);
    position: absolute;
    border-radius: 10px;
  }

  .form-group {
    position: relative;
    display: block;
    margin: 0;
    padding: 0;
  }

  .logo {
    position: absolute;
    top: 30px;
    right: 30px;
    display: block;
    z-index: 100;
    transition: all 250ms linear;
  }

  .logo img {
    height: auto;
    width: 100px;
    display: block;
  }

  .btn:hover {
    background-color: #6c757d;
    color: #dee2e6;
    box-shadow: 0 8px 24px 0 rgba(16, 39, 112, .2);
  }
</style>

<script>
  const name = document.querySelector(".name");

  function changeColor(color, cardcolor, textcolor, theme) {
    document.body.style.background = color;
    document.getElementById("card").style.background = cardcolor;
    document.getElementById("card").style.color = textcolor;
    document.getElementById("submittext").value = theme;
    
  }

  function changeImgFruits(color, cardcolor, textcolor, theme) {
    document.body.style.backgroundImage = color;
    document.getElementById("card").style.backgroundImage = cardcolor;
    document.getElementById("card").style.color = textcolor;
    document.getElementById("submittext").value = theme;
  }

</script>