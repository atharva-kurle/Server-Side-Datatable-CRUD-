<div class="col-md-10">
      <div class="profile-content">


<!-- content -->
<div class="row dt_row">
    <div class="col-md-5">
    <a href="http://localhost/unitech/clients"><button type="button" class="btn btn-primary">
    Back
    </button></a>
    </div>
    <div class="col-md-3">
        <h4><strong> VIEW SINGLE ENTRY</strong></h4>
    </div>
</div>

<div class="row dt_row">
    <div class="col-md-1"></div>
    <div class="col-md-10">
    <div class="row">
    <div class="col-md-6">
  <div class="form-group">
    <label for="itemid">Item:</label>
    <input type="textarea" class="form-control" id="itemid" name="item" value="<?php echo $item; ?>" disabled>
  </div>
  </div>
  <div class="col-md-6">
  <div class="form-group">
    <label for="unitid">Unit:</label>
    <input type="text" class="form-control" id="unitid" name="unit" value="<?php echo $unit; ?>" disabled>
  </div>
  </div>
  <div class="col-md-6">
  <div class="form-group">
    <label for="rateid">Rate:</label>
    <input type="text" class="form-control" id="rateid" name="rate" value="<?php echo $rate; ?>" disabled>
  </div>
  </div>
  <div class="col-md-6">
  <div class="form-group">
    <label for="gstid">GST %:</label>
    <input type="text" class="form-control" id="gstid" name="gst" value="<?php echo $gst; ?>" disabled>
  </div>
  </div>
  <div class="col-md-12">
  <div class="form-group">
    <label for="clientid">For client:</label>
    <input type="text" class="form-control" id="clientid" name="client_name" value="<?php echo $client_name; ?>" disabled>
  </div>
  </div>
  <div class="col-md-12">
  <div class="form-group" style="text-align: center;">

  <a href="<?php echo base_url('clients-edit-entry/'.$sr_no.''); ?>"><button class="btn btn-info" style="padding-left: 25px;padding-right: 25px;">EDIT</button></a>
    <a href="<?php echo base_url('clients-del-entry/'.$sr_no.''); ?>"><button class="btn btn-danger">DELETE</button></a>
  </div>
  </div>
  
</div>
</div> 
<div class="col-md-1"></div>
</div>



<!-- content-row ending tag -->
</div>