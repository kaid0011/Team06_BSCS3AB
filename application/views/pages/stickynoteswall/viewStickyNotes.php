<!-- title and create button(direct to createstickynotes) -->
<div class="px-5 my-4" style="display: flex; flex-direction: row;">
    <div class="display-1 text-primary text-center mx-auto mb-3">Sticky Notes wall</div>
    <a href="<?= base_url('stickynoteswall/createStickyNotes') ?>">
        <button class="btn btn-primary text-white fw-normal btn-outline-secondary ml-auto px-4" type="button">Create</button>
    </a>
</div>
<!-- end of section  -->
<!-- finduser section  -->
<div class="my-4">&nbsp;</div>
<div class = "col-lg-12 col-sm-12 col-md-12 col-xs-12 ">
    <div class="input-group input-group-lg inv-amount-block">
        <div class="w-50 mx-auto" style="display: flex; flex-direction: row;">
            <input type="text" class="form-control" placeholder="Enter Name..." aria-describedby="basic-addon1">
            <button class="btn btn-outline-secondary btn-primary text-white fw-normal" type="button">Search</button>
        </div>
    </div>
</div>
<div class="my-4">&nbsp;</div>
<!-- end of section  -->
<!-- stickynotes card section -->
<section class="p-5" style="background-color: #e9ecef;">
    <div class="display-1 text-center p-4 fw-normal" style="color: #329bba;">Recent Sticky Notes</div>
    <div class="container">
        <div class="row text-center g-4">
            <div class="col-md">
                <div class="card bg-dark text-light">
                    <div class="card-body text-center">
                        <div class="h1 mb-3">
                        </div>
                        <h3 class="card-title text-light">
                            To: Name
                        </h3>
                        <p class="card-text py-5">
                            Kim lang malakas gumamit ng aqua
                        </p>
                        <a href="<?= base_url('reportuser') ?>" style="text-decoration: none;">
                            <button class="d-flex flex-row">Report</button>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-md ">
                <div class="card bg-dark text-light">
                    <div class="card-body text-center">
                        <div class="h1 mb-3">
                        </div>
                        <h3 class="card-title text-light">
                            To: Name
                        </h3>
                        <p class="card-text py-5">
                            ampogi ni jihad crush na crush ko siya, hahahahahahha hahahahaha hahahaha heehhe ahahha
                        </p>
                        <a href="<?= base_url('reportuser') ?>" style="text-decoration: none;">
                            <button class="d-flex flex-row">Report</button>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-md ">
                <div class="card bg-dark text-light">
                    <div class="card-body text-center">
                        <div class="h1 mb-3">
                        </div>
                        <h3 class="card-title text-light">
                            To: Name
                        </h3>
                        <p class="card-text py-5">
                            napakasolid talaga ng team6, sobrang 6xy kasi ng mga tao
                        </p>
                        <a href="<?= base_url('reportuser') ?>" style="text-decoration: none;">
                            <button class="d-flex flex-row">Report</button>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="mb-4"></div>
        <div class="row text-center g-4">
            <div class="col-md">
                <div class="card bg-dark text-light">
                    <div class="card-body text-center">
                        <div class="h1 mb-3">
                        </div>
                        <h3 class="card-title text-light">
                            To: Name
                        </h3>
                        <p class="card-text py-5">
                            paglumubog ang barko saan ka kakapit?
                        </p>
                        <a href="<?= base_url('reportuser') ?>" style="text-decoration: none;">
                            <button class="d-flex flex-row">Report</button>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-md ">
                <div class="card bg-dark text-light">
                    <div class="card-body text-center">
                        <div class="h1 mb-3">
                        </div>
                        <h3 class="card-title text-light">
                            To: Name
                        </h3>
                        <p class="card-text py-5">
                            Baril ka ba, _____ naman
                        </p>
                        <a href="<?= base_url('reportuser') ?>" style="text-decoration: none;">
                            <button class="d-flex flex-row">Report</button>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-md ">
                <div class="card bg-dark text-light">
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
                        <a href="<?= base_url('reportuser') ?>" style="text-decoration: none;">
                            <button class="d-flex flex-row">Report</button>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<style>
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
