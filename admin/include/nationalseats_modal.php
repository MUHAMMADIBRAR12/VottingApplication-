<!-- Add -->
<div class="modal fade" id="addnew">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
              <h4 class="modal-title"><b></b></h4>
            </div>
            <div class="modal-body">
              <form class="form-horizontal" method="POST" action="nationalseats_add.php">
                <div class="form-group">
                    <label for="seat_number" class="col-sm-7 control-label">Seat Number</label>
                    <div class="col-lg-11">
                      <input type="text" class="form-control" id="seat_number" name="seat_number" required>
                    </div>
                </div>
                <div class="form-group">
                    <label for="province" class="col-sm-7 control-label">Province</label>
                    <div class="col-lg-11">
                      <select name='provinceadd'class="form-control" id="country" required>
                        <option>PLEASE SELECT</option>
                       
                      </select>
                      
                    </div>
                </div>
                <div class="form-group">
                    <label for="city" class="col-sm-7 control-label">City</label>
                    <div class="col-lg-11">
                      <select name='cityadd'class="form-control" id="state" required>
                        <option>PLEASE SELECT</option>
                       
                      </select>
                      
                    </div>
                </div>
                  <div class="form-group">
                    <label for="tahseal" class="col-sm-7 control-label">Tahseal</label>
                    <div class="col-lg-11">
                      <select name='tahseal'class="form-control" id="tahseal" required>
                        <option>PLEASE SELECT</option>
                       
                      </select>
                      
                    </div>
                </div>
                  <div class="form-group">
                    <label for="tahseal" class="col-sm-7 control-label">Area</label>
                    <div class="col-lg-11">
                      <select name='area' class="form-control" id="area" required>
                        <option>PLEASE SELECT</option>
                       
                      </select>
                      
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
              <h4 class="modal-title"><b></b></h4>
            </div>
            <div class="modal-body">
              <form class="form-horizontal" method="POST" action="nationalseats_edit.php">
                <input type="hidden" class="id" name="id">
                <div class="form-group">
                    <label for="edit_seat_number" class="col-sm-7 control-label">Seat Number</label>

                    <div class="col-lg-11">
                      <input type="text" class="form-control" id="edit_seat_number" name="seat_number">
                    </div>
                </div>
                <div class="form-group">
                    <label for="edit_province" class="col-sm-7 control-label">Province</label>

                    <div class="col-lg-11">
                      <select name='province'class="form-control" required>
                        <option>PLEASE SELECT</option>
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
                    <label for="edit_city" class="col-sm-7 control-label">City</label>

                    <div class="col-lg-11">
                      <select name='city'class="form-control" required>
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
                    <label for="edit_tahseal" class="col-sm-7 control-label">Tahseal</label>

                    <div class="col-lg-11">
                      <input type="text" class="form-control" id="edit_tahseal" name="tahseal">
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
              <form class="form-horizontal" method="POST" action="nationalseats_delete.php">
                <input type="hidden" class="id" name="id">
                <div class="text-center">
                    <p>Delete City</p>
                    <h2 class="bold description"></h2>
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



     