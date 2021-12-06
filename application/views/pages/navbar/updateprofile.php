<section class="p-5" style="background-color: #e9ecef; min-height: 75vh;">
    <div class="container">
        <h1 class="h1 mb-4 pt-1 text-dark text-center">Update Profile</h1>
        <div class="row align-items-center justify-content-between">
            <div class="col ps-sm-5 pb-sm-5">
            <a href="#"><img src="<?= base_url('assets/images/visitedprofile/profile.png') ?>" class="rounded-circle border border-3 border-secondary mb-2 mx-auto d-block pic" alt="..."></a>
            </div>
            <div class="col-md p-5">
                <p class="lead">
                    <form method="post" action="<?= base_url('updateprofile/updatedprofile') ?>" autocomplete="off">
                    <!-- Username -->
                        <div class="mb-3">
                            <label for="exampleInputlastname1" class="form-label">Username</label>
                            <input type="text" class="form-control mb-1" id="examplelastname1" aria-describedby="emailHelp" name="userName" value="<?php echo $this->session->userdata('userName')?>"></input>
                            <span class="text-danger"><?php echo form_error('userName'); ?></span> <!-- print error message if there is any -->
                        </div>
                    <!--Display Name -->
                    <div class="mb-3">
                        <label for="" class="form-label"> Display Name</label>
                        <input type="text" class="form-control mb-1" id="exampleInputlastname1" aria-describedby="emailHelp" name="displayName" value="<?php echo $this->session->userdata('displayName'); ?>" />
                        <span class="text-danger"><?php echo form_error('displayName'); ?></span>
                    </div>
                    <!-- Email Address -->
                        <div class="mb-1">
                            <label for="" class="form-label"> Email Address</label>
                            <input type="email" class="form-control mb-1" id="exampleInputEmail1" aria-describedby="emailHelp" name="email" value="<?php echo $this->session->userdata('email');?>" autocomplete="off" />
                            <span class="text-danger"><?php echo form_error('email'); ?></span>
                        </div>
              
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
              
                    <!-- Change Password -->
                        <div class="mb-3">
                            <input type="submit" name="action" value="Change Password" class="btn btn-sm text-secondary mt-1" style="text-decoration: underline; margin-top: -15px;"></input>
                        </div>
                  <!-- Deactivate Account Button -->
                      <input type="submit" name="action" value="Deactivate Account" class="btn btn-sm text-secondary mt-1" style="text-decoration: underline; margin-top: -15px;"></input>
             
                  <!-- Update Button -->
                        <div class="mb-3">
                            <input type="submit" name="action" value="Update" style="background-color: #f0b63a;" class="btn btn-sm border border-3 border-dark btn-end p-2"></input>
                        </div>
                    </form>
                </p>
            </div>
        </div>
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