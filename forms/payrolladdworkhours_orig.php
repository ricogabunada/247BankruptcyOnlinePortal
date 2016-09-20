<div class="panel panel-default">
	<div class="panel-body">
		<div class="col-md-4">
			<label>Week Ending</label>
			<!-- <select name="workending" class="form-control">
				<option value="0">12/13/2015</option>
			</select> -->
			<input type="text" name="weekending" id="weekending" class="form-control" value="<?php echo date('m/d/Y', strtotime( 'last Sunday', time() ) ); ?>"/>
	   </div>
		<div class="col-md-4">
			<label>Select Customer</label>
			<select name="customer" id="customer" class="form-control select2" style="width: 100%!important;">
	      <option value="0">Select Customer</option>
	      <?php foreach ($customers as $customer) { ?>
	      <option value="<?php echo $customer['cid']?>"><?php echo $customer['name']; ?></option>
	      <?php } ?>
	    </select>
	   </div>
	   <div class="col-md-4">
        <label for="">Upload a file</label>
        <div class="input-group no-margin">
          <!-- <input type="text" class="form-control"> -->
          <input type="text" id="uploadFile" placeholder="Choose File" class="form-control" value="" disabled="disabled"/>
          <span class="input-group-btn">
            <!-- <button type="button" class="btn btn-info btn-flat">Go!</button> -->
            <div class="fileUpload btn btn-info btn-flat">
              <span>Upload</span>
              <input id="uploadBtn" name="csvfile" type="file" class="upload" onchange="document.getElementById('uploadFile').value = this.value"/>
            </div>
          </span>
        </div>
      </div>
	</div>
	<div class="panel-footer">
		<button type="submit" class="btn btn-green">ADD</button>
	</div>
</div>