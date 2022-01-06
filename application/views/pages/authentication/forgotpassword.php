<section id="learn" class="p-5" style="background-color: #e9ecef; min-height: 75vh;">
    <div class="container">
        <div class="row align-items-center justify-content-between">
            <div class="col-md p-5 pt-9">
                <img src="<?= base_url('assets/images/login/pic6.png')?>" class="img-fluid" alt="">
            </div>
            <div class="col-lg p-5">
                <h1 class="h1 mb-5 pt-4 text-dark">Forgot Password</h1>
                <p class="lead"> 
                    <!-- PHP Error Message -->
                    <?php
                    if ($this->session->flashdata('message')) {
                        echo '<div class="alert alert-danger">' . $this->session->flashdata("message") . '</div>';
                    }
                    ?>
                    <form method="post" action="<?php echo base_url('forgotpassword/validation'); ?>">
                        <div class="mb-5">
                            <!-- Enter your E-mail Address-->
                            <label for="basic-url" class="form-label">Enter your E-mail Address</label>
                            <div class="input-group input-group-lg">
                                <input type="text" name="email" value="<?php echo set_value('email'); ?>" class="form-control" placeholder="Enter e-mail address" aria-label="Enter Confirmation" aria-describedby="inputGroup-sizing-lg">
                                <!-- Form Validation Error Message -->
                                <span class="text-danger"><?php echo form_error('email'); ?></span>
                            </div>   
                        </div>

                        <!-- Confirm Button -->
                        <input type="submit" name="action" value="Confirm" style="background-color: #f0b63a;" class="btn-lg border border-2 border-dark me-2"><a style="text-decoration: none; color: #212529;">
                        <!-- Back Button -->
                        <input type="submit" name="action" value="Back" style="background-color: #f0b63a;" class="btn-lg border border-2 border-dark"><a style="text-decoration: none; color: #212529;">
                   
                    </form>
                </p>
            </div>

        </div>
    </div>
</section>