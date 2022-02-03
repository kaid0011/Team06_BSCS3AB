<?php
switch ($navbar) {
    case 'home':
?>
        <!-- Navbar Home Section-->
        <nav class="navbar sticky-top navbar-expand-md bg-dark navbar-dark py-3">
            <div class="container">

                <!-- Logo Image-->
                <a href="<?= base_url() ?>" class="navbar-brand logo"><img src="<?= base_url('assets/images/vdLogo.png')?>" alt="vd logo" height="40px" /></a>

                <!-- Hamburger Menu -->
                <button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#navmenu">
                    <span class="toggler-icon top-bar"></span>
                    <span class="toggler-icon middle-bar"></span>
                    <span class="toggler-icon bottom-bar"></span>
                </button>

                <div class="collapse navbar-collapse" id="navmenu">
                    <ul class="navbar-nav ms-auto">
                        <!-- Register -->
                        <li class="nav-item">
                            <a href="<?php echo base_url('registration') ?>" class="nav-link text-light ms-4 pt-3"><h6>Register</h6></a>
                        </li>
                        <!-- Log In -->
                        <li class="nav-item">
                            <a href="<?php echo base_url('login') ?>" class="nav-link text-light ms-4 pt-3"><h6>Log In</h6></a>
                        </li>
                        <!-- About Us -->
                        <li class="nav-item">
                            <a href="#aboutUs" class="nav-link text-light ms-4 pe-0 pt-3"><h6>About Us</h6></a>
                        </li>
                    </ul>
                </div>

            </div>
        </nav>
        <!-- (end) Navbar Home Section -->

    <?php
        break;
    case 'registration':
    ?>
        <!-- Navbar Registration Section -->
        <nav class="navbar sticky-top navbar-expand-md bg-dark navbar-dark py-3">
            <div class="container">

                <!-- Logo Image -->
                <a href="<?= base_url() ?>" class="navbar-brand"><img src="<?= base_url('assets/images/vdLogo.png') ?>" alt="vd logo" height="40px" /></a>

                <!-- Hamburger Menu -->
                <button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#navmenu">
                    <span class="toggler-icon top-bar"></span>
                    <span class="toggler-icon middle-bar"></span>
                    <span class="toggler-icon bottom-bar"></span>
                </button>

                <div class="collapse navbar-collapse" id="navmenu">
                    <ul class="navbar-nav ms-auto">
                        <!-- Register -->
                        <li class="nav-item">
                            <h6 class="text-light pt-1 mb-0">Already have an account? <a href="<?php echo base_url('login'); ?>" class="text-reset">Log In</a></h6>
                        </li>
                    </ul>
                </div>

            </div>
        </nav>
        <!-- (end) Navbar Registration Section -->

    <?php
        break;
    case 'login':
    ?>
        <!-- Navbar Log In Section -->
        <nav class="navbar sticky-top navbar-expand-md bg-dark navbar-dark py-3">
            <div class="container">

                <!-- Logo Image -->
                <a href="<?= base_url() ?>" class="navbar-brand"><img src="<?= base_url('assets/images/vdLogo.png') ?>" alt="vd logo" height="40px" /></a>

                <!-- Hamburger Menu -->
                <button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#navmenu">
                    <span class="toggler-icon top-bar"></span>
                    <span class="toggler-icon middle-bar"></span>
                    <span class="toggler-icon bottom-bar"></span>
                </button>

                <div class="collapse navbar-collapse" id="navmenu">
                    <ul class="navbar-nav ms-auto">
                        <!-- Register -->
                        <li class="nav-item">
                            <h6 class="text-light pt-1 mb-0">No account yet? <a href="<?php echo base_url('registration'); ?>" class="text-reset">Register</a></h6>
                        </li>
                    </ul>
                </div>

            </div>
        </nav>
        <!-- (end) Navbar Log In Section -->

    <?php
        break;
    case 'main':
    default:
    ?>
        <!-- Navbar Main Section -->
         <nav class="navbar sticky-top navbar-expand-lg navbar-dark bg-dark py-3">
            <div class="container">

                <ul class="navbar-nav align-items-center navbar-right w-100">
                    <!-- Logo Image -->
                    <div class="roww">
                    <li class="block1">
                        <?php
                            if($this->session->userdata('userName') == 'admin')
                            {
                        ?>
                            <a href="<?= base_url('supportteam') ?>" class="navbar-brand h1 text-light mr-auto">
                        <?php
                            }
                            else
                            {
                        ?>
                            <a href="<?= base_url('mainpage') ?>" class="navbar-brand h1 text-light mr-auto">
                        <?php
                            }
                        ?>
                            <picture>
                                <source media="(max-width: 990px)" srcset="<?= base_url('assets/images/vd_Logo.png') ?>">
                                <img src="<?= base_url('assets/images/vdLogo.png') ?>" alt="vd logo" height="40px" />
                            </picture>
                    </a>
                    </li>

                    <!-- Toggler Menu -->
                        <!-- Search Bar -->
                        <button class="navbar-toggler block2 mx-auto resp align-items-center" style="color: white; width:100px;" data-bs-toggle="collapse" data-bs-target="#searcharea" class="navbar-toggler" aria-controls="searcharea" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="bi bi-search"></span>
                        </button>

                        <!-- Hamburger Menu -->
                        <button class="navbar-toggler collapsed block3" data-bs-toggle="collapse" data-bs-target="#navbarNav" class="navbar-toggler" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="toggler-icon top-bar"></span>
                            <span class="toggler-icon middle-bar"></span>
                            <span class="toggler-icon bottom-bar"></span>
                        </button>
                    </div>

                    <div class="collapse navbar-collapse ml-auto " id="searcharea" style="margin-left: 170px; margin-right: 100px;">
                        <!-- Search (Find User) -->
                        <li class="w-100">
                            <form action="<?= base_url(); ?>mainpage/searchuser/" method="get" class="form d-flex" >
                                <!--changes-->
                                <input type="text" name="userName" id="name" class="form-control me-2">
                                <button type="submit" style="background-color: #f0b63a;" class="btn border border-2 border-dark">Search</button>
                            </form>
                        </li>
                    </div>

                    <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                        <li class="navbar-item text-light me-2">
                            <!-- added echo to display user info -->
                            <a href="#" class="nav-link text-light" style="font-size: 15px; font-weight: 300;"> <?php echo $this->session->userdata('displayName'); ?> <br><span class="text-secondary"> <?php echo $this->session->userdata('userName'); ?> </span>
                                <!-- added echo to display user info -->
                            </a>
                        </li>
                        <li class="mb-1">
                        <?php $source = $this->UpdateProfile_model->getImage();?>
                            <a href="#"><img style="width: 50px; height: 50px; border-radius: 100px; object-fit: cover;" ; src="<?= base_url($source) ?>"  alt="user profile"></a>
                        </li>
                        
                         <li class="ms-2 navbar-item dropdown mb-2">
                            <a href="#" class="nav-link dropdown-toggle text-white" id="navbarDropdown" role="button" data-bs-toggle="dropdown">
                            </a>
                            <ul class="dropdown-menu " aria-labelledby="navbarDropdown">
                                <li><a href="<?= base_url('updateprofile') ?>" class="dropdown-item ">Edit Profile</a></li>
                                <li><a href="<?= base_url('logout') ?>" class="dropdown-item ">Logout</a></li>
                            </ul>
                        </li>
                    </div>
                </ul>


            </div>
        </nav>
        <!-- (end) Navbar Main Section -->

<?php
        break;
}
?>
<style>
.navbar-toggler {
    border: 0 !important;
}
.navbar-toggler:focus,
.navbar-toggler:active,
.navbar-toggler-icon:focus {
    outline: none !important;
    box-shadow: none !important;
    border: 0 !important;
}
.toggler-icon{
    width: 30px;
    height: 3px;
    background-color: #f0b63a;
    display: block;
    transition: all 0.2s;
}
.middle-bar{
    margin: 5px auto;
}
.navbar-toggler .top-bar {
    transform: rotate(45deg);
    transform-origin: 10% 10%;
}

