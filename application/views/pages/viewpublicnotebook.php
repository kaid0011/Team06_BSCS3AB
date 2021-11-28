<div class="container my-5">
  <div class="card-3d-wrap mx-auto">
    <div class="card-front">
      <div class="d-flex p-5">
        <div class="section ">
          <div class="row">
            <div class="col ml-auto h5">
             

              <div class="row">
                
                
                <!-- Update Button -->
                <div class="col ">
                <button class="p-2 btn float-end">Update</button>
                </div>
              </div>

            </div>	  
                                                                                                                                                                                                                                                                         
            <hr class="bg-light">
              <!--Input Area-->
              <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label"></label>
                <textarea class="form-control" id="" rows="14"></textarea>
                <!-- <textarea class="form-control" id="" rows="13" disabled></textarea>-->
</div>
            <hr class="bg-light">
              <!-- Submit Button-->
              <div class="col ">
              <button class="btn bi bi-star h5 me-2" disabled></button> # of reacts
           
            </div>

            
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<style>
  body {
    font-family: 'Poppins', sans-serif;
    font-weight: 300;
    font-size: 15px;
    background-image: url(assets/images/themes/Theme1_Apple.jpg);
    /*if theme is dark,
        background-color: #495057;
    if theme is light,
        background-color: #e9ecef;
    if theme is Apple,
        background-image:url(assets/images/themes/Theme1_Apple.jpg);
     if theme is Orange,
        background-image:url(assets/images/themes/Theme2_Orange.jpg);
     if theme is Kiwi,
        background-image:url(assets/images/themes/Theme3_Kiwi.jpg);*/
    overflow-x: hidden;
  }

  p {
    font-weight: 500;
    font-size: 14px;
    line-height: 1.7;
  }

  h6 span {
    padding: 0 20px;
    text-transform: uppercase;
  }

  .section {
    position: relative;
    width: 100%;
  }

  .full-height {
    min-height: 100vh;
  }

  [type="checkbox"]:checked,
  [type="checkbox"]:not(:checked) {
    position: absolute;
    left: -9999px;
  }

  .checkbox:checked+label,
  .checkbox:not(:checked)+label {
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
    height: 600px;
  }

  .btn {
    width:80px;
    color: #212529;
    background-color: #e9ecef;
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

  .card-front {
    width: 100%;
    height: 100%;
    color: #212529;
    background-image: url(assets/images/themes/Applecard.jpg);
    /*if theme is dark,
        color: #f8f9fa;
        background-color: #212529;
    if theme is light,
        color: #212529;
        background-color: #adb5bd;
    if theme is Apple,
        color: #212529;
        background-image:url(assets/images/themes/Applecard.jpg);
     if theme is Orange,
        color: #212529;
        background-image:url(assets/images/themes/Orangecard.jpg);
     if theme is Kiwi,
        color: #212529;
        background-image:url(assets/images/themes/Kiwicard.jpg);*/
    position: absolute;
    border-radius: 10px;
  }

  .form-group {
    position: relative;
    display: block;
    margin: 0;
    padding: 0;
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

  .btn:hover {
    background-color: #6c757d;
    color: #dee2e6;
    box-shadow: 0 8px 24px 0 rgba(16, 39, 112, .2);
  }
</style>