<?php
    switch($navbar) {
        case 'home': 
?>
<!--navbar home section-->
    <nav class="navbar sticky-top navbar-expand-md bg-dark navbar-dark py-3">
        <div class="container">
            <a href="<?=base_url()?>" class="navbar-brand"><img src="assets/images/vdLogo.png" height="40px"/></a>
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
                        <a href="<?php echo base_url(); ?>login" class="nav-link text-light ms-2">Log In</a>
                    </li>
                    <li class="nav-item">
                        <a href="#aboutUs" class="nav-link text-light ms-2 pe-0">About Us</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
<!-- end of navbar home section -->

<?php 
    break;
    case 'reg':
?>
<!-- navbar registration section -->
    <nav class="navbar sticky-top navbar-expand-md bg-dark navbar-dark py-3">
        <div class="container">
            <a href="<?=base_url()?>" class="navbar-brand"><img src="<?=base_url('assets/images/vdLogo.png')?>" height="40px"/></a>
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
                        <p class="text-light pt-2 mb-0">Already have an account? <a href="<?php echo base_url(); ?>login" class="text-reset">Log In</a></p>
                    </li>
                </ul>
            </div>
        </div>
    </nav>  
<!-- end of navbar registration section -->

<?php
    break;
    case 'login':
?>
<!-- navbar log in section -->
    <nav class="navbar sticky-top navbar-expand-md bg-dark navbar-dark py-3">
        <div class="container">
            <a href="<?=base_url()?>" class="navbar-brand"><img src="<?=base_url('assets/images/vdLogo.png')?>" height="40px"/></a>
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
                        <p class="text-light pt-2 mb-0">No account yet? <a href="<?php echo base_url(); ?>registration" class="text-reset">Register</a> now.</p>
                    </li>
                </ul>
            </div>
        </div>
    </nav>  
<!-- end of navbar log in section -->

<?php 
    break;
    case 'main':
    default:
?>
<!--navbar main section-->
    <nav class="navbar sticky-top navbar-expand-lg navbar-light bg-dark ">
        <div class="container">
            <a href="<?=base_url()?>" class="navbar-brand mb-0 h1 text-light pe-5 me-5 "><img src="<?=base_url('assets/images/vdLogo.png')?>" height="40px"></a>
            <button type="button" 
                data-bs-toggle="collapse" 
                data-bs-target="#navbarNav" 
                class="navbar-toggler" 
                aria-controls="navbarNav" 
                aria-expanded="false" 
                aria-label="Toggle navigation"
            >
                <span class="navbar-toggler-icon">  </span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <div class="form d-flex px-5 mx-5 col-sm-7">
                    <input type="text" class="form-control me-2">
                        <button type="submit" class="btn btn-outline btn-warning">Search</button>
                </div>
                <ul class="navbar-nav align-items-center navbar-right">
                    <li class="navbar-item text-light px-5 ms-5">
                        <!-- added echo to display user info -->
                        <a href="#" class="nav-link text-light"> <?php echo $this->session->userdata('displayName'); ?> <br><span class="text-secondary"> <?php echo $this->session->userdata('userName'); ?> </span> </a>
                        <!-- added echo to display user info -->
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
                            <li><a href="<?=base_url()?>login/logout" class="dropdown-item ">Logout</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
<!--navbar main section end -->

<?php 
    break;
    }
?>