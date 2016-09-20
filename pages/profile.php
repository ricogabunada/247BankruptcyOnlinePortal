 <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <div class="panel panel-default">
          <div class="panel-heading">
            <h4>Profile  <a id="canceledit"><i class="fa fa-times pull-right hidden"></i></a>  <a id="editbtnprofile"><i class="fa fa-pencil pull-right"></i></a></h4>
          </div>
          <div class="panel-body">
            <form method="post" accept-charset="utf-8" id="editprofile">
              <div class="col-md-4">
                <input type="hidden" name="id" id="id" class="form-control" value="<?php echo $id;?>">
                <label>First Name:</label>
                <input type="text" name="firstname" id="firstname" class="form-control" value="<?php echo $firstname;?>" disabled>
              </div>
              <div class="col-md-4">
                <label>Last Name:</label>
                <input type="text" name="lastname" id="lastname" class="form-control" value="<?php echo $lastname;?>" disabled>
              </div>
              <div class="col-md-4">
                <label>Username:</label>
                <input type="text" name="Username" id="Username" class="form-control" value="<?php echo $username;?>" disabled>
              </div>
              <div class="col-md-4">
                <label>Email:</label>
                <input type="text" name="Email" id="Email" class="form-control" value="<?php echo $email;?>" disabled>
              </div>
              <div class="col-md-12">
                <button type="submit" class="btn btn-green hidden">Save <i class="fa fa-refresh fa-spin" style="display:none"></i></button>
              </div>
              </div>
            </div>
          </form>
        </div>
      </div><!-- /.content-wrapper -->