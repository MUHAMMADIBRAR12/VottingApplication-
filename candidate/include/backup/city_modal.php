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
              <form class="form-horizontal" method="POST" action="city_add.php">
                <div class="form-group">
                    <label for="city_name" class="col-sm-7 control-label">City name</label>

                    <div class="col-lg-11">
                      <input type="text" class="form-control" id="city_name" name="city_name" required>
                    </div>
                </div>
                <div class="form-group">
                    <label for="province" class="col-sm-7 control-label">Province</label>

                    <div class="col-lg-11">
                      <select name='province'class="form-control" id="province" required="">
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
              <form class="form-horizontal" method="POST" action="city_edit.php">
                <input type="hidden" class="id" name="id">
                <div class="form-group">
                    <label for="edit_city_name" class="col-sm-7 control-label">City name</label>

                    <div class="col-lg-11">
                      <input type="text" class="form-control" id="edit_city_name" name="city_name">
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
              <form class="form-horizontal" method="POST" action="city_delete.php">
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



     