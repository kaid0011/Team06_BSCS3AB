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
<!--navbar main --> 
  
  <body style="background-color: #e9ecef;">
    <header>
      <nav class="navbar navbar-expand-lg  "style="background-color:#e9ecef;">
        <div class="container-fluid">
          
          <div>
            <nav class="navbar navbar-dark  ms-5">
              <div class="container-fluid">
                
               
              </div>
            </nav>
          </div>
          <div>
            <nav class="navbar">
              <div class="container me-5">
                <a class="navbar-brand" href="#" style="color: #eee;">
                  
                </a>
              </div>
            </nav>
          </div>
          <div>
           
            
                  
              
              
              </a>
                
              
          </ul>
      </div>
      </div> 
                          
                 
               

        </div>

      </nav>
   
    </header>
    <main >
    <section style="background-color: #e9ecef;">
<div class="container">
   <!--div
  class="p-5 text-center bg-image"
  style="
  background-image: url('imgs/white.png');
  height: 300px;
width: auto;"
   -->
<div>
<div class="d-flex justify-content-center align-items-center h-100 ms-5 me-5">
<div class="text-white">
  <div class="d-flex">
  <a href="#"><img src="<?=base_url('assets/images/visitedprofile/profile.png')?>" class="rounded-circle ms-5 shadow-lg" alt="..." ></a></div>
  <h1 class="lead text-center text-dark mt-1 ms-5 mb-5 fw-normal">
    Name<br >
   <a class="text-secondary  " style="text-decoration: none;"> Username </a>
  </h1>
</div>
  
