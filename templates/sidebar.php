     <!-- Left side column. contains the logo and sidebar -->

      <aside class="main-sidebar">

        <!-- sidebar: style can be found in sidebar.less -->

        <section class="sidebar">

          <!-- sidebar menu: : style can be found in sidebar.less -->

          <ul class="sidebar-menu">

            <!--Menu for Admin-->

            <?php if($_SESSION['userData']['data']['groupid'] == 0){?>

            <li class="first"><a href="dashboard"><img src="img/icons/dashboard.png" class="fa" alt="Image">  <span>DASHBOARD</span></a></li>

            <li class="first"><a href="clientlist"><img src="img/icons/applicant.png" class="fa" alt="Image">  <span>Client List</span></a></li>

            <li class="first"><a href="roles"><img src="img/icons/employeeskillsreport.png" class="fa" alt="Image">  <span>Roles</span></a></li>

            <li class="first"><a href="users"><img src="img/icons/applicant.png" class="fa" alt="Image">  <span>Users</span></a></li>

            <li class="first"><a href="assigncustom"><img src="img/icons/reports.png" class="fa" alt="Image">  <span>Assign Custom</span></a></li>

            <?php } else {?>

            <!--Menu for Clients-->

            <li class="first"><a href="profie"><img src="img/icons/applicant.png" class="fa" alt="Image">  <span>Edit Profile</span></a></li>

            <li class="first"><a href="#"><img src="img/icons/admin.png" class="fa" alt="Image">  <span>Edit Password</span></a></li>

            <li class="first"><a href="#"><img src="img/icons/customer.png" class="fa" alt="Image">  <span>Upload Files</span></a></li>
            <?php } ?>

            <li class="last"><a href="logout"><i class="fa fa-sign-out"></i>  <span>Logout</span></a></li>

          </ul>

        </section>

        <!-- /.sidebar -->

      </aside>

