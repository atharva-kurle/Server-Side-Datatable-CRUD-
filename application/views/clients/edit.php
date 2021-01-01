
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
        <h4><strong> EDIT SINGLE ENTRY</strong></h4>
    </div>
</div>

<form action="<?php echo base_url('clients-edit-entry/'.$sr_no.''); ?>" method="POST">
<div class="row dt_row">
    <div class="col-md-1"></div>
    <div class="col-md-10">
    <div class="row">
    <div class="col-md-6">
  <div class="form-group">
    <label for="itemid">Item:</label>
    <input type="text" class="form-control" id="itemid" name="item" value="<?php echo $item; ?>">
  </div>
  </div>
  <div class="col-md-6">
  <div class="form-group">
    <label for="unitid">Unit:</label>
    <input type="text" class="form-control" id="unitid" name="unit" value="<?php echo $unit; ?>">
  </div>
  </div>
  <div class="col-md-6">
  <div class="form-group">
    <label for="rateid">Rate:</label>
    <input type="text" class="form-control" id="rateid" name="rate" value="<?php echo $rate; ?>">
  </div>
  </div>
  <div class="col-md-6">
  <div class="form-group">
    <label for="gstid">GST %:</label>
    <input type="text" class="form-control" id="gstid" name="gst" value="<?php echo $gst; ?>">
  </div>
  </div>
  <div class="col-md-12">
  <div class="form-group">
    <label for="clientid">For client:</label>
    <input type="text" class="form-control" id="clientid" name="client_name" value="<?php echo $client_name; ?>">
  </div>
  </div>
  <div class="col-md-12">
  <div class="form-group" style="text-align: center;">

  <button type="submit" class="btn btn-success">Submit</button>
  </div>
  </div>
  
</div>
    
</form>
</div> 
<div class="col-md-1"></div>
</div>





<!-- content-row ending tag -->
</div>