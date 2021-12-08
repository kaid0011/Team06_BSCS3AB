        
                <section id="aboutUs" class="p-5" style="background: #e9ecef; min-height:75vh;">
                    <div class="container mb-5" >
                        <div class="h1 text-center p-4 text-dark me-5">Ticket Report</div>
                        <div class="row align-items-start text-center p-4 me-5">
                
                    <div class="col h3">
                Complainee ID:
                <p class="lead text-center mb-1 p-2 fw-bold">
                            Relmon
                        </p>
                    </div>
                    <div class="col h3">
                    Complainee Username:
                    <p class="lead text-center mb-1 p-2 fw-bold">
                        Pogi
                        </p>
                    </div>
                    <div class="col h3">
                    Complainee Status:
                    <p class="lead text-center mb-1 p-2 fw-bold">
                    <div class="btn-group">
            <button class="btn btn-secondary dropdown-toggle" type="button" id="defaultDropdown" data-bs-toggle="dropdown" data-bs-auto-close="true" aria-expanded="false">
            Active
            </button>
            <ul class="dropdown-menu" aria-labelledby="defaultDropdown">
                <li><a class="dropdown-item" href="#">Active</a></li>
                <li><a class="dropdown-item" href="#">Warned</a></li>
                <li><a class="dropdown-item" href="#">Banned</a></li>
                <li><a class="dropdown-item" href="#">Deactivated</a></li>
            
            </ul>
            </div>
                        </p>
                    </div>
                        </div>
                        <div class=" border-dark border border-3 p-3 mb-3" style="background: #495057; border-radius: 20px;min-height: 720px;">
                        <div class="row align-items-start text-center text-white p-4 me-5">
                        <div class="col h3">
                Report ID:
                <p class="lead text-center text-white mb-1 p-2 fw-bold">
                            1
                        </p>
                    </div>
                    <div class="col h3">
                Complainant ID:
                <p class="lead text-center text-white mb-1 p-2 fw-bold">
                            1
                        </p>
                    </div>
                    <div class="col h3">
            Complainee Status:
            <br>
            <div class="btn-group mt-2">
            <button class="btn btn-secondary dropdown-toggle" type="button" id="defaultDropdown" data-bs-toggle="dropdown" data-bs-auto-close="true" aria-expanded="false">
            To be Reviewed
            </button>
            <ul class="dropdown-menu" aria-labelledby="defaultDropdown">
                <li><a class="dropdown-item" href="#">To be Reviewed</a></li>
                <li><a class="dropdown-item" href="#">Reviewed</a></li>
            
            </ul>
            </div>
                    </div>
                        <p class="lead text-center mb-2 text-white fw-bold">
                        Categories: <br><span class="text-warning fw-normal">Violence</span>
                        </p>
                        <p class="lead text-center mb-1 text-white p-2 fw-bold">
                            Details:
                        </p>
                        <p class="lead text-center mb-5 text-dark p-2 fw-normal bg-light border border-3 border-dark">
                            <span>
                                Matino ang isip ko pero ako'y sabog na
                                Alam ko ang tama at mali pero ako'y sabog na
                                    Ako ay natutuliro alam mo ba
                                    Kasi ako'y sabog na ako'y sabog na ako'y sabog na
                                    <br>            
                                    Lalabas sana aq ng bahay ako'y sabog na
                                    Makkihalubilo sana ako pero ako'y sabog na
                                    Kinausap ko ang aking sarili alam mo ba
                                    Kasi ako'y sabog na ako'y sabog na ako'y sabog na
                                    <br>
                                    Nakakita ako ng daga habang ako'y sabog na
                                    Papalayasin ko talaga pero ako'y sabog na
                                    Imbes na patayin ko niyakap ko pa
                                    Kasi ako'y sabog na ako'y sabog na ako'y sabog na
                            </span>
                        </p>
                        <form>
    <div>
        <label for="exampleInputEmail1" class="lead fw-bold p-2">Comments:</label>
        <textarea name="input" class="form-control" id="" rows="3"></textarea>
      
    </div>
                        </form>
                        </div >
                        <div class=""style="float:right;">
                        <input type="submit" name="signupbtn" value="Delete" style="background-color: #f0b63a;" class="btn border border-3 border-dark me-5"style="float:right;"></input>
                        </div>
                    </div>
                                    
                    <div class="container mt-5">
                        <table class="table">
                            <thead class="table-dark">
                                <tr>
                                    <th scope="col">Report ID</th>
                                    <th scope="col">Complainee ID </th>
                                    <th scope="col">Complainee Username</th>
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
                                    <button class="btn btn-secondary dropdown-toggle btn-sm" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false"> To be Reviewed</button>
                                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                    <li><a class="dropdown-item" href="#">To be Reviewed</a></li>
                                    <li><a class="dropdown-item" href="#">Reviewed</a></li>  </ul>
                                        </div>
                                    </td>    
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
                                    <button class="btn btn-secondary dropdown-toggle btn-sm" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false"> To be Reviewed</button>
                                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                    <li><a class="dropdown-item" href="#">To be Reviewed</a></li>
                                    <li><a class="dropdown-item" href="#">Reviewed</a></li>  </ul>
                                        </div>
                                    </td>    
                                    <td> 
                                      <a href="<?= base_url('reportuser/updateindivreport') ?>">
                        <button class="btn btn-secondary btn-sm" type="button">View Report</button>
                                      </a>
                                     </td>     
                                   
                                
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="text-end mb-4 mt-5">
                    <a href="<?= base_url('reportuser/viewindividualreport') ?>">
                            <input type="submit" name="signupbtn" value="Update" style="background-color: #f0b63a;" class="btn border border-3 border-dark me-5"></input>
                    </a>
                    </div>
                </section>
                
                <style>

                </style>