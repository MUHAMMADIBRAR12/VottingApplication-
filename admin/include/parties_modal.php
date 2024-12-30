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
              <form class="form-horizontal" method="POST" action="parties_add.php" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="partiename" class="col-sm-7 control-label">Partie Name</label>

                    <div class="col-lg-12">
                      <input type="text" class="form-control" pattern="[a-zA-Z]*" id="partiename" name="partiename" required>
                    </div>
                </div>
                <div class="form-group">
                    <label for="chairmanname" class="col-sm-7 control-label">Chairman Name</label>

                    <div class="col-lg-12">
                      <input type="text" class="form-control" id="chairmanname" pattern="[a-zA-Z]*" name="chairmanname" required>
                    </div>
                </div>
                <div class="form-group">
                    <label for="photo" class="col-sm-7 control-label">Photo</label>

                    <div class="col-lg-12">
                      <input type="file" class="form-control" id="addphoto" name="photo" required>
                    </div>
                </div> 
                <div class="form-group">
                    <label for="password" class="col-sm-7 control-label">password</label>

                    <div class="col-lg-12">
                      <input type="password" class="form-control" pattern="/^[a-zA-Z0-9!@#\$%\^\&*_=+-]{8,12}$/g"  id="Password" name="password" required>
                    </div>
                </div>
                <div class="form-group">
                    <label for="email" class="col-sm-7 control-label">Email</label>

                    <div class="col-lg-12">
                      <input type="email" class="form-control"  id="official_email" name="officialemail" required>
                    </div>
                </div>
                <div class="form-group">
                    <label for="phone_no" class="col-sm-7 control-label">Phone_No</label>

                    <div class="col-lg-12">
                      <input type="text" class="form-control"  id="officialphoneno" name="officialphoneno" required>
                    </div>
                </div>
                <div class="form-group">
                    <label for="address" class="col-sm-7 control-label">Office Address</label>

                    <div class="col-lg-12">
                      <input type="text" class="form-control" id="office_address" name="officeaddress" required>
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
              <form class="form-horizontal" method="POST" action="parties_edit.php">
                <input type="hidden" class="id" name="id">
                
       
                <div class="form-group">
                    <label for="edit_address" class="col-sm-7 control-label">PARTIE NAME</label>

                    <div class="col-lg-11">
                      <input type="text" class="form-control" pattern="[a-zA-Z]*" id="edit_party_name" name="party_name">
                    </div>
                </div>
                <div class="form-group">
                    <label for="edit_chairman_name" class="col-sm-7 control-label">Chair Man Name</label>

                    <div class="col-lg-11">
                      <input type="text" class="form-control" id="edit_chairman_name" pattern="[a-zA-Z]*"  name="chairman_name">
                    </div>
                </div>
                <div class="form-group">
                    <label for="edit_password" class="col-sm-7 control-label">Password</label>

                    <div class="col-lg-11">
                      <input type="text"  pattern="/^[a-zA-Z0-9!@#\$%\^\&*_=+-]{8,12}$/g"  class="form-control" id="edit_password" name="password">
                    </div>
                </div>
                <div class="form-group">
                    <label for="edit_email" class="col-sm-7 control-label">Email</label>

                    <div class="col-lg-11">
                      <input type="text" class="form-control" id="edit_email" name="official_email">
                    </div>
                </div>
                <div class="form-group">
                    <label for="edit_phone_no" class="col-sm-7 control-label">Phone Number</label>

                    <div class="col-lg-11">
                      <input type="text" class="form-control" id="edit_phone_no" name="official_phone_no">
                    </div>
                </div>
                <div class="form-group">
                    <label for="edit_address" class="col-sm-7 control-label">Address</label>

                    <div class="col-lg-11">
                      <input type="text" class="form-control" id="edit_address" name="office_address">
                    </div>
                </div>



                <!-- <div class="form-group">
                    <label for="edit_voters_id" class="col-sm-7 control-label">STATUS</label>

                    <div class="col-lg-11">
                      <input type="text" class="form-control" id="edit_chairman_name" name="edit_chairman_name">
                    </div>
                </div> -->
                
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
              <form class="form-horizontal" method="POST" action="parties_delete.php">
                <input type="hidden" class="id" name="id">
                <div class="text-center">
                    <p>DELETE Parties</p>
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
              <form class="form-horizontal" method="POST" action="parties_photo.php" enctype="multipart/form-data">
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


