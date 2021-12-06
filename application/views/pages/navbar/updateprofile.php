<section style="background-color: #e9ecef; min-height: 75vh; padding-top: 80px">
  <div class="container">
    <h1 class="h1 mb-4 pt-1 text-dark text-center">Update Profile</h1>
    <!--div class="p-5 text-center bg-image" style="background-image: url('imgs/white.png'); height: 300px; width: auto;"-->
    <div>
        
      <div class="d-flex justify-content-center align-items-center h-100 ms-5 me-5">

        <div class="d-flex">

          <a href="#"><img src="<?= base_url('assets/images/visitedprofile/profile.png') ?>" class="rounded-circle border border-3 border-secondary mb-2" alt="..."></a>
        </div>
      </div>

      <div class="col-md p-5 d-flex justify-content-center align-items-center">
        <p class="lead align-center">

        <form method="post" action="<?= base_url('updateprofile/updateusername') ?>" autocomplete="off">   
          <!-- Username -->
          <div class="mb-3 text-start text-secondary" style="width: 600px;">
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







  </div>
</section>

<style>
  .scrollspy-example {
    height: 300px;
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

</style>