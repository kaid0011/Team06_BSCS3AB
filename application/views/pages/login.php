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
<body style="background-color: #eeeeee;">

    <nav class="navbar navbar-expand-lg bg-dark navbar-dark py-3 fixed-top">
        <div class="container">
          <a href="<?php echo base_url(); ?>home" class="navbar-brand">Project logo</a>
          <div class="collapse navbar-collapse" id="navmenu">
            <ul class="navbar-nav ms-auto">
              <li class="nav-item">
                <p class="text-muted">
                    No account yet? <a href="<?php echo base_url(); ?>registration" class="text-reset">Register</a> now.
                  </p>
              </li>
</div>
</nav>  
    <section id="learn" class="p-5">
        <div class="container">
            <div class="row align-items-center justify-content-between">
                <div class="col-md p-5">
                    <img src="imgs/logo_6.png" class="img-fluid" alt="">
                </div>
                <div class="col-md p-5">
                    <h1 class="h1 mb-5">Log In</h1>
                    <p class="lead"> 
                        <form>
                            <div class="mb-5">
                                <label for="exampleInputusername1" class="form-label">Username</label>
                                <input type="text" class="form-control" id="exampleusername1" aria-describedby="emailHelp">
                                <div class="mb-5">
                                    <label for="exampleInewPassword1" class="form-label"> Password</label>
                                    <input type="password" class="form-control" id="exampleInputPassword1">
                                    <div class="mb-5" class=" ">
                                        <label class="text" for="exampleCheck1"><a href="#">Forgot Password?</a> </label>
                                      </div>
        
                                </div>
                            <button type="submit" class="btn-lg btn-primary">Log In</button>
                           
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