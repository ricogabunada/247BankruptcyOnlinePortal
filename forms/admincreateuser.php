<div class="panel panel-default">
  <div class="panel-heading">Create New User</div>
  <div class="panel-body">
    <div class="col-md-4">
      <label>First Name:</label>
      <input type="text" name="firstname" id="firstname" class="form-control">
    </div>
    <div class="col-md-4">
      <label>Last Name:</label>
      <input type="text" name="lastname" id="lastname" class="form-control">
    </div>
    <input type="hidden" name="name" id="name" class="form-control" value="">
    <div class="col-md-4">
      <label>Username:</label>
      <input type="text" name="Username" id="Username" class="form-control">
    </div>
    <div class="col-md-4">
      <label>Email:</label>
      <input type="text" name="Email" id="Email" class="form-control">
    </div>
    <div class="col-md-4">
      <label>Password:</label>
      <input type="password" name="Password" id="Password" class="form-control">
    </div>
    <div class="col-md-4">
      <label>Confirm (re-enter) Password :</label>
      <input type="password" name="Password2" id="Password2" class="form-control">
    </div>
    <div class="col-md-4">
      <label>User Role :</label>
      <select name="groupid" id="groupid" class="form-control" onchange="document.getElementById('type').value=this.options[this.selectedIndex].value">
        <option value="0">Select Role</option>
        <option value="1">Administrator</option>
      </select>
      <input type="hidden" name="type" id="type" class="form-control" value="">
    </div>
    </div>
    <div class="panel-footer">
      <button type="submit" class="btn btn-green">CONFIRM <i class="fa fa-refresh fa-spin" style="display:none"></i></button>
      <a class="btn btn-gray cancel-btn">CANCEL </a>
    </div>
  </div>