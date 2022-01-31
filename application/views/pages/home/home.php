<!-- Header -->
<section class="bg-dark text-light p-5 text-center text-sm-start">
    <div class="container">
        <div class="d-sm-flex align-items-center justify-content-between">
            <img class="img-fluid d-block headerpic" src="assets/images/home/hp.png" alt="" />
            <div class="lead my-4 pe-2">
                <h1 class="mb-3">Keep track your Daily Life</h1>
                <p class="mb-4">
                    Welcome to Virtual Diary! Save all your thoughts and show them to various people with sticky notes and notebooks! Read as you discover the various thoughts of people around the world. "Understanding the thoughts of others is a key to learning more."
                </p>
            </div>
        </div>
    </div>
</section>
<!-- (end) Header -->

<!-- Features Section (Cards) -->
<section class="p-5" style="background-color: #e9ecef;">
    <div class="h1 text-center p-4 text-dark">Features</div>
    <div class="container">

        <div class="row text-center g-4">
            <!-- Public Notebook -->
            <div class="col-md">
                <div class="card bg-dark text-light">
                    <div class="card-body text-center">
                        <div class="h1 mb-3">
                            <i class="bi bi-book-half" style="font-size: 50px;"></i>
                        </div>
                        <h3 class="card-title" style="color: #f0b63a;">
                            Public Notebook
                        </h3>
                        <p class="card-text">
                            Everyone can see your post
                        </p>
                    </div>
                    <a href="<?=base_url('home/pbfeaturespage')?>"><button class="btn btn-sm mt-2 mb-4 p-2 hover" style="background-color: #f0b63a;">
                            <h6 class="mb-1"><span>Learn More</span></h6>
                        </button>
                    </a>
                </div>
            </div>
            <!-- Private Notebook -->
            <div class="col-md ">
                <div class="card bg-dark text-light">
                    <div class="card-body text-center">
                        <div class="h1 mb-3">
                            <i class="bi bi-book" style="font-size: 50px;"></i>
                        </div>
                        <h3 class="card-title" style="color: #f0b63a;">
                            Private Notebook
                        </h3>
                        <p class="card-text">
                            Only you can access this Section
                        </p>
                    </div>
                    <a href="<?=base_url('home/privnbfeatures')?>"><button class="btn btn-sm mt-2 mb-4 p-2 hover" style="background-color: #f0b63a;">
                            <h6 class="mb-1"><span>Learn More</span></h6>
                        </button>
                    </a>
                </div>
            </div>
            <!-- Sticky Notes Wall -->
            <div class="col-md pb-5">
                <div class="card bg-dark text-light">
                    <div class="card-body text-center">
                        <div class="h1 mb-3">
                            <i class="bi bi-calendar" style="font-size: 50px;"></i>
                        </div>
                        <h3 class="card-title" style="color: #f0b63a;">
                            Sticky Notes Wall
                        </h3>
                        <p class="card-text">
                            Public anonymous posting area
                        </p>
                    </div>
                    <a href="<?=base_url('home/stickynotesfeatures')?>"><button class="btn btn-sm mt-2 mb-4 p-2 hover" style="background-color: #f0b63a;">
                            <h6 class="mb-1"><span>Learn More</span></h6>
                        </button>
                    </a>
                </div>
            </div>

        </div>

        <!--
        <div class="mb-4"></div>
        <div class="row text-center g-4 mb-4">
            Reactions
            <div class="col-md">
                <div class="card bg-dark text-light">
                    <div class="card-body text-center">
                        <div class="h1 mb-3">
                            <i class="bi bi-emoji-heart-eyes" style="font-size: 50px;"></i>
                        </div>
                        <h3 class="card-title" style="color: #f0b63a;">
                            Reactions
                        </h3>
                        <p class="card-text">
                            You can react in styles to other user post and Stickynotes
                        </p>
                    </div>
                    <a href=""><button class="btn btn-sm mt-2 mb-4 p-2" style="background-color: #f0b63a;">
                        <h6 class="mb-1">Learn More</h6></button>
                    </a>
                </div>
            </div>
            Discussion
            <div class="col-md ">
                <div class="card bg-dark text-light">
                    <div class="card-body text-center">
                        <div class="h1 mb-3">
                            <i class="bi bi-chat-quote" style="font-size: 50px;"></i>
                        </div>
                        <h3 class="card-title" style="color: #f0b63a;">
                            Discussion
                        </h3>
                        <p class="card-text">
                            Forum for different topics you might be interested
                        </p>
                    </div>
                    <a href=""><button class="btn btn-sm mt-2 mb-4 p-2" style="background-color: #f0b63a;">
                        <h6 class="mb-1">Learn More</h6></button>
                    </a>
                </div>
            </div>
            Report
            <div class="col-md ">
                <div class="card bg-dark text-light">
                    <div class="card-body text-center">
                        <div class="h1 mb-3">
                            <i class="bi bi-emoji-angry" style="font-size: 50px;"></i>
                        </div>
                        <h3 class="card-title" style="color: #f0b63a;">
                            Report
                        </h3>
                        <p class="card-text">
                            We care about you, we want to maintain a Toxic free website!
                        </p>
                    </div>
                    <a href=""><button class="btn btn-sm mt-2 mb-4 p-2" style="background-color: #f0b63a;">
                        <h6 class="mb-1">Learn More</h6></button>
                    </a>
                </div>
            </div>
        </div>
        -->
    </div>

