<section style="background-color: #e9ecef; min-height: 75vh; padding-top: 80px">
  <div class="container">
    <div>
        <div class="d-flex justify-content-center align-items-center h-100 ms-5 me-5">
            <h1 style="font-size: 120px">Are you sure?</h1>
        </div>

        <form method="post" action="<?= base_url('updateprofile/deleteaccount') ?>" autocomplete="off">
            <div class="d-flex justify-content-center align-items-center h-100 ms-5 me-5" style="margin-top: 15vh;">
                <input type="submit" value="YES" name ="action" class="input-group-text"style="background-color:#ced4da; font-size: 15px; height: 30vh; width: 20vw; margin-right: 40vw; text-align: center;" id="basic-addon2">
                <input type="submit" value="NO" name ="action" class="input-group-text"style="background-color:#ced4da; font-size: 5px; Height: 5px;" id="basic-addon2">
            </div>
        </form>
      
    </div>
  </div>
</section>

<style>

body
{
    height: 75vh;
}


</style>