<form method="post" id ="updateform" action="<?=base_url('stickynoteswall/createnotes')?>"> 
<section>
  <div class="container">
    <div class="display-1  text-center my-4" id="white">Submit a Post </div>
    <div class="row align-items-center my-5 g-4"> 
		  <div class="section ">
        <div class="d-flex justify-content-center">
          
          <div class="row g-4">

            <!-- Light Theme Button -->   
            <div class="col">
            <input type="button" onclick="changeColor('#e9ecef','Light');" value ="Light" class="p-2 btn"></input>
              <!-- <button class="p-2 btn" disabled>Light</button> -->
            </div>
            
            <!-- Dark Theme Button -->
            <div class="col">
            <input type="button" onclick="changeColor2('#495057', 'Dark');" value ="Dark" class="p-2 btn"></input>
              <!-- <button class="p-2 btn" disabled>Dark</button> -->
            </div>
          
            <!-- Apple Theme Button -->
            <div class="col">
            <input type="button" onclick="changeImgFruits( 'url(<?=base_url('assets/images/themes/Theme1_Apple.jpg')?>)','Apple');"  value ="Apple" class="p-2 btn"></input>
              <!-- <button class="p-2 btn" disabled>Apple</button> -->
            </div>
            
            <!-- Orange Theme Button -->
            <div class="col orange">
            <input type="button" onclick="changeImgFruits('url(<?=base_url('assets/images/themes/Theme2_Orange.jpg')?>)','Orange');" value ="Orange" class="p-2 btn"></input>
              <!-- <button class="p-2 btn" disabled>Orange</button> -->
            </div>
            
            <!-- Kiwi Theme Button -->
            <div class="col">
            <input type="button" onclick="changeImgFruits( 'url(<?=base_url('assets/images/themes/Theme3_Kiwi.jpg')?>)','Kiwi');" value ="Kiwi" class="p-2 btn"></input>
              <!-- <button class="p-2 btn" disabled>Kiwi</button> -->
            </div>
            <input type="text" name="theme" id="submittheme" class="btn float-end mt-1" hidden >

          </div>
        </div>

        <div class="mt-3 row justify-content-center">
          <div class="row position-absolute my-3">
            <div class="col-4 col-xl-5 text-end"></div>
            <div class="col-4 col-xl-2 justify-content-center inputbox" >   
              
              <div class="input-group boxbox mt-2">
                To :<input type="text" class="form-control" id="noteReceiver" name="receiver" placeholder="Enter Name..." />
                    
              </div>
            </div>

            <div class="col-lg-4 col-xl-4"></div>
          </div>
          <div class="my-2" ></div>
          
            <textarea class="form-control border border-3 border-secondary py-5 px-4 toinput inputSize" type="text"  id="noteInput" name="input"rows="10"></textarea>

          </div>
        </div>

        <div class="row justify-content-center">
          <div class="mb-3 col-8 text-center">
            <input class="py-3 px-5 btn " type="submit" value="Submit" name= "action">  
            
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

  .btn {
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

  .btn:hover {  
    background-color: #6c757d;
    color: #dee2e6;
    box-shadow: 0 8px 24px 0 rgba(16,39,112,.2);
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

  function changeColor(color, theme) {
    document.body.style.background = color;
    document.getElementById("submittheme").value = theme;
    document.getElementById("white").style.color ="black"
  }

  function changeColor2(color, theme) {
    document.body.style.background = color;
    document.getElementById("submittheme").value = theme;
    document.getElementById("white").style.color ="white"
  }

  function changeImgFruits(color, theme) {
    document.body.style.backgroundImage = color;
    document.getElementById("submittheme").value = theme;
    document.getElementById("white").style.color ="black"
    
  }

</script>
