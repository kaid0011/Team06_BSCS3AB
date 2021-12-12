<?php
switch ($navbar) {
    case 'home':
?>
        <!-- Navbar Home Section-->
        <nav class="navbar sticky-top navbar-expand-md bg-dark navbar-dark py-3">
            <div class="container">

                <!-- Logo Image-->
                <a href="<?= base_url() ?>" class="navbar-brand"><img src="<?= base_url('assets/images/vdLogo.png') ?>" height="40px" /></a>

                <!-- Hamburger Menu -->
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navmenu">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navmenu">
                    <ul class="navbar-nav ms-auto">
                        <!-- Register -->
                        <li class="nav-item">
                            <a href="<?php echo base_url('registration') ?>" class="nav-link text-light">Register</a>
                        </li>
                        <!-- Log In -->
                        <li class="nav-item">
                            <a href="<?php echo base_url('login') ?>" class="nav-link text-light ms-2">Log In</a>
                        </li>
                        <!-- About Us -->
                        <li class="nav-item">
                            <a href="#aboutUs" class="nav-link text-light ms-2 pe-0">About Us</a>
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
                <a href="<?= base_url() ?>" class="navbar-brand"><img src="<?= base_url('assets/images/vdLogo.png') ?>" height="40px" /></a>

                <!-- Hamburger Menu -->
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navmenu">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navmenu">
                    <ul class="navbar-nav ms-auto">
                        <!-- Log In -->
                        <li class="nav-item">
                            <p class="text-light pt-2 mb-0">Already have an account? <a href="<?php echo base_url('login'); ?>" class="text-reset">Log In</a></p>
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
                <a href="<?= base_url() ?>" class="navbar-brand"><img src="<?= base_url('assets/images/vdLogo.png') ?>" height="40px" /></a>

                <!-- Hamburger Menu -->
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navmenu">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navmenu">
                    <ul class="navbar-nav ms-auto">
                        <!-- Register -->
                        <li class="nav-item">
                            <p class="text-light pt-2 mb-0">No account yet? <a href="<?php echo base_url('registration'); ?>" class="text-reset">Register</a> now.</p>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- (end) Navbar Log In Section) -->

    <?php
        break;
    case 'main':
    default:
    ?>
        <!-- Navbar Main Section -->
        <nav class="navbar sticky-top navbar-expand-lg navbar-dark bg-dark ">
            <div class="container">

                <ul class="navbar-nav align-items-center navbar-right w-100">
                    <!-- Logo Image -->
                    <li>
                        <a href="<?= base_url('mainpage') ?>" class="navbar-brand h1 text-light"><img src="<?= base_url('assets/images/vdLogo.png') ?>" height="40px"></a>
                    </li>

                    <!-- Toggler Menu -->
                    <div class="pt-3 pb-3">
                        <!-- Search Bar -->
                        <button class="navbar-toggler" style="color: white;" data-bs-toggle="collapse" data-bs-target="#searcharea" class="navbar-toggler" aria-controls="searcharea" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="bi bi-search"></span>
                        </button>

                        <!-- Hamburger Menu -->
                        <button class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarNav" class="navbar-toggler" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                    </div>

                    <div class="collapse navbar-collapse" id="searcharea" style="margin-left: 170px; margin-right: 100px;">
                        <!-- Search (Find User) -->
                        <li class="w-100">
                            <form action="<?= base_url('mainpage/finduser') ?>" method="post" class="form d-flex">
                                <!--changes-->
                                <input type="text" name="userName" class="form-control me-2">
                                <button type="submit" style="background-color: #f0b63a;" class="btn border border-2 border-dark">Search</button>
                            </form>
                        </li>
                    </div>

                    <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                        <li class="navbar-item text-light me-2" style="text-align: right;">
                            <!-- added echo to display user info -->
                            <a href="#" class="nav-link text-light" style="font-size: 15px; font-weight: 300;"> <?php echo $this->session->userdata('displayName'); ?> <br><span class="text-secondary"> <?php echo $this->session->userdata('userName'); ?> </span>
                                <!-- added echo to display user info -->
                            </a>
                        </li>
                        <li class="mb-1">
                            <?php
                            $connect = mysqli_connect("localhost", "root", "team6", "virtual_diary");
                            $user_ID = $this->session->userdata('user_ID');
                            $query = "SELECT * FROM user WHERE user_ID = $user_ID";
                            $result = mysqli_query($connect, $query);
                            while ($row = mysqli_fetch_array($result)) {
                                echo '<img style="width: 50px; height: 50px; border-radius: 100px;" src="data:image/jpeg;base64, ' . base64_encode($row['user_displayImage']) . '"';
                            }
                            ?>
                        </li>
                         <li class="ms-2 navbar-item dropdown mb-2" style="text-align: right;">

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