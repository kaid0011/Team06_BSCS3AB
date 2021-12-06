<section style="background-color: #e9ecef; min-height: 75vh; padding-top: 80px">
  <div class="container">
    <h1 class="h1 mb-4 pt-1 text-dark text-center">Update Password</h1>
    
    <div>

      <div class="col-md p-5 d-flex justify-content-center align-items-center">
        <p class="lead align-center">
       
        <form method="post" action="<?= base_url('updateprofile/updatepassword') ?>" autocomplete="off">
          <!-- Old Password -->
          <?php
              if ($this->session->flashdata('message')) 
              {
                  echo '<div class="alert alert-danger">' . $this->session->flashdata("message") . '</div>';
              }
          ?>
          <div class="mb-3 text-start text-secondary" style="width: 600px;">
            <label for="exampleloldpassword" class="form-label ps-2">Old Password</label>
            <input type="password" class="form-control mb-1" id="exampleoldpassword" aria-describedby="emailHelp" name="oldPassword" value="" />
            <span class="text-danger"><?php echo form_error('oldPassword'); ?></span> <!-- print error message if there is any -->


            <!-- New Password -->
            <div class="mb-3">
              <label for="examplenewpassword" class="form-label ps-2">New Password</label>
              <input type="password" class="form-control mb-1" id="examplenewpassword" aria-describedby="emailHelp" name="newPassword" value="" />
              <span class="text-danger"><?php echo form_error('newPassword'); ?></span>

              <!-- Confirm New Password -->
              <div class="mb-3">
                <label for="exampleconfirmpassword" class="form-label ps-2">Confirm New Password</label>
                <input type="password" class="form-control mb-1" id="exampleconfirmpassword" aria-describedby="emailHelp" name="confirmPassword" value="" />
                <span class="text-danger"><?php echo form_error('confirmPassword'); ?></span>
              </div>
            </div>
          </div>

          <div class="col-md pt-3 d-flex justify-content-end align-items-center">
            <!-- Back Button -->
            <input type="submit" name="action" value="Back" style="background-color: #f0b63a; width: 75px;" class="btn btn-sm border border-3 border-dark btn-end p-2 me-3">
            <!-- Update Button -->
            <input type="submit" name="action" value="Update" style="background-color: #f0b63a; width: 75px;" class="btn btn-sm border border-3 border-dark btn-end p-2">
          </div>
        </form>
        </p>
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