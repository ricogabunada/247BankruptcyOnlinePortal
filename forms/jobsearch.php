<div class="panel panel-default">
	<div class="panel-body">
		<div class="col-md-4">
			<label>Customer Name</label>
			<select name="customername" class="form-control">
				<option value="0" selected disabled>Select Customer</option>
				<?php foreach ($customers as $key => $customer) {	?>

						<option value="<?php echo $customer['cid']; ?>"> <?php echo $customer['name']; ?> </option>
					<?php	} ?>

			</select>
	   </div>
		<div class="col-md-4">
			<div class="form-group">
				<label>From</label>
	            <div class="input-group">
	              <div class="input-group-addon">
	                <i class="fa fa-calendar"></i>
	              </div>
	              <input type="date" name="from" class="form-control">
	              <!-- <input type="text" class="form-control" data-inputmask="'alias': 'dd/mm/yyyy'" data-mask> -->
	            </div><!-- /.input group -->
	        </div><!-- /.form group -->
	   </div>
		<div class="col-md-4">
			<div class="form-group">
				<label>To</label>
	            <div class="input-group">
	              <div class="input-group-addon">
	                <i class="fa fa-calendar"></i>
	              </div>
	              <input type="date" name="to" class="form-control">
	              <!-- <input type="text" class="form-control" data-inputmask="'alias': 'dd/mm/yyyy'" data-mask> -->
	            </div><!-- /.input group -->
	        </div><!-- /.form group -->
	   </div>
	</div>
	<div class="panel-footer">
		<button type="submit" class="btn btn-blue">SEARCH</button>
	</div>
</div>