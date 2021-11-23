<!--navbar main -->
    <nav class="navbar navbar-expand-lg navbar-light bg-dark ">
        <div class="container">
            <a href="#" class="navbar-brand mr-auto h1 text-light"><img src="<?=base_url('assets/images/vdLogo.png')?>" height="40px"></a>
        <button type="button" 
        data-bs-toggle="collapse" 
        data-bs-target="#navbarNav" 
        class="navbar-toggler custom-toggler" 
        aria-controls="navbarNav" 
        aria-expanded="false" 
        aria-label="Toggle navigation">
        <span class="navbar-toggler-icon">  </span>
    </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <form action="<?= base_url() ?>Main/finduser" method ="post" class="form d-flex mx-auto col-sm-7"> <!--changes-->
                <input type="text" name="userName" class="form-control me-2">
                <button type="submit" class="btn btn-outline btn-warning">Search</button>
            </form>                                                 <!--changes-->

            <ul class="navbar-nav align-items-center ml-auto">
                <li class="navbar-item text-light">
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
<section class="projects pb-5">
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
        <div class="project-col res">
            <img src="assets/images/baby.jpg" alt="project3">
            <div class="layer">
                <h3>rose <br> baby <br> blackpink</h3>
            </div>
        </div>
    </div>
</section>
</div>
<style>
@media (max-width: 700px) {
  .row {
    flex-direction: column;
  }
}
.custom-toggler.navbar-toggler {
            border-color: white;
        } 
        .custom-toggler .navbar-toggler-icon {
            background-image: url(
"data:image/svg+xml;charset=utf8,%3Csvg viewBox='0 0 32 32' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath stroke='rgba(255, 255, 255, 1)' stroke-width='2' stroke-linecap='round' stroke-miterlimit='10' d='M4 8h24M4 16h24M4 24h24'/%3E%3C/svg%3E");
        }
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
</style>