</div>
</div>
</div>
</div>
</div>
    </section>
  </main>
  
   <div class="container" >
      <div class="row g-4 ">

        <div class="col-md-6 col-lg-7 mt-5 " >
          <div class="card bg-light " style="min-height: 400px;">
            
            <nav class="navbar navbar-light justify-content-center sticky-top" style="background-color: #495057;"> <p class=" justify-content-center align-items-center mt-2" style=" color: #eee;"> Public Notebook</p> </nav>
            <div data-bs-spy="scroll" data-bs-target="#navbar-example2" data-bs-offset="0" class="scrollspy-example" tabindex="0">
            <div class="card-body text-center" style="height: min-700px;">

              <div>
                <div class="card border-dark mb-3 " style="max-width: 50rem;">
                  <nav class="navbar navbar-light"> <ul class="nav nav-pills ms-2"  >
                    <li class="nav-item  ">
                      <p class="nav-link " href="#" style="color:black;">Date</p>
                    </li> </nav>
                  <div class="card-body text-dark">
                    
                    <p class="card-text1">Some quick example text to build on the card title and make up the bulk of the card's content .Some quick example text to build on the card title and make up the bulk of the card's content. Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                  </div>
                  <div class="card-footer bg-transparent border-dark">
                    
                    <div>
                  <button class="btn btn-none btn-sm float-start"> <i class="bi bi-star h4"></i></button>
                      <button class="btn btn-secondary btn-sm float-end mt-1" type="button">Report</button>
                    </div> </div>
                </div>   
                <div class="card border-dark mb-3 " style="max-width: 50rem;">
                  
                  <nav class="navbar navbar-light"> <ul class="nav nav-pills ms-2"  >
                    <li class="nav-item  ">
                      <p class="nav-link " aria-current="page" href="#" style="color: black;">Date</p>
                    </li> </nav>
                  <div class="card-body text-dark">
                   
                    <p class="card-text1">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                  </div>
                  <div class="card-footer bg-transparent border-dark"> <div>
                   <button class="btn btn-none btn-sm  float-start"><i class="bi bi-star h4"></i></button>
                   <button class="btn btn-secondary btn-sm  float-end mt-1" type="button">Report</button>
                     </div></div>
                </div>   
                        
                             
            </div>
            </div>
            </div>
          </div>
        </div> 
         <div class="col-md-6 col-lg-5 mt-5" style="border-radius: 50%;">
          <div class="card bg-light" style="min-height: 400px;">
            
            <nav class="navbar navbar-light justify-content-center sticky-top" style="background-color: #495057;"> <p class=" justify-content-center align-items-center mt-2" style=" color: #eee;"> Discussion</p> </nav>
            <div data-bs-spy="scroll" data-bs-target="#navbar-example2" data-bs-offset="0" class="scrollspy-example" tabindex="0">
            <div class="card-body text-center" style="height: min-800px;">
             
              <div>
                <div class="card border-dark mb-3 " style="max-width: 50rem;">
                  
                  <div class="card-body text-dark">
                    <div class="received-chats">
                      <div class="received-chats-img ">
                          <img src="<?=base_url('assets/images/visitedprofile/profile.png')?>" style="display: inline-block;">
  
                      </div>
                      <div class="received-msg " style="   display: inline-block;
                      padding:0 0 0 10px;
                      vertical-align: top;
                      width: 92%;
                  ">
                          <div class="received-mgs-inbox" style="background: #ced4da none repeat scroll 0 0;  border-radius: 10px; color: #646464; font-size: 14px; margin:0; padding: 5px 10px 5px 12px; width: 70%;">
                              <p>
                          HALOOOOOOOOOOOO
                              </p>
                             
                              
                          </div>
  
                      </div>
                      <div class="outgoing-chats" style="overflow: hidden; margin: 26px 20px; margin-left: 5px;">
                    
                        <div class="outgoing-chat-msg"style="   width: 57%; float:left; margin-left:33%;">
                            <div class="outgoing-mgs-inbox" style="background: #ced4da none repeat scroll 0 0;  border-radius: 10px; color: #646464; font-size: 14px; margin:0; padding: 5px 10px 5px 12px; width: 100%;">
                                <p>
                            HALOOOOOOOOOOOO
                                </p>
                                </div>
                                </div>
                                <div class="outgoing-chats-img " style="display: inline-block;">
                                  <img src="<?=base_url('assets/images/visitedprofile/profile.png')?>" style="display: inline-block;">
                                  </div>
                  </div>
                  </div>
                  
                   
                  </div>
                  
                  <div class="card-footer bg-transparent border-dark">
                    
                    <div class="d-md-flex justify-content-md-end">
                      <button class="btn btn-secondary btn-sm" type="button">Report</button>
                    </div> </div>
                </div>   
                    
                <div>
                  <div class="card border-dark mb-3 " style="max-width: 50rem;">
                    
                    <div class="card-body text-dark">
                      <div class="received-chats">
                        <div class="received-chats-img">
                            <img src="imgs/profile.png" style="display: inline-block;">
    
                        </div>
                        <div class="received-msg" style="   display: inline-block;
                        padding:0 0 0 10px;
                        vertical-align: top;
                        width: 92%;
                    ">
                            <div class="received-mgs-inbox" style="background: #ced4da none repeat scroll 0 0;  border-radius: 10px; color: #646464; font-size: 14px; margin:0; padding: 5px 10px 5px 12px; width: 70%;">
                                <p>
                            HALOOOOOOOOOOOO
                                </p>
                               
                                
                            </div>
    
                        </div>
                        <div class="outgoing-chats" style="overflow: hidden; margin: 26px 20px;">
                      
                          <div class="outgoing-chat-msg"style="   width: 57%; float:left; margin-left:33%;">
                              <div class="outgoing-mgs-inbox" style="background: #ced4da none repeat scroll 0 0;  border-radius: 10px; color: #646464; font-size: 14px; margin:0; padding: 5px 10px 5px 12px; width: 100%;">
                                  <p>
                              HALOOOOOOOOOOOO
                                  </p>
                                  </div>
                                  </div>
                                  <div class="outgoing-chats-img " style="display: inline-block;">
                                    <img src="imgs/profile.png" style="display: inline-block;">
                                    </div>
                    </div>
                    </div>
                    
                     
                    </div>
                    
                    <div class="card-footer bg-transparent border-dark">
                      
                      <div class="d-md-flex justify-content-md-end">
                        <button class="btn btn-secondary" type="button">Report</button>
                      </div> </div>
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
          </div>
          </div>
        </div>

    </div> 

