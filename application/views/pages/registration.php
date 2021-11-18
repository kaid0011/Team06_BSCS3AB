<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css"/>
    
    <link rel="stylesheet" href="style.css">
    <title>Register</title>
</head>
<body style="background-color: #e9ecef;">

    <nav class="navbar sticky-top navbar-expand-md bg-dark navbar-dark py-3">
        <div class="container">
            <a href="<?php echo base_url(); ?>" class="navbar-brand">Virtual Diary</a>
            <button 
            class="navbar-toggler" 
            type="button" 
            data-bs-toggle="collapse" 
            data-bs-target="#navmenu"
            >
              <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navmenu">
            <ul class="navbar-nav ms-auto">
              <li class="nav-item">
                <p class="text-muted pt-2 mb-0">
                    Already have an account? <a href="<?php echo base_url(); ?>login" class="text-reset">Log In</a>.
                  </p>
              </li>
</div>
</nav>  
    <section id="learn" class="p-5">
        <div class="container">
            <div class="row align-items-center justify-content-between">
                <div class="col-md p-5 mt-0">
                    <img src="assets/images/registration/pic3.png" class="img-fluid" >
                </div>
                <div class="col-md p-5">

                    <h1 class="h1 mb-4 pt-4 text-dark">Registration</h1>

                    <p class="lead"> 
                        <form method="post" action="<?= base_url() ?>Register/validation" autocomplete="off">
                            <div class="mb-3">
                              <label for="exampleInputlastname1" class="form-label">Username</label>
                              <input type="text" class="form-control" id="examplelastname1" aria-describedby="emailHelp" name="userName"
                                value="<?php echo set_value('userName'); ?>" />
                                <span class="text-danger"><?php echo form_error('userName'); ?></span>

                            <div class="mb-3">
                              <label for="examplefirstname1" class="form-label">Display Name</label>
                              <input type="text" class="form-control" id="exampleInputlastname1" aria-describedby="emailHelp" name="displayName"
                                value="<?php echo set_value('displayName'); ?>" />
                                <span class="text-danger"><?php echo form_error('displayName'); ?></span>
                            
                            <div class="mb-3">
                              <label for="exampleInputEmail1" class="form-label">Email Address</label>
                              <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email"
                                value="<?php echo set_value('email'); ?>" autocomplete="off" />
                                <span class="text-danger"><?php echo form_error('email'); ?></span>                    
                            
                            <div class="mb-3">
                              <label for="exampleInputPassword1" class="form-label">Password</label>
                              <input type="password" class="form-control" id="exampleInputPassword1" name="password"
                                value="<?php echo set_value('password'); ?>" autocomplete="off" />
                                <span class="text-danger"><?php echo form_error('password'); ?></span>

                            <div class="mb-3">
                              <label for="exampleInputconfirmpassword1" class="form-label">Confirm Password</label>
                              <input type="password" class="form-control" id="exampleInputconfirmpassword1" name="confirm_password"
                                value="<?php echo set_value('confirm_password'); ?>" />
                                <span class="text-danger"><?php echo form_error('confirm_password'); ?></span>

                            </div>
                            <div class="mb-3">
                              
                              <label class="form-check-label" for="exampleCheck1"><p class="text-muted"> By signing up, you agree to the <a href="#" class="text-reset"> Terms of Service </a> and <a href="#" class="text-reset">Privacy Policy</a> </p></label>
                            </div>

                            <button type="submit" name="signupbtn" style="background-color: #f0b63a;" class="btn-lg border border-3 border-dark"><a style="text-decoration: none; color: #212529;"> Register</a></button>

                          </form>
                    </p>
                </div>

            </div>

        </div>
    </section>

    <!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>