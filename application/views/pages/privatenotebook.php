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

	<a  class="logo" >
		<img src="<?=base_url('assets/images/vdLogo.png')?>" alt="logo">
	</a>

	<div class="section">
		<div class="container">
			<div class="row full-height justify-content-center">
				<div class="col-12 text-center align-self-center py-5">
					<div class="section pb-5 pt-5 pt-sm-2 text-center">
						<h6 class="mb-0 pb-3 "style="color:#000;"><span>View </span><span>Update</span></h6>
			          	<input class="checkbox" type="checkbox" id="reg-log" name="reg-log"/>
			          	<label for="reg-log"></label>
						<div class="card-3d-wrap mx-auto">
							<div class="card-3d-wrapper">
								<div class="card-front">
									<div class="d-flex p-3">
										<div class="section ">
										
										
												
                      <div class="input-group input-group-icon"><div class="btn-group ">
                    
                        <button type="button " disabled class="btn btn-secondary dropdown-toggle " data-bs-toggle="dropdown"  aria-expanded="false">
                        Theme
                        </button>
                        <ul class="dropdown-menu  ">
                          <li><button class="dropdown-item" type="button">Pogi</button></li>
                          <li><button class="dropdown-item" type="button">Cute</button></li>
                          <li><button class="dropdown-item" type="button">Ako</button></li>
                        </ul>
                        <button type="button"disabled class="btn btn-secondary dropdown-toggle ms-2" data-bs-toggle="dropdown"  aria-expanded="false">
                           Font
                           </button>
                           <ul class="dropdown-menu ">
                             <li><button class="dropdown-item" type="button">Red</button></li>
                             <li><button class="dropdown-item" type="button">Blue</button></li>
                             <li><button class="dropdown-item" type="button">Green</button></li>
                           </ul>
                           
                            <label for="appt-time">Timer </label>
                            <input id="appt-time"disabled type="time" name="appt-time">
                          
                      </div>
                        <div class="input-icon"></div>
                    </div>
                    <hr class="bg-dark">
                    <div class="mb-3">
                      <label for="exampleFormControlTextarea1" class="form-label"></label>
                      <textarea class="form-control" id="exampleFormControlTextarea1" rows="13"disabled></textarea>
                      <hr class="bg-dark">
                      <button class="btn btn-secondary btn-sm  float-start mt-1" type="button" disabled><i class="bi bi-trash-fill h4"></i></button>
                      <button class="btn btn-secondary btn-sm  float-end mt-1" type="button" disabled>Submit</button>
                    </div>
							
                       
				      					</div>
			      					</div>
			      				</div>
								<div class="card-back">
									<div class="d-flex p-3">
										<div class="section text-center">
							
									    <div class="input-group input-group-icon"><div class="btn-group  ">
                    
                        <button type="button " class="btn btn-secondary dropdown-toggle btn-outline-dark" data-bs-toggle="dropdown"  aria-expanded="false">
                        Theme
                        </button>
                        <ul class="dropdown-menu  ">
                          <li><button class="dropdown-item" type="button">Pogi</button></li>
                          <li><button class="dropdown-item" type="button">Cute</button></li>
                          <li><button class="dropdown-item" type="button">Ako</button></li>
                        </ul>
                        <button type="button" class="btn btn-secondary dropdown-toggle ms-2" data-bs-toggle="dropdown"  aria-expanded="false">
                           Font
                           </button>
                           <ul class="dropdown-menu ">
                             <li><button class="dropdown-item" type="button">Red</button></li>
                             <li><button class="dropdown-item" type="button">Blue</button></li>
                             <li><button class="dropdown-item" type="button">Green</button></li>
                           </ul>
                          
                            <label for="appt-time" class="text-light">Timer </label>
                            <input id="appt-time" type="time" name="appt-time">
                          
                      </div>
                     
                    </div>
                    
                    <hr class="bg-light">
                    <div class="mb-3">
                        <label for="exampleFormControlTextarea1" class="form-label"></label>
                        <textarea class="form-control" id="" rows="13"></textarea>
                        <hr class="bg-light">
                        <button class="btn btn btn-secondary btn-sm  float-start mt-1" type="button"><i class="bi bi-trash-fill h4"></i></button>
                        <button class="btn btn-secondary btn-sm  float-end mt-1 " type="button" >Submit</button>
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
		      	</div>
	      	</div>
	    </div>
	</div>

  <style>
    
