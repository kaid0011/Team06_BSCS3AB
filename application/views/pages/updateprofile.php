<section style="background-color: #e9ecef; min-height: 75vh; padding-top: 80px">
    <div class="container">
        <!--div class="p-5 text-center bg-image" style="background-image: url('imgs/white.png'); height: 300px; width: auto;"-->
        <div>
        
            <div class="d-flex justify-content-center align-items-center h-100 ms-5 me-5">
                <div class="text-white">
                    <h1 class="h1 mb-4 pt-1 text-dark">Update Profile</h1>
                    <div class="d-flex">  
                        <a href="#"><img src="<?= base_url('assets/images/visitedprofile/profile.png') ?>" class="rounded-circle ms-5 border border-3 border-secondary mb-2" alt="..."></a>
                    </div>
                </div>
            </div>

            <!--Update Profile-->
            <div class="d-flex justify-content-center">
                <div class="col-md p-5">
            
                    <p class="lead">
                    <form method="post" action="<?= base_url('updateprofile') ?>" autocomplete="off">
                        <!-- Username -->
                        <div class="mb-3">
                        <label for="exampleInputlastname1" class="form-label">Username</label>
                        <input type="text" class="form-control mb-1" id="examplelastname1" aria-describedby="emailHelp" name="userName" value="<?php echo set_value('userName'); ?>" />
                        
                        <!-- Display Name -->
                        <div class="mb-3">
                        <label for="examplefirstname1" class="form-label">Display Name</label>
                        <input type="text" class="form-control mb-1" id="exampleInputlastname1" aria-describedby="emailHelp" name="displayName" value="<?php echo set_value('displayName'); ?>" />
                    
                        <!-- E-mail Address -->
                        <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">E-mail Address</label>
                        <input type="email" class="form-control mb-1" id="exampleInputEmail1" aria-describedby="emailHelp" name="email" value="<?php echo set_value('email'); ?>" autocomplete="off" />
                    
                        <!-- Password -->
                        <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Old Password</label>
                        <input type="password" class="form-control mb-1" id="exampleInputPassword1" name="oldpassword" value="<?php echo set_value('password'); ?>" autocomplete="off" />
                        
                        <!-- Confirm Password -->
                        <div class="mb-3">
                        <label for="exampleInputconfirmpassword1" class="form-label">New Password</label>
                        <input type="password" class="form-control mb-1" id="exampleInputconfirmpassword1" name="newpassword" value="<?php echo set_value('confirm_password'); ?>" />
                        
                        
                        </div>
                        </div>
                        </div>
                        </div>
                        </div>

                        <!-- Update Button -->
                        <input type="submit" name="signupbtn" value="Update" style="background-color: #f0b63a;" class="float-end btn-lg border border-3 border-dark"></input>

                    </form>
                    </p>
                </div>
            </div>

        </div>
    </div>
</section>