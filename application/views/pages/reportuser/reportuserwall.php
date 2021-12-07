<section class="p-5" style="background-color: #e9ecef;">
    <div class="h1 text-center p-4 mb-5 inputbox" style="color: black;">
        Report Users
    </div>
        <div class="w-50 mx-auto mt-4 my-2" style="display: flex; flex-direction: row;">
            <input type="text" class="form-control inputbox" placeholder="Enter Reported Username..." aria-describedby="basic-addon1">
                <button class="btn btn-outline-secondary btn-primary text-white fw-normal" type="button">Search</button>
        </div>        
    <div class="container">
        <table class="table">
            <thead class="table-dark">
                <tr>
                    <th scope="col"></th>
                    <th scope="col">Reported Username </th>
                    <th scope="col">Reason for reporting this user</th>
                    <th scope="col">View</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">1</th>
                    <td>ArielMajor@2021</td>
                    <td>Harrasment</td>
                    <td> 
                        <button class="btn btn-secondary btn-sm" type="button">View Report</button>
                    </td>
                </tr>
                <tr>
                    <th scope="row">2</th>
                    <td>ElanieIndustry045</td>
                    <td>Terrorism</td>
                    <td>
                        <button class="btn btn-secondary btn-sm" type="button">View Report</button>
                    </td>
                </tr>
                <tr>
                    <th scope="row">3</th>
                    <td>RelmonPro</td>
                    <td>Suicide or Self Injury</td>
                    <td>
                        <button class="btn btn-secondary btn-sm" type="button">View Report</button>
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