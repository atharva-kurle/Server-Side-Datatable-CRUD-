
<div class="col-md-10">
      <div class="profile-content">


            <!-- content -->
            <!-- datatable -->
<div class="row dt_row">
    <div class="col-md-12">
    <table id="datatable" class="table table-striped table-bordered stripe hover row-border" >
    <div class="row">
    <div class="col-md-8">
      <div class="input-group">
        <input type="text" class="form-control" placeholder="Search" id="search"/>
        <div class="input-group-btn">
        <button class="btn btn-primary" type="submit" style="padding-top: 9px;padding-bottom: 9px;">
            <span class="glyphicon glyphicon-search"></span>
          </button>
        </div>
      </div>
    </div>
    <div class="col-md-4" style="text-align: right;">
  <a href="clients-add-entry"><button type="button" class="btn btn-info" style="padding-left: 30px;padding-right: 30px;">Add Entry</button></a>
  <button type="button" class="btn btn-info" style="padding-left: 40px;padding-right: 40px;">Excel</button>
  </div>
    
  </div>
  <br>
  <thead>
    <tr>
      <th>Sr. No</th>
      <th>Date</th>
      <th>Item</th>
      <th>Unit</th>
      <th>Rate</th>
      <th>GST %</th>
      <th>For client</th>
      <th>Actions</th>
    </tr>
  </thead>
  <tbody>
    
  </tbody>
</table>    



      </div>
</div>
  

<!-- content-row ending tag -->
</div>



<!-- datatable script -->
<script type="text/javascript">

$(document).ready(function(){
      oTable = $("#datatable").DataTable({
        'pageLength': 10,
        'serverSide':true,
        'ajax':{
          url: "<?php echo base_url();?>" + "Unitech_Clients/ajax_call",
          type: "POST",
          },
          "columnDefs": [
        {"className": "dt-center", "targets": "_all"}
      ],

      });
      $("#datatable_filter").addClass("hidden"); 

$('#search').on('keyup change', function(){
oTable.search($(this).val()).draw();});


 
});
</script>
