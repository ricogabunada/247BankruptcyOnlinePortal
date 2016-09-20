<div class="addemployeeinfo hidden">
 <h3>EMPLOYEE INFORMATION</h3>
<!-- employee id previously saved -->
  <div class="nav-tabs-custom">
    <ul class="nav nav-tabs">
      <li class="active"><a href="#empinfo_master" data-toggle="tab" aria-expanded="true"><h5>Master</h5></a></li>
      <li class=""><a href="#empinfo_recommendation" data-toggle="tab" aria-expanded="false"><h5>Recommendation</h5></a></li>
      <!-- <li class=""><a href="#empinfo_emergencycontact" data-toggle="tab" aria-expanded="false"><h5>Emergency Contact</h5></a></li> -->
      <li class=""><a href="#empinfo_skills" data-toggle="tab" aria-expanded="false"><h5>Skills</h5></a></li>
      <li class=""><a href="#empinfo_screening" data-toggle="tab" aria-expanded="false"><h5>Screening</h5></a></li>
      <li class=""><a href="#empinfo_education" data-toggle="tab" aria-expanded="false"><h5>Education</h5></a></li>
      <li class=""><a href="#empinfo_workhistory" data-toggle="tab" aria-expanded="false"><h5>Work History</h5></a></li>
      <li class=""><a href="#empinfo_reworkhistory" data-toggle="tab" aria-expanded="false"><h5>Re Work History</h5></a></li>
      <li class=""><a href="#empinfo_interview" data-toggle="tab" aria-expanded="false"><h5>Interview</h5></a></li>
      <li class=""><a href="#empinfo_files" data-toggle="tab" aria-expanded="false"><h5>Files</h5></a></li>
    </ul>
    <div class="tab-content">
      <div class="tab-pane active" id="empinfo_master">
  <!--FORM MASTER-->
        <?php if(isset($_GET['empid']) && $numrowsmaster > 0 && $numrowsdetail > 0 && $numrowscontact > 0){ ?>
          <form method="post" accept-charset="utf-8" id="employeemasteredit">
          <input type="hidden" name="sessionid" id="sessionid" class="form-control sessionid" value="<?php echo $application['sessionid'] ?>"/>
        <?php } elseif(isset($_GET['empid']) && $numrowsmaster > 0 && $numrowsdetail > 0 && $numrowscontact == 0) { ?>
          <form method="post" accept-charset="utf-8" id="employee_editmasterdetail_addcontact">
          <input type="hidden" name="sessionid" id="sessionid" class="form-control sessionid" value="<?php echo $application['sessionid'] ?>"/>
        <?php } elseif(isset($_GET['empid']) && $numrowsmaster > 0 && $numrowsdetail == 0 && $numrowscontact == 0) { ?>
          <form method="post" accept-charset="utf-8" id="employee_editmaster_addcontactdetail">
          <input type="hidden" name="sessionid" id="sessionid" class="form-control sessionid" value="<?php echo $application['sessionid'] ?>"/>
        <?php } elseif(isset($_GET['empid']) && $numrowsmaster > 0 && $numrowsdetail == 0 && $numrowscontact > 0) { ?>
          <form method="post" accept-charset="utf-8" id="employee_editmastercontact_adddetail">
          <input type="hidden" name="sessionid" id="sessionid" class="form-control sessionid" value="<?php echo $application['sessionid'] ?>"/>
        <?php } elseif(isset($_GET['empid']) && $numrowsmaster == 0 && $numrowsdetail == 0 && $numrowscontact == 0) { ?>
          <form method="post" accept-charset="utf-8" id="employeemasteredit_add">
          <input type="hidden" name="sessionid" id="sessionid" class="form-control sessionid" value="<?php echo $application['sessionid'] ?>"/>
        <?php } elseif(isset($_GET['empid']) && $numrowsmaster == 0 && $numrowsdetail == 0 && $numrowscontact > 0) { ?>
          <form method="post" accept-charset="utf-8" id="employee_editcontact_addmasterdetail">
          <input type="hidden" name="sessionid" id="sessionid" class="form-control sessionid" value="<?php echo $application['sessionid'] ?>"/>
        <?php } elseif(isset($_GET['empid']) && $numrowsmaster == 0 && $numrowsdetail > 0 && $numrowscontact > 0) { ?>
          <form method="post" accept-charset="utf-8" id="employee_editcontactdetail_addmaster">
          <input type="hidden" name="sessionid" id="sessionid" class="form-control sessionid" value="<?php echo $application['sessionid'] ?>"/>
        <?php } elseif(isset($_GET['empid']) && $numrowsmaster == 0 && $numrowsdetail > 0 && $numrowscontact == 0) { ?>
          <form method="post" accept-charset="utf-8" id="employee_editdetail_addmastercontact">
          <input type="hidden" name="sessionid" id="sessionid" class="form-control sessionid" value="<?php echo $application['sessionid'] ?>"/>
        <?php } else {?>
          <form method="post" accept-charset="utf-8" id="employeemasteradd">
          <input type="hidden" name="employeeid" id="employeeid" class="form-control employeeid" value=""/>
          <input type="hidden" name="sessionid" id="sessionid" class="form-control sessionid" value=""/>
        <?php } ?>

          <div class="panel panel-default">
            <div class="panel-body">
            <div class="panel-heading"><b><a id="refreshmaster"><i class="fa fa-refresh pull-right"></i></a></b></div>
            <h3>Address</h3>
              <div class="col-md-6 address">
              <label>Address 1</label>
              <input type="text" name="eaddress1" id="eaddress1" class="form-control" value="<?php echo $empmaster['eaddress1'];?>">
              </div>
              <div class="col-md-6 address">
              <label>Address 2</label>
              <input type="text" name="eaddress2" id="eaddress2" class="form-control" value="<?php echo $empmaster['eaddress2'];?>">
              </div>
              <div class="col-md-6 city">
              <label>City</label>
              <input type="text" name="ecity" id="ecity" class="form-control" value="<?php echo $empmaster['ecity'];?>">
              </div>
              <div class="col-md-6 state">
                <label>State</label>
                <!-- <input type="text" name="estate" id="estate" class="form-control"> -->
                <select name="estate" id="input" class="select2 form-control" style="width: 100%!important;">
                  <option value="0">Select State</option>
                  <?php foreach ($states as $state) { ?>
                    <option value="<?php echo $state['state'];?>" <?php echo $empmaster['estate'] === $state['state'] ? 'selected':''; ?>><?php echo $state['state'];?></option>
                  <?php } ?>
                </select>
              </div>
              <div class="col-md-6 state">
                <label>Zip</label>
                <input type="text" name="ezip" id="ezip" class="form-control" value="<?php echo $empmaster['ezip'];?>">
              </div>
            <!--  <button type="submit" class="btn btn-green">SAVE</button>
             </div>
          </div>
          <div class="panel panel-default">
            <div class="panel-body"> -->
              <div class="col-md-2 address">
                <label>Submit to Background Check:</label>
                <div class="radio">
                  <label>
                    <input type="radio" name="background" id="input" value="1" <?php echo $empdetail['background'] === "Yes" ? "checked=\"checked\"":""; ?>>
                    Yes
                  </label><br>
                  <label>
                    <input type="radio" name="background" id="input" value="2" <?php echo $empdetail['background'] === "No" ? "checked=\"checked\"":""; ?>>
                    No
                  </label>
                </div>
              </div>
              <div class="col-md-4 address">
                <label>Criminal History</label>
                <div class="checkbox">
                  <label>
                    <input type="checkbox" name="convicted1" value="1" <?php echo $empdetail['convicted1'] == 1 ? "checked=\"checked\"":""; ?>>
                    None
                  </label>
                </div>
                <div class="checkbox">
                  <label>
                    <input type="checkbox" name="convicted2" value="1" <?php echo $empdetail['convicted2'] == 1 ? "checked=\"checked\"":""; ?>>
                    Felony
                  </label>
                </div>
                <div class="checkbox">
                  <label>
                    <input type="checkbox" name="convicted3" value="1" <?php echo $empdetail['convicted3'] == 1 ? "checked=\"checked\"":""; ?>>
                    Misdemeanor
                  </label>
                </div>
              </div>
              <div class="col-md-6">
                <label>Work Eligibility</label>
                <select name="workeligibility" class="form-control select2" style="width: 100%!important;" onchange="document.getElementById('workstatus').value=this.options[this.selectedIndex].text">
                   <option value="0">Select Work Status</option>
                   <option value="1" <?php echo $empmaster['workstatus'] === "Green Card" ? 'selected':''; ?>>Green Card</option>
                   <option value="2" <?php echo $empmaster['workstatus'] === "Work Permit" ? 'selected':''; ?>>Work Permit</option>
                   <option value="3" <?php echo $empmaster['workstatus'] === "Citizen" ? 'selected':''; ?>>Citizen</option>
                 </select>
                 <input type="hidden" name="workstatus" id="workstatus" class="form-control" value="<?php echo $empmaster['workstatus']; ?>">
              </div>
              <div class="col-md-6 nopad">
                 <label>Expires on</label><div class="col-md-12"></div>
                   <div class="col-md-2">
                      <input type="text" name="expmonth" id="input" class="form-control" placeholder="mm" value="<?php echo $arrayexpdate[1]; ?>">
                   </div>
                   <div class="col-md-2">
                      <input type="text" name="expday" id="input" class="form-control" placeholder="dd" value="<?php echo $arrayexpdate[2]; ?>">
                   </div>
                   <div class="col-md-2">
                      <input type="text" name="expyear" id="input" class="form-control" placeholder="yy" value="<?php echo $arrayexpdate[0]; ?>">
                   </div>
              </div>

              <div class="col-md-3">
                <label>Marital Status</label>
                <select name="maritalstatus2" class="form-control select2" style="width: 100%!important;" onchange="document.getElementById('maritalstatus').value=this.options[this.selectedIndex].text">
                   <option value="0">Select Marital Status</option>
                   <option value="1" <?php echo $empdetail['martialstatus'] === "Single" ? 'selected':''; ?>>Single</option>
                   <option value="2" <?php echo $empdetail['martialstatus'] === "Married" ? 'selected':''; ?>>Married</option>
                   <option value="3" <?php echo $empdetail['martialstatus'] === "Married but withold at higher rate" ? 'selected':''; ?>>Married but withold at higher rate</option>
                 </select>
                 <input type="hidden" name="maritalstatus" id="maritalstatus" class="form-control" value="<?php echo $empdetail['martialstatus']; ?>">
              </div>
              <div class="col-md-3">
                <label>No. of Independents</label>
                <input type="text" name="claims" id="claims" class="form-control" value="<?php echo $empdetail['numclaims']; ?>"/>
              </div>
              <div class="col-md-3">
                <label>Is Employee Tax Exempt?</label>
                <div class="radio">
                  <label>
                    <input type="radio" name="taxexempt" id="input" value="1" <?php echo $empdetail['taxexempt'] === "Yes" ? "checked=\"checked\"":""; ?>>
                    Yes
                  </label>
                  <label>
                    <input type="radio" name="taxexempt" id="input" value="2" <?php echo $empdetail['taxexempt'] === "No" ? "checked=\"checked\"":""; ?>>
                    No
                  </label>
                </div>
              </div>
              <div class="col-md-3">
                <label>Additional Amount Withheld</label>
                <input type="text" name="withheld" id="withheld" class="form-control" value="<?php echo $empdetail['amountwithheld']; ?>"/>
              </div>
              <div class="col-md-6">
                <label>Insurance?</label>
                <div class="radio">
                  <label>
                    <input type="radio" name="insurance" id="input" value="1" <?php echo $empdetail['insurance'] == 1 ? "checked=\"checked\"":""; ?>>
                    Yes
                  </label>
                  <label>
                    <input type="radio" name="insurance" id="input" value="2" <?php echo $empdetail['insurance'] == 2 ? "checked=\"checked\"":""; ?>>
                    No
                  </label>
                </div>
              </div>
              <div class="col-md-12"></div>
              <div class="insuracedetails hidden">
                <div class="col-md-3">
                  <label>Fixed Indemnity Medical</label>
                  <select name="fim" id="fim" class="form-control select2 compute" style="width: 100%!important;">
                     <option value="0">Select</option>
                     <option value="1" <?php echo $empdetail['fim'] == 1 ? 'selected':''; ?>>Fixed Indemnity Medical 1</option>
                     <option value="2" <?php echo $empdetail['fim'] == 2 ? 'selected':''; ?>>Fixed Indemnity Medical 2</option>
                     <option value="3" <?php echo $empdetail['fim'] == 3 ? 'selected':''; ?>>Fixed Indemnity Medical 3</option>
                   </select>
                </div>
                <div class="col-md-3">
                  <label>Dental</label>
                  <select name="dental" id="dental" class="form-control select2 compute" style="width: 100%!important;">
                     <option value="0">Select</option>
                     <option value="1" <?php echo $empdetail['dental'] == 1 ? 'selected':''; ?>>Dental 1</option>
                     <option value="2" <?php echo $empdetail['dental'] == 2 ? 'selected':''; ?>>Dental 2</option>
                     <option value="3" <?php echo $empdetail['dental'] == 3 ? 'selected':''; ?>>Dental 3</option>
                   </select>
                </div>
                <div class="col-md-3">
                  <label>Vision</label>
                  <select name="vision" id="vision" class="form-control select2 compute" style="width: 100%!important;">
                     <option value="0">Select</option>
                     <option value="1" <?php echo $empdetail['vision'] == 1 ? 'selected':''; ?>>Vision 1</option>
                     <option value="2" <?php echo $empdetail['vision'] == 2 ? 'selected':''; ?>>Vision 2</option>
                     <option value="3" <?php echo $empdetail['vision'] == 3 ? 'selected':''; ?>>Vision 3</option>
                   </select>
                </div>
                <div class="col-md-3">
                  <label>Term Life</label>
                  <select name="termlife" id="termlife" class="form-control select2 compute" style="width: 100%!important;">
                     <option value="0">Select</option>
                     <option value="1" <?php echo $empdetail['termlife'] == 1 ? 'selected':''; ?>>Term Life 1</option>
                     <option value="2" <?php echo $empdetail['termlife'] == 2 ? 'selected':''; ?>>Term Life 2</option>
                     <option value="3" <?php echo $empdetail['termlife'] == 3 ? 'selected':''; ?>>Term Life 3</option>
                   </select>
                </div>
                <div class="col-md-4">
                  <label>Short-Term Disability</label>
                  <select name="shortterm" id="shortterm" class="form-control select2 compute" style="width: 100%!important;">
                     <option value="0">Select</option>
                     <option value="1" <?php echo $empdetail['shortterm'] == 1 ? 'selected':''; ?>>Short-Term Disability 1</option>
                     <option value="2" <?php echo $empdetail['shortterm'] == 2 ? 'selected':''; ?>>Short-Term Disability 2</option>
                     <option value="3" <?php echo $empdetail['shortterm'] == 3 ? 'selected':''; ?>>Short-Term Disability 3</option>
                   </select>
                </div>
                <div class="col-md-4">
                  <label>MEC</label>
                  <select name="mec" id="mec" class="form-control select2 compute" style="width: 100%!important;">
                     <option value="0">Select</option>
                     <option value="1" <?php echo $empdetail['mec'] == 1 ? 'selected':''; ?>>MEC 1</option>
                     <option value="2" <?php echo $empdetail['mec'] == 2 ? 'selected':''; ?>>MEC 2</option>
                     <option value="3" <?php echo $empdetail['mec'] == 3 ? 'selected':''; ?>>MEC 3</option>
                   </select>
                </div>
                <div class="col-md-4">
                  <label>Deduction Amount</label>
                  <input type="text" name="deductionamt" id="deductionamt" class="form-control" value="<?php echo $empdetail['deductionamt']; ?>" readonly="readonly" />
                </div>
                <div class="col-md-6">
                  <label>Elchange</label>
                  <input type="date" name="elchange" id="elchange" class="form-control" value="<?php echo $empdetail['elchange'] != '' ? date('Y-m-d', $empdetail['elchange']) : ''; ?>" />
                </div>
                <div class="col-md-6">
                  <label>PREDED</label>
                  <input type="date" name="preded" id="preded" class="form-control" value="<?php echo $empdetail['prded'] != '' ? date('Y-m-d', $empdetail['prded']) : ''; ?>" />
                </div>
              </div>
              <div class="col-md-3">
                <label>Minimum Pay</label>
                <input type="text" name="minimumpay" id="minimumpay" class="form-control" value="<?php echo $empdetail['acceptablepay']; ?>" />
              </div>
              <div class="col-md-3">
                <label>Shift Prefered</label>
                <select name="shiftprefered" id="shiftprefered" class="form-control select2" style="width: 100%!important;" onchange="document.getElementById('shiftprefered2').value=this.options[this.selectedIndex].text">
                 <option value="0">Select Shift</option>
                 <option value="1" <?php echo $empdetail['shift'] === "1st" ? 'selected':''; ?>>1st</option>
                 <option value="2" <?php echo $empdetail['shift'] === "2nd" ? 'selected':''; ?>>2nd</option>
                 <option value="3" <?php echo $empdetail['shift'] === "3rd" ? 'selected':''; ?>>3rd</option>
                 <option value="4" <?php echo $empdetail['shift'] === "Weekend" ? 'selected':''; ?>>Weekend</option>
                 <option value="5" <?php echo $empdetail['shift'] === "Any" ? 'selected':''; ?>>Any</option>
               </select>
               <input type="hidden" name="shiftprefered2" id="shiftprefered2" class="form-control" value="<?php echo $empdetail['shift'] ?>">
              </div>
              <div class="col-md-3">
                <label>Communication Level</label>
                <select name="comlevel" id="comlevel" class="form-control select2" style="width: 100%!important;" onchange="document.getElementById('comlevel2').value=this.options[this.selectedIndex].text">
                 <option value="0">Select</option>
                 <option value="1" <?php echo $empdetail['communicationlevel'] === "Communcation Level 1" ? 'selected':''; ?>>Communcation Level 1</option>
                 <option value="2" <?php echo $empdetail['communicationlevel'] === "Communcation Level 2" ? 'selected':''; ?>>Communcation Level 2</option>
                 <option value="3" <?php echo $empdetail['communicationlevel'] === "Communcation Level 3" ? 'selected':''; ?>>Communcation Level 3</option>
               </select>
               <input type="hidden" name="comlevel2" id="comlevel2" class="form-control" value="<?php echo $empdetail['communicationlevel']; ?>">

              </div>
              <div class="col-md-3">
                <label>Other Languages</label>
                <select name="otherlanguage" id="otherlanguage" class="form-control select2" style="width: 100%!important;" onchange="document.getElementById('otherlanguage2').value=this.options[this.selectedIndex].text">
                 <option value="0">Select</option>
                 <option value="1" <?php echo $empdetail['otherlanguage'] === "Other Languages 1" ? 'selected':''; ?>>Other Languages 1</option>
                 <option value="2" <?php echo $empdetail['otherlanguage'] === "Other Languages 2" ? 'selected':''; ?>>Other Languages 2</option>
                 <option value="3" <?php echo $empdetail['otherlanguage'] === "Other Languages 3" ? 'selected':''; ?>>Other Languages 3</option>
               </select>
               <input type="hidden" name="otherlanguage2" id="otherlanguage2" class="form-control" value="<?php echo $empdetail['otherlanguage']; ?>">
              </div>
              <div class="col-md-4">
                <label>Contact Name</label>
                <input type="text" name="contactname" id="contactname" class="form-control" value="<?php echo $empcontact['contact1']; ?>" />
              </div>
              <div class="col-md-4">
                <label>Phone Number</label>
                <input type="text" name="phonenumber" id="phonenumber" class="form-control" value="<?php echo $empcontact['contactphone1']; ?>" />
              </div>
              <div class="col-md-4">
                <label>Relationship</label>
                <input type="text" name="relationship" id="relationship" class="form-control" value="<?php echo $empcontact['relationship1']; ?>" />
              </div>
              <div class="col-md-12">
                <br><br>
                <button type="submit" class="btn btn-green">SAVE <i class="fa fa-spin"></i></button>
              </div>
            </div>
          </div>
        </form>
      </div>
      <!-- /.tab-pane -->
      <div class="tab-pane" id="empinfo_recommendation">
  <!--FORM RECOMENDATIOn-->
        <?php if(isset($_GET['empid']) && $numrowsrecommendation > 0){ ?>
          <form method="post" accept-charset="utf-8" id="applicationemployeerecomendationedit">
            <input type="hidden" name="sessionid" id="sessionid" class="form-control sessionid" value="<?php echo $application['sessionid'] ?>"/>
        <?php } elseif(isset($_GET['empid']) && $numrowsrecommendation == 0) { ?>
          <form method="post" accept-charset="utf-8" id="applicationemployeerecomendationedit_add">
          <input type="hidden" name="sessionid" id="sessionid" class="form-control sessionid" value="<?php echo $application['sessionid'] ?>"/>
        <?php } else { ?>
          <form method="post" accept-charset="utf-8" id="applicationemployeerecomendationadd">
            <input type="hidden" name="employeeid" id="employeeid" class="form-control employeeid" value=""/>
            <input type="hidden" name="sessionid" id="sessionid" class="form-control sessionid" value=""/>
        <?php } ?>

          <div class="panel panel-default">
            <div class="panel-body">
            <div class="panel-heading"><b><a id="refreshrecommendation"><i class="fa fa-refresh pull-right"></i></a></b></div>
              <div class="col-md-6">
                <label>Source</label>
                <select name="source" id="source" class="form-control select2" style="width: 100%!important;">
                 <option value="0">Select</option>
                 <option value="1" <?php echo $emprecommendation['source'] == 1 ? "selected=\"selected\"" : ""?>>Source 1</option>
                 <option value="2" <?php echo $emprecommendation['source'] == 2 ? "selected=\"selected\"" : ""?>>Source 2</option>
                 <option value="3" <?php echo $emprecommendation['source'] == 3 ? "selected=\"selected\"" : ""?>>Source 3</option>
               </select>
              </div>
              <div class="col-md-6">
                <label>Referer</label>
                <input type="text" name="referrer" id="referrer" class="form-control" value="<?php echo $emprecommendation['referrer']; ?>">
              </div>
              <div class="col-md-6">
                <label>Standby</label>
          			<select name="standbys[]" id="standby" multiple="multiple" class="select2 form-control" style="width: 100%!imporant;">
                 <option value="0" disabled="disabled">Select</option>
                 <option value="1" <?php if (count($arraystandby) != 0 || !empty($arraystandby)) echo in_array("1", $arraystandby) ? "selected=\"selected\"" : ""; ?>>Standby 1</option>
                 <option value="2" <?php if (count($arraystandby) != 0 || !empty($arraystandby)) echo in_array("2", $arraystandby) ? "selected=\"selected\"" : ""; ?>>Standby 2</option>
                 <option value="3" <?php if (count($arraystandby) != 0 || !empty($arraystandby)) echo in_array("3", $arraystandby) ? "selected=\"selected\"" : ""; ?>>Standby 3</option>
               </select>
              </div>
              <div class="col-md-6">
                <label>Client Recommendation</label>
          			<select name="clientrecommendations[]" id="clientrecommendation" multiple="multiple" class="select2 form-control" style="width: 100%!imporant;">
                 <option value="0" disabled="disabled">Select</option>
                 <option value="1" <?php if (count($arrayclientrecommendation) != 0 || !empty($arrayclientrecommendation)) echo in_array("1", $arrayclientrecommendation) ? "selected=\"selected\"" : ""; ?>>Client Recommendation 1</option>
                 <option value="2" <?php if (count($arrayclientrecommendation) != 0 || !empty($arrayclientrecommendation)) echo in_array("2", $arrayclientrecommendation) ? "selected=\"selected\"" : ""; ?>>Client Recommendation 2</option>
                 <option value="3" <?php if (count($arrayclientrecommendation) != 0 || !empty($arrayclientrecommendation)) echo in_array("3", $arrayclientrecommendation) ? "selected=\"selected\"" : ""; ?>>Client Recommendation 3</option>
               </select>
              </div>
              <div class="col-md-6">
                <label>Job Type</label>
          			<select name="jobtypes[]" id="jobtype" multiple="multiple" class="select2 form-control" style="width: 100%!imporant;">
                   <option value="0" disabled="disabled">Select</option>
                   <option value="1" <?php if (count($arrayjobtype) != 0 || !empty($arrayjobtype)) echo in_array("1", $arrayjobtype) ? "selected=\"selected\"" : ""; ?>>Job Type 1</option>
                   <option value="2" <?php if (count($arrayjobtype) != 0 || !empty($arrayjobtype)) echo in_array("2", $arrayjobtype) ? "selected=\"selected\"" : ""; ?>>Job Type 2</option>
                   <option value="3" <?php if (count($arrayjobtype) != 0 || !empty($arrayjobtype)) echo in_array("3", $arrayjobtype) ? "selected=\"selected\"" : ""; ?>>Job Type 3</option>
                </select>
              </div>

              <div class="col-md-12">
                <br><br>
                <button type="submit" class="btn btn-green">SAVE <i class="fa fa-spin"></i></button>
              </div>
            </div>
          </div>
        </form>
      </div>
      <!-- /.tab-pane -->
      <div class="tab-pane hidden" id="empinfo_emergencycontact">
  <!--FORM EMERGENCY CONTACT-->
        <!-- <form method="post" accept-charset="utf-8" id="emergencycontact"> -->
          <div class="panel panel-default hidden">
            <div class="panel-heading"><b>EMERGENCY CONTACT    <i class="fa fa-refresh pull-right"></i></b></div>
            <div class="panel-body">
              <p>Emergency Contact</p>
              <button type="submit" class="btn btn-green">SAVE</button>
            </div>
          </div>
        <!-- </form> -->
      </div>
      <!-- /.tab-pane -->
      <div class="tab-pane" id="empinfo_skills">
  <!--FORM SKILLS-->
        <?php if(isset($_GET['empid']) && $numrowsjobs > 0 && $numrowsempskills > 0){ ?>
          <form method="post" accept-charset="utf-8" id="applicationemployeeskillsedit">
            <input type="hidden" name="sessionid" id="sessionid" class="form-control sessionid" value="<?php echo $application['sessionid'] ?>"/>
            <input type="hidden" name="employeeid" id="sessionid" class="form-control sessionid" value="<?php echo $_GET['empid'] ?>"/>
        <?php } elseif(isset($_GET['empid']) && $numrowsjobs > 0 && $numrowsempskills == 0){ ?>
          <form method="post" accept-charset="utf-8" id="applicationemployeeskillseditjob_addskills">
            <input type="hidden" name="sessionid" id="sessionid" class="form-control sessionid" value="<?php echo $application['sessionid'] ?>"/>
            <input type="hidden" name="employeeid" id="sessionid" class="form-control sessionid" value="<?php echo $_GET['empid'] ?>"/>
        <?php } elseif(isset($_GET['empid']) && $numrowsjobs == 0 && $numrowsempskills == 0){ ?>
          <form method="post" accept-charset="utf-8" id="applicationemployeeskillsedit_add">
            <input type="hidden" name="sessionid" id="sessionid" class="form-control sessionid" value="<?php echo $application['sessionid'] ?>"/>
            <input type="hidden" name="employeeid" id="sessionid" class="form-control sessionid" value="<?php echo $_GET['empid'] ?>"/>
        <?php } elseif(isset($_GET['empid']) && $numrowsjobs == 0 && $numrowsempskills > 0){ ?>
          <form method="post" accept-charset="utf-8" id="applicationemployeeskillseditskills_addjobs">
            <input type="hidden" name="sessionid" id="sessionid" class="form-control sessionid" value="<?php echo $application['sessionid'] ?>"/>
            <input type="hidden" name="employeeid" id="sessionid" class="form-control sessionid" value="<?php echo $_GET['empid'] ?>"/>
        <?php } else { ?>
          <form method="post" accept-charset="utf-8" id="applicationemployeeskillsadd">
            <input type="hidden" name="employeeid" id="employeeid" class="form-control employeeid" value=""/>
            <input type="hidden" name="sessionid" id="sessionid" class="form-control sessionid" value=""/>
        <?php } ?>
          <div class="panel panel-default">
            <div class="panel-body">
            <div class="panel-heading"><b><a id="refreshrecommendation"><i class="fa fa-refresh pull-right"></i></a></b></div>
              <span style="color: red">Please list up to 3 previous jobs where your skills were the strongest</span><br>
              <div class="col-md-12">
                <h3>Job 1</h3>
                <div class="col-md-3">
                  <select name="jobcategory1" class="form-control select2" style="width: 100%!important;">
                    <option value="0">Select Job Category</option>
                    <?php foreach ($jobcategories as $jobcategory) { ?>
                      <option value="<?php echo $jobcategory['jcid']?>" <?php echo $job1['jcid'] == $jobcategory['jcid'] ? "selected=\"selected\"" : "" ?>><?php echo $jobcategory['jobcategory']; ?></option>
                    <?php }?>
                  </select>
                  <input type="hidden" name="job1_id" id="job1_id" class="form-control" value="<?php echo $job1['ejobid']; ?>">
                </div>
                <div class="col-md-3">
                  <select name="jobdep1" class="form-control select2" style="width: 100%!important;">
                    <option value="0">Select Department</option>
                    <?php foreach ($jobdeps as $jobdep) { ?>
                      <option value="<?php echo $jobdep['jdid']?>" <?php echo $job1['jdid'] == $jobdep['jdid'] ? "selected=\"selected\"" : "" ?>><?php echo $jobdep['jobdep']; ?></option>
                    <?php } ?>
                  </select>
                </div>
                <div class="col-md-3">
                  <select name="skillposition1" class="form-control select2" style="width: 100%!important;">
                    <option value="0">Select Highest Position</option>
                    <?php foreach ($skillpositions as $skillposition) {?>
                      <option value="<?php echo $skillposition['spid']?>" <?php echo $job1['spid'] == $skillposition['spid'] ? "selected=\"selected\"" : "" ?>><?php echo($skillposition['skillposition']); ?></option>
                    <?php };?>
                  </select>
                </div>
                <div class="col-md-3">
                  <select name="experience1" class="form-control select2" style="width: 100%!important;">
                    <option value="0">Select Length of Experience</option>
                    <?php foreach ($experiences as $experience) { ?>
                      <option value="<?php echo $experience['expid']?>" <?php echo $job1['expid'] == $experience['expid'] ? "selected=\"selected\"" : "" ?>><?php echo($experience['experience']); ?></option>
                    <?php } ?>
                  </select>
                </div>
              </div>
              <div class="col-md-12">
                <h3>Job 2</h3>
                <div class="col-md-3">
                  <select name="jobcategory2" class="form-control select2" style="width: 100%!important;">
                    <option value="0">Select Job Category</option>
                    <?php foreach ($jobcategories as $jobcategory) { ?>
                      <option value="<?php echo $jobcategory['jcid']?>" <?php echo $job2['jcid'] == $jobcategory['jcid'] ? "selected=\"selected\"" : "" ?>><?php echo $jobcategory['jobcategory']; ?></option>
                    <?php }?>
                  </select>
                  <input type="hidden" name="job2_id" id="job2_id" class="form-control" value="<?php echo $job2['ejobid']; ?>">
                </div>
                <div class="col-md-3">
                  <select name="jobdep2" class="form-control select2" style="width: 100%!important;">
                    <option value="0">Select Department</option>
                    <?php foreach ($jobdeps as $jobdep) { ?>
                      <option value="<?php echo $jobdep['jdid']?>" <?php echo $job2['jdid'] == $jobdep['jdid'] ? "selected=\"selected\"" : "" ?>><?php echo $jobdep['jobdep']; ?></option>
                    <?php } ?>
                  </select>
                </div>
                <div class="col-md-3">
                  <select name="skillposition2" class="form-control select2" style="width: 100%!important;">
                    <option value="0">Select Highest Position</option>
                    <?php foreach ($skillpositions as $skillposition) {?>
                      <option value="<?php echo $skillposition['spid']?>" <?php echo $job2['spid'] == $skillposition['spid'] ? "selected=\"selected\"" : "" ?>><?php echo($skillposition['skillposition']); ?></option>
                    <?php };?>
                  </select>
                </div>
                <div class="col-md-3">
                  <select name="experience2" class="form-control select2" style="width: 100%!important;">
                    <option value="0">Select Length of Experience</option>
                    <?php foreach ($experiences as $experience) { ?>
                      <option value="<?php echo $experience['expid']?>" <?php echo $job2['expid'] == $experience['expid'] ? "selected=\"selected\"" : "" ?>><?php echo($experience['experience']); ?></option>
                    <?php } ?>
                  </select>
                </div>
              </div>
              <div class="col-md-12">
                <h3>Job 3</h3>
                <div class="col-md-3">
                  <select name="jobcategory3" class="form-control select2" style="width: 100%!important;">
                    <option value="0">Select Job Category</option>
                    <?php foreach ($jobcategories as $jobcategory) { ?>
                      <option value="<?php echo $jobcategory['jcid']?>" <?php echo $job3['jcid'] == $jobcategory['jcid'] ? "selected=\"selected\"" : "" ?>><?php echo $jobcategory['jobcategory']; ?></option>
                    <?php }?>
                  </select>
                  <input type="hidden" name="job3_id" id="job3_id" class="form-control" value="<?php echo $job3['ejobid']; ?>">
                </div>
                <div class="col-md-3">
                  <select name="jobdep3" class="form-control select2" style="width: 100%!important;">
                    <option value="0">Select Department</option>
                    <?php foreach ($jobdeps as $jobdep) { ?>
                      <option value="<?php echo $jobdep['jdid']?>" <?php echo $job3['jdid'] == $jobdep['jdid'] ? "selected=\"selected\"" : "" ?>><?php echo $jobdep['jobdep']; ?></option>
                    <?php } ?>
                  </select>
                </div>
                <div class="col-md-3">
                  <select name="skillposition3" class="form-control select2" style="width: 100%!important;">
                    <option value="0">Select Highest Position</option>
                    <?php foreach ($skillpositions as $skillposition) {?>
                      <option value="<?php echo $skillposition['spid']?>" <?php echo $job3['spid'] == $skillposition['spid'] ? "selected=\"selected\"" : "" ?>><?php echo($skillposition['skillposition']); ?></option>
                    <?php };?>
                  </select>
                </div>
                <div class="col-md-3">
                  <select name="experience3" class="form-control select2" style="width: 100%!important;">
                    <option value="0">Select Length of Experience</option>
                    <?php foreach ($experiences as $experience) { ?>
                      <option value="<?php echo $experience['expid']?>" <?php echo $job3['expid'] == $experience['expid'] ? "selected=\"selected\"" : "" ?>><?php echo($experience['experience']); ?></option>
                    <?php } ?>
                  </select>
                </div>
              </div>
              <div class="col-md-12"><br><br><br></div>
              <h3 style="margin-top: 20px;">Additional Skills</h3>
              <br>
              <div class="col-md-12">
                <div class="col-md-12">
                  <textarea name="additionalskills" style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"><?php echo $application['empskill']; ?></textarea>
                </div>
              </div>
              <div class="col-md-12"></div>
              <div class="col-md-12">
              <?php foreach ($skillcategoryforadditionalskills as $skillcategoryforadditionalskill) { ?>
                <div class="col-md-12">
                  <div class="col-md-2" style="margin-top: 20px;"><?php echo $skillcategoryforadditionalskill['skillcategory']; ?></div>
                  <div class="col-md-4" style="margin-top: 20px;overflow: auto; height: 100px; border: 2px solid grey;">
                    <div class="checkbox">
                  <?php foreach ($skills as $skill) { if ($skillcategoryforadditionalskill['skcid'] == $skill['skcid']) {?>
                        <label>
                          <input type="checkbox" name="skill_<?php echo $skillcategoryforadditionalskill['skcid']?>[]" value="<?php echo $skillcategoryforadditionalskill['skcid'].','.$skill['skillid'].',';?>1" <?php if (count($arrayskillids) != 0 || !empty($arrayskillids)) echo in_array($skill['skillid'], $arrayskillids) ? "checked=\"checked\"" : ""; ?>> <?php echo $skill['skills']; ?>
                        </label><br>
                  <?php } } ?>
                    </div>
                  </div>
                </div>
              <?php } ?>
              </div>
              <button type="submit" class="btn btn-green">SAVE</button>
            </div>
          </div>
        </form>
      </div>
      <!-- /.tab-pane -->
      <div class="tab-pane" id="empinfo_screening">
  <!--FORM SCREENING-->
          <?php if(isset($_GET['empid']) && $numrowsscreening > 0 && $numrowsescreeningcomments > 0){ ?>
            <form method="post" accept-charset="utf-8" id="applicationscreeningcommentsedit">
              <input type="hidden" name="sessionid" id="sessionid" class="form-control sessionid" value="<?php echo $application['sessionid'] ?>"/>
              <input type="hidden" name="employeeid" id="sessionid" class="form-control sessionid" value="<?php echo $_GET['empid'] ?>"/>
          <?php } elseif(isset($_GET['empid']) && $numrowsscreening > 0 && $numrowsescreeningcomments == 0){ ?>
            <form method="post" accept-charset="utf-8" id="applicationscreeningcommentseditscreening_addsc">
              <input type="hidden" name="sessionid" id="sessionid" class="form-control sessionid" value="<?php echo $application['sessionid'] ?>"/>
              <input type="hidden" name="employeeid" id="sessionid" class="form-control sessionid" value="<?php echo $_GET['empid'] ?>"/>
          <?php } elseif(isset($_GET['empid']) && $numrowsscreening == 0 && $numrowsescreeningcomments == 0){ ?>
            <form method="post" accept-charset="utf-8" id="applicationscreeningcommentsedit_add">
              <input type="hidden" name="sessionid" id="sessionid" class="form-control sessionid" value="<?php echo $application['sessionid'] ?>"/>
              <input type="hidden" name="employeeid" id="sessionid" class="form-control sessionid" value="<?php echo $_GET['empid'] ?>"/>
          <?php } elseif(isset($_GET['empid']) && $numrowsscreening == 0 && $numrowsescreeningcomments > 0){ ?>
            <form method="post" accept-charset="utf-8" id="applicationscreeningcommentseditsc_addscreening">
              <input type="hidden" name="sessionid" id="sessionid" class="form-control sessionid" value="<?php echo $application['sessionid'] ?>"/>
              <input type="hidden" name="employeeid" id="sessionid" class="form-control sessionid" value="<?php echo $_GET['empid'] ?>"/>
          <?php } else { ?>
            <form method="post" accept-charset="utf-8" id="screeningcomments">
              <input type="hidden" name="employeeid" id="employeeid" class="form-control employeeid" value=""/>
              <input type="hidden" name="sessionid" id="sessionid" class="form-control sessionid" value=""/>
          <?php } ?>
          <div class="panel panel-default">
            <div class="panel-body">
            <div class="panel-heading"><b><a id="refreshrecommendation"><i class="fa fa-refresh pull-right"></i></a></b></div>
              <div class="col-md-12">
                <label for="">Comments</label>
                <textarea class="form-control" name="screeningcomments" style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"><?php echo $empscreeningcomments['sccomments']; ?></textarea>
              </div>
              <div class="col-md-12">
                <label class="checkbox-inline">
                  <input type="checkbox" value="1" name="ssnclear" <?php echo $empscreeningcomments['scclear'] == 1 ? "checked=\"checked\"" : ""; ?>>SSN Clear
                </label>
                <label class="checkbox-inline">
                  <input type="checkbox" value="1" name="drugtestclear" <?php echo $empscreeningcomments['scdrug'] == 1 ? "checked=\"checked\"" : ""; ?>>Drug Test Clear
                </label>
                <label class="checkbox-inline">
                  <input type="checkbox" value="1" name="backgroundcheckclear" <?php echo $empscreeningcomments['scbackground'] == 1 ? "checked=\"checked\"" : ""; ?>>Backgroundcheck Clear
                </label>
                <label class="checkbox-inline">
                  <input type="checkbox" value="1" name="everify" <?php echo $empscreeningcomments['sceverify'] == 1 ? "checked=\"checked\"" : ""; ?>>E-Verify
                </label>
              </div>
              <div class="col-md-6">
                <label>Check Type</label>
                <select name="checktype" id="checktype" class="form-control select2" style="width: 100%!important;">
                 <option value="0">Select</option>
                 <option value="1" <?php echo $empscreening['chktype'] == 1 ? "selected=\"selected\"" : ""; ?>>Reference</option>
                 <option value="2" <?php echo $empscreening['chktype'] == 2 ? "selected=\"selected\"" : ""; ?>>Drug</option>
                 <option value="3" <?php echo $empscreening['chktype'] == 3 ? "selected=\"selected\"" : ""; ?>>Background</option>
               </select>
              </div>
              <div class="col-md-6">
                <label>Status</label>
                <input type="text" name="status" id="status" class="form-control" value="<?php echo $empscreening['chkstatus']; ?>">
              </div>
              <div class="col-md-6">
                <label>Staff</label>
                <input type="text" name="staff" id="staff" class="form-control" value="<?php echo $empscreening['chkstaff']; ?>"/>
              </div>
              <div class="col-md-6 nopad">
                 <label>Date</label><div class="col-md-12"></div>
                   <div class="col-md-2">
                      <input type="text" name="datemonth" id="input" class="form-control" placeholder="mm" value="<?php echo $arraychkdate[1]; ?>">
                   </div>
                   <div class="col-md-2">
                      <input type="text" name="dateday" id="input" class="form-control" placeholder="dd" value="<?php echo $arraychkdate[2]; ?>">
                   </div>
                   <div class="col-md-2">
                      <input type="text" name="dateyear" id="input" class="form-control" placeholder="yy" value="<?php echo $arraychkdate[0]; ?>">
                   </div>
              </div>

              <div class="col-md-12">
                <br><br>
                <button type="submit" class="btn btn-green">SAVE <i class="fa fa-spin"></i></button>
              </div>
            </div>
          </div>
        </form>
      </div>
      <!-- /.tab-pane -->
      <div class="tab-pane" id="empinfo_education">
  <!--FORM EDUCATION-->
          <?php if(isset($_GET['empid']) && $numrowseducation > 0){ ?>
            <form method="post" accept-charset="utf-8" id="applicationeducationedit">
              <input type="hidden" name="sessionid" id="sessionid" class="form-control sessionid" value="<?php echo $application['sessionid'] ?>"/>
              <input type="hidden" name="employeeid" id="sessionid" class="form-control sessionid" value="<?php echo $_GET['empid'] ?>"/>
          <?php } elseif(isset($_GET['empid']) && $numrowseducation == 0){ ?>
            <form method="post" accept-charset="utf-8" id="applicationeducationedit_add">
              <input type="hidden" name="sessionid" id="sessionid" class="form-control sessionid" value="<?php echo $application['sessionid'] ?>"/>
              <input type="hidden" name="employeeid" id="sessionid" class="form-control sessionid" value="<?php echo $_GET['empid'] ?>"/>
          <?php } else { ?>
            <form method="post" accept-charset="utf-8" id="education">
              <input type="hidden" name="employeeid" id="employeeid" class="form-control employeeid" value=""/>
              <input type="hidden" name="sessionid" id="sessionid" class="form-control sessionid" value=""/>
          <?php } ?>
          <div class="panel panel-default">
            <div class="panel-body">
            <div class="panel-heading"><b><a id="refreshrecommendation"><i class="fa fa-refresh pull-right"></i></a></b></div>
              <div class="col-md-12">
                <label for="">Remarks</label>
                <textarea name="eduremarks" class="form-control" style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"><?php echo $empeducation['eduremarks']; ?></textarea>
              </div>
              <div class="col-md-4">
                <label>Education</label>
                <select name="empeducation" class="form-control select2" style="width: 100%!important;" onchange="document.getElementById('empeducation2').value=this.options[this.selectedIndex].text">
                 <option value="0">Select</option>
                 <option value="1" <?php echo $empeducation['education'] === "Grammar" ? "selected=\"selected\"" : ""; ?>>Grammar</option>
                 <option value="2" <?php echo $empeducation['education'] === "Highschool" ? "selected=\"selected\"" : ""; ?>>Highschool</option>
                 <option value="3" <?php echo $empeducation['education'] === "Associate" ? "selected=\"selected\"" : ""; ?>>Associate</option>
                 <option value="4" <?php echo $empeducation['education'] === "Bachelor" ? "selected=\"selected\"" : ""; ?>>Bachelor</option>
                 <option value="5" <?php echo $empeducation['education'] === "Master" ? "selected=\"selected\"" : ""; ?>>Master</option>
                 <option value="6" <?php echo $empeducation['education'] === "Other" ? "selected=\"selected\"" : ""; ?>>Other</option>
                 <option value="7" <?php echo $empeducation['education'] === "No Education" ? "selected=\"selected\"" : ""; ?>>No Education</option>
               </select>
               <input type="hidden" name="empeducation2" id="empeducation2" class="form-control" value="<?php echo $empeducation['education']; ?>">
              </div>
              <div class="col-md-4">
                <label>Majors</label>
                <input type="text" name="major" id="major" class="form-control" value="<?php echo $empeducation['majors']; ?>">
              </div>
              <div class="col-md-4">
                <label>Institution</label>
                <input type="text" name="institution" id="institution" class="form-control" value="<?php echo $empeducation['institution']; ?>">
              </div>
              <div class="col-md-4">
                <label>City</label>
                <input type="text" name="city" id="city" class="form-control" value="<?php echo $empeducation['city']; ?>">
              </div>
              <div class="col-md-4">
                <label>State</label>
                <select name="edstate" class="select2 form-control" style="width: 100%!important;" onchange="document.getElementById('empstate2').value=this.options[this.selectedIndex].text">
                  <option value="0">Select State</option>
                  <?php foreach ($states as $state) { ?>
                    <option value="<?php echo $state['state'];?>" <?php echo $empeducation['state'] === $state['state'] ? "selected=\"selected\"" : ""; ?>><?php echo $state['state'];?></option>
                  <?php } ?>
                </select>
                <input type="hidden" name="empstate2" id="empstate2" class="form-control" value="<?php echo $empeducation['state']; ?>">
              </div>
              <div class="col-md-4">
                <label>Country</label>
                <select name="edcountry" class="select2 form-control" style="width: 100%!important;" onchange="document.getElementById('empcountry2').value=this.options[this.selectedIndex].text">
                  <option value="0">Select Country</option>
                  <?php foreach ($countries as $country) { ?>
                    <option value="<?php echo $country['id'];?>" <?php echo $empeducation['country'] === $country['country'] ? "selected=\"selected\"" : ""; ?>><?php echo $country['country'];?></option>
                  <?php } ?>
                </select>
                <input type="hidden" name="empcountry2" id="empcountry2" class="form-control" value="<?php echo $empeducation['country']; ?>">
              </div>

              <div class="col-md-12">
                <br><br>
                <button type="submit" class="btn btn-green">SAVE <i class="fa fa-spin"></i></button>
              </div>
            </div>
          </div>
        </form>
      </div>
      <!-- /.tab-pane -->
      <div class="tab-pane" id="empinfo_workhistory">
  <!--FORM WORK HISTORY-->
      <?php if(isset($_GET['empid']) && $numrowsworkhistory > 0){ ?>
        <form method="post" accept-charset="utf-8" id="applicationworkhistoryedit">
          <input type="hidden" name="sessionid" id="sessionid" class="form-control sessionid" value="<?php echo $application['sessionid'] ?>"/>
          <input type="hidden" name="employeeid" id="sessionid" class="form-control sessionid" value="<?php echo $_GET['empid'] ?>"/>
      <?php } elseif(isset($_GET['empid']) && $numrowsworkhistory == 0){ ?>
        <form method="post" accept-charset="utf-8" id="applicationworkhistoryedit_add">
          <input type="hidden" name="sessionid" id="sessionid" class="form-control sessionid" value="<?php echo $application['sessionid'] ?>"/>
          <input type="hidden" name="employeeid" id="sessionid" class="form-control sessionid" value="<?php echo $_GET['empid'] ?>"/>
      <?php } else { ?>
        <form method="post" accept-charset="utf-8" id="applicationworkhistory">
          <input type="hidden" name="employeeid" id="employeeid" class="form-control employeeid" value=""/>
          <input type="hidden" name="sessionid" id="sessionid" class="form-control sessionid" value=""/>
      <?php } ?>
          <div class="panel panel-default">
            <div class="panel-body">
            <div class="panel-heading"><b><a id="refreshrecommendation"><i class="fa fa-refresh pull-right"></i></a></b></div>
              <div class="col-md-12 hi">
                <label>Company Name</label>
                <input type="text" name="companyname" id="companyname" class="form-control" value="<?php echo $empworkhistory['companyname']; ?>"/>
                <label class="radio-inline"><input type="radio" name="hiretemp" value="1" <?php echo $empworkhistory['hiretemp'] == 1 ? "checked=\"checked\"":""; ?>>Temp through Agency</label>
                <label class="radio-inline"><input type="radio" name="hiretemp" value="0" <?php echo $empworkhistory['hiretemp'] == 0 ? "checked=\"checked\"":""; ?>>Full Time</label>
              </div>
              <div class="workreport hidden">
                <div class="col-md-6">
                  <label>State</label>
                  <select name="whstate" class="select2 form-control" style="width: 100%!important;" onchange="document.getElementById('whstate2').value=this.options[this.selectedIndex].text">
                    <option value="0">Select State</option>
                    <?php foreach ($states as $state) { ?>
                      <option value="<?php echo $state['state'];?>" <?php echo $empworkhistory['state'] === $state['state'] ? 'selected':''; ?>><?php echo $state['state'];?></option>
                    <?php } ?>
                  </select>
                  <input type="hidden" name="whstate2" id="whstate2" class="form-control" value="<?php echo $empworkhistory['state']; ?>">
                </div>
                <div class="col-md-6">
                  <label>Reason Left</label>
                  <input type="text" name="reasonleft" id="reasonleft" class="form-control" value="<?php echo $empworkhistory['reasonleft']; ?>">
                </div>
                <div class="col-md-6">
                  <label>Title</label>
                  <input type="text" name="title" id="title" class="form-control" value="<?php echo $empworkhistory['title']; ?>">
                </div>

                <div class="col-md-6 nopad">
                   <label>Start Date</label><div class="col-md-12"></div>
                     <div class="col-md-2">
                        <input type="text" name="startdatemonth" id="input" class="form-control" placeholder="mm" value="<?php echo $arraystartdate[1]?>">
                     </div>
                     <div class="col-md-2">
                        <input type="text" name="startdateday" id="input" class="form-control" placeholder="dd" value="<?php echo $arraystartdate[2]?>">
                     </div>
                     <div class="col-md-2">
                        <input type="text" name="startdateyear" id="input" class="form-control" placeholder="yy" value="<?php echo $arraystartdate[0]?>">
                     </div>
                </div>
                <div class="col-md-6 nopad">
	                 <label>End Date</label><div class="col-md-12"></div>
	                   <div class="col-md-2">
	                      <input type="text" name="enddatemonth" id="input" class="form-control" placeholder="mm" value="<?php echo $arrayenddate[1]?>">
	                   </div>
	                   <div class="col-md-2">
	                      <input type="text" name="enddateday" id="input" class="form-control" placeholder="dd" value="<?php echo $arrayenddate[2]?>">
	                   </div>
	                   <div class="col-md-2">
	                      <input type="text" name="enddateyear" id="input" class="form-control" placeholder="yy" value="<?php echo $arrayenddate[0]?>">
	                   </div>
	              </div>
	              <div class="col-md-12">
                <h3>Job 1</h3>
                <div class="col-md-3">
                  <select name="jobcategory1" class="form-control select2" style="width: 100%!important;">
                    <option value="0">Select Job Category</option>
                    <?php foreach ($jobcategories as $jobcategory) { ?>
                      <option value="<?php echo $jobcategory['jcid']?>" <?php echo $empworkhistory['jcid'] == $jobcategory['jcid'] ? "selected=\"selected\"" : ""; ?>><?php echo $jobcategory['jobcategory']; ?></option>
                    <?php }?>
                  </select>
                </div>
                <div class="col-md-3">
                  <select name="jobdep1" class="form-control select2" style="width: 100%!important;">
                    <option value="0">Select Department</option>
                    <?php foreach ($jobdeps as $jobdep) { ?>
                      <option value="<?php echo $jobdep['jdid']?>" <?php echo $empworkhistory['jdid'] == $jobdep['jdid'] ? "selected=\"selected\"" : ""; ?>><?php echo $jobdep['jobdep']; ?></option>
                    <?php } ?>
                  </select>
                </div>
                <div class="col-md-3">
                  <select name="skillposition1" class="form-control select2" style="width: 100%!important;">
                    <option value="0">Select Highest Position</option>
                    <?php foreach ($skillpositions as $skillposition) {?>
                      <option value="<?php echo $skillposition['spid']?>" <?php echo $empworkhistory['spid'] == $skillposition['spid'] ? "selected=\"selected\"" : ""; ?>><?php echo $skillposition['skillposition']; ?></option>
                    <?php };?>
                  </select>
                </div>
                <div class="col-md-3">
                  <select name="experience1" class="form-control select2" style="width: 100%!important;">
                    <option value="0">Select Length of Experience</option>
                    <?php foreach ($experiences as $experience) { ?>
                      <option value="<?php echo $experience['expid']?>" <?php echo $empworkhistory['expid'] == $experience['expid'] ? "selected=\"selected\"" : ""; ?>><?php echo $experience['experience']; ?></option>
                    <?php } ?>
                  </select>
                </div>
              </div>
              <div class="col-md-12">
                <h3>Job 2</h3>
                <div class="col-md-3">
                  <select name="jobcategory2" class="form-control select2" style="width: 100%!important;">
                    <option value="0">Select Job Category</option>
                    <?php foreach ($jobcategories as $jobcategory) { ?>
                      <option value="<?php echo $jobcategory['jcid']?>" <?php echo $empworkhistory['jcid2'] == $jobcategory['jcid'] ? "selected=\"selected\"" : ""; ?>><?php echo $jobcategory['jobcategory']; ?></option>
                    <?php }?>
                  </select>
                </div>
                <div class="col-md-3">
                  <select name="jobdep2" class="form-control select2" style="width: 100%!important;">
                    <option value="0">Select Department</option>
                    <?php foreach ($jobdeps as $jobdep) { ?>
                      <option value="<?php echo $jobdep['jdid']?>" <?php echo $empworkhistory['jdid2'] == $jobdep['jdid'] ? "selected=\"selected\"" : ""; ?>><?php echo $jobdep['jobdep']; ?></option>
                    <?php } ?>
                  </select>
                </div>
                <div class="col-md-3">
                  <select name="skillposition2" class="form-control select2" style="width: 100%!important;">
                    <option value="0">Select Highest Position</option>
                    <?php foreach ($skillpositions as $skillposition) {?>
                      <option value="<?php echo $skillposition['spid']?>" <?php echo $empworkhistory['spid2'] == $skillposition['spid'] ? "selected=\"selected\"" : ""; ?>><?php echo $skillposition['skillposition']; ?></option>
                    <?php };?>
                  </select>
                </div>
                <div class="col-md-3">
                  <select name="experience2" class="form-control select2" style="width: 100%!important;">
                    <option value="0">Select Length of Experience</option>
                    <?php foreach ($experiences as $experience) { ?>
                      <option value="<?php echo $experience['expid']?>" <?php echo $empworkhistory['expid2'] == $experience['expid'] ? "selected=\"selected\"" : ""; ?>><?php echo $experience['experience']; ?></option>
                    <?php } ?>
                  </select>
                </div>
              </div>
              <div class="col-md-12">
                <h3>Job 3</h3>
                <div class="col-md-3">
                  <select name="jobcategory3" class="form-control select2" style="width: 100%!important;">
                    <option value="0">Select Job Category</option>
                    <?php foreach ($jobcategories as $jobcategory) { ?>
                      <option value="<?php echo $jobcategory['jcid']?>" <?php echo $empworkhistory['jcid3'] == $jobcategory['jcid'] ? "selected=\"selected\"" : ""; ?>><?php echo $jobcategory['jobcategory']; ?></option>
                    <?php }?>
                  </select>
                </div>
                <div class="col-md-3">
                  <select name="jobdep3" class="form-control select2" style="width: 100%!important;">
                    <option value="0">Select Department</option>
                    <?php foreach ($jobdeps as $jobdep) { ?>
                      <option value="<?php echo $jobdep['jdid']?>" <?php echo $empworkhistory['jdid3'] == $jobdep['jdid'] ? "selected=\"selected\"" : ""; ?>><?php echo $jobdep['jobdep']; ?></option>
                    <?php } ?>
                  </select>
                </div>
                <div class="col-md-3">
                  <select name="skillposition3" class="form-control select2" style="width: 100%!important;">
                    <option value="0">Select Highest Position</option>
                    <?php foreach ($skillpositions as $skillposition) {?>
                      <option value="<?php echo $skillposition['spid']?>" <?php echo $empworkhistory['spid3'] == $skillposition['spid'] ? "selected=\"selected\"" : ""; ?>><?php echo $skillposition['skillposition']; ?></option>
                    <?php };?>
                  </select>
                </div>
                <div class="col-md-3">
                  <select name="experience3" class="form-control select2" style="width: 100%!important;">
                    <option value="0">Select Length of Experience</option>
                    <?php foreach ($experiences as $experience) { ?>
                      <option value="<?php echo $experience['expid']?>" <?php echo $empworkhistory['expid3'] == $experience['expid'] ? "selected=\"selected\"" : ""; ?>><?php echo $experience['experience']; ?></option>
                    <?php } ?>
                  </select>
                </div>
              </div>

              </div>
              <div class="col-md-12">
                <br><br>
                <button type="submit" class="btn btn-green">SAVE <i class="fa fa-spin"></i></button>
              </div>
            </div>
          </div>
        </form>
      </div>
      <!-- /.tab-pane -->
      <div class="tab-pane" id="empinfo_reworkhistory">
  <!--FORM RE WORK HISTORY-->
      <?php if(isset($_GET['empid']) && $numrowsreworkhistory > 0){ ?>
        <form method="post" accept-charset="utf-8" id="applicationreworkhistoryedit">
          <input type="hidden" name="sessionid" id="sessionid" class="form-control sessionid" value="<?php echo $application['sessionid'] ?>"/>
          <input type="hidden" name="employeeid" id="sessionid" class="form-control sessionid" value="<?php echo $_GET['empid'] ?>"/>
      <?php } elseif(isset($_GET['empid']) && $numrowsreworkhistory == 0){ ?>
        <form method="post" accept-charset="utf-8" id="applicationreworkhistoryedit_add">
          <input type="hidden" name="sessionid" id="sessionid" class="form-control sessionid" value="<?php echo $application['sessionid'] ?>"/>
          <input type="hidden" name="employeeid" id="sessionid" class="form-control sessionid" value="<?php echo $_GET['empid'] ?>"/>
      <?php } else { ?>
        <form method="post" accept-charset="utf-8" id="applicationreworkhistory">
          <input type="hidden" name="employeeid" id="employeeid" class="form-control employeeid" value=""/>
          <input type="hidden" name="sessionid" id="sessionid" class="form-control sessionid" value=""/>
      <?php } ?>
          <div class="panel panel-default">
            <div class="panel-body">
            <div class="panel-heading"><b><a id="refreshrecommendation"><i class="fa fa-refresh pull-right"></i></a></b></div>
              <div class="col-md-6">
                <label>Customer</label>
                <select name="customer" id="customer" class="form-control select2" style="width: 100%!important;">
                 <option value="0">Select Customer</option>
                 <?php foreach ($customers as $customer) { ?>
                 	<option value="<?php echo $customer['cid']?>" <?php echo $empreworkhistory['cid'] == $customer['cid'] ? "selected=\"selected\"" : ""; ?>><?php echo $customer['name']; ?></option>
                 <?php } ?>
               </select>
              </div><div class="col-md-12"></div>
              <div class="col-md-4">
                <label>Department</label>
          			<select name="department1" id="department1" class="select2 form-control" style="width: 100%!imporant;" onchange="document.getElementById('department').value=this.options[this.selectedIndex].text">
                 <option value="0">Select Department</option>
                 <option value="1" <?php echo $empreworkhistory['department'] === "Department 1" ? "selected=\"selected\"" : ""; ?>>Department 1</option>
                 <option value="2" <?php echo $empreworkhistory['department'] === "Department 2" ? "selected=\"selected\"" : ""; ?>>Department 2</option>
                 <option value="3" <?php echo $empreworkhistory['department'] === "Department 3" ? "selected=\"selected\"" : ""; ?>>Department 3</option>
               </select>
               <input type="hidden" name="department" id="department" class="form-control" value="">
              </div>
              <div class="col-md-4">
                <label>Job Title</label>
          			<select name="jobtitle" id="jobtitle" class="select2 form-control" style="width: 100%!imporant;">
                 <option value="0">Select Job Title</option>
                 <?php foreach ($jobsdropdown as $jobdropdown) { ?>
                  <option value="<?php echo $jobdropdown['jobid']?>" <?php echo $empreworkhistory['jobid'] == $jobdropdown['jobid'] ? "selected=\"selected\"" : ""; ?>><?php echo $jobdropdown['jobtitle']; ?></option>
                 <?php } ?>
                </select>
              </div>
              <div class="col-md-4">
                <label>Shift</label>
          			<select name="shift1" id="shift1" class="select2 form-control" style="width: 100%!imporant;" onchange="document.getElementById('shift').value=this.options[this.selectedIndex].text">
                 <option value="0">Select Shift</option>
                 <option value="1" <?php echo $empreworkhistory['shift'] === "Shift 1" ? "selected=\"selected\"" : ""; ?>>Shift 1</option>
                 <option value="2" <?php echo $empreworkhistory['shift'] === "Shift 1" ? "selected=\"selected\"" : ""; ?>>Shift 2</option>
                 <option value="3" <?php echo $empreworkhistory['shift'] === "Shift 1" ? "selected=\"selected\"" : ""; ?>>Shift 3</option>
               </select>
               <input type="hidden" name="shift" id="shift" class="form-control" value="">
              </div>
              <div class="col-md-4 nopad">
                 <label>Start Date</label><div class="col-md-12"></div>
                   <div class="col-md-2">
                      <input type="text" name="startdatemonth" id="input" class="form-control" placeholder="mm" value="<?php echo $arraystartdate[1];?>">
                   </div>
                   <div class="col-md-2">
                      <input type="text" name="startdateday" id="input" class="form-control" placeholder="dd" value="<?php echo $arraystartdate[2];?>">
                   </div>
                   <div class="col-md-2">
                      <input type="text" name="startdateyear" id="input" class="form-control" placeholder="yy" value="<?php echo $arraystartdate[0];?>">
                   </div>
              </div>
              <div class="col-md-4 nopad">
                 <label>End Date</label><div class="col-md-12"></div>
                   <div class="col-md-2">
                      <input type="text" name="enddatemonth" id="input" class="form-control" placeholder="mm" value="<?php echo $arrayenddate[1];?>">
                   </div>
                   <div class="col-md-2">
                      <input type="text" name="enddateday" id="input" class="form-control" placeholder="dd" value="<?php echo $arrayenddate[2];?>">
                   </div>
                   <div class="col-md-2">
                      <input type="text" name="enddateyear" id="input" class="form-control" placeholder="yy" value="<?php echo $arrayenddate[0];?>">
                   </div>
              </div>
              <div class="col-md-4">
                <label>Pay Rate</label>
                <input type="text" name="payrate" id="payrate" class="form-control" value="<?php echo $empreworkhistory['payrate']; ?>"/>
              </div>
              <div class="col-md-12">
                <label for="">Term Reason</label>
                <textarea name="termreason" class="form-control" style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"><?php echo $empreworkhistory['reasonleft']; ?></textarea>
              </div>


              <div class="col-md-12">
                <br><br>
                <button type="submit" class="btn btn-green">SAVE <i class="fa fa-spin"></i></button>
              </div>
            </div>
          </div>
        </form>
      </div>
      <!-- /.tab-pane -->
      <div class="tab-pane" id="empinfo_interview">
  <!--FORM INTERVIEW-->
        <form method="post" accept-charset="utf-8" id="interview">
          <input type="hidden" name="employeeid" id="employeeid" class="form-control employeeid" value=""/>
          <input type="hidden" name="sessionid" id="sessionid" class="form-control sessionid" value=""/>
          <div class="panel panel-default">
            <div class="panel-body">
            <div class="panel-heading"><b><a id="refreshrecommendation"><i class="fa fa-refresh pull-right"></i></a></b></div>
              <div class="col-md-6">
                <label>Customer</label>
                <select name="customer" id="customer" class="form-control select2" style="width: 100%!important;">
                 <option value="0">Select Customer</option>
                 <?php foreach ($customers as $customer) { ?>
                  <option value="<?php echo $customer['cid']?>"><?php echo $customer['name']; ?></option>
                 <?php } ?>
               </select>
              </div>
              <div class="col-md-4">
                <label>Department</label>
                <select name="department" id="department" class="select2 form-control" style="width: 100%!imporant;">
                 <option value="0" disabled="disabled">Select</option>
                 <option value="1">Department 1</option>
                 <option value="2">Department 2</option>
                 <option value="3">Department 3</option>
               </select>
              </div>
              <div class="col-md-4">
                <label>Job Title</label>
                <select name="jobtitle" id="jobtitle" class="select2 form-control" style="width: 100%!imporant;">
                 <option value="0" disabled="disabled">Select</option>
                 <option value="1">Job Title 1</option>
                 <option value="2">Job Title 2</option>
                 <option value="3">Job Title 3</option>
               </select>
              </div>
              <div class="col-md-4">
                <label>Shift</label>
                <select name="shift" id="shift" class="select2 form-control" style="width: 100%!imporant;">
                 <option value="0" disabled="disabled">Select</option>
                 <option value="1">Shift 1</option>
                 <option value="2">Shift 2</option>
                 <option value="3">Shift 3</option>
               </select>
              </div>
              <div class="col-md-4 nopad">
                 <label>Start Date</label><div class="col-md-12"></div>
                   <div class="col-md-2">
                      <input type="text" name="startdatemonth" id="input" class="form-control" placeholder="mm">
                   </div>
                   <div class="col-md-2">
                      <input type="text" name="startdateday" id="input" class="form-control" placeholder="dd">
                   </div>
                   <div class="col-md-2">
                      <input type="text" name="startdateyear" id="input" class="form-control" placeholder="yy">
                   </div>
              </div>
              <div class="col-md-4 nopad">
                 <label>End Date</label><div class="col-md-12"></div>
                   <div class="col-md-2">
                      <input type="text" name="enddatemonth" id="input" class="form-control" placeholder="mm">
                   </div>
                   <div class="col-md-2">
                      <input type="text" name="enddateday" id="input" class="form-control" placeholder="dd">
                   </div>
                   <div class="col-md-2">
                      <input type="text" name="enddateyear" id="input" class="form-control" placeholder="yy">
                   </div>
              </div>
              <div class="col-md-4">
                <label>What was the reason for employee's separation from this job?</label>
                <select name="shift" id="shift" class="select2 form-control" style="width: 100%!imporant;">
                 <option value="0" disabled="disabled">Select</option>
                 <option value="1">Reason 1</option>
                 <option value="2">Reason 2</option>
                 <option value="3">Reason 3</option>
               </select>
              </div>
              <div class="col-md-12">
                <label for="">Explanation</label>
                <textarea class="form-control" name="explanation" style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
              </div>
              <div class="col-md-6">
                <label>Is this employee eligible for rehire</label>
                <select name="shift" id="shift" class="select2 form-control" style="width: 100%!imporant;">
                 <option value="0" disabled="disabled">Select</option>
                 <option value="1">Yes</option>
                 <option value="2">No</option>
                 <option value="3">Possible</option>
               </select>
              </div>


              <div class="col-md-12">
                <br><br>
                <button type="submit" class="btn btn-green">SAVE <i class="fa fa-spin"></i></button>
              </div>
            </div>
          </div>
        </form>
      </div>
      <!-- /.tab-pane -->
      <div class="tab-pane" id="empinfo_files">
  <!--FORM FILES-->
        <form method="post" accept-charset="utf-8" id="files">
          <input type="hidden" name="employeeid" id="employeeid" class="form-control employeeid" value=""/>
          <input type="hidden" name="sessionid" id="sessionid" class="form-control sessionid" value=""/>
          <div class="panel panel-default">
            <div class="panel-body">
            <div class="panel-heading"><b><a id="refreshrecommendation"><i class="fa fa-refresh pull-right"></i></a></b></div>
              <div class="col-md-4">
                <!-- <div class="col-md-12">
                  <input type="text" id="uploadFile" placeholder="Choose File" class="form-control" value="" disabled="disabled"/>
                  <div class="fileUpload btn btn-primary" style="border-radius: 0px!important;">
                      <span>Upload</span>
                      <input id="uploadBtn" name="csvfile" type="file" class="upload" onchange="document.getElementById('uploadFile').value = this.value"/>
                  </div>
                </div> -->
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
              <div class="col-md-4">
                <label>Type</label>
                <select name="type" id="type" class="select2 form-control" style="width: 100%!imporant;">
                 <option value="0" disabled="disabled">Select Type</option>
                 <option value="1">Other</option>
                 <option value="2">Resume</option>
                </select>
              </div>
              <div class="col-md-12">
                <br><br>
                <button type="submit" class="btn btn-green">SAVE <i class="fa fa-spin"></i></button>
              </div>
            </div>
          </div>
        </form>
      </div>
      <!-- /.tab-pane -->
    </div>
    <!-- /.tab-content -->
  </div>
</div>