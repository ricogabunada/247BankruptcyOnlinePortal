
<div class = "col-md-12">
  <div class="box box-primary">
    <div class="box-header with-border"><h4>Employee Information</h4></div>
    <div class="box-body" id="applicantinfo">
      <div class = "row">
        <div class="col-md-12">
            <label class = "col-md-12">SSS #</label>
             <div class="col-md-2">
                <input type="text" name="sssno1" id="input" class="form-control" value="<?php echo substr(substr($application['ssno'], 0, -6), -3); ?>">
             </div>
             <div class="col-md-2">
                <input type="text" name="sssno2" id="input" class="form-control" value="<?php echo substr(substr($application['ssno'], 0, -3), -3); ?>">
             </div>
             <div class="col-md-2">
                <input type="text" name="sssno3" id="input" class="form-control" value="<?php echo substr($application['ssno'], -3); ?>">
             </div>
             <div class="col-md-2">
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
            <div class = "col-md-4">
              <a href='applicationedit?empid=<?php echo $_GET['empid'] ?>' class="btn btn-info">View Complete Profile</a>
            </div>
        </div>
        <div class ="col-md-12">
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
            <!-- <div class="col-md-3">
               <label>Employee ID</label>
               <input type="text" name="empid2" id="input" class="form-control" value="<?php echo $application['empid2']; ?>">
            </div> -->
        </div>
      </div>
      <br>
    </div>
  </div>
</div>

