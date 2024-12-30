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
              <form class="form-horizontal" method="POST" action="area_add.php">
                <div class="form-group">
                    <label for="area_name" class="col-sm-7 control-label">Area name</label>

                    <div class="col-lg-11">
                      <input type="text" class="form-control"  pattern="[a-zA-Z]*" id="area_name" name="area_name" required>
                    </div>
                </div>
                <div class="form-group">
                    <label for="city" class="col-sm-7 control-label">Tahseal</label>

                    <div class="col-lg-11">
                      <select name='city'class="form-control" id="city" required="">
                        <option value=''>PLEASE SELECT</option>
                        <?php 
                      $select="select * from tehsil";
                      $select=mysqli_query($conn,$select);
                      while($row=mysqli_fetch_assoc($select)){
                      ?>
                         <option value='<?php echo $row['thsl_id'];?>'><?php echo $row['thsl_name']?></option>
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
              <form class="form-horizontal" method="POST" action="area_edit.php">
                <input type="hidden" class="id" name="id">
                <div class="form-group">
                    <label for="edit_area_name" class="col-sm-7 control-label">Area name</label>

                    <div class="col-lg-11">
                      <input type="text" class="form-control"  pattern="[a-zA-Z]*" id="edit_area_name" name="area_name">
                    </div>
                </div>
                <div class="form-group">
                    <label for="edit_city" class="col-sm-7 control-label">Tehseel</label>

                    <div class="col-lg-11">
                      <select name='city'class="form-control" required>
                        <option>PLEASE SELECT</option>
                        <?php 
                      $select="select * from tehsil";
                      $select=mysqli_query($conn,$select);
                      while($row=mysqli_fetch_assoc($select)){
                      ?>
                         <option value='<?php echo $row['thsl_id'];?>'><?php echo $row['thsl_name']?></option>
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
              <form class="form-horizontal" method="POST" action="area_delete.php">
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



     