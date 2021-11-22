<!--navbar main -->
<nav class="navbar sticky-top navbar-expand-lg navbar-light bg-dark ">
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
<!--navbar main end -->