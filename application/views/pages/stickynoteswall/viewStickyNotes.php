<!-- title and create button(direct to createstickynotes) -->
<div class="px-5 my-4" style="display: flex; flex-direction: row;">

</div>
<div class="display-1 d-flex justify-content-center align-items-center text-center p-4 fw-normal" style="color: #212529;">Sticky Notes Wall</div>
<!-- end of section  -->
<!-- finduser section  -->
<div class="my-4">&nbsp;</div>
<div class = "col-lg-12 col-sm-12 col-md-12 col-xs-12 ">
    <div class="input-group input-group-lg inv-amount-block">
        <div class="w-50 mx-auto" style="display: flex; flex-direction: row;">

        <input type="text" name="userName"placeholder="Enter receiver's name" class="form-control me-2 border-dark border-2">

        <button type="submit" style="background-color: #f0b63a;" class="btn border border-2 border-dark">Search</button>
        </div>
    </div>
</div>
<!-- end of section  -->
<!-- stickynotes card section -->

<section class="p-5" >
<hr class="dashed mb-5"> 
<div class="d-grid gap-2 col-6 mx-auto">
  <button class="btn btn-lg border border-3 border-dark mb-5" type="button"style="background-color: #f0b63a;">Create New Sticky Notes</button>
  <a href="<?= base_url('stickynoteswall/createStickyNotes') ?>">
</div>
</a>

    <div class="container" >
        <div class="row text-center g-4">
            <div class="col-md">
                <div class="card bg-dark text-light">
                <div data-bs-spy="scroll" data-bs-target="#navbar-example2" data-bs-offset="0" class="scrollspy-example " tabindex="0">
                    <div class="card-body text-center">
                        <div class="h1 mb-3">
                        </div>
                        <h3 class="card-title text-light">
                            To: Name
                        </h3>
                        <p class="card-text py-5">
                            Kim lang malakas gumamit ng aqua
                        </p>
                        <i class="bi bi-star h4 float-start" disabled></i> 
                        <a href="<?= base_url('reportuser') ?>" style="text-decoration: none;">
                            <button class="d-flex ">Report</button>
                        </a>
                    </div>
                </div>
                </div>
            </div>
            <div class="col-md ">
                <div class="card bg-dark text-light">
                <div data-bs-spy="scroll" data-bs-target="#navbar-example2" data-bs-offset="0" class="scrollspy-example " tabindex="0">
                    <div class="card-body text-center">
                        <div class="h1 mb-3">
                        </div>
                        <h3 class="card-title text-light">
                            To: Name
                        </h3>
                        <p class="card-text py-5">
                            ampogi ni jihad crush na crush ko siya, hahahahahahha hahahahaha hahahaha heehhe ahahha
                        </p>
                        <i class="bi bi-star h4 float-start" disabled></i> 
                        <a href="<?= base_url('reportuser') ?>" style="text-decoration: none;">

                            <button class="d-flex" >Report</button>

                        </a>
                    </div>
                </div>
                </div>
            </div>
            <div class="col-md ">
                <div class="card bg-dark text-light">
                <div data-bs-spy="scroll" data-bs-target="#navbar-example2" data-bs-offset="0" class="scrollspy-example " tabindex="0">
                    <div class="card-body text-center">
                        <div class="h1 mb-3">
                        </div>
                        <h3 class="card-title text-light">
                            To: Name
                        </h3>
                        <p class="card-text py-5">
                            napakasolid talaga ng team6, sobrang 6xy kasi ng mga tao
                        </p>
                        <i class="bi bi-star h4 float-start" disabled></i> 
                        <a href="<?= base_url('reportuser') ?>" style="text-decoration: none;">
                            <button class="d-flex ">Report</button>
                        </a>
                    </div>
                </div>
                </div>
            </div>
        </div>
        <div class="mb-4"></div>
        <div class="row text-center g-4">
            <div class="col-md">
                <div class="card bg-dark text-light">
                <div data-bs-spy="scroll" data-bs-target="#navbar-example2" data-bs-offset="0" class="scrollspy-example " tabindex="0">
                    <div class="card-body text-center">
                        <div class="h1 mb-3">
                        </div>
                        <h3 class="card-title text-light">
                            To: Name
                        </h3>
                        <p class="card-text py-5">
                            paglumubog ang barko saan ka kakapit?
                        </p>
                        <i class="bi bi-star h4 float-start" disabled></i> 
                        <a href="<?= base_url('reportuser') ?>" style="text-decoration: none;">
                            <button class="d-flex ">Report</button>
                        </a>
                     </div>
                    </div>
                </div>
            </div>
            <div class="col-md ">
                <div class="card bg-dark text-light">
                <div data-bs-spy="scroll" data-bs-target="#navbar-example2" data-bs-offset="0" class="scrollspy-example" tabindex="0">
                    <div class="card-body text-center">
                        <div class="h1 mb-3">
                        </div>
                        <h3 class="card-title text-light">
                            To: Name
                        </h3>
                        <p class="card-text py-5">
                            Baril ka ba, _____ naman
                        </p>
                        <i class="bi bi-star h4 float-start" disabled></i> 
                        <a href="<?= base_url('reportuser') ?>" style="text-decoration: none;">
                            <button class="d-flex ">Report</button>
                        </a>
                      </div>
                     </div>
                </div>
            </div>
            <div class="col-md ">
                <div class="card bg-dark text-light">
                <div data-bs-spy="scroll" data-bs-target="#navbar-example2" data-bs-offset="0" class="scrollspy-example " tabindex="0">
                    <div class="card-body text-center">
                        <div class="h1 mb-3">
                        </div>
                        <h3 class="card-title text-light">
                            To: Name
                        </h3>
                        <p class="card-text py-5">
                            Pagpasensiyahan n'yo na kung kami'y nanggugulo
                            Ganyan lang talaga t'wing kami'y namamasko
                        </p>
                        <i class="bi bi-star h4 float-start" disabled></i> 
                        <a href="<?= base_url('reportuser') ?>" style="text-decoration: none;">
                            <button class="d-flex ">Report</button>
                        </a>
                        </div>
                   </div>
                </div>
            </div>
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
