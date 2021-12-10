<section class="p-5" style="background-color: #e9ecef;">
    <div class="h1 text-center p-4 mb-5 inputbox" style="color: black;">
        Individual Report
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
                <tr>
                    <th scope="row">1</th>
                    <td>ArielMajor</td>
                    <td>Relmon</td>
                    <td>Harrasment</td>     
                    <td><div class="dropdown">
                    <button class="btn btn-secondary dropdown-toggle btn-sm" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false"> Status</button>
                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                     <li><a class="dropdown-item" href="#">To be Reviewed</a></li>
                     <li><a class="dropdown-item" href="#">Reviewed</a></li>
                  
                         </ul>
                        </div></td>       
                    <td> 
                    <a href="<?= base_url('reportuser/updateindivreport') ?>">
                        <button class="btn btn-secondary btn-sm" type="button">View Report</button>
                    </a>
                    </td>
                </tr>
                <tr>
                    <th scope="row">2</th>
                    <td>Relmon</td>
                    <td>Ariel</td>
                    <td>Harrasment</td>     
                    <td><div class="dropdown">
                    <button class="btn btn-secondary dropdown-toggle btn-sm" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false"> Status</button>
                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                     <li><a class="dropdown-item" href="#">To be Reviewed</a></li>
                     <li><a class="dropdown-item" href="#">Reviewed</a></li>
                  
                         </ul>
                        </div></td>       
                    <td> 
                    <a href="<?= base_url('reportuser/updateindivreport') ?>">
                        <button class="btn btn-secondary btn-sm" type="button">View Report</button>
                    </a>
                    </td>
                </tr>
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