<div class="col-md-6">
  <div class="box box-primary">
    <div class="box-header with-border"><h4>Detailed Employee Information</h4></div>
    <div class = "box-body">
      <div class="row">
          <div class="col-md-12">
            <div class="form-group">
              <label class="col-sm-3 control-label">Address 1:</label>
              <div class="col-sm-9">
                <input type="text" class="form-control" id="inputEmail3" value="<?php echo $empmaster['eaddress1'];?>">
              </div>
            </div>
          </div>
          <div class="col-md-12">
            <br/>
            <div class="form-group">
              <label class="col-sm-3 control-label">Address 2:</label>
              <div class="col-sm-9">
                <input type="text" class="form-control" id="inputEmail3" value="<?php echo $empmaster['eaddress2'];?>">
              </div>
            </div>
          </div>
          <div class="col-md-12">
            <br/>
            <div class="form-group">
              <label class="col-sm-3 control-label">City:</label>
              <div class="col-sm-9">
                <input type="text" class="form-control" id="inputEmail3" value="<?php echo $empmaster['ecity'];?>">
              </div>
            </div>
          </div>
          <div class="col-md-12">
            <br/>
            <div class="form-group">
              <label class="col-sm-3 control-label">State:</label>
              <div class="col-sm-9">
                <input type="text" class="form-control" id="inputEmail3" value="<?php echo $empmaster['estate']; ?>">
              </div>
            </div>
          </div>
          <div class="col-md-12">
            <br/>
            <div class="form-group">
              <label class="col-sm-3 control-label">Zip Code:</label>
              <div class="col-sm-9">
                <input type="text" class="form-control" id="inputEmail3" value="<?php echo $empmaster['ezip'];?>">
              </div>
            </div>
          </div>
          <div class="col-md-12">
            <br/>
            <div class="form-group">
              <label class="col-sm-3 control-label">Desired Pay:</label>
              <div class="col-sm-9">
                <input type="text" class="form-control" id="inputEmail3" value="<?php echo $empdetail['desiredpay']; ?>">
              </div>
            </div>
          </div>
          <div class="col-md-12">
            <br/>
            <div class="form-group">
              <label class="col-sm-3 control-label">Shift:</label>
              <div class="col-sm-9">
                <input type="text" class="form-control" id="inputEmail3" value="<?php echo $empdetail['shift'] ?>">
              </div>
            </div>
          </div>
          <div class="col-md-12">
            <br/>
            <div class="form-group">
              <label class="col-sm-3 control-label">Work Status:</label>
              <div class="col-sm-9">
                <input type="text" class="form-control" id="inputEmail3" value=" <?php echo $empmaster['workstatus'] ?>">
              </div>
            </div>
          </div>
          <div class="col-md-12">
            <br/>
            <div class="form-group">
              <label class="col-sm-3 control-label">Sign Up Date:</label>
              <div class="col-sm-9">
                <input type="text" class="form-control" id="inputEmail3" value="<?php echo $application['dateapplied'] != 0 ? date('Y-m-d', $application['dateapplied']) : '' ?>">
              </div>
            </div>
          </div>
          <div class="col-md-12">
            <br/>
            <div class="form-group">
              <label class="col-sm-3 control-label">Ph :</label>
              <div class="col-sm-9">
                <input type="text" class="form-control" id="inputEmail3" value="<?php echo $application['ephone']; ?>">
              </div>
            </div>
          </div>
          <div class="col-md-12">
            <br/>
            <div class="form-group">
              <label class="col-sm-3 control-label">Alt. Ph :</label>
              <div class="col-sm-9">
                <input type="text" class="form-control" id="inputEmail3" value="<?php echo $application['altephone']; ?>">
              </div>
            </div>
          </div>
          <div class="col-md-12">
            <br/>
            <div class="form-group">
              <label class="col-sm-3 control-label">Email :</label>
              <div class="col-sm-9">
                <input type="text" class="form-control" id="inputEmail3" value="<?php echo $application['emailaddress']; ?>">
              </div>
            </div>
          </div>
          <div class="col-md-12">
            <br/>
            <div class="form-group">
              <label class="col-sm-3 control-label">DOB :</label>
              <div class="col-sm-9">
                <input type="text" class="form-control" id="inputEmail3" value="<?php echo date('Y-m-d', $application['unixdob'])?>">
              </div>
            </div>
          </div>
          <div class="col-md-12">
            <br/>
            <div class="form-group">
              <label class="col-sm-3 control-label">Status :</label>
              <div class="col-sm-9">
                <?php
                if ($application['estatus'] == 0) {
                  $empstatus = "Active";
                } elseif ($application['estatus'] == 1) {
                  $empstatus = "Inactive";
                } elseif ($application['estatus'] == 2) {
                  $empstatus = "Terminated";
                } elseif ($application['estatus'] == 3) {
                  $empstatus = "Passive";
                } elseif ($application['estatus'] == 4) {
                  $empstatus = "Applicant";
                }?>
                <input type="text" class="form-control" id="inputEmail3" value="<?php echo $empstatus?>">
              </div>
            </div>
          </div>
          <div class="col-md-12">
            <br/>
            <div class="form-group">
              <label class="col-sm-3 control-label">Accept. Pay :</label>
              <div class="col-sm-9">
                <input type="text" class="form-control" id="inputEmail3" value="<?php echo $empdetail['acceptablepay']?>">
              </div>
            </div>
          </div>
          <div class="col-md-12">
            <br/>
            <div class="form-group">
              <label class="col-sm-3 control-label">Over Time :</label>
              <div class="col-sm-9">
                <input type="text" class="form-control" id="inputEmail3" value="<?php echo $empdetail['overtime']?>">
              </div>
            </div>
          </div>
          <div class="col-md-12">
            <br/>
            <div class="form-group">
              <label class="col-sm-3 control-label">Exp Date :</label>
              <div class="col-sm-9">
                <input type="text" class="form-control" id="inputEmail3" value="<?php echo $empmaster['unixexpdate'] != 0 ? date('Y-m-d', $empmaster['unixexpdate']) : ''?>">
              </div>
            </div>
          </div>
      </div>
    </div>
  </div>
</div>

<div class = "col-md-6">
  <div class="box box-primary">
    <div class="box-header with-border"><h4>Employee PE Work History</h4></div>
    <div class="box-body">
      <table class = "table table-bordered table-condensed">
        <thead>
          <tr>
            <th>Customer</th>
            <th>Job</th>
            <th>Start Date</th>
            <th>End Date</th>
          </tr>
        </thead>
        <tbody>
        </tbody>
      </table>
    </div>
  </div>
</div>

