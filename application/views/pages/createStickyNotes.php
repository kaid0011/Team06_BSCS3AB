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
    <section>
        <div class="container">
            <div class="display-1 text-info text-center my-4">Submit a post</div>
            <div class="row align-items-center my-5 g-4">
                <div class="col">
                    <button class="p-2 btn btn-outline-primary text-dark border border-3 border-primary">Primary</button>
                  </div>
                  <div class="col">
                    <button class="p-2 btn btn-outline-warning text-dark border border-3 border-warning"> Warning</button>
                  </div>
                  <div class="col">
                    <button class="p-2 btn btn-outline-success text-dark border border-3 border-success">Success</button>
                  </div>
                <div class="col">
                    <button class="p-2 btn btn-outline-success text-dark border border-3 border-success">Success</button>
                </div>
                <div class="col">
                    <button class="py-2 px-3 btn btn-outline-dark text-dark border border-3 border-dark">Dark</button>
                  </div>
                <div class="col">
                    <button class="p-2 btn btn-outline-danger text-dark border border-3 border-danger">Danger</button>
                </div>
            </div>
            <div class="mt-3 row justify-content-center">
                <div class="row position-absolute my-3">
                    <div class="col-lg-5 text-end"></div>
                    <div class="col-lg-2 col-6">
                        <div class="input-group boxbox">
                            <span class="input-group-btn">
                                <button class="btn btn-default" type="button"><span class="lead fw-normal">  To :</span></button>
                            </span>
                            <input type="text" class="form-control " placeholder="Enter Username..." /> 
                        </div>
                    </div>
                    <div class="col-lg-4"></div>
                </div>
                    <div class="my-2"></div>
                    <textarea class="form-control border border-3 border-primary py-5 px-4 toinput inputSize" id="" rows="10"></textarea>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="mb-3 col-8 text-center">
                    <button class="py-3 px-5 btn btn-outline-primary text-dark border border-3 border-primary fw-bold" type="submit" >Submit</button>
                </div>
            </div>
        </div>
    </section>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<style>
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
    width: 200px;
}
.inputSize{
    width: 400px;
    margin-bottom: 1rem;
}
</style>
</body>
</html>