<section class="p-5" style="background-color: #e9ecef;">
    <div class="h1 text-center p-4 mb-5 inputbox" style="color: black;">
        Report Users
    </div>
        <div class="w-50 mx-auto mt-4 my-2 mb-5" style="display: flex; flex-direction: row;">
        <form action="<?= base_url('supportteam/findReport') ?>" method="post">
            <input type="text" name="findReport" class="form-control inputbox" placeholder="Enter Reported User ID..." aria-describedby="basic-addon1">
            <input type="submit" name="action" value="Search" class="btn btn-outline-secondary btn-primary text-white fw-normal">
        </form>
        </div>        
        <div class="container">
        <table class="table">
            <thead class="table-dark">
                <tr>
                    <th scope="col">Report Id</th>
                    <th scope="col">Complainant Id </th>
                    <th scope="col">Complainee Id</th>
                    <th scope="col">Categories</th>
                    <th scope="col">Status</th>
                    <th scope="col"></th>
                </tr>
            </thead>
            
            <tbody>
            <?php
                if($viewAllReports->num_rows() > 0)
                {
                    foreach($viewAllReports->result() as $row)
                    {
            ?>
            <form action="<?= base_url('supportteam/updateindivreport') ?>" method="post">
                <tr>
                    <th scope="row"><?php echo $row->report_ID; ?>
                        <!-- Hidden Report ID -->
                        <input type="text" name="report_ID" class="btn float-end mt-1"  value="<?php echo $row->report_ID; ?>" hidden>
                    </th>
                    <td><?php echo $row->user_ID; ?></td>
                    <td><?php echo $row->reportedUser_ID; ?>
                        <!-- Hidden Complainee ID -->
                        <input type="text" name="reportedUser_ID" class="btn float-end mt-1"  value="<?php echo $row->reportedUser_ID; ?>" hidden>
                    </td>
                    <td><?php echo $row->reportCategory; ?></td>     
                    <td><?php echo $row->reportStatus; ?></td>       
                    <td> 
                        <input type="submit" name="action" value="View Report" class="btn btn-secondary btn-sm" type="button">
                    </td>
                </tr>
            </form>
            <?php
                    }
                }
            ?>
            </tbody>
            
        </table>
    </div>
</section>
<style>
    body{
        background-color: #eee;
    }
    .img{
        object-fit: contain;
        width: 100px;
        height: 200px;
    }
    @media (max-width:768px){
    .inputbox{
    width: 350px;
    margin-right: 5 rem;
  }
  }
</style>