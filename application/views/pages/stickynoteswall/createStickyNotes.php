<form method="post" id ="updateform" action="<?=base_url('stickynoteswall/createnotes')?>">
<section style="min-height: 75vh;">
  <div class="container">
    <div class="display-1 text-center my-4  " id="white">What's your Message?</div>
    <div class="row align-items-center my-5 g-4"> 
    <div class="card-3d-wrap mx-auto">
      <div class="card-front" id="card">
      <div class="section ">
	
        <div class="d-flex p-5 justify-content-center">

          
          <div class="row g-4">
            <!-- Light Theme Button -->   
            <div class="col">
            <input type="button" onclick="changeColor('#e9ecef', 'url(<?=base_url('assets/images/themes/LightNote.jpg')?>)','url(<?=base_url('assets/images/themes/Card.jpg')?>)', 'Light');" value ="Light" class="p-2 btn">
              <!-- <button class="p-2 btn" disabled>Light</button> -->
            </div>
            
            <!-- Dark Theme Button -->
            <div class="col">
            <input type="button" onclick="changeColor2('#495057', 'url(<?=base_url('assets/images/themes/DarkNote.jpg')?>)', 'url(<?=base_url('assets/images/themes/DarkCard.jpg')?>)','Dark');" value ="Dark" class="p-2 btn">
              <!-- <button class="p-2 btn" disabled>Dark</button> -->
            </div>
          
            <!-- Apple Theme Button -->
            <div class="col">
            <input type="button" onclick="changeImgFruits( 'url(<?=base_url('assets/images/themes/Theme3_Apple.jpg')?>)','url(<?=base_url('assets/images/themes/AppleNote.jpg')?>)','url(<?=base_url('assets/images/themes/Applecard.jpg')?>)','Apple');"  value ="Apple" class="p-2 btn">
              <!-- <button class="p-2 btn" disabled>Apple</button> -->
            </div>
            
            <!-- Orange Theme Button -->
            <div class="col orange">
            <input type="button" onclick="changeImgFruits('url(<?=base_url('assets/images/themes/Theme4_Orange.jpg')?>)','url(<?=base_url('assets/images/themes/OrangeNote.jpg')?>)','url(<?=base_url('assets/images/themes/Orangecard.jpg')?>)', 'Orange');" value ="Orange" class="p-2 btn">
              <!-- <button class="p-2 btn" disabled>Orange</button> -->
            </div>
            
            <!-- Kiwi Theme Button -->
            <div class="col">
            <input type="button" onclick="changeImgFruits( 'url(<?=base_url('assets/images/themes/Theme5_Kiwi.jpg')?>)','url(<?=base_url('assets/images/themes/KiwiNote.jpg')?>)','url(<?=base_url('assets/images/themes/Kiwicard.jpg')?>)','Kiwi');" value ="Kiwi" class="p-2 btn">
              <!-- <button class="p-2 btn" disabled>Kiwi</button> -->
            </div>
            <input type="text" name="theme" id="submittheme" class="btn float-end mt-1" hidden>

          </div>
        </div>

        <div class="mt-3 row justify-content-center">
          <div class="row position-absolute my-3">

            <div class="col-4 col-xl-3.5 text-end"></div>

            <div class="col-8 col-xl-2 justify-content-center inputbox ">   
              <div class="input-group justify-content-center boxbox mt-2">
                <div id="to">To :</div><input type="text" class="form-control " id="noteReceiver" name="receiver" placeholder="Enter Name..." /> 

              </div>
            </div>

            <div class="col-lg-4 col-xl-4"></div>
          </div>
          <div class="my-2" ></div>
          
            <textarea class="form-control border border-3 border-secondary py-5 px-4 toinput inputSize" type="text"  id="noteInput" name="input"rows="10"></textarea>

          </div>
        </div>
      <form method="post" action ="<?= base_url('stickynoteswall/createstickynotes')?>">
        <div class = "row justify-content-center">
          <div class="mb-3 col-8 text-center">
            <input class="me-2 py-3 px-5 btn btn-sm " type="submit" value="Back" name="action" ></input>
            <input class="py-3 px-5 btn btn-sm "  type="submit" value="Submit" name="action" ></input>

          </div>
        </div>

      </div>
    </div>
    </div>
    </div>

  </div>
</section>
</form>

<style>
  body {
    font-family: 'Poppins', sans-serif;
    font-weight: 300;
    font-size: 15px;
    color: #212529;
  
    
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
    
  }

  .btn {
    color: #212529;
    background-color: #dee2e6;
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
  .inputbox
  {
    width: 300px;
  }

  .btn:hover {  
    background-color: #6c757d;
    color: #dee2e6;
    box-shadow: 0 8px 24px 0 rgba(16,39,112,.2);
  }
  .card-3d-wrap {
    position: relative;
    width: 800px;
    max-width: 100%;
    height: 600px;
  }
  .card-front {
    width: 100%;
    height: 100%;
    color:<?php echo $themecardcolor ?> ;
    background-color: rgba(0,0,0,0.3);
    border-radius: 10px;
  }
  


  @media (max-width: 450px) {
    .toinput {
      width: 300px;
      padding: 1px;
      margin: 1px;
    }
    .inputbox{
    width: 1000px;
  }
  }
  @media (max-width:620px) and (min-width:451px){
    .inputbox{
    width: 400px;
    display: block;
    margin : 0 auto;
  }
  }
  @media (max-width:764 px) and (min-width:620 px){
    .inputbox{
    width: 200px;
    display: block;
    margin : 0 auto;
  }
  }
  .boxbox {
    padding: 3px;
    align-items: center;
    width: auto;
  }

  .inputSize {
    width: 400px;
    margin-bottom: 1rem;
  }
  @media (min-width:1230px){
    .inputSize {
    width: 500px;
    margin-bottom: 1rem;
  }
  }
  @media (max-width:320px){
    .orange{
      margin-left:35px;
    }
    .light{
      margin-left:10px;
    }
    .dark{
      margin-left:10px;
    }
  }
  @media (max-width:375px) and (min-width:321px){
    .light{
      margin: 0 35px ;
    }
    .orange{
      margin-left:60px;
    }
  }
</style>

<script>

  const name = document.querySelector(".name");

  function changeColor(color, cardcolor, inputcolor, theme) {
    document.body.style.background = color;
    document.getElementById("noteInput").style.backgroundImage = inputcolor
    document.getElementById("noteInput").style.color = "black"
    document.getElementById("to").style.color = "black"
    document.getElementById("white").style.color ="black"
    document.getElementById("card").style.background = cardcolor;
    document.getElementById("submittext").value = theme;
    
  }

  function changeColor2(color, cardcolor, inputcolor, textcolor, theme) {
    document.body.style.background = color;
    document.getElementById("card").style.background = cardcolor;
    document.getElementById("noteInput").style.backgroundImage = inputcolor;
    document.getElementById("noteInput").style.color = "White"
    document.getElementById("to").style.color = "white"
    document.getElementById("white").style.color = "white"
    document.getElementById("submittext").value = theme;
    
  }

  function changeImgFruits(color, cardcolor, inputcolor, theme) {
    document.body.style.backgroundImage = color;
    document.getElementById("card").style.backgroundImage = cardcolor;
    document.getElementById("noteInput").style.backgroundImage = inputcolor
    document.getElementById("noteInput").style.color = "black"
    document.getElementById("to").style.color = "black"
    document.getElementById("white").style.color ="black"
    document.getElementById("submittext").value = theme;
  }

  
</script>
