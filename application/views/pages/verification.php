<section id="learn" class="p-5" style="background-color: #e9ecef; min-height: 75vh;">
    <div class="container">
        <div class="row align-items-center justify-content-between">
            <div class="col-md p-5 mt-2">
                <img src="assets/images/registration/pic5.png" class="img-fluid" alt="">
            </div>
            <div class="col-lg p-5">
                <h1 class="h1 mb-5 pt-4 text-dark">Verification</h1>
                <p class="lead"> 
                    <form method="post" action="<?= base_url() ?>Verification/validation" autocomplete="off">
                       
                        <div class="mb-5">
                            <label for="basic-url" class="form-label">We sent a verification code to your e-mail</label>
                            <div class="input-group input-group-lg">
                                <input type="text" class="form-control" placeholder="Enter verification code" aria-label="Enter Verification" aria-describedby="inputGroup-sizing-lg"
                                    name="ver_code" value="<?php echo set_value('ver_code'); ?>">
                                <!-- Resend Button -->
                                <button class="input-group-text"style="background-color:#ced4da;" id="basic-addon2">Resend</button>
                                <span class="text-danger"><?php echo form_error('ver_code'); ?></span>
                            </div>   
                        </div>

                        <!-- Verify Button -->
                        <button type="button" style="background-color: #f0b63a;" class="btn-lg border border-3 border-dark me-2"><a style="text-decoration: none; color: #212529;"> Verify</a></button>
                        <!-- Back Button -->
                        <button type="button" style="background-color: #f0b63a;" class="btn-lg border border-3 border-dark"><a style="text-decoration: none; color: #212529;" href="<?php echo base_url(); ?>registration"> Back</a></button>                    
                    
                    </form>              
                </p>
            </div>

        </div>
    </div>
</section>