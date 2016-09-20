<div class="col-md-12">
  <div class="panel panel-default">
    <div class="panel-body">
    	<div class="col-md-4">
    		<label>Customer Name</label>
    		<select name="cid" ng-model="job_add_cid" ng-change="updatesubdata()" class="form-control select2">
          <option value="0" selected disabled="">Select Customer</option>
          <option value="{{customer.cid}}" ng-repeat="customer in customers track by $index" >{{ customer.name }}</option>
        </select>
    	</div>
      <div class="col-md-4">
        <label>Department</label>
         <select name="departmentname" class="form-control select2">
              <option value="" selected>Select Department</option>
              <option value="{{ dep }}" ng-repeat="dep in departments track by $index"> {{ dep }}</option>
            </select>
      </div>

    	<div class="col-md-4">
    		<label>Job Title</label>
    		<input type="text" name="jobtitle" id="jobtitle" class="form-control">
    	</div>
    	<div class="col-md-4">
    		<label>Shifts Available</label>
    		<select name="shifts" class="form-control">
            <option value="{{ shift }}" ng-repeat="shift in shifts track by $index"> {{ shift }}</option>
    		</select>
    	</div>
      <div class="col-md-4">
        <label>Account Manager</label>
        <select name="status" class="form-control">
          <option value="0" selected diasbled>Select Account Manager</option>
        </select>
      </div>
    	<div class="col-md-4">
    		<label>Date Received</label>
    		<input type="date" name="jdate" class="form-control">
    	</div>
      <div class="col-md-4">
        <label>Urgency Level</label>
        <input type="text"  name="type" class="form-control">
      </div>
    	<div class="col-md-4">
    		<label>Open #</label>
    		<input type="text" name="open"  class="form-control">
      </div>
    	<div class="col-md-4">
    		<label># Filled</label>
    		<input type="text" name="filled"  class="form-control">
    	</div>
      <div class="col-md-4">
        <label>Status</label>
        <select name="jstatus" class="form-control">
          <option value="0" selected diasbled>Select Status</option>
          <option value="1">Active</option>
          <option value="0">Inactive</option>
        </select>
      </div>
      <div class="col-md-4">
        <label>&nbsp;</label>
        <div class="checkbox">
          <label>
            <input type="checkbox" name="post" value="1">
            Post Online
          </label>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="col-md-12">
  <div class="panel panel-default">
  <div class="panel-heading">Description</div>
    <div class="panel-body">
      <div class="col-md-12">
        <textarea class="textarea" name="jdesription" placeholder="Place some text here" style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
      </div>
    </div>
  </div>
</div>
<div class="col-md-12">
  <div class="panel panel-default">
  <div class="panel-heading">Job Details</div>
    <div class="panel-body">
      <div class="col-md-3">
        <label>Start Date</label>
        <input type="tel" name="sday" id="sday" class="form-control">
      </div>
      <div class="col-md-3">
        <label>Work Term</label>
        <input type="tel" name="term" id="term" class="form-control">
      </div>
      <div class="col-md-3">
        <label>Work Schedule</label>
        <input type="tel" name="schedule" id="schedule" class="form-control">
      </div>
      <div class="col-md-3">
        <label>Pay Rate</label>
        <input type="tel" name="salary" id="salary" class="form-control">
      </div>
      <div class="col-md-3">
        <label>City</label>
        <input type="tel" name="jcity" id="jcity" class="form-control">
      </div>
      <div class="col-md-3">
        <label>State</label>
        <input type="tel" name="jstate" id="jstate" class="form-control">
      </div>
      <div class="col-md-3">
        <label>Zip Code</label>
        <input type="tel" name="jzipcode" id="jzipcode" class="form-control">
      </div>
    </div>
  </div>
</div>
<div class="col-md-12">
  <div class="panel panel-default">
  <div class="panel-heading">Email Recipients</div>
    <div class="panel-body">
      <div class="col-md-6">
        <div class="col-md-6">
          <div class="checkbox">
            <label>
              <input type="checkbox" name="email_recepients[]"  value="kevin.pepper@recruiterexchange.com">
              kevin.pepper@recruiterexchange.com
            </label>
          </div>
        </div>
        <div class="col-md-6">
          <div class="checkbox">
            <label>
              <input type="checkbox" name="email_recepients[]" value="jobs@recruiterexchange.com">
              jobs@recruiterexchange.com
            </label>
          </div>
        </div>
        <div class="col-md-6">
          <div class="checkbox">
            <label>
              <input type="checkbox" name="email_recepients[]" value="karina@recruiterexchange.com">
              karina@recruiterexchange.com
            </label>
          </div>
        </div>
        <div class="col-md-6">
          <div class="checkbox">
            <label>
              <input type="checkbox" name="email_recepients[]" value="melissa.catherman@recruiterexchange.com">
              melissa.catherman@recruiterexchange.com
            </label>
          </div>
        </div>
        <div class="col-md-6">
          <div class="checkbox">
            <label>
              <input type="checkbox" name="email_recepients[]" value="resume@recruiterexchange.com">
              resume@recruiterexchange.com
            </label>
          </div>
        </div>
        <div class="col-md-6">
          <div class="checkbox">
            <label>
              <input type="checkbox" name="email_recepients[]" value="cristel@recruiterexchange.com">
              cristel@recruiterexchange.com
            </label>
          </div>
        </div>
        <div class="col-md-6">
          <div class="checkbox">
            <label>
              <input type="checkbox" name="email_recepients[]" value="ngoc@recruiterexchange.com">
              ngoc@recruiterexchange.com
            </label>
          </div>
        </div>
        <div class="col-md-6">
          <div class="checkbox">
            <label>
              <input type="checkbox" name="email_recepients[]" value="esperanza@recruiterexchange.com">
              esperanza@recruiterexchange.com
            </label>
          </div>
        </div>
        <div class="col-md-6">
          <div class="checkbox">
            <label>
              <input type="checkbox" name="email_recepients[]" value="marlo@recruiterexchange.com">
              marlo@recruiterexchange.com
            </label>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="col-md-12">
  <div class="panel panel-default">
  <div class="panel-heading">Notes</div>
    <div class="panel-body">
      <div class="col-md-12">
        <textarea class="textarea" name="jobnotes" placeholder="Place some text here" style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
      </div>
    </div>
</div>
</div>
<div class="col-md-12">
  <div class="panel panel-default">
  <div class="panel-heading">Links</div>
    <div class="panel-body">
      <div class="col-md-12">
        <input type="text" name="links" class="form-control">
      </div>
    </div>
    <div class="panel-footer">
      <button type="submit" class="btn btn-green">CONFIRM</button>
      <button type="button" class="btn btn-blue">CANCEL</button>
      <div class="pull-right">
        SHARE JOB:
        <img src="img/icons/facebook.png" alt="Image">
        <img src="img/icons/twitter.png" alt="Image">
        <img src="img/icons/linkedin.png" alt="Image">
        <img src="img/icons/googleplus.png" alt="Image">
      </div>
  </div>
  </div>
</div>