.navbar-toggler .middle-bar {
    opacity: 0;
    filter: alpha(opacity=0);
}

.navbar-toggler .bottom-bar {
    transform: rotate(-45deg);
    transform-origin: 10% 90%;
}
.navbar-toggler.collapsed .top-bar {
    transform: rotate(0);
}

.navbar-toggler.collapsed .middle-bar {
    opacity: 1;
    filter: alpha(opacity=100);
}

.navbar-toggler.collapsed .bottom-bar {
    transform: rotate(0);
}
.navbar-toggler.collapsed .toggler-icon {
    background-color: #ffffff;
}
.navbar .navbar-collapse {
  text-align: center;
}

@media (max-width:991px){
    .roww{
        width: 100%;
        margin: 0 auto;
    }
    .block1 {
        width: 100px;
        display:inline-block;
        margin-right:auto;
    }
    .block2 {
        width: 100px;
        display:inline-block;
        margin: 0 auto;
    }
    .block3 {
        display:inline-block;
        margin-left:auto;
    }
}
@media (max-width:333px){
    .block1{
        display:none;
    }
}
@media (max-width:375px) and (min-width:355px){
    .block1{
        margin-right:20px;
    }
}
@media (max-width:405px) and (min-width:375px){
    .block1{
        margin-right:40px;
    }
}
@media (max-width:434px) and (min-width:406px){
    .block1{
        margin-right:70px;
    }
}
@media (max-width:485px) and (min-width:435px){
    .block1{
        margin-right:100px;
    }
}
@media (max-width:545px) and (min-width:485px){
    .block1{
        margin-right:150px;
    }
}
@media (max-width:645px) and (min-width:545px){
    .block1{
        margin-right:180px;
    }
}
@media (max-width:768px) and (min-width:645px){
    .block1{
        margin-right:200px;
    }
}
@media (max-width:895px) and (min-width:769px){
    .block1{
        margin-right:280px;
    }
}
@media (max-width:940px) and (min-width:896px){
    .block1{
        margin-right:310px;
    }
}
@media (max-width:991px) and (min-width:941px){
    .block1{
        margin-right:335px;
    }
}
.resp{
    padding-top:-5px;
    margin-top:-5px;
}
</style>

<script>

    function urlName() {
        <?php $name ?> = document.getElementById("userName").value;
    }

</script>
