<section id="learn" class="p-5" style="background-color: #e9ecef; min-height: 75vh;">
    <div class="container">
        <div class="row align-items-center justify-content-between">
            <div class="col-md p-0 pt-9">
                <img src="<?= base_url('assets/images/login/pic1.png') ?>" class="img-fluid" alt="">
            </div>
            <div class="col-md p-5">
                <h1 class="h1 mb-4 pt-4 text-dark">Log In</h1>
                <p class="lead">
                    <!-- PHP Error Message -->
                    <?php
                    if ($this->session->flashdata('message')) {
                        echo '<div class="alert alert-danger">' . $this->session->flashdata("message") . '</div>';
                    }
                    ?>
                    <form method="post" action="<?php echo base_url('login/validation'); ?>">
                        <!-- Username -->
                        <div class="mb-5">
                            <label for="exampleInputusername1" class="form-label">Username</label>
                            <input type="text" name="userName" id="exampleusername1" class="form-control mb-1" aria-describedby="emailHelp" />
                            <span class="text-danger"><?php echo form_error('userName'); ?></span>
                        
                        <!-- Password -->
                        <div class="mb-5">
                            <label for="exampleInewPassword1" class="form-label"> Password</label>
                            <input type="password" name="password" class="form-control mb-1" id="exampleInputPassword1" />
                            <span class="text-danger"><?php echo form_error('password'); ?></span>
                        
                        <!-- Forgot Password -->
                        <div class="mb-5" class=" ">
                            <label class="text" for="exampleCheck1" ><a style=" color:#329bba;" href="<?php echo base_url('forgotpassword'); ?>">Forgot Password?</a></label>
                        </div>
                        </div>
                        
                        <!-- Log In Button -->
                        <input type="submit" name="action" value="Log In" style="background-color: #f0b63a;" class="btn-lg border border-3 border-dark">
                        
                    </form>
                </p>
            </div>
        </div>
    </div>
</section>