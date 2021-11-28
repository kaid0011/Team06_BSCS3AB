<div class="container my-5">
  <div class="card-3d-wrap mx-auto">
    <div class="card-front">
      <div class="d-flex p-5">
        <div class="section ">
          <div class="row">
            <div class="col mr-auto  h5">
              <div class="mb-2">Theme</div>

              <div class="row">

                <!-- Light Theme Button -->
                <div class="col">
                  <button class="p-2 btn">Light</button>
                  <!-- <button class="p-2 btn" disabled>Light</button> -->
                </div>
                
                <!-- Dark Theme Button -->
                <div class="col">
                  <button class="p-2 btn"> Dark</button>
                  <!-- <button class="p-2 btn" disabled>Dark</button> -->
                </div>
                
                <!-- Apple Theme Button -->
                <div class="col">
                  <button class="p-2 btn">Apple</button>
                  <!-- <button class="p-2 btn" disabled>Apple</button> -->
                </div>
                
                <!-- Orange Theme Button -->
                <div class="col">
                  <button class="p-2 btn">Orange</button>
                  <!-- <button class="p-2 btn" disabled>Orange</button> -->
                </div>

                <!-- Kiwi Theme Button -->
                <div class="col">
                  <button class="p-2 btn">Kiwi</button>
                  <!--  <button class="p-2 btn" disabled>Kiwi</button>-->
                </div>

              </div>
            </div>

            <!-- Timer -->
            <div class="col ml-auto h5">
              <div class="mb-2">Timer</div>

              <div class="row">
                <div class="col mt-2">
                  <input type="time" id="appt" name="appt" min="09:00" max="18:00" required>
                  <!-- <input type="time" id="appt" name="appt"  min="09:00" max="18:00" disabled> -->
                </div>

              
                <div class="col mx-auto ms-5 ">
                <button class="p-2 btn">View</button>
                </div>
                
              
                <div class="col ">
                  <form>
                  
                  <button href="#" class="delete_data" action="<?= base_url(); ?>delete/delete_data/"><i class="bi bi-trash-fill h4"></i></button>
                  </form>
                </div>
              </div>

            </div>	  
                                                                                                                                                                                                                                                                         
            <hr class="bg-light">
              <!--Input Area-->
              <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label"></label>
                <textarea class="form-control" id="" rows="13"></textarea>
                <!-- <textarea class="form-control" id="" rows="13" disabled></textarea>-->
              
            <hr class="bg-light">
              <!-- Submit Button-->
              <button class="btn float-end mt-1" type="button">Update</button>
              <!-- <button class="btn float-end mt-1" type="button" disabled>Submit</button> -->
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