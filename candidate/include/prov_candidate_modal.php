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
              <form class="form-horizontal" method="POST" action="prov_can_add.php" enctype="multipart/form-data">
              <div class="form-group">
                    <label for="city" class="col-sm-7 control-label">PA SEAT</label>
                    <div class="col-lg-12">
                      <select name='seatno'class="form-control" required>
                        <option>PLEASE SELECT</option>
                        <?php 
                      $select="select * from provincial_seats ORDER BY seat_no";
                      $select=mysqli_query($conn,$select);
                      while($row=mysqli_fetch_assoc($select)){
                      ?>
                         <option value='<?php echo $row['pr_id'];?>'>PA <?php echo $row['seat_no']?></option>
                       <?php 
                     }
                   ?>
                      </select>
                      
                    </div>
                </div>
                <div class="form-group">
                    <label for="firstname" class="col-sm-7 control-label">first name</label>

                    <div class="col-lg-12">
                      <input type="text" class="form-control"  pattern="[a-zA-Z]*"id="firstname" name="firstname" required>
                    </div>
                </div>
                <div class="form-group">
                    <label for="lastname" class="col-sm-7 control-label">lastname</label>

                    <div class="col-lg-12">
                      <input type="text" class="form-control"  pattern="[a-zA-Z]*" id="lastname" name="lastname" required>
                    </div>
                </div>
                <div class="form-group">
                    <label for="photo" class="col-sm-7 control-label">Photo</label>

                    <div class="col-lg-12">
                      <input type="file" class="form-control" id="photo" name="photo" required>
                    </div>
                </div> 
                 <div class="form-group">
                    <label for="CNIC_" class="col-sm-7 control-label">CNIC</label>

                    <div class="col-lg-12">
                      <input type="text" class="form-control" id="cnic" name="cnic" required>
                    </div>
                </div>
               
                 
                 <div class="form-group">
                    <label for="phone_no" class="col-sm-7 control-label">Phone Number</label>

                    <div class="col-lg-12">
                      <input type="varchar" class="form-control" id="phone_no" name="phone_no" required>
                    </div>
                </div> 
                 <div class="form-group">
                    <label for="email" class="col-sm-7 control-label">Email</label>

                    <div class="col-lg-12">
                      <input type="email" class="form-control" id="email" name="email" required>
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
              <form class="form-horizontal" method="POST" action="candidates_edit.php">
                <input type="hidden" class="id" name="id">
                
                <!-- <div class="form-group">
                    <label for="edit_positionID" class="col-sm-7 control-label">position ID</label>

                    <div class="col-lg-11">
                      <input type="text" class="form-control" id="edit_positionID" name="positionID">
                    </div>
                </div> -->
       
                <div class="form-group">
                    <label for="edit_firstname" class="col-sm-7 control-label">first name</label>

                    <div class="col-lg-11">
                      <input type="text" class="form-control"  pattern="[a-zA-Z]*"id="edit_firstname" name="firstname">
                    </div>
                </div>
                <div class="form-group">
                    <label for="edit_lastname" class="col-sm-7 control-label">Lastname</label>

                    <div class="col-lg-11">
                      <input type="text" class="form-control"  pattern="[a-zA-Z]*"id="edit_lastname" name="lastname">
                    </div>
                </div>
                 <div class="form-group">
                    <label for="edit_cnic" class="col-sm-7 control-label">CNIC</label>

                    <div class="col-lg-11">
                      <input type="text" class="form-control" id="edit_cnic" name="cnic">
                    </div>
                </div>
                <div class="form-group">
                    <label for="city" class="col-sm-7 control-label">City</label>
                    <div class="col-lg-11">
                      <select name='cityadd'class="form-control" >
                        <option>PLEASE SELECT</option>
                        <?php 
                      $select="select * from city";
                      $select=mysqli_query($conn,$select);
                      while($row=mysqli_fetch_assoc($select)){
                      ?>
                         <option value='<?php echo $row['ci_id'];?>'><?php echo $row['city_name']?></option>
                       <?php 
                     }
                   ?>
                      </select>
                      
                    </div>
                </div>
           <div class="form-group">
                    <label for="province" class="col-sm-7 control-label">Province</label>

                    <div class="col-lg-11">
                      <select name='province'class="form-control" id="province" >
                        <option value=''>PLEASE SELECT</option>
                        <?php 
                      $select="select * from province";
                      $select=mysqli_query($conn,$select);
                      while($row=mysqli_fetch_assoc($select)){
                      ?>
                         <option value='<?php echo $row['id'];?>'><?php echo $row['Province_name']?></option>
                       <?php 
                     }
                   ?>
                      </select>
                      
                    </div>
                </div> 
                
                <div class="form-group">
                    <label for="edit_ph_number" class="col-sm-7 control-label">phone Number</label>

                    <div class="col-lg-11">
                      <input type="text" class="form-control" id="edit_ph_number" name="ph_number">
                    </div>
                </div>
                 <div class="form-group">
                    <label for="edit_email" class="col-sm-7 control-label">email</label>

                    <div class="col-lg-11">
                      <input type="email" class="form-control" id="edit_email" name="email">
                    </div>
                </div>
                 <div class="form-group">
                    <label for="edit_password" class="col-sm-7 control-label">password</label>

                    <div class="col-lg-11">
                      <input type="password" class="form-control" id="edit_password" name="password">
                    </div>
                </div>
                 <div class="form-group">
                    <label for="edit_platform" class="col-sm-7 control-label">platform
                    </label>

                    <div class="col-lg-11">
                      <input type="text" class="form-control" id="edit_platform" name="platform">
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
              <form class="form-horizontal" method="POST" action="candidates_delete.php">
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
              <form class="form-horizontal" method="POST" action="candidates_photo.php" enctype="multipart/form-data">
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


