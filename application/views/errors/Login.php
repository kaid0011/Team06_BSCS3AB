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
    <title>Log In</title>
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
                    No account yet? <a href="<?php echo base_url(); ?>registration" class="text-reset">Register</a> now.
                  </p>
              </li> //
</div>
</nav>  
    <section id="learn" class="p-5">
        <div class="container">
            <div class="row align-items-center justify-content-between">
                <div class="col-md p-5 pt-9">
                    <img src="assets/images/login/pic1.png" class="img-fluid" alt="">
                </div>
                <div class="col-md p-5">
                    <h1 class="h1 mb-4 pt-4 text-dark" >Log In</h1>

                    /////////////////////////////////////////
                    <?php

                    if($this->session->flashdata('message'))
                    {
                        echo'
                        <div class=alert alert-success">'.$this->session->flashdata("message").'</div>';
                        
                    }
                    
                    
                    ?>


                    /////////////////////////////////////////////





                    
                    <p class="lead"> 
                        <form method="post" action="<?php echo base_url();?>login/validation">
                            <div class="mb-5">
                                <label for="exampleInputusername1" class="form-label">Username</label>


                                <input type="text" name="userName" id="exampleusername1" class="form-control"
                                value="<?php echo set_value('userName');?>" aria-describedby="emailHelp"/>
                                <span class="text-danger"><?php echo form_error('userName');?></span>


                                <div class="mb-5">
                                    <label for="exampleInewPassword1" class="form-label"> Password</label>


                                    <input type="password" name="password" class="form-control" id="exampleInputPassword1"
                                    value="<?php echo set_value('password');?>"/> 
                                    <span class="text-danger"><?php echo form_error('password');?></span>


                                    <div class="mb-5" class=" ">
                                        <label class="text" for="exampleCheck1 ><a style="color:#329bba;" href="<?php echo base_url(); ?>forgotpassword">Forgot Password?</a> </label>
                                      </div>
                                </div>
                                <button type="submit" name="submit" style="background-color: #f0b63a;" class="btn-lg border border-3 border-dark"><a style="text-decoration: none; color: #212529;" href="<?php echo base_url(); ?>main"> Log In</a></button>
                           
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