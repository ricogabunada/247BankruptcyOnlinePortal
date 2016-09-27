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
							<!--menu: status-->
							<li class="first">
								<a href="dashboard">
									<img src="img/icons/dashboard.png" class="fa" alt="Image"><span>Status</span>
								</a>
							</li>
							<!--end menu: status-->

							<!--menu: get started-->
							<li class="first">
								<a href="clientlist">
									<img src="img/icons/applicant.png" class="fa" alt="Image"><span>Get Started</span>
									<i class="fa fa-angle-left pull-right"></i>
								</a>	
								<ul class="treeview-menu">
									<li><a href="#"><i class="fa fa-circle-o"></i> Signed Contract</a></li>
									<li><a href="#"><i class="fa fa-circle-o"></i> Upload Documents</a></li>
									<li><a href="#"><i class="fa fa-circle-o"></i> Pull Credit Report</a></li>
									<li><a href="#"><i class="fa fa-circle-o"></i> Bankruptcy Questionnaire</a></li>
									<li><a href="#"><i class="fa fa-circle-o"></i> Credit Counseling Courses</a></li>
								</ul>
							</li>
							<!--end menu: get started-->

							<!--menu: education-->
							<li class="first">
								<a href="roles">
									<img src="img/icons/employeeskillsreport.png" class="fa" alt="Image"><span>Education</span>
									<i class="fa fa-angle-left pull-right"></i>
								</a>

								<ul class="treeview-menu">
									<li><a href="#"><i class="fa fa-circle-o"></i> Videos</a></li>
									<li><a href="#"><i class="fa fa-circle-o"></i> Understand C7</a></li>
									<li><a href="#"><i class="fa fa-circle-o"></i> Understand C13</a></li>
									<li><a href="#"><i class="fa fa-circle-o"></i> Role of Trustee</a></li>
									<li><a href="#"><i class="fa fa-circle-o"></i> What Happens When You File</a></li>
									<li><a href="#"><i class="fa fa-circle-o"></i> Garnishment</a></li>
									<li><a href="#"><i class="fa fa-circle-o"></i> FAQ</a></li>
								</ul>
							</li>
							<!--end menu: education-->

							<!--menu: bankruptcy timeline-->
							<li class="first">
								<a href="users">
									<img src="img/icons/applicant.png" class="fa" alt="Image"><span>Bankruptcy Timeline</span>
									<i class="fa fa-angle-left pull-right"></i>
								</a>
								
								<ul class="treeview-menu">
									<li><a href="#"><i class="fa fa-circle-o"></i> Chapter 7 Timeline</a></li>
									<li><a href="#"><i class="fa fa-circle-o"></i> Chapter 13 Timeline</a></li>
								</ul>
							</li>
							<!--end menu: bankruptcy timeline-->

							<!--menu: contact us-->
							<li class="first">
								<a href="assigncustom">
									<img src="img/icons/reports.png" class="fa" alt="Image"><span>Contact Us</span>
								</a>
							</li>
							<!--end menu: contact us-->

							<?php } ?>

							<!--menu: logout-->
							<li class="last"><a href="logout"><i class="fa fa-sign-out"></i>  <span>Logout</span></a></li>
							<!--end menu: logout-->

						</ul>

        </section>

        <!-- /.sidebar -->

      </aside>

