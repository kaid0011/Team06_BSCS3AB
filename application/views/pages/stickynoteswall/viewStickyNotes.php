<!-- title and create button(direct to createstickynotes) -->

<div class="px-5 my-4" style="display: flex; flex-direction: row;">

</div>
<div class="display-1 d-flex justify-content-center align-items-center text-center p-4 fw-normal" style="color: #212529;">Sticky Notes Wall</div>
<!-- end of section  -->
<!-- finduser section  -->

<form method="post" action="<?= base_url('stickynoteswall/findreceiver') ?>">
  <div class="my-4">&nbsp;</div>
  <div class="col-lg-12 col-sm-12 col-md-12 col-xs-12 ">
    <div class="input-group input-group-lg inv-amount-block">
      <div class="w-50 mx-auto" style="display: flex; flex-direction: row;">

        <input type="text" name="userName" placeholder="Enter receiver's name" class="form-control me-2 border-dark border-2">

        <input type="submit" name="action" value="Search" style="background-color: #f0b63a;" class="btn border border-2 border-dark">
      </div>
    </div>
  </div>
  <div class="my-3"></div>
</form>
<!-- end of section  -->
<!-- stickynotes card section -->

<section class="p-5">
  <hr class="dashed mb-5 mt-2">
  <div class="d-flex justify-content-center ">
    <a href="<?= base_url('stickynoteswall/createstickynotes') ?>">
      <button class="btn btn-lg border border-3 border-dark mb-5" type="button" style="background-color: #f0b63a; width: 50vw;">Create New Sticky Notes</button>
    </a>
  </div>
  <div class="mb-4"></div>
  <div class="container wide pm">
    <div class="row text-center g-4 pm">
      <?php
      if ($viewStickyNotes->num_rows() > 0) {
        foreach ($viewStickyNotes->result() as $row) {

          $theme = $row->noteTheme;
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

      ?>
          <div class="col justify-content-center marge">
            <div class="col justify-content-center marge">
              <div class="card responsive stickyNote" style="background-image: url(<?= base_url($themecardbgurl) ?>);">
                <!-- style="@media (min-width: 989px) {width: 25vw; height: 390px;}  @media (max-width: 990px) {width: 70vw; height: 390px;}" -->
                <div data-bs-spy="scroll" data-bs-target="#navbar-example2" data-bs-offset="0" class="scrollspy-example " tabindex="0" style="background-image: url(<?= base_url($themecardbgurl) ?>);">
                  <div class="card-body text-center" style="background-image: url(<?= base_url($themecardbgurl) ?>);">
                    <div class="h1 mb-3">
                    </div>
                    <input type="text" name="post_ID" id="post_ID" style="color: #e9ecef;" class="btn float-end mt-1" value="<?php echo $row->stickyNotes_ID ?>" hidden>
                    <input type="text" name="reporteduser_ID" id="reporteduser_ID" class="btn float-end mt-1" value="<?php echo $row->user_ID ?>" hidden>
                    <h3 class="card-title text-light">
                      To: <?php echo $row->noteReceiver; ?><br>
                    </h3>
                    <p class="card-text py-5 stickyNotesHeight">
                      <?php echo $row->noteInput; ?><br>
                    </p>
                    <div class="reactButton pb-2 pe-3" style="background-image: url(<?= base_url($themecardbgurl) ?>);">
                      <div>
                        <!-- React to Sticky Note -->
                        <input type="text" id="accountVisitor_ID" name="accountVisitor_ID" value="<?php echo $this->session->userdata('user_ID'); ?>" hidden>

                        <button id="react" class="btn btn-none btn-sm float-start" value="<?php echo $row->stickyNotes_ID ?>"><i id="icon" class="bi bi-star h4"></i></button>
                        <span id="noteReact_Count"><?php echo $row->noteReact_Count; ?></span>
                        <!-- End of React to Sticky Note -->
                      </div>
                      <!-- Report Sticky Note -->
                      <form action="<?= base_url('reportuser/getnotedata') ?>" method="post">
                        <input type="text" name="post_ID" id="post_ID" style="color: #e9ecef;" class="btn float-end mt-1" value="<?php echo $row->stickyNotes_ID ?>" hidden>
                        <input type="text" name="reporteduser_ID" id="reporteduser_ID" class="btn float-end mt-1" value="<?php echo $row->user_ID ?>" hidden>
                        <input type="submit" name="action" value="Report" class="d-flex ms-4 me-2" style="text-decoration: none;">
                      </form>
                      <!-- End of Report Sticky Note -->
                    </div>
                    <!-- End-->
                  </div>
                </div>
              </div>
            </div>
          </div>
      <?php
        }
      }
      ?>

    </div>
  </div>
</section>

<!-- AJAX for Reactions -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

<script>
  $(document).on("click", "#react", function(e) {
    e.preventDefault();

    var accountVisitor_ID = $("#accountVisitor_ID").val();
    var stickyNotes_ID = $(this).attr("value");
    var noteReact_Count = $("#noteReact_Count").val();
    var display = document.getElementById("noteReact_Count");

    $.ajax({
      url: "<?php echo base_url(); ?>React/addReact_StickyNote",
      type: "post",
      dataType: "json",
      data: {
        accountVisitor_ID: accountVisitor_ID,
        stickyNotes_ID: stickyNotes_ID,
      },
      success: function(data) {
        if (data.response == "added") {
          alert("added");
        } else {
          alert("deleted");
        }
      }
    });
  });
</script>

<!-- End of AJAX for Reactions -->

<style>
  body {
    background-color: #e9ecef;
  }

  hr.dashed {
    border-top: 5px dashed #e9ecef;
  }

  button {

    float: right;
  }

  .scrollspy-example {

    overflow-y: scroll;
    overflow-x: hidden;
  }

  .scrollspy-example::-webkit-scrollbar {
    width: 10px;
  }

  .scrollspy-example::-webkit-scrollbar-track {
    -webkit-box-shadow: inset 0 0 6px rgba(252, 252, 228, 0.92);
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

  /* center placeholder section*/
  input {
    text-align: center;
  }

  ::-webkit-input-placeholder {
    text-align: center;
  }

  :-moz-placeholder {
    text-align: center;
  }

  @media (min-width:989px) {
    .responsive {
      width: 25vw;
      height: 390px;
    }
  }

  @media (max-width:989px) {
    .responsive {
      width: 80vw;
      height: 390px;
    }
  }

  @media (max-width:576px) {
    section {
      width: 100%;
      margin: 0;
      padding: 0;
      overflow-x: hidden;
    }

    .responsive {
      width: 70vw;
      height: 400px;
      margin-right: 1000px;
    }

    .stickyNotesHeight {
      margin-top: 30px;

    }

    .wide {
      width: 100vw;
      margin: 0;
      padding: 0;
    }

    .marge {
      margin-right: 1200px;
      margin-left: 0;
    }

    .pm {
      margin: 0;
      padding: 0;
    }
  }

  .reactButton {
    position: absolute;
    bottom: 0px;
    justify-content: flex-end;
    display: flex;
    right: 0px;
  }

  .stickyNote {
    justify-content: space-between;
    flex-direction: column;
    margin: auto;
    display: flex;
  }

  .stickyNotesHeight {
    height: 250px;
  }

  .wide {
    width: 1500px;
  }
</style>