body{
	font-family: 'Poppins', sans-serif;
	font-weight: 300;
	font-size: 15px;
	line-height: 1.7;
	color: #343a40;
	background-color: #e9ecef;
	overflow-x: hidden;
}
a {
	cursor: pointer;
  transition: all 200ms linear;
}
a:hover {
	text-decoration: none;
}
.link {
  color: #000;
}
.link:hover {
  color: #dee2e6;
}
p {
  font-weight: 500;
  font-size: 14px;
  line-height: 1.7;
}
h4 {
  font-weight: 600;
}
h6 span{
  padding: 0 20px;
  text-transform: uppercase;
  font-weight: 700;
}
.section{
  position: relative;
  width: 100%;
  display: block;
}
.full-height{
  min-height: 100vh;
}
[type="checkbox"]:checked,
[type="checkbox"]:not(:checked){
  position: absolute;
  left: -9999px;
}
.checkbox:checked + label,
.checkbox:not(:checked) + label{
  position: relative;
  display: block;
  text-align: center;
  width: 60px;
  height: 16px;
  border-radius: 8px;
  padding: 0;
  margin: 10px auto;
  cursor: pointer;
  background-color: #adb5bd;
}
.checkbox:checked + label:before,
.checkbox:not(:checked) + label:before{
  position: absolute;
  display: block;
  width: 36px;
  height: 36px;
  border-radius: 50%;
  color: #000;
  background-color: #00FFFF;
  font-family: 'unicons';
  content: '\eb4f';
  z-index: 20;
  top: -10px;
  left: -10px;
  line-height: 36px;
  text-align: center;
  font-size: 24px;
  transition: all 0.5s ease;
}
.checkbox:checked + label:before {
  transform: translateX(44px) rotate(-270deg);
}


.card-3d-wrap {
  position: relative;
  width: 500px;
  max-width: 100%;
  height: 550px;
  -webkit-transform-style: preserve-3d;
  transform-style: preserve-3d;
  perspective: 700px;
  margin-top: 40px;
}
.card-3d-wrapper {
  width: 100%;
  height: 100%;
  position:absolute;    
  top: 0;
  left: 0;  
  -webkit-transform-style: preserve-3d;
  transform-style: preserve-3d;
  transition: all 600ms ease-out; 
}
.card-front, .card-back {
  width: 100%;
  height: 100%;
  background-color: #495057;;
  background-position: bottom center;
  background-repeat: no-repeat;
  background-size: 300%;
  position: absolute;
  border-radius: 6px;
  left: 0;
  top: 0;
  -webkit-transform-style: preserve-3d;
  transform-style: preserve-3d;
  -webkit-backface-visibility: hidden;
  -moz-backface-visibility: hidden;
  -o-backface-visibility: hidden;
  backface-visibility: hidden;
}
.card-back {
  transform: rotateY(180deg);
}
.checkbox:checked ~ .card-3d-wrap .card-3d-wrapper {
  transform: rotateY(180deg);
}



.form-group{ 
  position: relative;
  display: block;
    margin: 0;
    padding: 0;
}

.btn{  
  border-radius: 4px;
  height: 44px;
  font-size: 13px;
  font-weight: 600;
  text-transform: uppercase;
  -webkit-transition : all 200ms linear;
  transition: all 200ms linear;
  padding: 0 30px;
  letter-spacing: 1px;
  display: inline-flex;
  -webkit-align-items: center;
  align-items: center;
  -webkit-justify-content: center;
  justify-content: center;
  -ms-flex-pack: center;
  text-align: center;
  background-color: #ffeba7;
  color: #102770;
  border-style: solid;border-width: 3px;
  border-color: #000;
  box-shadow: 0 8px 24px 0 rgba(255,235,167,.2);
}
.btn:active,
.btn:focus{  
  background-color: #102770;
  color: #ffeba7;
  
  box-shadow: 0 8px 24px 0 rgba(16,39,112,.2);
}
.btn:hover{  
  background-color: #102770;
  color: #ffeba7;
  box-shadow: 0 8px 24px 0 rgba(16,39,112,.2);
}

.logo {
	position: absolute;
	top: 30px;
	right: 30px;
	display: block;
	z-index: 100;
	transition: all 250ms linear;
}
.logo img {
	height: auto;
	width: 100px;
	display: block;
}



  </style>