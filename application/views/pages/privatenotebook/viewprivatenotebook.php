<section id="learn" class="p-5" style="min-height: 75vh;">
  <?php

  foreach ($viewPrivateNotebook->result() as $row) 
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
              <?php
                if ($viewPrivateNotebook->num_rows() > 0) 
                {

                  foreach ($viewPrivateNotebook->result() as $row) 
                  {
                    ?>
              <div class="col mr-auto  h5">


                <!-- Timer -->
                <div class="col ml-auto h5">
                  <!-- Update Button-->
                  <a href="<?= base_url('privatenotebook/updateprivatenotebook') ?>">
                    <button class="p-2 btn float-end">Update</button>
                  </a>
                  <div class="mb-2 me-5 float-end mt-2" >Reset Timer<textarea style = "height: 34px; width: 100px" disabled><?php echo $row->pageTimer; ?></textarea> </div>

                  <div class="row">
                    <div class="col mt-2">
                      

                    </div>





                    <div class="col ">
                      <form>
                    </div>

                    <!--<button class="p-2 btn btn-outline-white btn-secondary" disabled><i class="bi bi-trash-fill h4"></i></button>-->
                    </form>
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

                <hr class="bg-light">

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

  textarea 
  {
    resize: none;
  }

  p {
    font-weight: 500;
    font-size: 14px;
    line-height: 1.7;
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