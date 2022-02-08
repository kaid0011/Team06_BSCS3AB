<form method="post" id="updateform" enctype='multipart/form-data' action="<?= base_url('publicnotebook/updatePublicPage') ?>">
  <section id="learn" class="p-5" style="min-height: 75vh;">
    <div class="container my-5">
      <div class="card-3d-wrap mx-auto">
        <div class="card-front" id="card">
          <div class="d-flex p-5">
            <div class="section ">
              <div class="row">
                <div class="col mr-auto  h5">
                  <div class="mb-2">Theme</div>

                  <div class="row">
                    <!-- Light Theme Button -->
                    <div class="col">
                      <input type="button" onclick="changeImgFruits('url(<?= base_url('assets/images/themes/Theme1_Light.jpg') ?>)', 'url(<?= base_url('assets/images/themes/LightCard.jpg') ?>)', '#212529', 'Light' );" value="Light" class="p-2 btn"></input>
                      <!-- <button class="p-2 btn" disabled>Light</button> -->
                    </div>
                    <!-- Dark Theme Button -->
                    <div class="col">
                      <input type="button" onclick="changeImgFruits('url(<?= base_url('assets/images/themes/Theme2_Dark.jpg') ?>)', 'url(<?= base_url('assets/images/themes/DarkCard.jpg') ?>)', '#f8f9fa', 'Dark');" value="Dark" class="p-2 btn"></input>
                      <!-- <button class="p-2 btn" disabled>Dark</button> -->
                    </div>
                    <!-- Apple Theme Button -->
                    <div class="col">
                      <input type="button" onclick="changeImgFruits('url(<?= base_url('assets/images/themes/Theme3_Apple.jpg') ?>)', 'url(<?= base_url('assets/images/themes/AppleCard.jpg') ?>)', '#212529', 'Apple');" value="Apple" class="p-2 btn"></input>
                      <!-- <button class="p-2 btn" disabled>Apple</button> -->
                    </div>
                    <!-- Orange Theme Button -->
                    <div class="col">
                      <input type="button" onclick="changeImgFruits('url(<?= base_url('assets/images/themes/Theme4_Orange.jpg') ?>)', 'url(<?= base_url('assets/images/themes/OrangeCard.jpg') ?>)', '#212529', 'Orange');" value="Orange" class="p-2 btn"></input>
                      <!-- <button class="p-2 btn" disabled>Orange</button> -->
                    </div>
                    <!-- Kiwi Theme Button -->
                    <div class="col">
                      <input type="button" onclick="changeImgFruits('url(<?= base_url('assets/images/themes/Theme5_Kiwi.jpg') ?>)', 'url(<?= base_url('assets/images/themes/KiwiCard.jpg') ?>)', '#212529', 'Kiwi');" value="Kiwi" class="p-2 btn"></input>
                      <!--  <button class="p-2 btn" disabled>Kiwi</button>-->
                    </div>
                  </div>
                </div>

                <div class="col ml-auto h5">

                  <div class="row">
                    <div class="col mt-2">
                      <!-- Theme cheat hidden -->
                      <input type="text" name="theme" id="submittext" class="btn float-end mt-1" hidden value="<?php echo $row->pageTheme ?>">
                    </div>
                    <div class="col mt-3">
                      <!-- Delete -->
                      <!-- <input type="submit" value="Delete" name="action" class="p-2 btn float-end mt-3 me-4"> -->
                      <input type="button" onclick="myFunction()" value="Delete" class="p-2 btn float-end me-3"></input>
                    </div>
                  </div>
                </div>
                <hr class="bg-light">
                <!--Input Area-->
                <div class="mb-3">
                  <label for="exampleFormControlTextarea1" class="form-label"></label>
                  <textarea name="input" class="form-control fixed" id="input" rows="13"><?php echo set_value('input'); ?></textarea>
                  <span class="text-danger"><?php echo form_error('input'); ?></span>
                  <hr id="inputbox" class="bg-light">
                  <input type="file" name="file" id="file" class="custom-file-input me-3" accept="image/png, image/jpg, image/jpeg" />
                  <input type="button" value="Remove" name="action" id="remove" class="p-2 btn mt-1" onclick="removeImage()" />
                  <input type="text" name="remove" id="removeimage" class="btn float-end mt-1" hidden value="">
                  <input type="text" name="page_ID" value="<?php echo $pageID ?>" hidden />
                  <!-- Button-->
                  <input type="submit" value="Update" name="action" class="p-2 btn float-end mt-1">
                  <!-- Back Button -->
                  <input type="submit" value="Back" name="action" class="p-2 btn float-end mt-1 me-4">
                </div>
