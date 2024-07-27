<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Add Practical</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <!-- from section start -->
                <form class="row g-3" action="/students/addpractical/add_practical_sql.php">
                    <div class="col-md-6">
                        <label for="Name" class="form-label">Practical Name</label>
                        <input type="text" class="form-control" id="practicalname" Name="practicalname">
                        <input type="hidden" name="student_id" value="<?php echo $_GET['student_id'];?>">
                    </div>
                    <div class="col-md-6">
                        <label for="Name" class="form-label">Practical Details</label>
                        <input type="text" class="form-control" id="practicalname" name="practicaldetails">
                    </div>
                    <div class="col-12">
                        <label for="Name" class="form-label">practical file</label>
                        <input type="text" class="form-control" id="inputAddress" placeholder="add file path" name="practicalfile">
                    </div> 
                    <div class="mb-3">
                        <label for="formFileSm" class="form-label">Img</label>
                        <input class="form-control form-control-sm" id="Img" type="file">
                    </div> 
                    </div>
                    <div class="col-12" style="margin-left: 15px;">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="gridCheck">
                            <label class="form-check-label" for="gridCheck">
                                All clear
                            </label>
                        </div>
                    </div>
                    <div class="col-12" style="margin: 20px;">
                        <button type="submit" class="btn btn-primary">Add</button>
                        <button type="reset" class="btn btn-danger mr-5" style="float: right; margin-right: 30px;">clear form</button>
                    </div>
                </form>
                <!-- form section stop -->
            </div>
        </div>
    </div>
</div>