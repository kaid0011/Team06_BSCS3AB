<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.4/css/fontawesome.min.css" integrity="sha384-jLKHWM3JRmfMU0A5x5AkjWkw/EYfGUAGagvnfryNV3F9VqM98XiIH7VBGVoxVSc7" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;500;600&display=swap" rel="stylesheet"> 
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    <title>Diary ni Kim</title>
</head>
<body>
<!--navbar section-->
    <nav class="navbar navbar-expand-md bg-dark navbar-dark py-3">
        <div class="container">
            <a href="<?php echo base_url(); ?>" class="navbar-brand">Diary ni Kim</a>
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
                        <a href="<?php echo base_url(); ?>registration" class="nav-link text-light">Register</a>
                    </li>
                    <li class="nav-item">
                        <a href="<?php echo base_url(); ?>login" class="nav-link text-light">Log In</a>
                    </li>
                    <li class="nav-item">
                        <a href="#aboutUs" class="nav-link text-light">About Us</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
<!-- end of navbar section -->
<!-- header -->
<section class="bg-dark text-light p-5 text-center text-sm-start">
    <div class="container">
        <div class="d-sm-flex align-items-center justify-content-between">
            <div class="lead my-4">
                <h1>Keep track your <span class="text-info"> Daily Life</span></h1>
                <p style="font-family: 'sans-serif', sans-serif;">
                    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Corrupti ullam rerum reprehenderit tenetur, omnis recusandae nisi fuga nobis accusantium itaque impedit eligendi molestias. Impedit cupiditate repellat voluptatibus a optio magni!
                </p>
                <a href=""><button class="btn btn-warning btn-lg">Learn More</button></a>
            </div>
            <img class="img-fluid w-50 d-none d-sm-block" src="./homepagelogo.svg" alt=""/>
        </div>
    </div>
</section>
<!-- end of header -->
<!-- Card Section  -->
<section class="p-5" style="background-color: #e9ecef;">
    <div class="display-1 text-center p-4 fw-normal" style="color: #329bba;">Features</div>
    <div class="container">
        <div class="row text-center g-4">
            <div class="col-md">
                <div class="card bg-dark text-light">
                    <div class="card-body text-center">
                        <div class="h1 mb-3">
                            <i class="bi bi-book-half"></i>
                        </div>
                        <h3 class="card-title text-light">
                            Public Notebook
                        </h3>
                        <p class="card-text">
                            Everyone can see your post
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md ">
                <div class="card bg-dark text-light">
                    <div class="card-body text-center">
                        <div class="h1 mb-3">
                            <i class="bi bi-book"></i>
                        </div>
                        <h3 class="card-title text-light">
                            Private Notebook
                        </h3>
                        <p class="card-text">
                            Only you can access this Section
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md ">
                <div class="card bg-dark text-light">
                    <div class="card-body text-center">
                        <div class="h1 mb-3">
                            <i class="bi bi-calendar"></i>
                        </div>
                        <h3 class="card-title text-light">
                            Sticky Notes Wall
                        </h3>
                        <p class="card-text">
                            Public anonymous posting area
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="mb-4"></div>
        <div class="row text-center g-4">
            <div class="col-md">
                <div class="card bg-dark text-light">
                    <div class="card-body text-center">
                        <div class="h1 mb-3">
                            <i class="bi bi-emoji-heart-eyes"></i>
                        </div>
                        <h3 class="card-title text-light">
                            Reactions
                        </h3>
                        <p class="card-text">
                            You can react  in styles to other user post and Stickynotes
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md ">
                <div class="card bg-dark text-light">
                    <div class="card-body text-center">
                        <div class="h1 mb-3">
                            <i class="bi bi-chat-quote"></i>
                        </div>
                        <h3 class="card-title text-light">
                            Discussion
                        </h3>
                        <p class="card-text">
                            Forum for different topics you might be interested
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md ">
                <div class="card bg-dark text-light">
                    <div class="card-body text-center">
                        <div class="h1 mb-3">
                            <i class="bi bi-emoji-angry"></i>
                        </div>
                        <h3 class="card-title text-light">
                            Report
                        </h3>
                        <p class="card-text">
                            We care about you, we want to maintain a Toxic free website!
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- end of features -->
<!-- about creators -->
<section id="aboutUs" class="p-5 bg-dark">
    <div class="container">
        <div class="h1 text-center p-4 text-warning">About Developers</div>
        <p class="lead text-center mb-5 text-light">
            The developers consist of aspiring third year students of the Technological University of the Philippines - Manila under the course of BS in Computer Science (2021-2022)
        </p>
        <div class="row g-4 justify-content-center">
            <div class="col-md-4 col-lg-3">
                <div class="card bg-dark">
                    <div class="card-body text-center">
                        <img src="assets/images/home/guevarra.jpg" class="rounded-circle mb-3 img-fluid" style=" border: 5px solid #333333; 
                        outline: 5px solid #5bc0de ;" alt="guevarra">
                        <h4 class="card-title mb-3 text-light">Ezekiel <br> Guevarra <br> <span class="h6 text-warning mb-3">Front-end Developer</span></h4>
                        <p class="card-text text-light">Graduated in Lolo Karding Bilyaran ahahahahah ahhahaha</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-lg-3">
                <div class="card bg-dark">
                    <div class="card-body text-center">
                        <img src="assets/images/home/bagasona.jpg" class="rounded-circle mb-3 img-fluid" style=" border: 5px solid #333333; 
                        outline: 5px solid #5bc0de ;" alt="bagasona">
                        <h4 class="card-title mb-3 text-light">Kim Dianne Bagasona <br> <span class="h6 text-warning mb-3">Full Stack Developer</span></h4>
                        <p class="card-text text-light">Graduated in Lolo Karding Bilyaran ahahahahah ahhahaha</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-lg-3">
                <div class="card bg-dark">
                    <div class="card-body text-center">
                        <img src="assets/images/home/romero.jpg" class="rounded-circle mb-3 img-fluid" style=" border: 5px solid #333333; 
                        outline: 5px solid #5bc0de ;" alt="romero">
                        <h4 class="card-title mb-3 text-light">Allana <br> Romero <br> <span class="h6 text-warning mb-3">Back-end Developer</span></h4>
                        <p class="card-text text-light">Graduated in Lolo Karding Bilyaran ahahahahah ahhahaha</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-lg-3">
                <div class="card bg-dark">
                    <div class="card-body text-center">
                        <img src="assets/images/home/yusoph.jpg" class="rounded-circle mb-3 img-fluid" style=" border: 5px solid #333333; 
                        outline: 5px solid #5bc0de ;" alt="jihad">
                        <h4 class="card-title mb-3 text-light">Jihad <br> Yusoph <br> <span class="h6 text-warning mb-3">Front-end Developer</span></h4>
                        <p class="card-text text-light">Graduated in Lolo Karding Bilyaran ahahahahah ahhahaha</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-lg-3">
                <div class="card bg-dark">
                    <div class="card-body text-center">
                        <img src="assets/images/home/camanag.jpg" class="rounded-circle mb-3 img-fluid" style=" border: 5px solid #333333; 
                        outline: 5px solid #5bc0de ;" alt="camanag">
                        <h4 class="card-title mb-3 text-light">Christopher <br> Camañag <br> <span class="h6 text-warning mb-3">Back-end Developer</span></h4>
                        <p class="card-text text-light">Graduated in Lolo Karding Bilyaran ahahahahah ahhahaha</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-lg-3">
                <div class="card bg-dark">
                    <div class="card-body text-center">
                        <img src="assets/images/home/pinpin.jpg" class="rounded-circle mb-3 img-fluid" style=" border: 5px solid #333333; 
                        outline: 5px solid #5bc0de ;" alt="pinpin">
                        <h4 class="card-title mb-3 text-light">Marshal Amieron <br> Pinpin <br> <span class="h6 text-warning mb-3">Back-end Developer</span></h4>
                        <p class="card-text text-light">Graduated in Lolo Karding Bilyaran ahahahahah ahhahaha</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-lg-3">
                <div class="card bg-dark">
                    <div class="card-body text-center">
                        <img src="assets/images/home/estrella.jpg" class="rounded-circle mb-3 img-fluid" style=" border: 5px solid #333333; 
                        outline: 5px solid #5bc0de ;" alt="estrella">
                        <h4 class="card-title mb-3 text-light">Joana Marie <br> Estrella <br> <span class="h6 text-warning mb-3">Back-end Developer</span></h4>
                        <p class="card-text text-light">Graduated in Lolo Karding Bilyaran ahahahahah ahhahaha</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- end of about creators -->
