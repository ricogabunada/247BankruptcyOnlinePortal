<div class="col-md-12" >
  <div class="panel panel-default">
    <div class="panel-body">
       <div class="col-md-4">
        <label>Customer Name</label>
        <input type="text" name="name" id="name" class="form-control" value="<?php echo $customer['name'];?>">
       </div>
       <div class="col-md-4">
         <label>Status</label>
         <select name="status" class="form-control select2" style="width: 100%!important;">
           <option value="0" <?php echo $customer['cstatus'] == "0" ? 'selected':'';?>  >Disable</option>
           <option value="1" <?php echo $customer['cstatus'] == "1" ? 'selected':'';?> >Active</option>
         </select>
       </div>
       <div class="col-md-4">
          <label>Office(s)</label>
          <select name="officeids[]" id="office" multiple="multiple" class="select2 form-control" style="width: 100%!imporant;">
            <option value="0" disabled="disabled">Select Office(s)</option>
            <?php foreach ($offices as $office) { ?>
            <option value="<?php echo $office['id']?>" <?php echo $customer['officeid'] == $office['id'] ? 'selected':'';?> ><?php echo $office['officename']; ?></option>
            <?php } ?>
          </select>
       </div>

    </div>
  </div>
</div>
<!--DETAILS*************************************************************************************************************************************************************************************-->
<div class="col-md-12">
  <div class="panel panel-default">
      <div class="panel-heading">PHYSICAL ADDRESS</div>
      <div class="panel-body">
        <div class="col-md-6">
          <label>Address Line 1</label>
          <input type="text" name="addressline1" id="addressline1" class="form-control" value="<?php echo $customer['paddress1'];?>">
        </div>
        <div class="col-md-6">
          <label>Address Line 2</label>
          <input type="text" name="addressline2" id="addressline2" class="form-control" value="<?php echo $customer['paddress2'];?>">
        </div>
        <div class="col-md-5">
          <label>City</label>
          <input type="text" name="city" id="city" class="form-control" value="<?php echo $customer['pcity'];?>">
        </div>
        <div class="col-md-5">
          <label>State</label>
          <!-- <input type="text" name="state" id="state" class="form-control" value="<?php echo $customer['pstate'];?>"> -->
          <select name="state" id="input" class="select2 form-control" style="width: 100%!important;">
            <option value="0">Select State</option>
            <?php foreach ($states as $state) { ?>
              <option value="<?php echo $state['state'];?>" <?php echo $customer['pstate'] == $state['state'] ? 'selected':'';?> ><?php echo $state['state'];?></option>
            <?php } ?>
          </select>
        </div>
        <div class="col-md-2">
          <label>Zipcode</label>
          <input type="text" name="zipcode" id="zipcode" class="form-control" value="<?php echo $customer['pzip'];?>">
        </div>

        <div class="col-md-4">
          <div class="col-md-2" style="padding: 0px!important;">
            <label>Phone</label>
          </div>
          <div class="col-md-3">
            <input type="text" name="phone1" id="phone1" class="form-control" value="<?php echo $customer['pphone1'];?>" style="margin-top: 15px!important;">
          </div>
          <div class="col-md-3">
            <input type="text" name="phone2" id="phone2" class="form-control" value="<?php echo $customer['pphone2'];?>" style="margin-top: 15px!important;">
          </div>
          <div class="col-md-3">
            <input type="text" name="phone3" id="phone3" class="form-control" value="<?php echo $customer['pphone3'];?>" style="margin-top: 15px!important;">
          </div>
        </div>
        <div class="col-md-3">
          <div class="col-md-2" style="padding: 0px!important;">
            <label>Ext</label>
          </div>
          <div class="col-md-10">
            <input type="text" name="ext" id="ext" class="form-control" value="<?php echo $customer['pext'];?>" style="margin-top: 15px!important;">
          </div>
        </div>
        <div class="col-md-4">
          <div class="col-md-2" style="padding: 0px!important;">
            <label>Fax</label>
          </div>
          <div class="col-md-3">
            <input type="text" name="fax1" id="fax1" class="form-control" value="<?php echo $customer['pfax1'];?>" style="margin-top: 15px!important;">
          </div>
          <div class="col-md-3">
            <input type="text" name="fax2" id="fax2" class="form-control" value="<?php echo $customer['pfax2'];?>" style="margin-top: 15px!important;">
          </div>
          <div class="col-md-3">
            <input type="text" name="fax3" id="fax3" class="form-control" value="<?php echo $customer['pfax3'];?>" style="margin-top: 15px!important;">
          </div>
       </div>
      </div>
  </div>
