<section id="learn" class="p-5" style="background-color: #e9ecef; min-height: 75vh;">
    <div class="container">
        <div class="row align-items-center justify-content-between">
            <div class="col-md pt-9">
                <img src="<?= base_url('assets/images/login/pic5.png') ?>" class="img-fluid" alt="">
            </div>
            <div class="col-lg p-5">
                <h1 class="h1 mb-5 pt-4 text-dark">Forgot Password</h1>
                <p class="lead"> 
                    <!-- display error message -->
                    <?php
                        if($this->session->flashdata('message'))
                        {
                            echo '<div class="alert alert-danger">'.$this->session->flashdata("message").'</div>';                            }
                    ?>
                    <!-- display error message -->
                    <form method="post" action="<?= base_url('confirmationfp/validation') ?>" autocomplete="off">
                        <div class="mb-5">
                            <!-- We sent a confirmation -->
                            <label for="basic-url" class="form-label">We sent a confirmation code to your e-mail</label>
                            <div class="input-group input-group-lg">
                                <input type="text" name="conf_code" class="form-control" placeholder="Enter confirmation code" aria-label="Enter Confirmation" aria-describedby="inputGroup-sizing-lg">
                                <!-- Resend Button -->
                                <input type="submit" value="Resend" name ="action" class="input-group-text"style="background-color:#ced4da;"  id="basic-addon2">
                            </div>   
                            <div class="text-danger"><?php echo form_error('conf_code'); ?></div>
                        </div>

                        <!-- Confirm Button -->
                        <input type="submit" value="Confirm" name ="action" style="background-color: #f0b63a;" class="btn-lg border border-2 border-dark me-2"><a style="text-decoration: none; color: #212529;">
                        <!-- Back Button -->
                        <input type="submit" value="Back" name ="action" style="background-color: #f0b63a;" class="btn-lg border border-2 border-dark"><a style="text-decoration: none; color: #212529;">
                    
                    </form>
                </p>
            </div>

        </div>

    </div>
</section>