</section>
<!-- (end) Features Section -->

<!-- About the Developers -->
<section id="aboutUs" class="p-5 bg-dark">
    <div class="container">
        <div class="h1 text-center p-4 text-light">About the Developers</div>
        <p class="lead text-center mb-5 text-light">
            The developers consist of aspiring third year students of the Technological University of the Philippines - Manila under the course of BS in Computer Science (2021-2022)
        </p>
        <div class="row g-4 justify-content-center">
            <!-- Bagasona -->
            <div class="col-md-5 col-lg-3 col-sm-9 justify-content-between mx-auto">
                <div class="card bg-dark" style="border: none;">
                    <div class="card-body text-center">
                        <img src="assets/images/home/bagasona.jpg" class="rounded-circle mb-4 img-fluid h-75 w-75" style=" border: 5px solid #333333; 
                        outline: 5px solid #5bc0de ;" alt="bagasona">
                        <h4 class="card-title mb-3 text-light">Kim Dianne <br> Bagasona <br> <span style="color: #f0b63a;" class="h6 mb-3">Full Stack Developer</span></h4>
                        <p class="card-text text-light">"A fearful yet risk-taker unknown creature who covers songs at midnight"</p>
                    </div>
                </div>
            </div>
            <!-- Guevarra -->
            <div class="col-md-5 col-lg-3 col-sm-6 justify-content-between mx-auto">
                <div class="card bg-dark" style="border: none;">
                    <div class="card-body text-center">
                        <img src="assets/images/home/guevarra.jpg" class="rounded-circle mb-4 img-fluid h-75 w-75" style="border: 5px solid #333333; 
                        outline: 5px solid #5bc0de ;" alt="guevarra">
                        <h4 class="card-title mb-3 text-light">Ezekiel <br> Guevarra <br> <span style="color: #f0b63a;" class="h6 mb-3">Front-end Developer</span></h4>
                        <p class="card-text text-light">"If I cannot do great things, I can do small things in a great way"</p>
                    </div>
                </div>
            </div>
            <!-- Yusoph -->
            <div class="col-md-4 col-lg-3 col-sm-6">
                <div class="card bg-dark" style="border: none;">
                    <div class="card-body text-center">
                        <img src="assets/images/home/yusoph.jpg" class="rounded-circle mb-4 img-fluid h-75 w-75" style=" border: 5px solid #333333; 
                        outline: 5px solid #5bc0de ;" alt="jihad">
                        <h4 class="card-title mb-3 text-light">Jihad <br> Yusoph <br> <span style="color: #f0b63a;" class="h6 mb-3">Front-end Developer</span></h4>
                        <p class="card-text text-light">"I am enough of an artist to draw freely upon my imagination."</p>
                    </div>
                </div>
            </div>
            <!-- Romero -->
            <div class="col-md-4 col-lg-3 col-sm-6">
                <div class="card bg-dark" style="border: none;">
                    <div class="card-body text-center">
                        <img src="assets/images/home/romero.jpg" class="rounded-circle mb-4 img-fluid h-75 w-75" style=" border: 5px solid #333333; 
                        outline: 5px solid #5bc0de ;" alt="romero">
                        <h4 class="card-title mb-3 text-light">Allana Mae <br> Romero <br> <span style="color: #f0b63a;" class="h6 mb-3">Back-end Developer</span></h4>
                        <p class="card-text text-light">"I'm just a girl trying to find a place in this world."</p>
                    </div>
                </div>
            </div>
            <!-- Estrella -->
            <div class="col-md-4 col-lg-3 col-sm-6">
                <div class="card bg-dark" style="border: none;">
                    <div class="card-body text-center">
                        <img src="assets/images/home/estrella.jpg" class="rounded-circle mb-4 img-fluid h-75 w-75" style=" border: 5px solid #333333; 
                        outline: 5px solid #5bc0de ;" alt="estrella">
                        <h4 class="card-title mb-3 text-light">Joana Marie <br> Estrella <br> <span style="color: #f0b63a;" class="h6 mb-3">Back-end Developer</span></h4>
                        <p class="card-text text-light">"Gamer by night. Programmer by midnight."</p>
                    </div>
                </div>
            </div>
            <!-- Camañag -->
            <div class="col-md-5 col-lg-3 col-sm-6">
                <div class="card bg-dark" style="border: none;">
                    <div class="card-body text-center">
                        <img src="assets/images/home/camanag.jpg" class="rounded-circle mb-4 img-fluid h-75 w-75" style=" border: 5px solid #333333; 
                        outline: 5px solid #5bc0de ;" alt="camanag">
                        <h4 class="card-title mb-3 text-light">Christopher <br> Camañag <br> <span style="color: #f0b63a;" class="h6 mb-3">Back-end Developer</span></h4>
                        <p class="card-text text-light">"My friends see me as someone who can hack NASA someday. But all I do is copy paste from that indian guy from YouTube."</p>
                    </div>
                </div>
            </div>
            <!-- Pinpin -->
            <div class="col-md-5 col-lg-3 mb-4 col-sm-6">
                <div class="card bg-dark" style="border: none;">
                    <div class="card-body text-center">
                        <img src="assets/images/home/pinpin.jpg" class="rounded-circle mb-4 img-fluid h-75 w-75" style=" border: 5px solid #333333; 
                        outline: 5px solid #5bc0de ;" alt="pinpin">
                        <h4 class="card-title mb-3 text-light">Marshal Amieron<br> Pinpin <br> <span style="color: #f0b63a;" class="h6 mb-3">Back-end Developer</span></h4>
                        <p class="card-text text-light">"Former game modder. Prefers coding than actual designing. Coffee = Quality Life"</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- (end) About the Developers-->

