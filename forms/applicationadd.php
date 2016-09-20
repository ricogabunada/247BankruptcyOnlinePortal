
<div class="panel panel-default">
  <div class="panel-body" id="applicantinfo">
      <div class="col-md-3">
         <input type="hidden" name="empidedit" id="empidedit" class="form-control" value="<?php echo $application['empid']; ?>">
         <label>First Name</label>
         <input type="text" name="firstname" id="input" class="form-control" value="<?php echo $application['firstname']; ?>">
      </div>
      <div class="col-md-3">
         <label>Middle Name</label>
         <input type="text" name="middlename" id="input" class="form-control" value="<?php echo $application['middlename']; ?>">
      </div>
      <div class="col-md-3">
         <label>Last Name</label>
         <input type="text" name="lastname" id="input" class="form-control" value="<?php echo $application['lastname']; ?>">
      </div>
      <div class="col-md-3">
         <label>Employee ID</label>
         <input type="text" name="empid2" id="input" class="form-control" value="<?php echo $application['empid2']; ?>">
      </div>

      <div class="col-md-3">
         <label>Phone Number</label>
         <input type="text" name="ephone" id="input" class="form-control" value="<?php echo $application['ephone']; ?>">
      </div>
      <div class="col-md-3">
         <label>Alternate Phone Number</label>
         <input type="text" name="altephone" id="input" class="form-control" value="<?php echo $application['altephone']; ?>">
      </div>
      <div class="col-md-3">
         <label>Contact</label>
         <input type="text" name="econtact" id="input" class="form-control" value="<?php echo $application['econtact']; ?>">
      </div>
      <div class="col-md-3 nopad">
         <label>SSS #</label><div class="col-md-12"></div>
           <div class="col-md-4">
              <input type="text" name="sssno1" id="input" class="form-control" value="<?php echo substr(substr($application['ssno'], 0, -6), -3); ?>">
           </div>
           <div class="col-md-4">
              <input type="text" name="sssno2" id="input" class="form-control" value="<?php echo substr(substr($application['ssno'], 0, -3), -3); ?>">
           </div>
           <div class="col-md-4">
              <input type="text" name="sssno3" id="input" class="form-control" value="<?php echo substr($application['ssno'], -3); ?>">
           </div>
      </div>

      <!-- <div class="col-md-3">
         <label>Gender</label>
         <input type="text" name="gender" id="input" class="form-control">
      </div> -->
      <div class="col-md-3">
         <label>Email Address</label>
         <input type="text" name="emailaddress" id="input" class="form-control" value="<?php echo $application['emailaddress']; ?>">
      </div>
      <div class="col-md-3">
         <label>Employee Status</label>
          <select name="estatus" class="form-control select2" style="width: 100%!important;">
             <option value="">Select Employee Status</option>
             <option value="4" <?php echo $application['estatus'] == "1" ? 'selected':''; ?>>Applicant</option>
             <option value="0" <?php echo $application['estatus'] == "2" ? 'selected':''; ?>>Active</option>
             <option value="1" <?php echo $application['estatus'] == "3" ? 'selected':''; ?>>Inactive</option>
             <option value="2" <?php echo $application['estatus'] == "4" ? 'selected':''; ?>>Terminated</option>
             <option value="3" <?php echo $application['estatus'] == "5" ? 'selected':''; ?>>Passive</option>
           </select>
      </div>
      <div class="col-md-3 nopad">
         <label>Date of Birth</label><div class="col-md-12"></div>
           <div class="col-md-4">
              <input type="text" name="month" id="input" class="form-control" placeholder="mm" value="<?php echo $arraydob[1]; ?>">
           </div>
           <div class="col-md-4">
              <input type="text" name="day" id="input" class="form-control" placeholder="dd" value="<?php echo $arraydob[2]; ?>">
           </div>
           <div class="col-md-4">
              <input type="text" name="year" id="input" class="form-control" placeholder="yy" value="<?php echo $arraydob[0]; ?>">
           </div>
      </div>
      <div class="col-md-3">
        <label>Office</label>
          <select name="officeid" id="officeid" class="select2 form-control" style="width: 100%!imporant;">
            <option value="0">Select Office</option>
            <?php foreach ($offices as $office) { ?>
            <option value="<?php echo $office['id']?>" <?php echo $application['officeid'] == $office['id'] ? 'selected':''; ?>><?php echo $office['officename']; ?></option>
            <?php } ?>
          </select>
      </div>
      <div class="col-md-4">
        <label>Recruiter</label>
          <select name="recruiterid" id="recruiter" class="select2 form-control" style="width: 100%!imporant;">
            <option value="0">Select Recruiter</option>
            <?php foreach ($recruiters as $recruiter) { ?>
            <option value="<?php echo $recruiter['id']?>" <?php echo $application['recruiterid'] == $recruiter['id'] ? 'selected':''; ?>><?php echo $recruiter['recruiter_name']; ?></option>
            <?php } ?>
          </select>
      </div>
      <div class="col-md-4 nopad">
         <label>Date Applied</label><div class="col-md-12"></div>
           <div class="col-md-4">
              <input type="text" name="appliedmonth" id="input" class="form-control" placeholder="mm" value="<?php echo $arraydateapplied[1];?>">
           </div>
           <div class="col-md-4">
              <input type="text" name="appliedday" id="input" class="form-control" placeholder="dd" value="<?php echo $arraydateapplied[2];?>">
           </div>
           <div class="col-md-4">
              <input type="text" name="appliedyear" id="input" class="form-control" placeholder="yy" value="<?php echo $arraydateapplied[0];?>">
           </div>
      </div>
      <div class="col-md-2">
        <label>Salutation</label>
        <div class="radio">
              <label>
                <input type="radio" name="gender" id="input" value="1" <?php echo $application['gender'] === "Mr." ? "checked=\"checked\"":""; ?>>
                Mr.
              </label>
              <label>
                <input type="radio" name="gender" id="input" value="2" <?php echo $application['gender'] === "Ms." ? "checked=\"checked\"":""; ?>>
                Ms.
              </label>
            </div>
      </div>
      <div class="col-md-2">
        <label>Direct Deposit</label>
        <div class="radio">
              <label>
                <input type="radio" name="directdeposit" id="input" value="1" <?php echo $application['directdeposit'] == 1 ? "checked=\"checked\"":""; ?>>
                Yes
              </label>
              <label>
                <?php if (isset($_GET['empid'])) { ?>
                  <input type="radio" name="directdeposit" id="input" value="2" <?php echo $application['directdeposit'] == 2 ? "checked=\"checked\"":""; ?>>
                <?php } else { ?>
                  <input type="radio" name="directdeposit" id="input" value="2" checked="checked">
                <?php } ?>
                No
              </label>
            </div>
      </div>
  </div>
  <div class="panel-footer" id="applicantinfofooter">
    <!-- <a href="#" class="btn btn-blue">SEARCH</a> -->
    <?php if (isset($empidforedit)) {?>
      <button type="submit" class="btn btn-green">UPDATE <i class="fa fa-spin"></i></button>
      <button type="button" class="btn btn-gray" id="showempinfo_foredit" onclick="showempinfoedit();">UPDATE EMPLOYEE INFO<i class="fa fa-spin"></i></button>
      <button type="button" class="btn btn-gray hidden" id="hideempinfo_foredit" onclick="hideempinfoedit();">HIDE EMPLOYEE INFO<i class="fa fa-spin"></i></button>
    <?php } else {?>
      <button type="submit" class="btn btn-green">ADD <i class="fa fa-spin"></i></button>
    <?php } ?>
  </div>
</div>