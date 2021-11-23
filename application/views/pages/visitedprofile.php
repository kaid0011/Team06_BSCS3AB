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
        <span class="navbar-toggler-icon"></span>
      </button>
        
      <div class="collapse navbar-collapse" id="navbarNav">

        <form action="<?=base_url()?>Main/finduser" method ="post" class="form d-flex px-5 mx-5 col-sm-7"> <!--changes-->
          <input type="text" name="userName" class="form-control me-2">
          <button type="submit" class="btn btn-outline btn-warning">Search</button>
        </form>                                                 <!--changes-->
        
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
            
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
              <li><a href="#" class="dropdown-item ">Edit Profile</a></li>
              <li><a href="#" class="dropdown-item ">Logout</a></li>
            </ul>

          </li>
        </ul>
      </div>
    </div>
  </nav>
<!--navbar main end--> 

<nav class="navbar navbar-expand-lg  "style="background-color:#e9ecef;">
  <div class="container-fluid">
    
    <div>
      <nav class="navbar navbar-dark  ms-5">
        <div class="container-fluid"></div>
      </nav>
    </div>
    
    <div>
      <nav class="navbar">
        <div class="container me-5">
          <a class="navbar-brand" href="#" style="color: #eee;"></a>
        </div>
      </nav>
    </div>
  
  <div>
</nav>

 
<section style="background-color: #e9ecef; padding-bottom: 5vh;">
  <div class="container" style="min-height: 100vh">
  
    <!--div
      class="p-5 text-center bg-image"
      style="background-image: url('imgs/white.png'); height: 300px; width: auto;"
    -->

    <div>
      <?php
        if($findUser->num_rows() > 0)
        {
      ?>
        <div class="d-flex justify-content-center align-items-center ms-5 me-5">
          <div class="text-white">
            <div class="d-flex">
              <a href="#"><img src="<?=base_url('assets/images/visitedprofile/profile.png')?>" class="rounded-circle ms-5 border border-3 border-secondary" alt="..." ></a>
            </div>
            
            <?php
              foreach ($findUser->result() as $row)  
              {  
            ?>
              <h1 class="lead text-center mt-3 ms-5 mb-5 fw-normal" style="color: #495057"><?php echo $row->displayName;?><br>
                <a class="text-secondary" style="text-decoration: none;">@<?php echo $row->userName;?></a>
              </h1>
              
              <?php
                }
              ?>
          </div>
        </div>
    
        <div name="userFound" class="container">
          <div class="row g-4">

          <!--Public Notebook-->
            <div class="d-flex justify-content-center">
            <!-- if discussion is included:    <div class="col-md-6 col-lg-7 mt-5 " >-->
              <div class="card bg-light" style="min-height: 80vh; min-width: 70vw">
      
                <nav class="navbar navbar-light justify-content-center sticky-top" style="background-color: #495057;"> <p class="justify-content-center align-items-center mt-2" style="color: #eee;"> Public Notebook</p></nav>
                  <div data-bs-spy="scroll" data-bs-target="#navbar-example2" data-bs-offset="0" class="scrollspy-example pt-2" style="min-height: 80vh;" tabindex="0">
                    
                    <!-- Scrollable area -->
                    <div class="card-body text-center">

                      <!-- Per page -->
                      <div class="container mt-4 pt-3 pb-5 mb-5" style="background-color: #ced4da; border-radius: 5px; min-width: 60vw;">
                        <div class="card border-secondary mb-3" style="max-width: 100rem;">
                          <nav class="navbar navbar-light"> 
                            <ul class="nav nav-pills ms-2">
                              <li class="nav-item">
                                <p class="nav-link" href="#" style="color:black;">Date</p>
                              </li> 
                          
                          <div class="card-body text-dark">
                            <p class="card-text1 pt-4">Hi, everyone! Here's my first page. Can't wait to share my life here.</p>
                          </div>
                        </div>
                        
                        <div class="card-footer bg-transparent border-secondary"></div>
                        <button class="btn btn-none btn-sm float-start text-secondary"> <i class="bi bi-star h4"></i></button>
                        <button class="btn btn-secondary btn-sm float-end mt-50" type="button">Report</button>
                      </div>

                      <!-- Per page -->
                      <div class="container mt-4 pt-3 pb-5 mb-5" style="background-color: #ced4da; border-radius: 5px; min-width: 60vw;">
                        <div class="card border-secondary mb-3" style="max-width: 100rem;">
                          <nav class="navbar navbar-light"> 
                            <ul class="nav nav-pills ms-2">
                              <li class="nav-item">
                                <p class="nav-link" href="#" style="color:black;">Date</p>
                              </li> 
                          
                          <div class="card-body text-dark">
                            <p class="card-text1 pt-4">Wala lang. Tinitignan ko lang kung pwede bang mahaba tapos auto na siya mag aadjust. Pag di siya nag adjust edi wow. Pero sana mag adjust paran gawa mo na. Sapakanan na lang kung ayaw. Kung makita mo toh after mo mag git pull, ibig sabihin success. HEHEHEHHEHEHEHEHEHEH :></p>
                          </div>
                        </div>
                        
                        <div class="card-footer bg-transparent border-secondary"></div>
                        <button class="btn btn-none btn-sm float-start text-secondary"> <i class="bi bi-star h4"></i></button>
                        <button class="btn btn-secondary btn-sm float-end mt-50" type="button">Report</button>
                      </div>

                    </div>
                  </div>

              </div>
            </div>   
          </div>
        </div>
    </div>
  
      <?php
        }
        else
        {
      ?>
        <div class="d-flex justify-content-center align-items-center">
        <h1 class="lead text-center mt-1 ms-5 mb-5 fw-normal" style="padding-top: 25vh; color: #495057;">User does not exist.</hi>
        </div>
        <?php
          }
        ?>
  </div>
</section>

<style>
  .body{
    padding-bottom: 100px;
  }
  .scrollspy-example{
    height: 350px;
    overflow-y: scroll;
    overflow-x:hidden;
  }
  .scrollspy-example::-webkit-scrollbar{
    width:10px;
  }
  .scrollspy-example::-webkit-scrollbar-track{
    -webkit-box-shadow:inset 0 0 6px rgba(0, 0, 0, 0.3);
    -webkit-border-radius:0px;
    border-radius: 3px;
  } 
  .scrollspy-example::-webkit-scrollbar-thumb{
    -webkit-box-shadow:inset 0 0 6px rgba(0,0,0,0.5);
    -webkit-border-radius:0px;
    background: rgb(149, 153, 165);
    border-radius: 3px;
    height: 5px;
  }
  .card-text{
    min-height: 300px;
    min-width: auto;
  }

  .active h4{
    font-size: 20px;
    margin-left: 10px;
    color: #fff;
  }
  .received-chats-img{
    width: 30px;
    float: left;
  }
  .outgoing-chats-img{
    width: 30px;
    float: right;
  }

</style>