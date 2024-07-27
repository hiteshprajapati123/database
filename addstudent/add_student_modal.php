<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">students registration</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <!-- from section start -->
                <form class="row g-3" action="addstudent/add_student.php" method="get">
                    <div class="col-md-6">
                        <label for="Name" class="form-label">Name</label>
                        <input type="text" class="form-control" id="Name" name="name" placeholder="enter your name">
                    </div>
                    <div class="col-md-6">
                        <label for="Name" class="form-label">Collage Name</label>
                        <input type="text" name="clg_name" class="form-control" placeholder="enter your Collage">
                    </div>
                    <div class="col-12">
                        <label for="Address" class="form-label">Address</label>
                        <input type="text" class="form-control" id="Address" name="address" placeholder="enter your address">
                    </div>
                    <div class="col-md-6">
                        <label for="inputCity" class="form-label">City</label>
                        <select id="inputCity" name="city" class="form-select">
                            <option selected>Choose</option>
                            <option>Ahmdabad</option>
                            <option>Rajkot</option>
                            <option>Mahesana</option>
                            <option>Jamnagar</option>
                            <option>Gandhinagar</option>
                            <option>Surat</option>
                        </select>
                    </div>
                    <div class="col-md-4">
                        <label for="inputState" class="form-label">State</label>
                        <select id="inputState" name="State" class="form-select">
                            <option selected>Choose</option>
                            <option>gujrat</option>
                            <option>rajshthan</option>
                            <option>mumbai</option>
                            <option>maharastra</option>
                            <option>bihar</option>
                            <option>utter pradesh</option>
                         </select>
                    </div>
                    <div class="col-md-2">
                        <label for="Zip" class="form-label">Zip</label>
                        <input type="text" class="form-control" id="Zip" name="zip">
                    </div>
                    <div class="mb-3">
                        <label for="formFileSm" class="form-label">Img</label>
                        <input class="form-control form-control-sm" id="formFileSm" type="file">
                    </div>
                    <div class="col-md-4">
                        <label for="Phone_no" class="form-label">Phone No</label>
                        <input type="text" class="form-control" id="Phone_no" name="Phone_no" placeholder="enter your no">
                    </div>
                    <div class="col-md-4 m-2 mt-4">
                        <div class="row">
                            <div class="col-12">
                                <label  class="form-check-label" for="gender"> Gender</label>
                            </div>
                            <div class="form-check col-md-6">
                                <input class="form-check-input" type="radio" name="gender" 
                                    id="male" value="Male">
                                <label class="form-check-label" for="male">
                                    Male
                                </label>
                            </div>
                            <div class="form-check col-md-6">
                                <input class="form-check-input" type="radio" name="gender"
                                    id="flexRadioDefault2" checked value="Female">
                                <label class="form-check-label" for="flexRadioDefault2">
                                    Female
                                </label>        
                            </div>  
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="gridCheck">
                            <label class="form-check-label" for="gridCheck">
                                agree with terms and condition
                            </label>
                        </div>
                    </div>
                    <div class="col-12">
                        <button type="submit" class="btn btn-primary">save </button>
                        <button type="reset" class="btn btn-danger" style="float: right;">clear form</button>
                    </div>
                </form>
                <!-- form section stop -->
            </div>
        </div>
    </div>
</div>