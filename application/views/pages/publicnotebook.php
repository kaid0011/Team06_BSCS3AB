
<!-- zek changes -->
<div class="container my-5">		
	<div class="card-3d-wrap mx-auto">
		<div class="card-front">
			<div class="d-flex p-5">
			  <div class="section ">
            <div class="row">
              <div class="col mr-auto  h5">
                <div class="mb-2">Theme</div>
                <div class="row">
                  <div class="col">
                    <button class="p-2 btn  ">Light</button>

                    <!-- <button class="p-2 btn btn-outline-primary text-light border border-3 border-primary"disabled>Primary</button> -->
                  </div>
                  <div class="col">
                    <button class="p-2 btn "> Dark</button>
                    <!--<button class="p-2 btn btn-outline-warning text-light border border-3 border-warning"disabled> Warning</button>-->
                  </div>
                  <div class="col">
                    <button class="p-2 btn   ">Apple</button>
                    <!-- <button class="p-2 btn btn-outline-success text-light border border-3 border-success"disabled>Success</button>-->
                  </div>
                  <div class="col">
                    <button class="p-2 btn   ">Orange</button>
                    <!--<button class="p-2 btn btn-outline-dark text-light border border-3 border-dark"disabled>Dark</button>-->
                  </div>
                  <div class="col">
                    <button class="p-2 btn   ">Kiwi</button>
                    <!--  <button class="p-2 btn btn-outline-light text-light border border-3 border-light"disabled>Light</button>-->
                  </div>
                </div>
              </div>
                <!-- if input font-->
              <div class="col ml-auto h5">
                <div class="mb-2"><br></div>
                <div class="row">
                  <div class="col ">
                    
                   
                  </div>
                  <div class="col mx-auto ms-5 ">
                 <!-- <button class="btn p-2" href="">View/Update</button> -->
                
                  </div>
                  <div class="col ">
      
                    <!--<button class="p-2 btn"><i class="bi bi-trash-fill h4"></i></button>-->
                  </div>
                </div>
              </div>
              
            </div>
<!-- end of changes			                                                                                                                                                                                                                                                               -->
<hr class="bg-light">
<!-- END OF THEME, FONT -->
                        <!--INPUT BOX-->
                    <div class="mb-3">
                        <label for="exampleFormControlTextarea1" class="form-label"></label>
                        <textarea class="form-control" id="" rows="13"></textarea>
                        <!-- <textarea class="form-control" id="" rows="13"disabled></textarea>-->
                        <!--END of INPUT BOX-->
                        <hr class="bg-light">
                        <!--SUBMIT BUTTON-->
                        <button class="btn bi bi-star h5 me-2"></button> # of reacts
                        <button class="btn  float-end mt-1 " type="button" >Submit</button>
                        <!--   <button class="btn btn-secondary  float-end mt-1 " type="button" disabled>Submit</button>-->


                                                                             																			      					      					      					      					        		       
                      </div>



<style>
  
  body{
	font-family: 'Poppins', sans-serif;
	font-weight: 300;
	font-size: 15px;
  background-color: #495057;
     /*if theme is dark,
        background-color: #495057;
    if theme is light,
        background-color: #e9ecef;
    if theme is Apple,
        background-image:url(Theme1_Apple.jpg);
     if theme is Orange,
        background-image:url(Theme2_Orange.jpg);
     if theme is Kiwi,
        background-image:url(Theme3_Kiwi.jpg);*/
	overflow-x: hidden;
}
p {
  font-weight: 500;
  font-size: 14px;
  line-height: 1.7;
}
h6 span{
  padding: 0 20px;
  text-transform: uppercase;
}
.section{
  position: relative;
  width: 100%;
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
  width: 100px;
  height: 16px;
  border-radius: 8px;
  padding: 0;
  cursor: pointer;
  background-color: #adb5bd;
}
.card-3d-wrap {
  position: relative;
  width: 1200px;
  max-width: 100%;
  height: 610px; 
}
.btn{
    color: #212529;
    background-color:  #adb5bd;
     /*if theme is dark,
         background-color: #adb5bd;
    if theme is light,
         background-color: #dee2e6;
    if theme is Apple,
         background-color: #adb5bd;
     if theme is Orange,
        background-color: #adb5bd;
     if theme is Kiwi,
       background-color: #adb5bd; */
}

.card-front {
  width: 100%;
  height: 100%;
  color: #f8f9fa;
  background-color:  #212529;
  /*if theme is dark,
        color: #f8f9fa;
        background-color: #212529;
    if theme is light,
         color: #212529;
        background-color: #adb5bd;
    if theme is Apple,
         color: #212529;
        background-image:url(Applecard.jpg);
     if theme is Orange,
         color: #212529;
        background-image:url(Orangecard.jpg);
     if theme is Kiwi,
         color: #212529;
        background-image:url(Kiwicard.jpg);*/
  position: absolute;
  border-radius: 10px;
}
.form-group{ 
  position: relative;
  display: block;
  margin: 0;
  padding:0;
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
.btn:hover{  
  background-color: #6c757d;
  color: #dee2e6;

  box-shadow: 0 8px 24px 0 rgba(16,39,112,.2);
}
</style>