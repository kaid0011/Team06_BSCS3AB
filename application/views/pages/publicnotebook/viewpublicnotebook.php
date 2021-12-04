<section id="learn" class="p-5" style="min-height: 75vh;">
<?php

  foreach ($viewPublicNotebook->result() as $row) 
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
  <div class="container my-5">
    <div class="card-3d-wrap mx-auto">
      <div class="card-front">
        <div class="d-flex p-5">
          <div class="section ">
            <div class="row">
              <div class="col ml-auto h5">
                <div class="row">
                <?php
                if ($viewPublicNotebook->num_rows() > 0) 
                {
                  foreach($viewPublicNotebook->result() as $row) 
                  {
                
                ?>

                   <div class="col mr-auto  h5">
                    <!-- New Page Button -->
                    <a href="<?= base_url('publicnotebook/createpublicnotebook') ?>">
                      <button class="p-2 btn float-end" style="width:110px;">New Page</button>
                    </a>
                    <!-- Update Button -->
                    <a href="<?= base_url('publicnotebook/updatepublicnotebook') ?>">
                      <button class="p-2 btn float-end me-4">Update</button>
                    </a>
                  </div>
                </div>
              </div>

              <hr class="bg-light">
              <!--Input Area-->
              <div class="mb-3">
                
                        <textarea class="form-control" id="" rows="14" disabled><?php echo $row->pageInput; ?></textarea>
                    <?php
                  }
                }
                ?>
                <!-- <textarea class="form-control" id="" rows="13" disabled></textarea>-->

                <hr id ="inputbox" class="bg-light">
              <!-- Submit Button-->
              <div class="col ">
                <i class="bi bi-star " disabled></i> # of reacts
              </div>
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

  .section {
    position: relative;
    width: 100%;
  }

  .full-height {
    min-height: 100vh;
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
    /*if theme is dark,
         background-color: #adb5bd;
    if theme is light,
         background-color: #adb5bd;
    if theme is Apple,
         background-color: #adb5bd;
     if theme is Orange,
        background-color: #adb5bd;
     if theme is Kiwi,
       background-color: #adb5bd; */
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


  .btn:hover {
    background-color: #6c757d;
    color: #dee2e6;
    box-shadow: 0 8px 24px 0 rgba(16, 39, 112, .2);
  }
</style>