</div>
<div class="col-md-12">
  <div class="panel panel-default">
      <div class="panel-heading">MAILING ADDRESS</div>
      <div class="panel-body">
        <div class="checkbox">
          <label>
            <input id="copypaddress" type="checkbox" value="">
            Check if the same as Physical Address
          </label>
        </div>

        <div class="col-md-6">
          <label>Address Line 1</label>
          <input type="text" name="maddressline1" id="inputAddressline1" class="form-control" value="<?php echo $customer['maddress1'];?>">
        </div>

        <div class="col-md-6">
          <label>Address Line 2</label>
          <input type="text" name="maddressline2" id="inputAddressline2" class="form-control" value="<?php echo $customer['maddress2'];?>">
        </div>

        <div class="col-md-5">
          <label>City</label>
          <input type="text" name="mcity" id="city" class="form-control" value="<?php echo $customer['mcity'];?>">
        </div>
        <div class="col-md-5">
          <label>State</label>
          <!-- <input type="text" name="state" id="state" class="form-control" value="<?php echo $customer['pstate'];?>"> -->
          <select name="mstate" id="input" class="select2 form-control" style="width: 100%!important;">
            <option value="0">Select State</option>
            <?php foreach ($states as $state) { ?>
              <option value="<?php echo $state['state'];?>" <?php echo $customer['mstate'] == $state['state'] ? 'selected':'';?>><?php echo $state['state'];?></option>
            <?php } ?>
          </select>
        </div>
        <div class="col-md-2">
          <label>Zipcode</label>
          <input type="text" name="mzipcode" id="mzipcode" class="form-control" value="<?php echo $customer['mzip'];?>">
        </div>
      </div>
  </div>
</div>

<div class="col-md-12">
  <div class="panel panel-default">
      <div class="panel-heading">COMPANY DESCRIPTION</div>
      <div class="panel-body">
        <div class="col-md-3">
          <label>Company Type</label>
          <select name="companytype" id="companytype" class="form-control select2" style="width: 100%!important;">
            <option value="0">Select Company Type</option>
            <?php foreach ($companytypes as $companytype) { ?>
            <option value="<?php echo $companytype['id']?>" <?php echo $customer['companytypeid'] == $companytype['id'] ? 'selected':'';?> ><?php echo $companytype['companytypename']?></option>
            <?php } ?>
          </select>
        </div>
        <div class="col-md-3">
          <label>Products</label>
          <input type="text" name="products" value="<?php echo $customer['productline']; ?>" id="products" class="form-control">
        </div>
        <div class="col-md-3">
          <label>Work Environment</label>
          <input type="text" name="workenvironment" value="<?php echo $customer['workenvironment']; ?>" id="workenvironment" class="form-control">
        </div>
        <div class="col-md-3">
          <label>Number of Employees</label>
          <input type="text" name="numofemployees" value="<?php echo $customer['size']; ?>" id="numofemployees" class="form-control">
        </div>
      </div>
  </div>
</div>

<div class="col-md-6">
  <div class="panel panel-default">
      <div class="panel-heading">CANDIDATE PROFILE</div>
      <div class="panel-body">
        <label>Type of Candidates</label>
        <input type="text" name="candidatetype" value="<?php echo $customer['candidatetype'];?>" id="candidatetype" class="form-control">
      </div>
  </div>
</div>

<div class="col-md-6">
  <div class="panel panel-default">
      <div class="panel-heading">DEPARTMENT</div>
      <div class="panel-body">
         <?php
          if(!isJson($customer['departmentname'])){
              ?>
          <div class="form-group">
              <button type="button" onclick="removecard($(this).parent());" class="close" aria-label="Close"><span aria-hidden="true">&times;</span></button>
              <label>Department Name</label>
            <input type="text" name="departmentname[]" value="<?php echo $customer['departmentname'];?>" id="departmentname" class="form-control">
          </div>
        <?php }else{
         // foreach (json_decode($customer['departmentname']) as $key => $dep) {
          for ($i=0; $i < count( json_decode( $customer['departmentname'] ) ) ; $i++) {
          $departmentname = json_decode ($customer['departmentname']);
          ?>
          <div class="form-group">
            <button type="button" onclick="removecard($(this).parent());" class="close" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <label>Department Name</label>
            <input type="text" name="departmentname[]" value="<?php echo $departmentname[$i];?>" id="departmentname" class="form-control">
          </div>
        <?php }
        } ?>
        <div id="newdeptform"></div>
        <!-- <div class="col-md-12"> -->
          <a href="#" onclick="return addnewdepartmentform();"  class="btn btn-blue">ADD NEW DEPARTMENT</a>
        <!-- </div> -->
      </div>
  </div>
</div>

