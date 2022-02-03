<section style="background-color: #e9ecef; min-height: 75vh; padding-top: 80px">

  <h1 class="h1 mb-4 pt-1 text-dark text-center ps-5">Update Profile</h1>
  <!--div class="p-5 text-center bg-image" style="background-image: url('imgs/white.png'); height: 300px; width: auto;"-->
  <div class="container  justify-content-center align-items-center ">

    <div class="align-items-center justify-content-center">

      <div class="justify-content-center align-items-center text-center ps-5">
        <?php $source = $this->UpdateProfile_model->getImage(); ?>
        <a href="#"><img src="<?= base_url($source) ?>" style="height: 200px; width: 200px; border-radius: 100px; object-fit: cover;" alt="user profile"></a>
      </div>

      <form method="post" enctype="multipart/form-data" action="<?= base_url('updateprofile/image') ?>">
        <div class="inp pt-3">
          <input type="file" name="file" id="file" />
        </div>
        <div class="d-flex inp2 pt-3">
          <input type="submit" name="action" id="remove" value="Remove Image" class="input-group-text me-3" style="background-color:#ced4da; font-size: 15px; Height: 41px;" />
          <input type="submit" name="action" id="insert" value="Update Image" class="input-group-text" style="background-color:#ced4da; font-size: 15px; Height: 41px;" />
        </div>
      </form>

    </div>


    <div class="col-md p-5 d-flex justify-content-center align-items-center">
      <p class="lead align-center">

      <div class="mb-3 text-start text-secondary inputbox">


        <form method="post" class="responsiveInput" action="<?= base_url('updateprofile/updateusername') ?>" autocomplete="off">
          <!-- UserName -->
          <label for="exampleInputname1" class="form-label ps-2 mt-2">Username</label>
          <div class="input-group input-group-lg">
            <input type="text" class="form-control mb-1" style="font-size: 15px;" id="examplelastname1" name="userName" aria-describedby="emailHelp" value="<?php echo $this->session->userdata('userName'); ?>" />
            <!-- Resend Button -->
            <input type="submit" value="Update" name="action" class="input-group-text" style="background-color:#ced4da; font-size: 15px; Height: 41px;" id="basic-addon2">
          </div>
          <span class="text-danger"><?php echo form_error('displayName'); ?></span>
        </form>

        <form method="post" class="responsiveInput" action="<?= base_url('updateprofile/updatedisplayname') ?>" autocomplete="off">
          <!-- Display Name -->
          <label for="examplefirstname1" class="form-label ps-2 mt-2">Display Name</label>
          <div class="input-group input-group-lg">
            <input type="text" class="form-control mb-1" style="font-size: 15px;" id="exampleInputlastname1" name="displayName" aria-describedby="emailHelp" value="<?php echo $this->session->userdata('displayName'); ?>" />
            <!-- Resend Button -->
            <input type="submit" value="Update" name="action" class="input-group-text" style="background-color:#ced4da; font-size: 15px; Height: 41px;" id="basic-addon2">
          </div>
          <span class="text-danger"><?php echo form_error('displayName'); ?></span>
        </form>


        <form method="post" class="responsiveInput" action="<?= base_url('updateprofile/updateemail') ?>" autocomplete="off">
          <!-- E-mail Address -->
          <label for="exampleInputEmail1" class="form-label ps-2 mt-2">E-mail Address</label>
          <div class="input-group input-group-lg">
            <input type="email" class="form-control mb-1" style="font-size: 15px;" id="exampleInputEmail1" name="email" aria-describedby="emailHelp" value="<?php echo $this->session->userdata('email'); ?>" autocomplete="off" />
            <!-- Resend Button -->
            <input type="submit" value="Update" name="action" class="input-group-text" style="background-color:#ced4da; font-size: 15px; Height: 41px;" id="basic-addon2">
          </div>
          <span class="text-danger"><?php echo form_error('email'); ?></span>
        </form>

        <form method="post" action="<?= base_url('updateprofile/updatedprofile') ?>" autocomplete="off">
          <div class="col d-flex justify-content-start align-items-center">
            <!-- Change Password Button -->
            <input type="submit" name="action" value="Change Password" class="btn btn-sm text-secondary mt-1" style="text-decoration: underline; margin-top: -15px;"></input>
          </div>
          <!-- Deactivate Account Button -->
          <!-- <input type="submit" name="action" value="Deactivate Account" class="btn btn-sm text-secondary mt-1" style="text-decoration: underline; margin-top: -15px;"></input> -->
        </form>
        <a onclick="myFunction()" style="cursor:pointer; font-size:14px; margin-left:8px;"><u>Deactivate Account</u></a>

      </div>
      <div class="py-5">&nbsp;</div>

      <button class="popup" onclick="myFunction()">Click me to toggle the popup!
        <span class="popuptext" id="myPopup" style="background-color: #555;">
          <div class="container boxtype">
            <div>
              <div class="d-flex justify-content-center align-items-center h-100 ms-5 me-5">
                <h4 style="font-size: 80px;" class="mb-4 pt-2">Are you sure?</h4>
              </div>

              <form method="post" action="<?= base_url('updateprofile/deleteaccount') ?>" autocomplete="off">
                <div class="row text-center py-5">
                  <div class="col resp">
                    <input type="submit" name="action" value="YES" class="input-group-text btn-lg p-5 bg-success text-white fw-normal button" id="basic-addon2">
                  </div>
                  <div class="col resp">
                    <input type="submit" name="action" value="NO" class="input-group-text btn-lg p-5 bg-danger text-white fw-normal button" id="basic-addon2">
                  </div>
                </div>
              </form>
            </div>
          </div>
        </span>
      </button>
    </div>
    <div class="py-5">&nbsp;</div>
    <div class="py-5">&nbsp;</div>
    <div class="py-5">&nbsp;</div>
    <div class="py-5">&nbsp;</div>
</section>

<script>
  function myFunction() {
    var popup = document.getElementById("myPopup");
    popup.classList.toggle("show");
  }
</script>
<style>
  @media(min-width:375px) {
    .pic {
      width: 250px;
      height: 250px;
    }
  }

  @media (min-width: 768px) {
    .inputbox {
      width: 600px;
    }
  }

  @media (max-width: 425px) {
    section {
      width: 100%;
      margin: 0;
      padding: 0;
      overflow-x: hidden;
    }

    .responsiveInput {
      padding-left: 20px;
    }
  }

  .inp {
    text-align: center;
    margin: auto;
    margin-left: 130px;
  }

  .inp2 {
    justify-content: center;
    margin: auto;
    margin-left: 52px;
  }

  /* overlay style */
  .popup {
    position: fixed;
    justify-content: center;
    align-items: center;
    margin: 0;
    padding: 0;
    top: 5%;
    visibility: hidden;
    background-color: #555;
  }

  .boxtype {
    border-radius: 35px;
    padding: 20px;
    color: #e9ecef;
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

  @media(min-width:768px) {
    .resp {
      margin-left: 80px;
    }
  }

  /* Add animation (fade in the popup) */
  @-webkit-keyframes fadeIn {
    from {
      opacity: 0;
    }

    to {
      opacity: 1;
    }
  }

  @keyframes fadeIn {
    from {
      opacity: 0;
    }

    to {
      opacity: 1;
    }
  }

  * {
    min-height: 100%;
  }
</style>