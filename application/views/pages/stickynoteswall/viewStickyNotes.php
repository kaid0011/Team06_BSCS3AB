<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.4/css/fontawesome.min.css" integrity="sha384-jLKHWM3JRmfMU0A5x5AkjWkw/EYfGUAGagvnfryNV3F9VqM98XiIH7VBGVoxVSc7" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;500;600&display=swap" rel="stylesheet"> 
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    <title>Virtual Diary</title>
</head>
<body>
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
                        <button class="d-flex flex-row">Report</button>
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
                        <button class="d-flex flex-row">Report</button>
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
                        <button class="d-flex flex-row">Report</button>
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
                        <button class="d-flex flex-row">Report</button>
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
                        <button class="d-flex flex-row">Report</button>
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
                        <button class="d-flex flex-row">Report</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- end of section -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
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
</body>
</html>
