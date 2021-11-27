
    <section>
        <div class="container">
            <div class="display-1  text-center my-4">Submit a post</div>
            <div class="row align-items-center my-5 g-4">
            
			  <div class="section ">
              <div class="d-flex justify-content-center">
              
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
            <div class="mt-3 row justify-content-center">
                <div class="row position-absolute my-3">
                    <div class="col-lg-5 text-end"></div>
                    <div class="col-lg-2 col-6">
                 
                        <div class="input-group boxbox mt-2">
                            
                            To :   <input type="text" class="form-control" placeholder="Enter Username..." /> 
                        </div>
                    </div>
                    <div class="col-lg-4"></div>
                </div>
                    <div class="my-2"></div>
                    <textarea class="form-control border border-3 border-secondary py-5 px-4 toinput inputSize" id="" rows="10"></textarea>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="mb-3 col-8 text-center">
                    <button class="py-3 px-5 btn " type="submit" >Submit</button>
                </div>
            </div>
        </div>
    </section>

<style>

    body{
	font-family: 'Poppins', sans-serif;
	font-weight: 300;
	font-size: 15px;
    color: #212529;
    background-image:url(assets/images/themes/Theme1_Apple.jpg);
     /*if theme is dark,
      color: #f8f9fa;
        background-color: #495057;
    if theme is light,
     color: #212529;
        background-color: #e9ecef;
    if theme is Apple,
     color: #212529;
        background-image:url(assets/images/themes/Theme1_Apple.jpg);
     if theme is Orange,
      color: #212529;
        background-image:url(assets/images/themes/Theme2_Orange.jpg);
     if theme is Kiwi,
      color: #212529;
        background-image:url(assets/images/themes/Theme3_Kiwi.jpg);*/
	overflow-x: hidden;
}
    .btn{
    color: #212529;
    background-color: #adb5bd;
     /*if theme is dark,
         background-color: #adb5bd;
    if theme is light,
         background-color: #adb5bd;
    if theme is Apple,
         background-color: #adb5bd;
     if theme is Orange,
        background-color: #adb5bd;
     if theme is Kiwi,
       background-color: #adb5bd; */
}
.btn:hover{  
  background-color: #6c757d;
  color: #dee2e6;

  box-shadow: 0 8px 24px 0 rgba(16,39,112,.2);
}
    @media (max-width: 768px) {
  .toinput {
    width: 300px;
    padding: 1px;
    margin: 1px;
  }
}
.boxbox{
    padding: 3px;
    align-items: center;
    width: auto;
    
}
.inputSize{
    width: 400px;
    margin-bottom: 1rem;
}
@media (max-width: 768px)
</style>