<div class="col-md-12">
  <div class="panel panel-default">
    <div class="panel-heading">CONTACTS</div>
    <div class="panel-body">
      <div class="row">
        <?php
          if(!isJson($customer['contact'])){
              ?>
            <div class="col-md-12">
            <div class="col-md-3">
              <label>Primary Contact Name</label>
              <input type="text" name="primarycname[]" value="<?php echo $customer['contact'];?>" id="primarycname" class="form-control">
            </div>
            <div class="col-md-3">
              <label>Job Title</label>
              <input type="text" name="jobtitle[]" id="jobtitle" value="<?php echo $customer['rank'];?>" class="form-control">
            </div>
            <div class="col-md-3">
              <label>Direct Number</label>
              <input type="text" name="directnumber[]" value="<?php echo $customer['directnumber'];?>" id="directnumber" class="form-control">
            </div>
            <div class="col-md-3">
              <button type="button" onclick="removecard($(this).parent().parent());" class="close" aria-label="Close"><span aria-hidden="true">&times;</span></button>
              <label>Email</label>
              <input type="text" name="email[]" id="email" value="<?php echo $customer['cemail'];?>" class="form-control">
            </div>
          </div>
              <?php
          }else{

          for ($i=0; $i < count( json_decode( $customer['contact'] ) ) ; $i++) {
          $contact      = json_decode ($customer['contact']);
          $rank         = json_decode ($customer['rank']);
          $directnumber = json_decode ($customer['directnumber']);
          $cemail       = json_decode ($customer['cemail']);
          ?>
          <div class="col-md-12">
            <div class="col-md-3">
              <label>Primary Contact Name</label>
              <input type="text" name="primarycname[]" value="<?php echo $contact[$i];?>" id="primarycname" class="form-control">
            </div>
            <div class="col-md-3">
              <label>Job Title</label>
              <input type="text" name="jobtitle[]" id="jobtitle" value="<?php echo $rank[$i];?>" class="form-control">
            </div>
            <div class="col-md-3">
              <label>Direct Number</label>
              <input type="text" name="directnumber[]" value="<?php echo $directnumber[$i];?>" id="directnumber" class="form-control">
            </div>
            <div class="col-md-3">
              <button type="button" onclick="removecard($(this).parent().parent());" class="close" aria-label="Close"><span aria-hidden="true">&times;</span></button>
              <label>Email</label>
              <input type="text" name="email[]" id="email" value="<?php echo $cemail[$i];?>" class="form-control">
            </div>
          </div>
        <?php
            }
          }
           ?>

        <div id="newcontform"></div>
      </div>
      <div class="col-md-12">
      <a href="#" class="btn btn-blue" onclick="return addnewcontactform();">ADD MORE CONTACT</a>
      </div>
    </div>
  </div>
</div>

<div class="col-md-12">
  <div class="panel panel-default">
    <div class="panel-heading">SUPERVISORS</div>
    <div class="panel-body">
      <div class="row">
       <?php
          if(!isJson($customer['supervisorname'])){
          ?>

          <div class="col-md-12">
            <div class="col-md-4">
              <label>Supervisor Name</label>
              <input type="text" name="supervisorname[]" value="<?php echo $customer['supervisorname'];?>" id="supervisorname" class="form-control">
            </div>
            <div class="col-md-4">
              <label>Department</label>
              <input type="text" name="supervisordepname[]" value="<?php echo $customer['supervisordeptname'];?>" id="department" class="form-control">
            </div>
            <div class="col-md-4">
              <button type="button" onclick="removecard($(this).parent().parent());" class="close" aria-label="Close"><span aria-hidden="true">&times;</span></button>
              <label>Shift</label>
              <input type="text" name="supervisorshift[]" value="<?php echo $customer['supervisorshift'];?>" id="shift" class="form-control">
            </div>
            <div class="col-md-4">
              <label>Direct Number</label>
              <input type="text" name="supervisordirectnum[]" value="<?php echo $customer['supervisordirectnum'];?>" id="directnumber" class="form-control">
            </div>
            <div class="col-md-4">
              <label>Email</label>
              <input type="text" name="supervisoremail[]" value="<?php echo $customer['supervisoremail'];?>" id="email" class="form-control">
            </div>
          </div>

          <?php
          }else{

       for ($i=0; $i < count( json_decode( $customer['supervisorname'] ) ) ; $i++) {
        $supervisorname = json_decode($customer['supervisorname']);
        $supervisordeptname = json_decode($customer['supervisordeptname']);
        $supervisorshift = json_decode($customer['supervisorshift']);
        $supervisordirectnum = json_decode($customer['supervisordirectnum']);
        $supervisoremail = json_decode($customer['supervisoremail']);
        ?>
          <div class="col-md-12">
            <div class="col-md-4">
              <label>Supervisor Name</label>
              <input type="text" name="supervisorname[]" value="<?php echo $supervisorname[$i];?>" id="supervisorname" class="form-control">
            </div>
            <div class="col-md-4">
              <label>Department</label>
              <input type="text" name="supervisordepname[]" value="<?php echo $supervisordeptname[$i];?>" id="department" class="form-control">
            </div>
            <div class="col-md-4">
              <button type="button" onclick="removecard($(this).parent().parent());" class="close" aria-label="Close"><span aria-hidden="true">&times;</span></button>
              <label>Shift</label>
              <input type="text" name="supervisorshift[]" value="<?php echo $supervisorshift[$i];?>" id="shift" class="form-control">
            </div>
            <div class="col-md-4">
              <label>Direct Number</label>
              <input type="text" name="supervisordirectnum[]" value="<?php echo $supervisordirectnum[$i];?>" id="directnumber" class="form-control">
            </div>
            <div class="col-md-4">
              <label>Email</label>
              <input type="text" name="supervisoremail[]" value="<?php echo $supervisoremail[$i];?>" id="email" class="form-control">
            </div>
          </div>
        <?php }
          } ?>
        <div id="newsupform"></div>
      </div>
      <div class="col-md-12">
      <a href="#" class="btn btn-blue" onclick="return addnewsupform();">ADD MORE SUPERVISOR</a>
      </div>
    </div>
  </div>
