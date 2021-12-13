<!-- title and create button(direct to createstickynotes) -->

<div class="px-5 my-4" style="display: flex; flex-direction: row;">

</div>
<div class="display-1 d-flex justify-content-center align-items-center text-center p-4 fw-normal" style="color: #212529;">Sticky Notes Wall</div>
<!-- end of section  -->
<!-- finduser section  -->

<form method="post" action="<?= base_url('stickynoteswall/findreceiver') ?>">
<div class="my-4">&nbsp;</div>
<div class = "col-lg-12 col-sm-12 col-md-12 col-xs-12 ">
    <div class="input-group input-group-lg inv-amount-block">
        <div class="w-50 mx-auto" style="display: flex; flex-direction: row;">

        <input type="text" name="noteReceiver" placeholder="Enter receiver's name" class="form-control me-2 border-dark border-2">

        <input type="submit"  name="action" value="Search" style="background-color: #f0b63a;" class="btn border border-2 border-dark">
        </div>
    </div>
</div> 
</form>
<!-- end of section  -->
<!-- stickynotes card section -->

<section class="p-5" >
<hr class="dashed mb-5"> 
<div class="d-flex justify-content-center ">
<a href="<?= base_url('stickynoteswall/createstickynotes') ?>">
  <button class="btn btn-lg border border-3 border-dark mb-5" type="button"style="background-color: #f0b63a; width: 50vw;" >Create New Sticky Notes</button>
</a>

</div>

<?php 
                              
                              if ($viewreceiver->num_rows() > 0) {
                              
                            foreach( $viewreceiver->result() as $row){
                
                                
                                ?>


                <div class="card bg-dark text-light " style="@media (min-width: 989px) {width: 25vw; height: 390px;}  @media (max-width: 990px) {
    width: 70vw; height: 390px;}">
                  
                <div data-bs-spy="scroll" data-bs-target="#navbar-example2" data-bs-offset="0" class="scrollspy-example " tabindex="0">
                    <div class="card-body text-center" >
                        <div class="h1 mb-3">
                        </div>
                        
                        <!--ito ung sa part ko-->

                        <h3 class="card-title text-light">
                            To: <?php echo $row->noteReceiver; ?><br>
                        </h3>
                        <p class="card-text py-5" >
                                <?php echo $row->noteInput; ?><br>
                        </p>
                        
                        <!-- End-->
                        
                        <i class="bi bi-star h4 float-start" disabled></i> 
                        <a href="<?= base_url('reportuser') ?>" style="text-decoration: none;">
                            <button class="d-flex ">Report</button>
                        </a>
                    </div>
                </div>
                </div>
            </div>
        </div>
        <?php
    }
  }
?>
        
        </div>
    </div>
</section>



<style>
    
body{
background-color: #e9ecef;
    }
hr.dashed {
border-top: 5px dashed #e9ecef;
}
button{
   
float:right;
}
.scrollspy-example {
   
    overflow-y: scroll;
    overflow-x: hidden;
  }
  .scrollspy-example::-webkit-scrollbar {
    width: 10px;
  }
  .scrollspy-example::-webkit-scrollbar-track {
    -webkit-box-shadow: inset 0 0 6px rgba(252, 252, 228, 0.92);
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

/* center placeholder section*/
   input {
  text-align: center;
}

::-webkit-input-placeholder {
  text-align: center;
}

:-moz-placeholder {
  text-align: center;
}
/* end of center placeholder section */
</style>