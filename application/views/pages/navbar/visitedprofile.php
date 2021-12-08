<section style="background-color: #e9ecef; min-height: 75vh; padding-top: 80px; padding-bottom: 20px;">
  <div class="container">
    <!--div class="p-5 text-center bg-image" style="background-image: url('imgs/white.png'); height: 300px; width: auto;"-->
    <div>
      <?php
        if ($findUser->num_rows() > 0) {
      ?>
        <div class="d-flex justify-content-center align-items-center h-100 ms-5 me-5">
          <div class="text-white">
            <div class="d-flex">
              <a href="#"><img src="<?= base_url('assets/images/visitedprofile/profile.png') ?>" class="rounded-circle ms-5 border border-3 border-secondary mb-2" alt="..."></a>
            </div>
            
            <?php
              foreach ($findUser->result() as $row) {
            ?>

              <h1 class="lead text-center text-dark mt-1 ms-5 mb-5 fw-normal"><?php echo $row->displayName; ?><br>
                <a class="text-secondary  " style="text-decoration: none;">@<?php echo $row->userName; ?></a>
              </h1>
            
            <?php
              }
            ?>

          </div>
        </div>

        <div name="userFound" class="container">
          <div class="row g-4 ">
            
            <!--Public Notebook-->
            <div class="d-flex justify-content-center">
              <!-- if discussion is included:  
                      <div class="col-md-6 col-lg-7 mt-5">-->
              <div class="card bg-light" style="min-height: 400px; z-index:0;">
                <nav class="navbar navbar-light justify-content-center sticky-top" style="background-color: #495057;">
                  <p class=" justify-content-center align-items-center mt-2" style=" color: #eee;"> Public Notebook</p>
                </nav>
                <div data-bs-spy="scroll" data-bs-target="#navbar-example2" data-bs-offset="0" class="scrollspy-example" tabindex="0">
                  <div class="card-body text-center" style="height: auto;">
                    
                    <div>
                      <div class="card border-dark mb-3 " style="max-width: 50rem;">
                        
                        <nav class="navbar navbar-light">
                          <ul class="nav nav-pills ms-2">
                            <li class="nav-item  ">
                              <p class="nav-link " href="#" style="color:black;">Date</p>
                            </li>
                          </ul>
                        </nav>
                        
                        <div class="card-body text-dark">
                          <p class="card-text1">Some quick example text to build on the card title and make up the bulk of the card's content .Some quick example text to build on the card title and make up the bulk of the card's content. Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        </div>
                        
                        <div class="card-footer bg-transparent border-dark">
                          <div>
                            <button class="btn btn-none btn-sm float-start"> <i class="bi bi-star h4"></i></button>
                            <a href="<?=base_url('reportuser')?>">
                              <button class="btn btn-secondary btn-sm float-end mt-1" type="button">Report</button>
                            </a>
                          </div>
                        </div>

                      </div>
                    </div>

                  </div>
                </div>
              </div>

            </div>

          </div>
        </div>

        <?php
          } else {
        ?>

          <h1 class="lead text-center text-dark mt-4 ms-5 mb-5 fw-normal" style="padding-top: 25vh;">User doesn't exists.<br>

      <?php
        }
      ?>

    </div>
  </div>
</section>

<style>
  .scrollspy-example {
    height: 300px;
    overflow-y: scroll;
    overflow-x: hidden;
  }
  .scrollspy-example::-webkit-scrollbar {
    width: 10px;
  }
  .scrollspy-example::-webkit-scrollbar-track {
    -webkit-box-shadow: inset 0 0 6px rgba(0, 0, 0, 0.3);
    -webkit-border-radius: 0px;
    border-radius: 3px;
  }
  .scrollspy-example::-webkit-scrollbar-thumb {
    -webkit-box-shadow: inset 0 0 6px rgba(0, 0, 0, 0.5);
    -webkit-border-radius: 0px;
    background: rgb(149, 153, 165);
    border-radius: 3px;
    height: 5px;
  }
/*  .card-text {
    min-height: 200px;
  }
  .tag {
    width: 100px;
    height: 100px;
    background: rgb(131, 126, 122);
    position: relative;
    top: 500px;
    left: 800px;
    border-radius: 50%;
  }
  .title {
    color: #fff;
    margin: 5px;
  }
  .items {
    background-color: #fff;
    border: 1px solid #d1d1d1;
    margin: 10px;
    padding: 5px;
  }
  .active h4 {
    font-size: 20px;
    margin-left: 10px;
    color: #fff;
  }
  .received-chats-img {
    width: 30px;
    float: left;
  }
  .outgoing-chats-img {
    width: 30px;
    float: right;
  }
*/
</style>