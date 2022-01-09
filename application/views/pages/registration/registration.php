<section id="learn" class="p-5" style="background-color: #e9ecef; min-height: 75vh;">
  <div class="container">
    <div class="row align-items-center justify-content-between">
      <div class="col-md p-0 mt-0 ">
        <img src="<?= base_url('assets/images/registration/pic3.png') ?>" class="img-fluid">
      </div>
      <div class="col-md p-5">
        <h1 class="h1 mb-4 pt-1 text-dark">Registration</h1>
        <p class="lead">
          <form method="post" action="<?= base_url('registration/validation') ?>" autocomplete="off">
            <!-- Username -->
            <div class="mb-3">
              <label for="exampleInputlastname1" class="form-label">Username</label>
              <input type="text" class="form-control mb-1" id="examplelastname1" aria-describedby="emailHelp" name="userName" value="<?php echo set_value('userName'); ?>" />
              <span class="text-danger"><?php echo form_error('userName'); ?></span> <!-- print error message if there is any -->
            
            <!-- Display Name -->
            <div class="mb-3">
              <label for="examplefirstname1" class="form-label">Display Name</label>
              <input type="text" class="form-control mb-1" id="exampleInputlastname1" aria-describedby="emailHelp" name="displayName" value="<?php echo set_value('displayName'); ?>" />
              <span class="text-danger"><?php echo form_error('displayName'); ?></span>
         
            <!-- E-mail Address -->
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">E-mail Address</label>
              <input type="email" class="form-control mb-1" id="exampleInputEmail1" aria-describedby="emailHelp" name="email" value="<?php echo set_value('email'); ?>" autocomplete="off" />
              <span class="text-danger"><?php echo form_error('email'); ?></span>
          
            <!-- Password -->
            <div class="mb-3">
              <label for="exampleInputPassword1" class="form-label">Password</label>
              <input type="password" class="form-control mb-1" id="exampleInputPassword1" name="password" value="<?php echo set_value('password'); ?>" autocomplete="off" />
              <span class="text-danger"><?php echo form_error('password'); ?></span>
            
            <!-- Confirm Password -->
            <div class="mb-3">
              <label for="exampleInputconfirmpassword1" class="form-label">Confirm Password</label>
              <input type="password" class="form-control mb-1" id="exampleInputconfirmpassword1" name="confirm_password" value="<?php echo set_value('confirm_password'); ?>" />
              <span class="text-danger"><?php echo form_error('confirm_password'); ?></span>
            
            
            <!-- By signing up -->
            <div class="mb-3">
              <label class="form-check-label" for="exampleCheck1">
                <p class="text-muted"> By signing up, you agree to the <a href="<?=base_url('registration/termsofservice')?>" class="text-reset"> Terms of Service </a> and <a href="<?=base_url('registration/privacypolicy')?>" class="text-reset">Privacy Policy</a> </p>
              </label>
            </div>
            </div>
            </div>
            </div>
            </div>
            </div>

            <!-- Register Button -->
            <input type="submit" name="signupbtn" value="Register" style="background-color: #f0b63a;" class="btn-lg border border-2 border-dark"></input>

          </form>
        </p>
      </div>

    </div>
  </div>
</section>