<div class="col-md-6">
  <div class="box box-primary">
    <div class="box-header with-border"><h4>Employee Work History</h4></div>
    <div class="box-body">
      <table class = "table table-bordered table-condensed">
        <thead>
          <tr>
            <th>Customer</th>
            <th>Job</th>
            <th>Start Date</th>
            <th>End Date</th>
          </tr>
        </thead>
        <tbody>
        </tbody>
      </table>
    </div>
  </div>
</div>

<div class="col-md-6">
  <div class="box box-primary">
    <div class="box-header with-border"><h4>Interview</h4></div>
    <div class="box-body">
      <table class = "table table-bordered table-condensed">
        <thead>
          <tr>
            <th>Customer</th>
            <th>Position</th>
            <th>Shift</th>
            <th>Rate</th>
            <th>Date</th>
          </tr>
        </thead>
        <tbody>
        </tbody>
      </table>
    </div>
  </div>
</div>

<div class="col-md-6">
  <div class="box box-primary">
    <div class="box-header with-border"><h4>Comments</h4></div>
    <form method="post" accept-charset="utf-8" id="applicationcommentedit_inPartialView" class="ng-pristine ng-valid">
      <div class="box-body">
        <!--COMMENTS*************************************************************************************************************************************************************-->
        <input type="hidden" name="employeeid" id="employeeid" class="form-control employeeid" value="<?php echo $_GET['empid'] ?>">
        <input type="hidden" name="sessionid" id="sessionid" class="form-control sessionid" value="<?php echo session_id();?>"/>

        <textarea name="comments" id="comments" class="form-control"></textarea>
        <!-- <button type="submit" class="btn btn-violet">ADD COMMENT</button><br><br> -->
      </div>
      <div class="box-footer">
        <input type="submit" class="btn btn-violet" value="ADD COMMENT"><br><br>
      </div>
    </form>
  </div>
</div>

<div class="col-md-6">
  <div class="box box-primary">
    <div class="box-header with-border"><h4>Comments</h4></div>
      <div class="box-body">
        <!-- <table class="table table-bordered table-striped comments"> -->
        <table class="table table-bordered table-striped dataTable comments">
          <thead>
            <tr>
              <th width="10%"><h5>Date</h5></th>
              <th width="10%"><h5>Staff ID</h5></th>
              <th><h5>Comments</h5></th>
            </tr>
          </thead>
          <tbody>
            <?php
            foreach ($comments as $comment)
            {
              echo "<tr>
                      <td>".date('Y-m-d', $comment['comdate'])."</td>
                      <td>".$comment['staffid']."</td>
                      <td>".$comment['comments']."</td>
                    </tr>";
            }
            ?>
            <!-- <tr>
              <td>11/24/2015</td>
              <td>Lily P.</td>
              <td>Mauris tempor diam vel ligula tincidunt luctus est eu ligula ulla</td>
            </tr>
            <tr>
              <td>11/24/2015</td>
              <td>Lily P.</td>
              <td>Mauris tempor diam vel ligula tincidunt luctus est eu ligula ulla</td>
            </tr>
            <tr>
              <td>11/24/2015</td>
              <td>Lily P.</td>
              <td>Mauris tempor diam vel ligula tincidunt luctus est eu ligula ulla</td>
            </tr> -->
          </tbody>
        </table>
      </div>
      <div class="box-footer">
      </div>
  </div>
</div>

<!-- <div class="col-md-6">
  <div class="box box-primary">
    <div class="box-header with-border"><h4>Resume</h4></div>
    <div class="box-body">
      <table class = "table table-bordered table-condensed">
        <thead>
          <tr>
            <th>Date</th>
            <th>Title</th>
            <th>Type</th>
            <th>Download</th>
          </tr>
        </thead>
        <tbody>
        </tbody>
      </table>
    </div>
  </div>
</div> -->

<!-- <div class="col-md-6">
  <div class="box box-primary">
    <div class="box-header with-border"><h4>Previous Jobs</h4></div>
    <div class="box-body">
      <table class = "table table-bordered table-condensed">
        <thead>
          <tr>
            <th>Jobs</th>
            <th>Job Category</th>
            <th>Department</th>
            <th>Highest Position</th>
          </tr>
        </thead>
        <tbody>
        </tbody>
      </table>
    </div>
  </div>
</div> -->