<!-- frequently ask question -->
<section id="question" class="p-5" style="background-color: #e9ecef;">
    <div class="display-5 text-center p-4  text-dark fw-normal">Frequently Asked Question</div>
    <div class="accordion accordion-flush" id="accordionFlushExample">
        <!-- question#1 -->
        <div class="accordion-item">
          <h2 class="accordion-header" id="flush-headingOne">
            <button class="accordion-button collapsed text-dark border border-3 border-dark mb-1" style="background-color: #f0b63a;" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne">
              How do I sign up?
            </button>
          </h2>
          <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
            <div class="accordion-body">Just Click the <span class="text-primary">register</span> button at the navbar section to create account.</div>
          </div>
        </div>
        <!-- question#2 -->
        <div class="accordion-item">
          <h2 class="accordion-header" id="flush-headingTwo">
            <button class="accordion-button collapsed text-dark border border-3 border-dark mb-1" style="background-color: #f0b63a;" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo">
              Do you have membership fee?
            </button>
          </h2>
          <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
            <div class="accordion-body">We want our website to be accessible for everyone, This is totally free!</div>
          </div>
        </div>
        <!-- question#3 -->
        <div class="accordion-item">
          <h2 class="accordion-header" id="flush-headingThree">
            <button class="accordion-button collapsed text-dark border border-3 border-dark mb-1" style="background-color: #f0b63a;" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree">
                Is our Data on this Website Secure?
            </button>
          </h2>
          <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
            <div class="accordion-body">We care about our user, we make sure that all user data is secure!</div>
          </div>
        </div>
      </div>
    </section>
<!-- end of questions   -->
<!-- footer  -->
<footer class="p-5 bg-dark text-light text-center position-relative">
    <div class="container">
        <p class="lead text-center">Copyright &copy; T6-2021. All Rights Reserved</p>
        <p>Ayala Blvd, Ermita, Manila, 1000 Metro Manila</p>
        <a href="#" class="position-absolute p-5 bottom-0 end-0">
            <i class="bi bi-arrow-up-circle h1" style="color: #329bba;"></i>
        </a>
    </div>
</footer>
<!-- bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>