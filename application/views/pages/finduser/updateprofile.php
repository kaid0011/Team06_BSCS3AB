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
        <form method="post" action="<?= base_url('updateprofile') ?>" autocomplete="off">
          <!-- Username -->
          <div class="mb-3 text-start text-secondary" style="width: 600px;">
            <label for="exampleInputlastname1" class="form-label ps-2">Username</label>
            <input type="text" class="form-control mb-1" id="examplelastname1" aria-describedby="emailHelp" name="userName" value="<?php echo set_value('userName'); ?>" />
            <span class="text-danger"><?php echo form_error('userName'); ?></span> <!-- print error message if there is any -->

            <!-- Display Name -->
            <div class="mb-3">
              <label for="examplefirstname1" class="form-label ps-2">Display Name</label>
              <input type="text" class="form-control mb-1" id="exampleInputlastname1" aria-describedby="emailHelp" name="displayName" value="<?php echo set_value('displayName'); ?>" />
              <span class="text-danger"><?php echo form_error('displayName'); ?></span>

              <!-- E-mail Address -->
              <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label ps-2">E-mail Address</label>
                <input type="email" class="form-control mb-1" id="exampleInputEmail1" aria-describedby="emailHelp" name="email" value="<?php echo set_value('email'); ?>" autocomplete="off" />
                <span class="text-danger"><?php echo form_error('email'); ?></span>

                <!-- Password 
            <div class="mb-3">
              <label for="exampleInputPassword1" class="form-label">Password</label>
              <input type="password" class="form-control mb-1" id="exampleInputPassword1" name="password" value="<?php echo set_value('password'); ?>" autocomplete="off" />
              <span class="text-danger"><?php echo form_error('password'); ?></span>
            
             Confirm Password 
            <div class="mb-3">
              <label for="exampleInputconfirmpassword1" class="form-label">Confirm Password</label>
              <input type="password" class="form-control mb-1" id="exampleInputconfirmpassword1" name="confirm_password" value="<?php echo set_value('confirm_password'); ?>" />
              <span class="text-danger"><?php echo form_error('confirm_password'); ?></span>
           -->

              </div>
            </div>
          </div>
  <div class="col-md d-flex justify-content-start align-items-center">
          <!-- Change Password Button -->
  <input type="submit" name="changepassbtn" value="Change Password" class="btn btn-sm text-secondary" style="text-decoration: underline; margin-top: -15px;"></input>
  </div>
  <div class="col-md pt-3 d-flex justify-content-end align-items-center">
   <!-- Register Button -->
  <input type="submit" name="updatebtn" value="Update" style="background-color: #f0b63a;" class="btn btn-sm border border-3 border-dark btn-end p-2"></input>
  </div>
      </div>
    </div>
  </div>

  
 

  </form>
  </p>
  </div>







  </div>
  </div>

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

  /*  .card-text {
    min-height: 200px;
  }
  .tag {
    width: 100px;
    height: 100px;
    background: rgb(131, 126, 122);
    position: relative;
    top: 500px;
    left: 800px;
    border-radius: 50%;
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
  .active h4 {
    font-size: 20px;
    margin-left: 10px;
    color: #fff;
  }
  .received-chats-img {
    width: 30px;
    float: left;
  }
  .outgoing-chats-img {
    width: 30px;
    float: right;
  }
*/
</style>