</div>

<div class="col-md-12">
  <div class="panel panel-default">
    <div class="panel-heading">SHIFT SCHEDULE</div>
    <div class="panel-body">
      <div class="row">

       <?php
          if(!isJson($customer['shiftname'])){
          ?>
          <div class="col-md-12">
            <div class="col-md-4">
              <label>Shift Name</label>
              <input type="text" name="shiftname[]" value="<?php echo $customer['shiftname'];?>" id="shiftname" class="form-control">
            </div>
            <div class="col-md-4">
              <label>Shift Days</label>
              <input type="text" name="shiftdays[]" value="<?php echo $customer['shiftdays'];?>" id="shiftdays" class="form-control">
            </div>
            <div class="col-md-4">
              <button type="button" onclick="removecard($(this).parent().parent());" class="close" aria-label="Close"><span aria-hidden="true">&times;</span></button>
              <label>Shift Hours</label>
              <input type="text" name="shifthours[]" value="<?php echo $customer['shifthours'];?>" id="shifthours" class="form-control">
            </div>
          </div>
        <?php
      }else{
        for ($i=0; $i < count( json_decode( $customer['shiftname'] ) ) ; $i++) {
        $shiftname = json_decode($customer['shiftname']);
        $shiftdays = json_decode($customer['shiftdays']);
        $shifthours = json_decode($customer['shifthours']);
        ?>
          <div class="col-md-12">
            <div class="col-md-4">
              <label>Shift Name</label>
              <input type="text" name="shiftname[]" value="<?php echo $shiftname[$i];?>" id="shiftname" class="form-control">
            </div>
            <div class="col-md-4">
              <label>Shift Days</label>
              <input type="text" name="shiftdays[]" value="<?php echo $shiftdays[$i];?>" id="shiftdays" class="form-control">
            </div>
            <div class="col-md-4">
              <button type="button" onclick="removecard($(this).parent().parent());" class="close" aria-label="Close"><span aria-hidden="true">&times;</span></button>
              <label>Shift Hours</label>
              <input type="text" name="shifthours[]" value="<?php echo $shifthours[$i];?>" id="shifthours" class="form-control">
            </div>
          </div>
        <?php  }
          }
         ?>
        <div id="newshiftform"></div>
      </div>
      <div class="col-md-12">
      <a href="#" class="btn btn-blue" onclick="return addnewshiftform();">ADD NEW SHIFT</a>
      </div>
    </div>
  </div>
</div>

<div class="col-md-6">
  <div class="panel panel-default">
    <div class="panel-heading">RECRUITING PROCESS</div>
    <div class="panel-body">
      <label>Describe Recruiting Process</label>
      <textarea name="recruitingprocess" id="recruitingprocess" class="form-control"><?php echo $customer['industry'];?></textarea>
    </div>
  </div>
</div>

<div class="col-md-6">
  <div class="panel panel-default">
    <div class="panel-heading">OTHERS</div>
    <div class="panel-body">
      <div class="col-md-6">
        <label>Nearest Medical Clinic</label>
        <input type="text" name="medicalclinic" value="<?php echo $customer['nearestmedclinic'];?>" id="medicalclinic" class="form-control">
      </div>
    </div>
  </div>
</div>