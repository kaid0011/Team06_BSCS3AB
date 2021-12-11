<?php
  $connect = mysqli_connect("localhost", "root", "team6", "virtual_diary");
  if(isset($_POST["insert"]))
  {
    $id = $this->session->userdata('user_ID');
    $file = addslashes(file_get_contents($_FILES["image"]["tmp_name"]));
    $query = "UPDATE user SET user_displayImage = '$file' WHERE user_ID = $id";
    if(mysqli_query($connect, $query))
    {
      echo '<script>alert("Image Inserted into Database")</script>';
    }
  }
?>

<section style="background-color: #e9ecef; min-height: 75vh; padding-top: 80px">
  <div class="container">
    <h1 class="h1 mb-4 pt-1 text-dark text-center">Update Profile</h1>
    <!--div class="p-5 text-center bg-image" style="background-image: url('imgs/white.png'); height: 300px; width: auto;"-->
    <div>
        
      <div class="d-flex justify-content-center align-items-center h-100 ms-5 me-5">

        <form method="post" enctype="multipart/form-data">
        <div class="d-flex">
          <input type="file" name="image" id="image"/>
    
        <!-- <a href="#"><img src="<?= base_url('assets/images/visitedprofile/profile.png') ?>" class="rounded-circle border border-3 border-secondary mb-2" alt="..."></a>  -->
          <input type="submit" name="insert" id="insert" value="Change Picture" class="btn"/>
        </div>
        </form>
        <?php
            $user_ID = $this->session->userdata('user_ID');
            $query = "SELECT * FROM user WHERE user_ID = $user_ID";
            $result = mysqli_query($connect, $query);
            while ($row = mysqli_fetch_array($result))
            {
              echo '<img style="width: 200px; height: 200px;" src="data:image/jpeg;base64, '.base64_encode($row['user_displayImage'] ). '"';
            }
      ?>
      </div>
 
      <div class="col-md p-5 d-flex justify-content-center align-items-center">
        <p class="lead align-center">

        <form method="post" action="<?= base_url('updateprofile/updateusername') ?>" autocomplete="off">   
          <!-- Username -->
          <div class="mb-3 text-start text-secondary inputbox">
            <label for="exampleInputlastname1" class="form-label ps-2 mt-2">Username</label>
                <div class="input-group input-group-lg">
                    <input type="text" class="form-control mb-1" style="font-size: 15px;" id="examplelastname1" name="userName" aria-describedby="emailHelp" value="<?php echo $this->session->userdata('userName');?>"/>
                    <!-- Resend Button -->
                    <input type="submit" value="Update" name ="action" class="input-group-text"style="background-color:#ced4da; font-size: 15px; Height: 41px;" id="basic-addon2">
                  </div>   
                  <span class="text-danger"><?php echo form_error('userName'); ?></span>
        </form>


        <form method="post" action="<?= base_url('updateprofile/updatedisplayname') ?>" autocomplete="off">   
            <!-- Display Name -->
              <label for="examplefirstname1" class="form-label ps-2 mt-2">Display Name</label>
                <div class="input-group input-group-lg">
                    <input type="text" class="form-control mb-1" style="font-size: 15px;" id="exampleInputlastname1" name="displayName" aria-describedby="emailHelp" value="<?php echo $this->session->userdata('displayName');?>"/>
                    <!-- Resend Button -->
                    <input type="submit" value="Update" name ="action" class="input-group-text"style="background-color:#ced4da; font-size: 15px; Height: 41px;" id="basic-addon2">
                </div>   
                <span class="text-danger"><?php echo form_error('displayName'); ?></span>
        </form>


        <form method="post" action="<?= base_url('updateprofile/updateemail') ?>" autocomplete="off">   
              <!-- E-mail Address -->
                <label for="exampleInputEmail1" class="form-label ps-2 mt-2">E-mail Address</label>
                <div class="input-group input-group-lg">
                    <input type="email" class="form-control mb-1" style="font-size: 15px;" id="exampleInputEmail1" name="email" aria-describedby="emailHelp" value="<?php echo $this->session->userdata('email');?>" autocomplete="off" />
                    <!-- Resend Button -->
                    <input type="submit" value="Update" name ="action" class="input-group-text"style="background-color:#ced4da; font-size: 15px; Height: 41px;" id="basic-addon2">
                </div>
                <span class="text-danger"><?php echo form_error('email'); ?></span>
        </form>

  <form method="post" action="<?= base_url('updateprofile/updatedprofile') ?>" autocomplete="off">        
  <div class="col-md d-flex justify-content-start align-items-center">
          <!-- Change Password Button -->
  <input type="submit" name="action" value="Change Password" class="btn btn-sm text-secondary mt-1" style="text-decoration: underline; margin-top: -15px;"></input>
  </div>
  <!-- Deactivate Account Button -->
  <input type="submit" name="action" value="Deactivate Account" class="btn btn-sm text-secondary mt-1" style="text-decoration: underline; margin-top: -15px;"></input>
      </div>
    </div>
  </div>

     </div>
            </div>
          </div>
 

  </form>
  </p>
  </div>
  <div class="py-5">&nbsp;</div>
  <style>
     @media (min-width: 768px) {
    .inputbox {
      width: 600px;
    }
  }

  </style>







  </div>

</section>
<style>
  @media(min-width:375px){
    .pic{
    width: 250px;
    height: 250px;
  }
  }
</style>

<script>
  $(document).ready(function()
  {
    $('#insert').click(function()
    {
      var image_name = $('#image').val();
      if(image_name =='')
      {
        alert("Please select image.");
        return false;
      }
      else
      {
        var extension = $('#image').val().split('.').pop().toLowerCase();
        if(jQuery.inArray(extension, ['gif', 'png', 'jpg', 'jpeg']) == -1)
        {
          alert('Invalid Image File');
          $('#image').val('');
          return false;
        }
      }
    })
  })
</script>