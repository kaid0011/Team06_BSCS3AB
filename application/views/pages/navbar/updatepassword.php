<section style="background-color: #e9ecef; min-height: 75vh; padding-top: 80px">
  <div class="container">
    <h1 class="h1 mb-4 pt-1 text-dark text-center">Update Password</h1>
    <div>

      <div class="col-md p-5 d-flex justify-content-center align-items-center">
        <p class="lead align-center">
        <form method="post" action="<?= base_url('updateprofile/updatepassword') ?>" autocomplete="off">
          <!-- Old Password -->
          <div class="mb-3 text-start text-secondary" style="width: 600px;">
            <label for="exampleInputoldpassword1" class="form-label ps-2">Old Password</label>
            <input type="text" class="form-control mb-1" id="exampleoldpassword1" aria-describedby="emailHelp" name="oldpassword" value="<?php echo set_value(''); ?>" />
            <span class="text-danger"><?php echo form_error(''); ?></span> <!-- print error message if there is any -->

            <!-- New Password -->
            <div class="mb-3">
              <label for="examplenewpassword1" class="form-label ps-2">New Password</label>
              <input type="text" class="form-control mb-1" id="examplenewpassword1" aria-describedby="emailHelp" name="newpassword" value="<?php echo set_value(''); ?>" />
              <span class="text-danger"><?php echo form_error(''); ?></span>

              <!-- Confirm New Password -->
              <div class="mb-3">
                <label for="exampleconfirmnewpassword1" class="form-label ps-2">Confirm New Password</label>
                <input type="email" class="form-control mb-1" id="exampleconfirmnewpassword1" aria-describedby="emailHelp" name="confirmnewpassword" value="<?php echo set_value(''); ?>" autocomplete="off" />
                <span class="text-danger"><?php echo form_error(''); ?></span>

               
              </div>
            </div>
          </div>
 
  <div class="col-md pt-3 d-flex justify-content-end align-items-center">  
      <!-- Back Button -->
  <input type="submit" name="backbtn" value="Back" style="background-color: #f0b63a; width: 75px;" class="btn btn-sm border border-3 border-dark btn-end p-2 me-3">
   <!-- Update Button -->
  <input type="submit" name="updatebtn" value="Update" style="background-color: #f0b63a; width: 75px;" class="btn btn-sm border border-3 border-dark btn-end p-2">
  </div>
      </div>
    </div>
  </div>

  
 

  </form>
  </p>
  </div>







  </div>
  </div>

  </div>
  </div>
</section>

<style>
  .scrollspy-example {
    height: 300px;
    overflow-y: scroll;
    overflow-x: hidden;
  }

  .scrollspy-example::-webkit-scrollbar {
    width: 10px;
  }

  .scrollspy-example::-webkit-scrollbar-track {
    -webkit-box-shadow: inset 0 0 6px rgba(0, 0, 0, 0.3);
    -webkit-border-radius: 0px;
    border-radius: 3px;
  }

  .scrollspy-example::-webkit-scrollbar-thumb {
    -webkit-box-shadow: inset 0 0 6px rgba(0, 0, 0, 0.5);
    -webkit-border-radius: 0px;
    background: rgb(149, 153, 165);
    border-radius: 3px;
    height: 5px;
  }
</style>