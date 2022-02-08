<section id="aboutUs" class="p-5" style="background: #e9ecef; min-height:75vh;">
    <div class="container mb-5">
        <form action="<?= base_url('supportteam/updatereport') ?>" method="post">
            <div class="h1 text-center p-4 text-dark me-5">Ticket Report</div>
            <div class="row align-items-start text-center p-4 me-5">
                <?php
                foreach ($getReportedUserData->result() as $row) {
                ?>
                    <div class="col h3">
                        Complainee ID:
                        <p class="lead text-center mb-1 p-2 fw-bold"><?php echo $row->user_ID; ?></p>
                        <!-- Hidden Complainee ID -->
                        <input type="text" name="reportedUser_ID" class="btn float-end mt-1" value="<?php echo $row->user_ID; ?>" hidden>
                    </div>
                    <div class="col h3">
                        Complainee Username:
                        <p class="lead text-center mb-1 p-2 fw-bold"><?php echo $row->userName; ?></p>
                    </div>
                    <div class="col h3">
                        Complainee Status:
                        <p class="lead text-center mb-1 p-2 fw-bold">
                        <div class="btn-group">
                            <!-- <button class="btn btn-secondary dropdown-toggle" type="button" name="userStatus" id="defaultDropdown" data-bs-toggle="dropdown" data-bs-auto-close="true" aria-expanded="false">
                            <?php //echo $row->status; 
                            ?>
                        </button>
                        <ul class="dropdown-menu" aria-labelledby="defaultDropdown">
                            <li><a class="dropdown-item" href="#">Active</a></li>
                            <li><a class="dropdown-item" href="#">Warned</a></li>
                            <li><a class="dropdown-item" href="#">Banned</a></li>
                            <li><a class="dropdown-item" href="#">Deactivated</a></li>
                        </ul> -->
                            <select name="userStatus" id="defaultDropdown" class="btn btn-secondary dropdown-toggle" data-bs-toggle="dropdown" data-bs-auto-close="true" aria-expanded="false">
                                <option hidden><?php echo $row->status; ?></option>
                                <option value="Active">Active</option>
                                <option value="Warned">Warned</option>
                                <option value="Banned">Banned</option>
                                <option value="Deactivated">Deactivated</option>
                            </select>
                        </div>
                        </p>
                    </div>
                <?php
                }
                ?>
            </div>
            <div class=" border-dark border border-3 p-3 mb-3" style="background: #495057; border-radius: 20px;min-height: 720px;">
                <div class="row align-items-start text-center text-white p-4 me-5">
                    <?php
                    if ($viewIndivReport->num_rows() > 0) {
                        foreach ($viewIndivReport->result() as $row) {
                    ?>
                            <div class="col h3">
                                Report ID:
                                <p class="lead text-center text-white mb-1 p-2 fw-bold"><?php echo $row->report_ID; ?></p>
                                <!-- Hidden Report ID -->
                                <input type="text" name="report_ID" class="btn float-end mt-1" value="<?php echo $row->report_ID; ?>" hidden>
                            </div>
                            <div class="col h3">
                                Complainant ID:
                                <p class="lead text-center text-white mb-1 p-2 fw-bold"><?php echo $row->user_ID; ?></p>
                            </div>
                            <div class="col h3">
                                Report Status:
                                <br>
                                <div class="btn-group mt-2">
                                    <!-- <button class="btn btn-secondary dropdown-toggle" type="button" id="defaultDropdown" data-bs-toggle="dropdown" data-bs-auto-close="true" aria-expanded="false">
                            <?php //echo $row->reportStatus; 
                            ?>
                        </button>
                        <ul class="dropdown-menu" aria-labelledby="defaultDropdown">
                            <li><a class="dropdown-item" href="#">For Review</a></li>
                            <li><a class="dropdown-item" href="#">Reviewed</a></li>
                        </ul> -->
                                    <select name="reportStatus" id="defaultDropdown" class="btn btn-secondary dropdown-toggle" data-bs-toggle="dropdown" data-bs-auto-close="true" aria-expanded="false">
                                        <option hidden><?php echo $row->reportStatus; ?></option>
                                        <option value="For Review">For Review</option>
                                        <option value="Reviewed">Reviewed</option>
                                    </select>
                                </div>
                            </div>
                            <div class="ps-5 pe-0"> 
                                <p class="lead text-center mb-2 text-white fw-bold">
                                    Categories: <br><span class="text-warning fw-normal"><?php echo $row->reportCategory; ?></span>
                                </p>
                                <p class="lead text-center mb-1 text-white p-2 fw-bold">Details: </p>
                                <p class="lead text-center mb-5 text-dark p-2 bg-light border border-3 border-dark">
                                    <span>
                                        <?php echo $row->reportDetails; ?>
                                    </span>
                                </p>
                                <div>
                                    <label for="exampleInputEmail1" class="lead fw-bold p-2">Comments:</label>
                                    <textarea name="comment" class="form-control border border-3 border-dark fixed" id="" rows="3"><?php echo $row->staff_Comment; ?></textarea>
                                </div>
                            </div>
                </div>
                <div class="d-flex justify-content-center mt-5" style="right:0;">
                    <!-- Back -->
                    <input type="submit" name="action" value="Back" style="background-color: #f0b63a;" class="btn border border-3 border-dark me-5">
                    <!-- Update -->
                    <input type="submit" name="action" value="Update" style="background-color: #f0b63a;" class="btn border border-3 border-dark me-5">
                    <!-- Delete -->
                    <input type="submit" name="action" value="Delete" style="background-color: #f0b63a;" class="btn border border-3 border-dark me-5">
                </div>
            </div>
        </form>
<?php
                        }
                    }
?>

<!-- Report List -->
<div class="container mt-5">
    <table class="table">
        <thead class="table-dark">
            <tr>
                <th scope="col">Report ID</th>
                <th scope="col">Complainant ID </th>
                <th scope="col">Complainee ID</th>
                <th scope="col">Categories</th>
                <th scope="col">Status</th>
                <th scope="col"></th>
            </tr>
        </thead>

        <tbody>
            <?php
            if ($viewAllUserReports->num_rows() > 0) {
                foreach ($viewAllUserReports->result() as $row) {
            ?>
                    <form action="<?= base_url('supportteam/updateindivreport') ?>" method="post">
                        <tr>
                            <th scope="row"><?php echo $row->report_ID; ?>
                                <!-- Hidden Report ID -->
                                <input type="text" name="report_ID" class="btn float-end mt-1" value="<?php echo $row->report_ID; ?>" hidden>
                            </th>
                            <td><?php echo $row->user_ID; ?></td>
                            <td><?php echo $row->reportedUser_ID; ?>
                                <!-- Hidden Complainee ID -->
                                <input type="text" name="reportedUser_ID" class="btn float-end mt-1" value="<?php echo $row->reportedUser_ID; ?>" hidden>
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
    </div>
</section>
<style>
    .responsive {
        justify-content: center;
        margin-left: auto;
        margin-right: auto;
        width: 70vw;
    }

    .fixed {
        resize: none;
    }
</style>