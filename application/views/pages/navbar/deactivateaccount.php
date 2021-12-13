<section style="background-color: #e9ecef; min-height: 75vh; padding-top: 80px">
  <div class="container">
    <div>
        <div class="d-flex justify-content-center align-items-center h-100 ms-5 me-5">
            <h1 style="font-size: 100px;" class="mb-4">Are you sure?</h1>
        </div>

        <form method="post" action="<?= base_url('updateprofile/deleteaccount') ?>" autocomplete="off">
            <div class="row text-center py-5">
                <div class="col">
                    <input type="submit" name="action" value="YES" class="input-group-text btn-lg p-5 bg-success text-white fw-normal button" id="basic-addon2">
                </div>
                <div class="col">
                    <input type="submit" name ="action" value="NO" class="input-group-text btn-lg p-5 bg-danger text-white fw-normal button" id="basic-addon2">
                </div>
            </div>
        <div class="pb-3">&nbsp;</div>
        
            <!-- <div class="d-flex justify-content-center align-items-center h-100 ms-5 me-5" style="margin-top: 15vh;">
                <input type="submit" value="YES" name ="action" class="input-group-text"style="background-color:#ced4da; font-size: 15px; height: 30vh; width: 20vw; margin-right: 40vw; text-align: center;" id="basic-addon2">
                <input type="submit" value="NO" name ="action" class="input-group-text btn-lg"style="background-color:#ced4da; font-size: 5px; Height: 5px;" id="basic-addon2">
            </div> -->
        </form>
      
    </div>
  </div>
</section>

<style>

body
{
    height: 75vh;
}
.button{
  display: inline-block;
  padding: 15px 25px;
  font-size: 24px;
  cursor: pointer;
  text-align: center;
  text-decoration: none;
  outline: none;
  color: #fff;
  background-color: #4CAF50;
  border: none;
  border-radius: 15px;
  box-shadow: 0 9px #999;
}

.button:hover {background-color: #3e8e41}

.button:active {
  background-color: #3e8e41;
  box-shadow: 0 5px #666;
  transform: translateY(4px);
}

</style>