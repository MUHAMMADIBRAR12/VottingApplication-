<!-- Add -->
<div class="modal fade" id="addnew">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
              <h4 class="modal-title"></h4>
            </div>
            <div class="modal-body">
              <form class="form-horizontal" method="POST" action="voters_add.php" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="firstname" class="col-sm-7 control-label">Firstname</label>

                    <div class="col-lg-11">
                      <input type="text" class="form-control" id="firstname" name="firstname" required>
                    </div>
                </div>
                <div class="form-group">
                    <label for="fathername" class="col-sm-7 control-label">Father name</label>

                    <div class="col-lg-11">
                      <input type="text" class="form-control" id="fathername" name="fathername" required>
                    </div>
                </div>
                <div class="form-group">
                    <label for="password" class="col-sm-7 control-label">Password</label>

                    <div class="col-lg-11">
                      <input type="password" class="form-control" id="password" name="password" required>
                    </div>
                </div>
                <div class="form-group">
                    <label for="photo" class="col-sm-7 control-label">Photo</label>

                    <div class="col-lg-12">
                      <input type="file" class="form-control" id="photo" name="photo" required>
                    </div>
                </div>
                <div class="form-group">
                    <label for="CNIC" class="col-sm-7 control-label">CNIC</label>

                    <div class="col-lg-11">
                      <input type="text" class="form-control" id="CNIC" name="CNIC" required>
                    </div>
                </div>
                <div class="form-group">
                    <label for="city" class="col-sm-7 control-label">City</label>

                    <div class="col-lg-11">
                      <input type="text" class="form-control" id="city" name="city" required>
                    </div>
                </div>
                <div class="form-group">
                    <label for="phone number" class="col-sm-7 control-label">Phone number</label>

                    <div class="col-lg-11">
                      <input type="text" class="form-control" id="phone number" name="phone_number" required>
                    </div>
                </div>
                <div class="form-group">
                    <label for="address" class="col-sm-7 control-label">Address</label>

                    <div class="col-lg-11">
                      <input type="text" class="form-control" id="address" name="address" required>
                    </div>
                </div>
                
                
                
                
                
              
                
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default btn-flat pull-left" data-dismiss="modal"><i class="fa fa-close"></i> Close</button>
              <button type="submit" class="btn btn-primary btn-flat" name="add"><i class="fa fa-save"></i> Save</button>
              </form>
            </div>
        </div>
    </div>
</div>

<!-- Edit -->
<div class="modal fade" id="edit">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
 <!--              <h4 class="modal-title"><b>Edit Voter</b></h4> -->
            </div>
            <div class="modal-body">
              <form class="form-horizontal" method="POST" action="voters_edit.php">
                <input type="hidden" class="id" name="id">
                
                <div class="form-group">
                    <label for="edit_firstname" class="col-sm-7 control-label">Firstname</label>

                    <div class="col-lg-11">
                      <input type="text" class="form-control" id="edit_firstname" name="firstname">
                    </div>
                </div>
                <div class="form-group">
                    <label for="edit_fathername" class="col-sm-7 control-label">Father name</label>

                    <div class="col-lg-11">
                      <input type="text" class="form-control" id="edit_fathername" name="fathername">
                    </div>
                </div>
                <div class="form-group">
                    <label for="edit_password" class="col-sm-7 control-label">Password</label>

                    <div class="col-lg-11">
                      <input type="password" class="form-control" id="edit_password" name="password">
                    </div>
                </div>
                <div class="form-group">
                    <label for="CNIC_" class="col-sm-7 control-label">CNIC</label>

                    <div class="col-lg-11">
                      <input type="text" class="form-control" id="edit_CNIC" name="CNIC">
                    </div>
                </div>
                <div class="form-group">
                    <label for="edit_city" class="col-sm-7 control-label">city</label>

                    <div class="col-lg-11">
                      <input type="text" class="form-control" id="edit_city" name="city">
                    </div>
                </div>
                <div class="form-group">
                    <label for="edit_phone_no" class="col-sm-7 control-label">Phone Number</label>

                    <div class="col-lg-11">
                      <input type="text" class="form-control" id="edit_phone_no" name="phone_number">
                    </div>
                </div>
                <div class="form-group">
                    <label for="edit_address" class="col-sm-7 control-label">Address</label>

                    <div class="col-lg-11">
                      <input type="text" class="form-control" id="edit_address" name="address">
                    </div>
                </div>
                <div class="form-group">
                    <label for="edit_voters_id" class="col-sm-7 control-label">Voters ID</label>

                    <div class="col-lg-11">
                      <input type="text" class="form-control" id="edit_voters_id" name="voters_id">
                    </div>
                </div>
                
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default btn-flat pull-left" data-dismiss="modal"><i class="fa fa-close"></i> Close</button>
              <button type="submit" class="btn btn-success btn-flat" name="edit"><i class="fa fa-check-square-o"></i> Update</button>
              </form>
            </div>
        </div>
    </div>
</div>

<!-- Delete -->
<div class="modal fade" id="delete">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
              <h4 class="modal-title"><b></b></h4>
            </div>
            <div class="modal-body">
              <form class="form-horizontal" method="POST" action="voters_delete.php">
                <input type="hidden" class="id" name="id">
                <div class="text-center">
                    <p>DELETE VOTER</p>
                    <h2 class="bold fullname"></h2>
                </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default btn-flat pull-left" data-dismiss="modal"><i class="fa fa-close"></i> Close</button>
              <button type="submit" class="btn btn-danger btn-flat" name="delete"><i class="fa fa-trash"></i> Delete</button>
              </form>
            </div>
        </div>
    </div>
</div>

<!-- Update Photo -->
<div class="modal fade" id="edit_photo">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
              <h4 class="modal-title"><b><span class="fullname"></span></b></h4>
            </div>
            <div class="modal-body">
              <form class="form-horizontal" method="POST" action="voters_photo.php" enctype="multipart/form-data">
                <input type="hidden" class="id" name="id">
                <div class="form-group">
                    <label for="photo" class="col-sm-3 control-label">Photo</label>

                    <div class="col-sm-9">
                      <input type="file" id="photo" name="photo" required>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default btn-flat pull-left" data-dismiss="modal"><i class="fa fa-close"></i> Close</button>
              <button type="submit" class="btn btn-success btn-flat" name="upload"><i class="fa fa-check-square-o"></i> Update</button>
              </form>
            </div>
        </div>
    </div>
</div>


     