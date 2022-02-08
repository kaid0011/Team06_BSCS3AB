<section class="p-5" style="background-color: #e9ecef; min-height: 75vh;">
    <div class="h1 text-center p-4 mb-5 inputbox" style="color: black;">
        User Reports
    </div>
    
        <form method="post" action="<?= base_url('supportteam/findReport') ?>">
            <div class="my-4">&nbsp;</div>
                <div class="col-lg-12 col-sm-12 col-md-12 col-xs-12">
                    <div class="input-group input-group-lg inv-amount-block">
                    <div class="w-50 mx-auto" style="display: flex; flex-direction: row;">

                        <input type="text" name="findReport" class="form-control inputbox" placeholder="Enter Complainee ID" aria-describedby="basic-addon1">

                        <input type="submit" name="action" value="Search" style="background-color: #f0b63a;" class="ms-2 btn border border-2 border-dark">
                    </div>
                    </div>
                </div>
        </form>

        <div class="container mt-5">
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
                if($viewAllUserReports->num_rows() > 0)
                {
                    foreach($viewAllUserReports->result() as $row)
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