</form>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="container my-5">
  <button class="popup" onclick="myFunction()">
    <span class="popuptext justify-content-center resp2" id="myPopup" style="background-color: #555;">
      <div class="container boxtype">
        <div>
          <div class="d-flex justify-content-center align-items-center h-100 ms-5 me-5">
            <h4 style="font-size: 30px;" class="mb-4 pt-2">Are you sure?</h4>
          </div>

          <form method="post" id="updateform" enctype='multipart/form-data' action="<?= base_url('publicnotebook/updatepublicpage') ?>">
            <div class="row text-center py-5 ps-3">
              <div class="col resp">
                <input type="submit" name="action" value="YES" class="input-group-text  p-5 bg-success text-white fw-normal button" id="basic-addon2">
                <input type="hidden" name="page_ID" value="<?php echo $row->publicNBPage_ID; ?>">
              </div>
              <div class="col resp">
                <input type="button" name="action" value="NO" class="input-group-text  p-5 bg-danger text-white fw-normal button" id="basic-addon2">
              </div>
            </div>
          </form>
        </div>
      </div>
    </span>
  </button>
  <div class="my-5">&nbsp;</div>
  <div class="my-5">&nbsp;</div>
  <div class="my-5">&nbsp;</div>
  <div class="my-5">&nbsp;</div>
  <div class="my-5">&nbsp;</div>
  <div class="my-5">&nbsp;</div>
  <div class="my-5">&nbsp;</div>
  <div class="my-5">&nbsp;</div>
  <div class="my-5">&nbsp;</div>
  <div class="my-5">&nbsp;</div>
  <div class="my-5">&nbsp;</div>
  </section>


  <style>
    body {
      font-weight: 300;
      font-size: 15px;
      color: #212529;
      background-color: #e9ecef;
      background-image: NULL;
      overflow-x: hidden;
    }


    .section {
      position: relative;
      width: 100%;
    }

    .full-height {
      min-height: 100vh;
    }

    .fixed {
      resize: none;
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
      color: #212529;
      background-color: #adb5bd;
      background-image: NULL;
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

    .custom-file-input::-webkit-file-upload-button {
      visibility: hidden;
    }

    .custom-file-input::before {
      content: 'Choose Image';
      display: inline-block;
      background: -webkit-linear-gradient(top, #f9f9f9, #e3e3e3);
      border: 1px solid #999;
      border-radius: 5px;
      padding: 11px 8px;
      outline: none;
      white-space: nowrap;
      -webkit-user-select: none;
      cursor: pointer;
      text-shadow: 1px 1px #fff;
      font-weight: 600;
      font-size: 10pt;
    }

    .custom-file-input:hover::before {
      border-color: black;
    }

    .custom-file-input:active::before {
      background: -webkit-linear-gradient(top, #e3e3e3, #f9f9f9);
    }

    /* popup */
    .popup {
      position: fixed;
      left: 50%;
      transform: translate(-50%, 0);
      justify-content: center;
      align-items: center;
      padding: 0;
      top: 25%;
      width: 360px;
      visibility: hidden;
      background-color: #555;
      border-radius: 35px;
      text-align: center;
      align-items: center;
    }

    .boxtype {
      border-radius: 35px;
      padding: 20px;
      color: #e9ecef;
      text-align: center;
      align-items: center;
      background-color: rgba(49, 55, 59, 1);
    }

    /* The actual popup */
    .popup .popuptext {
      background-color: #555;
    }

    /* Toggle this class - hide and show the popup */
    .popup .show {
      visibility: visible;
      -webkit-animation: fadeIn 1s;
      animation: fadeIn 1s;
    }

    @media(max-width:768px) {
      .resp {
        margin-left: 30px;
        margin-right: 0%;
      }

      .resp2 {
        margin-left: 5%;
        margin-right: 0%;
      }
    }

    @media(max-width:480px) {
      .popup {
        width: 200px;
      }
    }
  </style>

  <script>
    const name = document.querySelector(".name");

    function changeImgFruits(color, cardcolor, textcolor, theme) {
      document.getElementById("submittheme").value = theme;
      document.body.style.backgroundImage = color;
      document.getElementById("card").style.backgroundImage = cardcolor;
      document.getElementById("card").style.color = textcolor;
    }

    function removeImage() {
      document.getElementById("removeimage").value = "Remove";
      document.getElementById("remove").style.backgroundColor = "gray";
    }

    function myFunction() {
      var popup = document.getElementById("myPopup");
      popup.classList.toggle("show");
    }
  </script>