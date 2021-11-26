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
    <title>Verification</title>
</head>
<body style="background-color: #e9ecef;">
    <nav class="navbar sticky-top navbar-expand-md bg-dark navbar-dark py-3">
        <div class="container">
          <a href="<?php echo base_url(); ?>home" class="navbar-brand">Virtual Diary</a>        
</div>
</nav>  
<section id="learn" class="p-5">
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
                                    

                                <button class="input-group-text"style="background-color:#ced4da;" id="basic-addon2">Resend</button>
                                <span class="text-danger"><?php echo form_error('ver_code'); ?></span>
                              </div>   
                    
                        </div>
                        <button type="button" style="background-color: #f0b63a;" class="btn-lg border border-3 border-dark me-2"><a style="text-decoration: none; color: #212529;"> Verify</a></button>
                        <button type="button" style="background-color: #f0b63a;" class="btn-lg border border-3 border-dark"><a style="text-decoration: none; color: #212529;" href="<?php echo base_url(); ?>registration"> Back</a></button>                    </form>
                    </form>                
                </p>
            </div>

        </div>

    </div>
</section>

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