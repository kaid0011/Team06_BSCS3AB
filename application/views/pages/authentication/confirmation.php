<section id="learn" class="p-5" style="background-color: #e9ecef; min-height: 75vh;">
    <div class="container">
        <div class="row align-items-center justify-content-between">
            <div class="col-md p-5 pt-9">
                <img src="assets/images/login/pic5.png" class="img-fluid" alt="">
            </div>
            <div class="col-lg p-5">
                <h1 class="h1 mb-5 pt-4 text-dark">Forgot Password</h1>
                <p class="lead"> 
                    <form>
                        <div class="mb-5">
                            <!-- We sent a confirmation -->
                            <label for="basic-url" class="form-label">We sent a confirmation code to your e-mail</label>
                            <div class="input-group input-group-lg">
                                <input type="text" class="form-control" placeholder="Enter confirmation code" aria-label="Enter Confirmation" aria-describedby="inputGroup-sizing-lg">
                                <!-- Resend Button -->
                                <button class="input-group-text"style="background-color:#ced4da;"  id="basic-addon2">Resend</button>
                            </div>   
                        </div>

                        <!-- Confirm Button -->
                        <button type="button" style="background-color: #f0b63a;" class="btn-lg border border-3 border-dark me-2"><a style="text-decoration: none; color: #212529;" href="<?php echo base_url(); ?>changepassword"> Confirm</a></button>
                        <!-- Back Button -->
                        <button type="button" style="background-color: #f0b63a;" class="btn-lg border border-3 border-dark"><a style="text-decoration: none; color: #212529;" href="<?php echo base_url(); ?>forgotpassword"> Back</a></button>
                    
                    </form>
                </p>
            </div>

        </div>

    </div>
</section>