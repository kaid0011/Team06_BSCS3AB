<!--div class="p-5 text-center bg-image" style="background-image: url('imgs/white.png'); height: 300px; width: auto;"-->
<div style="background-color: #DFDFDE;">
  <?php
  if ($findUser->num_rows() > 0) {
  ?>
    <?php
    foreach ($findUser->result() as $row) {
    ?>

      <div class="d-flex justify-content-center align-items-center h-100 ms-5 me-5" style="padding-top: 80px;">
        <div class="text-white">
          <div class="justify-content-center align-items-center text-center ps-5 pb-3">
            <?php $source = $this->Mainpage_model->getImage($row->user_ID); ?>
            <a href="#"><img src="<?= base_url($source) ?>" style="height: 200px; width: 200px; border-radius: 100px; object-fit: cover; border: 3px solid #7E7E7E;" alt="user profile"></a>
          </div>

          <h1 class="lead text-center text-dark mt-1 ms-5 mb-5 fw-normal"><?php echo $row->displayName; ?><br>
            <a class="text-secondary" style="text-decoration: none;">@<?php echo $row->userName; ?></a>
          </h1>

        <?php
      }
        ?>

        </div>
      </div>


      <?php
      foreach ($findUserPublicNB->result() as $row) {
        $theme = $row->pageTheme;
        if ($theme == "Dark") {
          $themeurl = "assets/images/themes/Theme2_Dark.jpg";
          $themecardcolor = '#f8f9fa';
          $themecardbgurl = 'assets/images/themes/Darkcard.jpg';
          $fontcolor = '#f8f9fa';
        } else if ($theme == "Light") {
          $themeurl = "assets/images/themes/Theme1_Light.jpg";
          $themecardcolor = '#212529';
          $themecardbgurl = 'assets/images/themes/LightCard.jpg';
          $fontcolor = '#212529';
        } else if ($theme == "Apple") {
          $themeurl = "assets/images/themes/Theme3_Apple.jpg";
          $themecardcolor = '#212529';
          $themecardbgurl = 'assets/images/themes/AppleCard.jpg';
          $fontcolor = '#212529';
        } else if ($theme == "Orange") {
          $themeurl = "assets/images/themes/Theme4_Orange.jpg";
          $themecardcolor = '#212529';
          $themecardbgurl = 'assets/images/themes/OrangeCard.jpg';
          $fontcolor = '#212529';
        } else if ($theme == "Kiwi") {
          $themeurl = "assets/images/themes/Theme5_Kiwi.jpg";
          $themecardcolor = '#212529';
          $themecardbgurl = 'assets/images/themes/KiwiCard.jpg';
          $fontcolor = '#212529';
        }
      ?> <section id="learn" class="p-5" style="min-height: 75vh; background-image: url(<?= base_url($themeurl) ?>); color: <?php echo $fontcolor ?>;">
          <div class="container my-5">
            <div class="card-3d-wrap mx-auto">
              <div class="card-front" style="background-image: url(<?= base_url($themecardbgurl) ?>); color: <?php echo $themecardcolor ?>; border-radius: 10px;">
                <div class="p-5">
                  <div class="section ">
                    <div class="row">
                      <div class="col ml-auto h5">
                        <div class="row">
                          <?php
                          $page_ID = $row->publicNBPage_ID;
                          ?>
                          <!-- Hidden Page and User ID -->
                          <input type="text" name="page_ID" id="page_ID" class="btn float-end mt-1" value="<?php echo $row->publicNBPage_ID ?>" hidden>
                          <input type="text" name="visitedUser_ID" id="visitedUser_ID" class="btn float-end mt-1" value="<?php echo $row->publicNB_ID ?>" hidden>
                          <div class="col mr-auto  h5">
                            <ul class="nav nav-pills ms-2">
                              <li class="nav-item  ">
                                <p class="nav-link " href="#" style="color:<?php echo $fontcolor ?>;">Date: <?php echo $row->pageDate; ?></p>
                              </li>
                            </ul>
                          </div>
                        </div>
                      </div>

                      <!--Input Area-->
                      <div class="mb-3">

                        <?php
                        if ($this->Mainpage_model->getImagePage($page_ID) != 'No image') {
                        ?>
                          <div class=" row">
                            <div class=" my-5 col-md-3 justify-content-center align-items-center text-center border border-3">
                              <?php $source = $this->Mainpage_model->getImagePage($page_ID); ?>
                              <a><img src="<?= base_url($source) ?>" style="height: 250px; width: 250px; margin-left: -13px; padding: 0px;" alt="pub nb image"></a>

                            </div>
                            <div class="col-md-9">
                              <textarea class="form-control" id="" rows="14" disabled><?php echo $row->pageInput; ?></textarea>
                            </div>
                          </div>
                        <?php
                        } else {
                        ?>
                          <div class=" row">
                            <div class="col mb-3">
                              <textarea class="form-control" id="" rows="14" disabled><?php echo $row->pageInput; ?></textarea>
                            </div>
                          </div>
                        <?php
                        }
                        ?>
                        <hr id="inputbox" class="bg-light">
                        <!-- Submit Button-->
                        <div>
                          <!-- React Button -->
                          <input type="text" id="accountVisitor_ID" name="accountVisitor_ID" value="<?php echo $this->session->userdata('user_ID'); ?>" hidden>
                          <button id="react_<?php echo $row->publicNBPage_ID ?>" class="btn btn-none btn-sm float-start" style="color: #f8f9fa;" value="<?php echo $row->publicNBPage_ID ?>"><i id="icon_<?php echo $row->publicNBPage_ID ?>" class="bi bi-star h4"></i></button>

                          <!-- Report Button -->
                          <form action="<?= base_url('reportuser/getPublicNBData') ?>" method="post">
                            <input type="text" name="page_ID" id="page_ID" style="color: #e9ecef;" class="btn float-end mt-1" value="<?php echo $row->publicNBPage_ID ?>" hidden>
                            <input type="text" name="reporteduser_ID" id="reporteduser_ID" class="btn float-end mt-1" value="<?php echo $row->publicNB_ID ?>" hidden>

                            <input type="submit" name="action" value="Report" style="background-color: #dcdcdc; width: 75px;" class="p-2 btn-sm border border-2 border-dark btn-end float-end">
                          </form>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>

      <?php
      }
      ?>
</div>

<?php
  } else {
?>
  <h1 class="lead text-center text-dark mt-4 ms-5 mb-5 fw-normal" style="padding-top: 25vh;">User doesn't exists.<br>
  <?php
  }
  ?>


  <!-- AJAX for Reactions -->
  <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

  <script>
    $(document).ready(function() {
          $(".btn.btn-none.btn-sm.float-start").click(function() {
            var accountVisitor_ID = $("#accountVisitor_ID").val();
            var publicNBPage_ID = $(this).attr("value");

            $.ajax({
              url: "<?php echo base_url(); ?>React/addReact_PublicPage",
              type: "post",
              dataType: "json",
              data: {
                accountVisitor_ID: accountVisitor_ID,
                publicNBPage_ID: publicNBPage_ID,
              },
              success: function(data) {
                if (data.response == "added") {
                  $("#icon_" + publicNBPage_ID).removeClass("bi bi-star h4");
                  $("#icon_" + publicNBPage_ID).addClass("bi bi-star-fill h4");
                  $("#react_" + publicNBPage_ID).css("color", "#fcff5c");
                  $("#react_" + publicNBPage_ID).css("text-shadow", "0 0 7px #464709");
                } else {
                  $("#icon_" + publicNBPage_ID).removeClass("bi bi-star-fill h4");
                  $("#icon_" + publicNBPage_ID).addClass("bi bi-star h4");
                  $("#react_" + publicNBPage_ID).css("color", "#f8f9fa");
                  $("#react_" + publicNBPage_ID).css("text-shadow", "0 0 0px #464709");
                }
              }
            });
          });
          });
  </script>

  <!-- End of AJAX for Reactions -->


  <style>
    .scrollspy-example {
      height: 100%;
      overflow-y: scroll;
      overflow-x: hidden;
    }

    .scrollspy-example::-webkit-scrollbar {
      width: 10px;
    }

    .scrollspy-example::-webkit-scrollbar-track {
      -webkit-box-shadow: inset 0 0 6px rgba(0, 0, 0, 0.3);
      -webkit-border-radius: 0px;
      border-radius: 3px;
    }

    .scrollspy-example::-webkit-scrollbar-thumb {
      -webkit-box-shadow: inset 0 0 6px rgba(0, 0, 0, 0.5);
      -webkit-border-radius: 0px;
      background: rgb(149, 153, 165);
      border-radius: 3px;
      height: 5px;
    }

    /*  .card-text {
    min-height: 200px;
  }
  
  .title {
    color: #fff;
    margin: 5px;
  }
  .items {
    background-color: #fff;
    border: 1px solid #d1d1d1;
    margin: 10px;
    padding: 5px;
  }
 
*/
</style>