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
    <title>Virtual Diary</title>
</head>
<body>
    <!--navbar section-->
    <nav class="navbar navbar-expand-lg navbar-light bg-dark ">
        <div class="container">
            <a href="#" class="navbar-brand mb-0 h1 text-light pe-5 me-5 "><img src="assets/images/vdLogo.png" height="40px"></a>
        <button type="button" 
        data-bs-toggle="collapse" 
        data-bs-target="#navbarNav" 
        class="navbar-toggler" 
        aria-controls="navbarNav" 
        aria-expanded="false" 
        aria-label="Toggle navigation">
        <span class="navbar-toggler-icon">  </span>
    </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <div class="form d-flex px-5 mx-5 col-sm-7">
                <input type="text" class="form-control me-2">
                <button type="submit" class="btn btn-outline btn-warning">Search</button>
            </div>
            <ul class="navbar-nav align-items-center navbar-right">
                <li class="navbar-item text-light px-5 ms-5">
                    <a href="#" class="nav-link text-light">Name <br><span class="text-secondary">Username</span> </a>
                </li>
                <li class="navbar-item dropdown">
                    <a href="#" 
                    class="nav-link dropdown-toggle text-white" 
                    id="navbarDropdown" 
                    role="button" 
                    data-bs-toggle="dropdown">
                    <i class="bi bi-person-circle h1" style="color: white;"></i>
                </a>
                    <ul class="dropdown-menu " aria-labelledby="navbarDropdown">
                        <li><a href="#" class="dropdown-item ">Edit Profile</a></li>
                        <li><a href="#" class="dropdown-item ">Logout</a></li>
                    </ul>
                </li>
            </ul>
        </div>
        </div>
    </nav>
<!-- end of navbar section -->
<!-- background -->
<div style="background-color: #ced4da;">
<section class="projects">
    <!-- <h1 class="display-3 text-dark fw-normal">Virtual Diary</h1>
    <p class="lead">Pindutin para malaman ang hinaharap</p> -->
    <div class="row pt-4">
        <div class="project-col">
            <img src="assets/images/baby.jpg" alt="project1">
            <div class="layer">
                <h3>rose <br> baby <br> blackpink</h3>
            </div>
        </div>
        <div class="project-col">
            <img src="assets/images/baby.jpg" alt="project2">
            <div class="layer">
                <h3>rose <br> baby <br> blackpink</h3>
            </div>
        </div>
        <div class="project-col">
            <img src="assets/images/baby.jpg" alt="project3">
            <div class="layer">
                <h3>rose <br> baby <br> blackpink</h3>
            </div>
        </div>
    </div>
</section>
</div>
<style>
    .projects {
  width: 80%;
  margin: auto;
  text-align: center;
  padding-top: 50px;
  height:100vh;
}
.project-col {
  flex-basis: 32%;
  border-radius: 10px;
  margin-bottom: 30px;
  position: relative;
  overflow: hidden;
}
.project-col img {
  width: 100%;
}
.layer {
  background: transparent;
  height: 100%;
  width: 100%;
  position: absolute;
  top: 0;
  left: 0;
  transition: 0.5s;
}
.layer:hover {
  background: rgba(68, 104, 101, 0.7);
}
.layer h3 {
  width: 100%;
  font-weight: 600;
  color: #edf0f1;
  font-size: 20px;
  bottom: 0;
  left: 50%;
  transform: translateX(-50%);
  position: absolute;
  opacity: 0;
  transition: 0.5s;
}
.layer:hover h3 {
  bottom: 49%;
  opacity: 1;
}
/* footer section */
.footer {
  background: #111;
  width: 100%;
  text-align: center;
  padding: 25px 0 10px 0;
}
.footer h4 {
  margin-bottom: 20px;
  margin-top: 15px;
  font-weight: 600;
  color: #edf0f1;
}
.footer fa {
  margin: 0 13px;
  cursor: pointer;
  padding: 18px 0;
}
.footer i {
  font-size: 20px;
}
.footerBot {
  background: #000;
  text-align: center;
}
.footerBot span {
  color: #a1e8cc;
}
.footer i {
  color: #edf0f1;
}
.icons a i:hover {
  color: #a1e8cc;
}
</style>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>