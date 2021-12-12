<form method="post" id ="updateform" enctype='multipart/form-data' action="<?=base_url('publicnotebook/createPublicPage') ?>"> 
<section id="learn" class="p-5" style="min-height: 75vh;">
  <div class="container my-5">
    <div class="card-3d-wrap mx-auto">
      <div class="card-front" id="card">
        <div class="d-flex p-5">
          <div class="section ">
            <div class="row">
              <div class="col mr-auto  h5">
                <div class="mb-2">Theme</div>
                <div class="row">
                
                    <!-- Light Theme Button -->
                    <div class="col">
                      <input type="button" onclick="changeImgFruits('url(<?=base_url('assets/images/themes/Theme1_Light.jpg')?>)', 'url(<?=base_url('assets/images/themes/LightCard.jpg')?>)', '#212529', 'Light' );" value ="Light" class="p-2 btn"></input>
                      <!-- <button class="p-2 btn" disabled>Light</button> -->
                      </div>
                    <!-- Dark Theme Button -->
                    <div class="col">
                    <input type="button" onclick="changeImgFruits('url(<?=base_url('assets/images/themes/Theme2_Dark.jpg')?>)', 'url(<?=base_url('assets/images/themes/DarkCard.jpg')?>)', '#f8f9fa', 'Dark');" value ="Dark" class="p-2 btn"></input>
                      <!-- <button class="p-2 btn" disabled>Dark</button> -->
                    </div>                   
                    <!-- Apple Theme Button -->
                    <div class="col">
                    <input type="button" onclick="changeImgFruits('url(<?=base_url('assets/images/themes/Theme3_Apple.jpg')?>)', 'url(<?=base_url('assets/images/themes/AppleCard.jpg')?>)', '#212529', 'Apple');"  value ="Apple" class="p-2 btn"></input>
                      <!-- <button class="p-2 btn" disabled>Apple</button> -->
                      </div>
                    <!-- Orange Theme Button -->
                    <div class="col">
                    <input type="button" onclick="changeImgFruits('url(<?=base_url('assets/images/themes/Theme4_Orange.jpg')?>)', 'url(<?=base_url('assets/images/themes/OrangeCard.jpg')?>)', '#212529', 'Orange');" value ="Orange" class="p-2 btn"></input>
                      <!-- <button class="p-2 btn" disabled>Orange</button> -->
                      </div>
                    <!-- Kiwi Theme Button -->
                    <div class="col">
                    <input type="button" onclick="changeImgFruits('url(<?=base_url('assets/images/themes/Theme5_Kiwi.jpg')?>)', 'url(<?=base_url('assets/images/themes/KiwiCard.jpg')?>)', '#212529', 'Kiwi');" value ="Kiwi" class="p-2 btn"></input>
                      <!--  <button class="p-2 btn" disabled>Kiwi</button>-->
                    </div>
                </div>
              </div>

              <div class="col ml-auto h5">           
                <div class="row">   
                  <!-- Theme cheat hidden -->
                    <input type="text" name="theme" id="submittheme" class="btn float-end mt-1" hidden> </input>                                
                </div>
              </div>
              <hr class="bg-light">
              <!--Input Area-->
              <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label"></label>
                    <textarea name="input" class="form-control" id="" rows="13"></textarea> 
                <hr id="inputbox" class="bg-light">
                <input type="file" name="image" id="image" value="image"/>
                <!-- Button-->
                <input type="submit" value= "Submit" name="action"  class="p-2 btn float-end mt-1">
                <!-- Back Button -->
                <input type="submit" value= "Back" name="action" class="p-2 btn float-end mt-1 me-4">      
              </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>


<style>
  body {
    font-weight: 300;
    font-size: 15px;
    color: #212529;
    background-color: #e9ecef;
    background-image: NULL;
    overflow-x: hidden;
  }


  .section {
    position: relative;
    width: 100%;
  }

  .full-height {
    min-height: 100vh;
  }

  
  .card-3d-wrap {
    position: relative;
    width: 1200px;
    max-width: 100%;
    height: 600px;
  }

  .btn {
    width: 80px;
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
    background-color: #adb5bd;
    background-image: NULL;
    position: absolute;
    border-radius: 10px;
  }

  .form-group {
    position: relative;
    display: block;
    margin: 0;
    padding: 0;
  }

  .btn:hover {
    background-color: #6c757d;
    color: #dee2e6;
    box-shadow: 0 8px 24px 0 rgba(16, 39, 112, .2);
  }
</style>

<script>
  const name = document.querySelector(".name");

  function changeImgFruits(color, cardcolor, textcolor, theme) {
    document.getElementById("submittheme").value = theme;
    document.body.style.backgroundImage = color;
    document.getElementById("card").style.backgroundImage = cardcolor;
    document.getElementById("card").style.color = textcolor;
  }

</script>