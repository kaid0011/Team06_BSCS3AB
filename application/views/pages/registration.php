<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css"/>
    <link href="https://api.mapbox.com/mapbox-gl-js/v2.1.1/mapbox-gl.css" rel="stylesheet"/>
    <link rel="stylesheet" href="style.css">
    <title>Register</title>
</head>
<body style="background-color: #eeeeee;">

    <nav class="navbar navbar-expand-lg bg-dark navbar-dark py-3 fixed-top">
        <div class="container">
          <a href="<?php echo base_url(); ?>home" class="navbar-brand">Project logo</a>
          <div class="collapse navbar-collapse" id="navmenu">
            <ul class="navbar-nav ms-auto">
              <li class="nav-item">
                <p class="text-muted">
                    Already have an account? <a href="<?php echo base_url(); ?>login" class="text-reset">Log In</a>.
                  </p>
              </li>
</div>
</nav>  
    <section id="learn" class="p-5">
        <div class="container">
            <div class="row align-items-center justify-content-between">
                <div class="col-md p-5">
                    <img src="imgs/logo2.png" class="img-fluid" alt="">
                </div>
                <div class="col-md p-5">
                    <h1 class="h1 mb-5">Registration</h1>
                    <p class="lead"> 
                        <form action="<?php echo base_url(); ?>registration/validation" method="post">
                            <div class="mb-3">
                              <label for="exampleInputlastname1" class="form-label">Last Name</label>
                              <input type="text" class="form-control" id="examplelastname1" aria-describedby="emailHelp" name="user_lname" value="<?php echo set_value ('user_lname'); ?>">
                              <span class="text-danger"><?php echo form_error('user_lname'); ?></span>
                              
                              <div class="mb-3">
                             <label for="examplefirstname1" class="form-label">First Name</label>
                             <input type="text" class="form-control" id="exampleInputlastname1" aria-describedby="emailHelp" name="user_fname" value="<?php echo set_value ('user_fname'); ?>">
                              <span class="text-danger"><?php echo form_error('user_fname'); ?></span>
                              
                             <div class="mb-3">
                             <label for="exampleInputmiddlename1" class="form-label">Middle Name (Optional)</label>
                             <input type="text" class="form-control" id="exampleInputmiddlename1" aria-describedby="emailHelp">
                              
                             <div class="mb-3">
                             <label for="exampleInputEmail1" class="form-label">Email address</label>
                             <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="user_email" value="<?php echo set_value ('user_email'); ?>">
                              <span class="text-danger"><?php echo form_error('user_email'); ?></span>
                              <div class="mb-3">                      
                            
                              <div class="mb-3">
                              <label for="exampleInputPassword1" class="form-label">Password</label>
                              <input type="password" class="form-control" id="exampleInputPassword1" name="user_password" value="<?php echo set_value('user_password'); ?>">
                              <span class="text-danger"><?php echo form_error('user_password'); ?></span>
                            
                              <div class="mb-3">
                              <label for="exampleInputconfirmpassword1" class="form-label">Confirm Password</label>
                              <input type="password" class="form-control" id="exampleInputconfirmpassword1" >
                            </div>
                            <div class="mb-3">
                              
                              <label class="form-check-label" for="exampleCheck1"><p class="text-muted"> By signing up, you agree to the <a href="#" class="text-reset"> Terms of Service </a> and <a href="#" class="text-reset">Privacy Policy</a> </p></label>
                            </div>
                            <button type="submit" class="btn-lg btn-primary" name="register" value="Register">Submit</button>
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