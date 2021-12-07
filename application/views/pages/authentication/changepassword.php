<section id="learn" class="p-5" style="background-color: #e9ecef; min-height: 75vh;">
    <div class="container">
        <div class="row align-items-center justify-content-between">
            <div class="col-md p-5 ptt-9">
                <img src="<?= base_url('assets/images/login/pic4.png')?>" class="img-fluid" alt="">
            </div>
            <div class="col-md p-5">
                <h1 class="h1 mb-4 pt-4 text-dark">Change Password</h1>
                <p class="lead">
                    <form method="post" action="<?= base_url('changepassword/validation') ?>" autocomplete="off">
                        <div class="mb-5">
                            <!-- New Password -->
                            <label for="exampleInewPassword1" class="form-label"> New Password</label>
                            <input type="password" name="password" class="form-control" id="exampleInputPassword1">
                            <span class="text-danger"><?php echo form_error('password'); ?></span>
                            <!-- Confirm Password -->
                            <div class="mb-5">
                                <label for="exampleInewPassword1" class="form-label"> Confirm Password</label>
                                <input type="password" name="confirm_password" class="form-control" id="exampleInputPassword1">
                                <span class="text-danger"><?php echo form_error('confirm_password'); ?></span>
                            </div>
                            
                            <!-- Confirm -->
                            <input type="submit" value="Confirm" name ="action" style="background-color: #f0b63a;" class="btn-lg border border-3 border-dark me-2 "><a style="text-decoration: none; color: #212529;">
                            <!-- Back -->
                            <input type="submit" value="Back" name ="action" style="background-color: #f0b63a;" class="btn-lg border border-3 border-dark"><a style="text-decoration: none; color: #212529;">

                    </form>
                </p>
            </div>

        </div>
    </div>
</section>