<!-- Frequently Asked Questions -->
<section id="question" class="p-5 " style="background-color: #e9ecef;">
    <div class="h1 text-center p-4 text-dark">Frequently Asked Questions</div>
    <div class="accordion accordion-flush" id="accordionFlushExample">
        <!-- Question #1 -->
        <div class="accordion-item">
            <h2 class="accordion-header" id="flush-headingOne">
                <button class="accordion-button collapsed text-dark border border-3 border-dark mb-1" style="background-color: #f0b63a;" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne">
                    How do I sign up?
                </button>
            </h2>
            <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                <div class="accordion-body">Just click the <a href="<?= base_url('registration') ?>" style="text-decoration: none;">register</a> button at the navigation bar to create an account.</div>
            </div>
        </div>
        <!-- Question #2 -->
        <div class="accordion-item">
            <h2 class="accordion-header" id="flush-headingTwo">
                <button class="accordion-button collapsed text-dark border border-3 border-dark mb-1" style="background-color: #f0b63a;" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo">
                    Do you have membership fee?
                </button>
            </h2>
            <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                <div class="accordion-body">We want our website to be accessible for everyone. This is totally free!</div>
            </div>
        </div>
        <!-- Question #3 -->
        <div class="accordion-item mb-4">
            <h2 class="accordion-header" id="flush-headingThree">
                <button class="accordion-button collapsed text-dark border border-3 border-dark mb-1" style="background-color: #f0b63a;" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree">
                    Is data on this website secured?
                </button>
            </h2>
            <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                <div class="accordion-body">We care about our users. We make sure that all user data is secured!</div>
            </div>
        </div>
    </div>
</section>
<!-- (end) Frequently Asked Questions   -->

<style>
    *{
        font-family: 'Be Vietnam Pro', sans-serif;
    }
    .hover {
        display: inline-block;
        border-radius: 4px;
        background-color: #f4511e;
        border: none;
        color: #292929;
        text-align: center;
        font-size: 28px;
        width: 170px;
        transition: all 0.5s;
        cursor: pointer;
        margin: 5px;
    }

    .hover span {
        cursor: pointer;
        display: inline-block;
        position: relative;
        transition: 0.5s;
    }

    .hover span:after {
        content: '\00bb';
        position: absolute;
        opacity: 0;
        top: 0;
        right: -20px;
        transition: 0.5s;
    }

    .hover:hover span {
        padding-right: 25px;
    }

    .hover:hover span:after {
        opacity: 1;
        right: 0;
    }

    @media (max-width: 320px) {

        .headerpic {
            width: 300px;
        }
    }

    @media (min-width: 992px) {

        .headerpic {
            width: 50%;
        }
    }

    @media (max-width:991px) and (min-width:572px) {
        .headerpic {
            width: 60%;
        }
    }
</style>