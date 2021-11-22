<!--navbar main -->
    <nav class="navbar navbar-expand-lg navbar-light bg-dark ">
        <div class="container">
            <a href="#" class="navbar-brand mb-0 h1 text-light pe-5 me-5 "><img src="<?=base_url('assets/images/vdLogo.png')?>" height="40px"></a>
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
            <form action="<?= base_url() ?>Main/finduser" method ="post" class="form d-flex px-5 mx-5 col-sm-7"> <!--changes-->
                <input type="text" name="userName" class="form-control me-2">
                <button type="submit" class="btn btn-outline btn-warning">Search</button>
            </form>                                                 <!--changes-->
            <ul class="navbar-nav align-items-center navbar-right">
                <li class="navbar-item text-light px-5 ms-5">
                    <a href="#" class="nav-link text-light">Name<br><span class="text-secondary">Username</span> </a>
                </li>
                <li class="navbar-item dropdown">
                    <a href="#" 
                    class="nav-link dropdown-toggle text-white" 
                    id="navbarDropdown" 
                    role="button" 
                    data-bs-toggle="dropdown">
                    <i class="bi bi-person-circle h1" style="color: white;"></i>
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a href="#" class="dropdown-item ">Edit Profile</a></li>
                        <li><a href="<?php echo base_url();?>Login/logout" class="dropdown-item ">Logout</a></li>
                    </ul>
                </li>
            </ul>
        </div>
        </div>
    </nav>
<!--navbar main -->

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