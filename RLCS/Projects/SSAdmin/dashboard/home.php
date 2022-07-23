<?php
session_start();

if (isset($_SESSION['username'])) {
  debug_to_console("username found");
}else{
  debug_to_console("No username found");
}

if (isset($_SESSION['userProfilePicture'])) {
  debug_to_console("Session Image found");
}else{
  debug_to_console("No Session Image found");
}

if (isset($_SESSION['userProfilePicture'])) {
  debug_to_console("Session Permissions found");
  if($_SESSION['userPermissions'] == 1){
    debug_to_console("Session Permissions 1");
  }else{
    debug_to_console($_SESSION['userPermissions']);
  }
}else{
  debug_to_console("No Session Image found");
}

function debug_to_console($data) {
  $output = $data;
  if (is_array($output))
      $output = implode(',', $output);
  echo "<script>console.log('Debug Objects: " . $output . "' );</script>";
}

?>

<!DOCTYPE html>
<html lang="en" class="loading">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description" content="Convex admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities.">
    <meta name="keywords" content="admin template, Convex admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="PIXINVENT">
    <title>SSAdmin Dashboard</title>
    <link rel="apple-touch-icon" sizes="60x60" href="app-assets/img/ico/apple-icon-60.png">
    <link rel="apple-touch-icon" sizes="76x76" href="app-assets/img/ico/apple-icon-76.png">
    <link rel="apple-touch-icon" sizes="120x120" href="app-assets/img/ico/apple-icon-120.png">
    <link rel="apple-touch-icon" sizes="152x152" href="app-assets/img/ico/apple-icon-152.png">
    <link rel="shortcut icon" type="image/x-icon" href="app-assets/img/ico/favicon.ico">
    <link rel="shortcut icon" type="image/png" href="app-assets/img/ico/favicon-32.png">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-touch-fullscreen" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="default">
    <link href="https://fonts.googleapis.com/css?family=Rubik:300,400,500,700,900%7CMontserrat:300,400,500,600,700,800,900" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="app-assets/fonts/feather/style.min.css">
    <link rel="stylesheet" type="text/css" href="app-assets/fonts/simple-line-icons/style.css">
    <link rel="stylesheet" type="text/css" href="app-assets/fonts/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="app-assets/vendors/css/perfect-scrollbar.min.css">
    <link rel="stylesheet" type="text/css" href="app-assets/vendors/css/prism.min.css">
    <link rel="stylesheet" type="text/css" href="app-assets/vendors/css/chartist.min.css">
    <link rel="stylesheet" type="text/css" href="../app-assets/css/main.css">
  </head>
  <body data-col="2-columns" class=" 2-columns ">
    <!-- ////////////////////////////////////////////////////////////////////////////-->
    <div class="wrapper">


      <div data-active-color="white" data-background-color="black" data-image="app-assets/img/sidebar-bg/background-sidebar.png" class="app-sidebar">
        <div class="sidebar-header">
          <div class="logo clearfix"><a href="index.html" class="logo-text float-left">
              <div class="logo-img"><img src="app-assets/img/logos/ssadmin-orange.png" alt="SSADMIN"/></div><span class="text align-middle">SSADMIN</span></a></div>
        </div>
        <div class="sidebar-content">
          <div class="nav-container">
            <ul id="main-menu-navigation" data-menu="menu-navigation" class="navigation navigation-main">
              <li class="active nav-item"><a href="dashboard-ecommerce.php"><i class="icon-home"></i><span data-i18n="" class="menu-title"><b>Dashboard</b></span></a>
              </li>   
              <li class="has-sub nav-item"><a href="#"><i class="icon-social-dropbox"></i><span data-i18n="" class="menu-title"><b>Toolbox</b></span></a>
                <ul class="menu-content">
                  <li><a href="chat.html" class="menu-item"><b>Roster Report</b></a>
                  </li>
                  <li><a href="chat.html" class="menu-item"><b>Ballchasing Checker</b></a>
                  </li>
                </ul>
              </li>
              <li class="nav-item"><a href="#"><i class="icon-users"></i><span data-i18n="" class="menu-title"><b>Players</b></span></a>
              </li> 
              <li class="nav-item"><a href="#"><i class="icon-grid"></i><span data-i18n="" class="menu-title"><b>Teams</b></span></a>
              </li> 
              <li class="has-sub nav-item"><a href="#"><i class="icon-social-dropbox"></i><span data-i18n="" class="menu-title"><b>Administration</b></span></a>
                <ul class="menu-content">
                  <li><a href="chat.html" class="menu-item"><b>Administrators</b></a>
                  </li>
                  <li><a href="chat.html" class="menu-item"><b>Calender</b></a>
                  </li>
                  <li><a href="chat.html" class="menu-item"><b>Documentation</b></a>
                  </li>
                  <li><a href="chat.html" class="menu-item"><b>Support</b></a>
                  </li>
                </ul>
              </li>
            </ul>
          </div>
        </div>
        <div class="sidebar-background"></div>
      </div>


      <nav class="navbar navbar-expand-lg navbar-light bg-faded">
        <div class="container-fluid">
          <div class="navbar-header"></div>
          <div class="navbar-container">
            <div id="navbarSupportedContent" class="collapse navbar-collapse">
              <ul class="navbar-nav">
                <li class="nav-item mt-2 d-none d-lg-block" > <?php echo "Hello, <b>" . $_SESSION['username']."</b>"; ?> </li>
                <li class="dropdown nav-item mr-0">
                  <a id="dropdownBasic3" href="#" data-toggle="dropdown" class="nav-link position-relative dropdown-user-link dropdown-toggle">
                    <span class="avatar avatar-online">
                      <img id="navbar-avatar" src = "data:image/png;base64,<?php echo base64_encode($_SESSION['userProfilePicture'])?>" alt="img" width="200" height="200" />
                    </span>
                    <p class="d-none">User Settings</p>
                  </a>
                  <div aria-labelledby="dropdownBasic3" class="dropdown-menu dropdown-menu-right">
                    <div class="arrow_box_right"><a href="user-profile-page.html" class="dropdown-item py-1">
                        <i class="ft-edit mr-2"></i><span>My Profile</span></a><a href="chat.html" class="dropdown-item py-1">
                          <?php 
                          if($_SESSION['userPermissions'] == 1){
                            echo "<i class='ft-pie-chart mr-2'></i><span>RM Panel</span></a><a href='#' class='dropdown-item py-1'>";
                          }
                          ?>
                        <i class="ft-settings mr-2"></i><span>Settings</span></a>
                      <div class="dropdown-divider"></div>
                      <a href="logout.php" class="dropdown-item"><i class="ft-power mr-2"></i><span>Logout</span></a>
                    </div>
                  </div>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </nav>

      <div class="main-panel">
        <div class="main-content">
          <div class="content-wrapper">
            <div class="container-fluid"><!--Statistics cards Starts-->
<div class="row">
	<div class="col-xl-4 col-lg-6 col-md-6 col-12">
		<div class="card bg-white">
			<div class="card-body">
				<div class="card-block pt-2 pb-0">
					<div class="media">
						<div class="media-body white text-left">
							<h4 class="font-medium-5 card-title mb-0">$5789</h4>
							<span class="grey darken-1">Total Visits</span>
						</div>
						<div class="media-right text-right">
							<i class="icon-cup font-large-1 primary"></i>
						</div>
					</div>
				</div>
				<div id="Widget-line-chart" class="height-150 lineChartWidget WidgetlineChart mb-2">
				</div>
			</div>
		</div>
	</div>
	<div class="col-xl-4 col-lg-6 col-md-6 col-12">
		<div class="card bg-white">
			<div class="card-body">
				<div class="card-block pt-2 pb-0">
					<div class="media">
						<div class="media-body white text-left">
							<h4 class="font-medium-5 card-title mb-0">$4567</h4>
							<span class="grey darken-1">Total Sales</span>
						</div>
						<div class="media-right text-right">
							<i class="icon-wallet font-large-1 warning"></i>
						</div>
					</div>
				</div>
				<div id="Widget-line-chart1" class="height-150 lineChartWidget WidgetlineChart1 mb-2">
				</div>

			</div>
		</div>
	</div>
	<div class="col-xl-4 col-lg-6 col-md-6 col-12">
		<div class="card bg-white">
			<div class="card-body">
				<div class="card-block pt-2 pb-0">
					<div class="media">
						<div class="media-body white text-left">
							<h4 class="font-medium-5 card-title mb-0">$9822</h4>
							<span class="grey darken-1">Total Value</span>
						</div>
						<div class="media-right text-right">
							<i class="icon-basket-loaded font-large-1 success"></i>
						</div>
					</div>
				</div>
				<div id="Widget-line-chart2" class="height-150 lineChartWidget WidgetlineChart2 mb-2">
				</div>
			</div>
		</div>
	</div>
</div>
<!--Statistics cards Ends-->

<!--Line with Area Chart 1 Starts-->
<div class="row match-height">
	<div class="col-xl-8 col-lg-12 col-12">
		<div class="card">
			<div class="card-header">
        		<div class="card-title-wrap bar-success">
					<h4 class="card-title">Product Valuation</h4>
				</div>
			</div>
			<div class="card-body">
				<div class="card-block">
					<div id="line-chart" class="height-300 lineChart lineChartShadow">						
					</div>
				</div>
			</div>
		</div>
	</div>
  <div class="col-xl-4 col-lg-12 col-12">
    <div class="card">
      <div class="card-header">
        <div class="card-title-wrap bar-danger">
          <h4 class="card-title">Todays Activity</h4>
        </div>
      </div>
      <div class="card-body">
        <div class="col-12 timeline-left" id="activity">
          <div class="timeline">
            <ul class="list-unstyled base-timeline activity-timeline">
              <li class="">
                <div class="timeline-icon bg-danger">
                  <i class="fa fa-tasks"></i>
                </div>
                <div class="act-time">Today</div>
                <div class="base-timeline-info">
                  <a href="#" class="text-uppercase text-danger">Task Added</a>
                </div>
                <small class="text-muted">
                                    25 mins ago
                                </small>
              </li>
              <li class="">
                <div class="timeline-icon bg-primary">
                  <i class="fa fa-handshake-o"></i>
                </div>
                <div class="act-time">Yesterday</div>
                <div class="base-timeline-info">
                  <a href="#" class="text-uppercase text-primary">Deal Added</a>
                </div>
                <small class="text-muted">
                                    23 hours ago
                                </small>
              </li>
              <li class="">
                <div class="timeline-icon bg-dark">
                  <i class="fa fa-tasks"></i>
                </div>
                <div class="act-time">09 March</div>
                <div class="base-timeline-info">
                  <a href="#" class="text-uppercase text-dark">Task Updated</a>
                </div>
                <small class="text-muted">
                                    15 days ago
                                </small>
              </li>
              <li class="">
                <div class="timeline-icon bg-warning">
                  <i class="fa fa-handshake-o"></i>
                </div>
                <div class="act-time">04 March</div>
                <div class="base-timeline-info">
                  <a href="#" class="text-uppercase text-warning">Started Task</a>
                </div>
                <small class="text-muted">
                                    20 days ago
                                </small>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!--Line with Area Chart 1 Ends-->

<div class="row match-height">
	<div class="col-xl-4 col-lg-12 col-12">
		<div class="card">
			<div class="card-header">
        		<div class="card-title-wrap bar-warning">
					<h4 class="card-title">Sales</h4>
				</div>
			</div>
			<div class="card-body">
				<p class="font-medium-2 text-muted text-center pb-2">Last 12 Months Sales</p>
				<div id="Stack-bar-chart" class="height-300 Stackbarchart mb-2">				
				</div>
			</div>
		</div>
	</div>
  <div class="col-12 col-md-8" id="recent-sales">
    <div class="card">
      <div class="card-header">
        <div class="card-title-wrap bar-primary">
          <h4 class="card-title">Recent Buyers</h4>
        </div>
        <a class="heading-elements-toggle">
					<i class="la la-ellipsis-v font-medium-3"></i>
				</a>
      </div>
      <div class="card-content mt-1">
        <div class="table-responsive">
          <table class="table table-hover table-xl mb-0" id="recent-orders">
            <thead>
              <tr>
                <th class="border-top-0">Product</th>
                <th class="border-top-0">Customers</th>
                <th class="border-top-0">Categories</th>
                <th class="border-top-0">Popularity</th>
                <th class="border-top-0">Amount</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td class="text-truncate">iPone X</td>
                <td class="text-truncate">Jim</td>
                <td>
                  <button class="btn btn-sm btn-outline-danger round mb-0" type="button">Mobile</button>
                </td>
                <td>
                  <div class="box-shadow-2 mt-1">
                  	<div class="progress" style="height: 8px;">
                    	<div class="progress-bar progress-bar-striped bg-danger" role="progressbar" aria-valuenow="85" aria-valuemin="20" aria-valuemax="100" style="width:85%"></div>
                    </div>
                  </div>
                </td>
                <td class="text-truncate">$ 1200.00</td>
              </tr>
              <tr>
                <td class="text-truncate">iPad</td>
                <td class="text-truncate">Jack</td>
                <td>
                  <button class="btn btn-sm btn-outline-success round mb-0" type="button">Tablet</button>
                </td>
                <td>
                  <div class="box-shadow-2 mt-1">
                    <div class="progress" style="height: 8px;">
                    	<div class="progress-bar progress-bar-striped bg-success" role="progressbar" aria-valuenow="75" aria-valuemin="20" aria-valuemax="100" style="width:75%"></div>
                    </div>
                  </div>
                </td>
                <td class="text-truncate">$ 1190.00</td>
              </tr>
              <tr>
                <td class="text-truncate">OnePlus</td>
                <td class="text-truncate">Dolly</td>
                <td>
                  <button class="btn btn-sm btn-outline-danger round mb-0" type="button">Mobile</button>
                </td>
                <td>
                  <div class="box-shadow-2 mt-1">
                    <div class="progress" style="height: 8px;">
                    	<div class="progress-bar progress-bar-striped bg-danger" role="progressbar" aria-valuenow="70" aria-valuemin="20" aria-valuemax="100" style="width:70%"></div>
                    </div>
                  </div>
                </td>
                <td class="text-truncate">$ 999.00</td>
              </tr>
              <tr>
                <td class="text-truncate">ZenPad</td>
                <td class="text-truncate">Sam</td>
                <td>
                  <button class="btn btn-sm btn-outline-success round mb-0" type="button">Tablet</button>
                </td>
                <td>
                  <div class="box-shadow-2 mt-1">
                    <div class="progress" style="height: 8px;">
                    	<div class="progress-bar progress-bar-striped bg-success" role="progressbar" aria-valuenow="60" aria-valuemin="20" aria-valuemax="100" style="width:60%"></div>
                    </div>
                  </div>
                </td>
                <td class="text-truncate">$ 1150.00</td>
              </tr>
              <tr>
                <td class="text-truncate">Pixel 2</td>
                <td class="text-truncate">John</td>
                <td>
                  <button class="btn btn-sm btn-outline-danger round mb-0" type="button">Mobile</button>
                </td>
                <td>
                  <div class="box-shadow-2 mt-1">
                    <div class="progress" style="height: 8px;">
                    	<div class="progress-bar progress-bar-striped bg-danger" role="progressbar" aria-valuenow="45" aria-valuemin="20" aria-valuemax="100" style="width:45%"></div>
                    </div>
                  </div>
                </td>
                <td class="text-truncate">$ 1180.00</td>
              </tr>
              <tr>
                <td class="text-truncate">Pixel 2</td>
                <td class="text-truncate">John</td>
                <td>
                  <button class="btn btn-sm btn-outline-danger round mb-0" type="button">Mobile</button>
                </td>
                <td>
                  <div class="box-shadow-2 mt-1">
                    <div class="progress" style="height: 8px;">
                    	<div class="progress-bar progress-bar-striped bg-danger" role="progressbar" aria-valuenow="45" aria-valuemin="20" aria-valuemax="100" style="width:45%"></div>
                    </div>
                  </div>
                </td>
                <td class="text-truncate">$ 1180.00</td>
              </tr>
              <tr>
                <td class="text-truncate">Pixel 1</td>
                <td class="text-truncate">Tony</td>
                <td>
                  <button class="btn btn-sm btn-outline-danger round mb-0" type="button">Mobile</button>
                </td>
                <td>
                  <div class="box-shadow-2 mt-1">
                    <div class="progress" style="height: 8px;">
                    	<div class="progress-bar progress-bar-striped bg-danger" role="progressbar" aria-valuenow="45" aria-valuemin="20" aria-valuemax="100" style="width:45%"></div>
                    </div>
                  </div>
                </td>
                <td class="text-truncate">$ 1080.00</td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="row match-height">
	<div class="col-xl-6 col-lg-12">
		<div class="card">
			<div class="card-header">
        		<div class="card-title-wrap bar-primary">
					<h4 class="card-title">Product Statistics</h4>
				</div>
			</div>
			<div class="card-body">

				<p class="font-medium-2 text-muted text-center">Hobbies</p>
				<div id="bar-chart" class="height-250 BarChartShadow BarChart">					
				</div>

				<div class="card-block">
					<div class="row">
						<div class="col text-center">
							<span class="gradient-pomegranate d-block rounded-circle mx-auto mb-2" style="width:10px; height:10px;"></span>
							<span class="font-large-1 d-block mb-2">48</span>
							<span>Sport</span>
						</div>
						<div class="col text-center">
							<span class="gradient-green-tea d-block rounded-circle mx-auto mb-2" style="width:10px; height:10px;"></span>
							<span class="font-large-1 d-block mb-2">9</span>
							<span>Music</span>
						</div>
						<div class="col text-center">
							<span class="gradient-blackberry d-block rounded-circle mx-auto mb-2" style="width:10px; height:10px;"></span>
							<span class="font-large-1 d-block mb-2">26</span>
							<span>Travel</span>
						</div>
						<div class="col text-center">
							<span class="gradient-ibiza-sunset d-block rounded-circle mx-auto mb-2" style="width:10px; height:10px;"></span>
							<span class="font-large-1 d-block mb-2">17</span>
							<span>News</span>
						</div>
			            <div class="col text-center">
			              <span class="gradient-back-to-earth d-block rounded-circle mx-auto mb-2" style="width:10px; height:10px;"></span>
			              <span class="font-large-1 d-block mb-2">52</span>
			              <span>Blog</span>
			            </div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="col-xl-6 col-lg-12">
		<div class="card">
			<div class="card-header">
        		<div class="card-title-wrap bar-warning">
					<h4 class="card-title">Project Stats</h4>
				</div>
			</div>
			<div class="card-body">

				<p class="font-medium-2 text-muted text-center">Project Tasks</p>
				<div id="donut-dashboard-chart" class="height-250 donut donutShadow">
				</div>

				<div class="card-block">
					<div class="row my-3">
						<div class="col">
			              	<span class="mb-1 text-muted d-block">23% - Started</span>
			              	<div class="progress" style="height: 8px;">
			                	<div class="progress-bar gradient-blackberry" role="progressbar" style="width: 70%;" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
			              	</div>
			            </div>
			            <div class="col">
			              	<span class="mb-1 text-muted d-block">35% - In Progress</span>
			              	<div class="progress" style="height: 8px;">
			                	<div class="progress-bar gradient-pomegranate" role="progressbar" style="width: 80%;" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
			              	</div>
			            </div>
			            <div class="col">
			              	<span class="mb-1 text-muted d-block">14% - Done</span>
			              	<div class="progress" style="height: 8px;">
			                	<div class="progress-bar gradient-green-tea" role="progressbar" style="width: 60%;" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
			              	</div>
			            </div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
            </div>
          </div>
        </div>

        <footer class="footer footer-static footer-light">
          <p class="clearfix text-muted text-center px-2"><span>Copyright  &copy; 2018 <a href="https://themeforest.net/user/pixinvent/portfolio?ref=pixinvent" id="pixinventLink" target="_blank" class="text-bold-800 primary darken-2">PIXINVENT </a>, All rights reserved. </span></p>
        </footer>

      </div>
    </div>
    <!--////////////////////////////////////////////////////////////////////////////-->

    <aside id="notification-sidebar" class="notification-sidebar d-none d-sm-none d-md-block"><a class="notification-sidebar-close"><i class="ft-x font-medium-3"></i></a>
      <div class="side-nav notification-sidebar-content">
        <div class="row">
          <div class="col-12 mt-1">
            <ul class="nav nav-tabs">
              <li class="nav-item"><a id="base-tab1" data-toggle="tab" aria-controls="base-tab1" href="#activity-tab" aria-expanded="true" class="nav-link active"><strong>Activity</strong></a></li>
              <li class="nav-item"><a id="base-tab2" data-toggle="tab" aria-controls="base-tab2" href="#settings-tab" aria-expanded="false" class="nav-link"><strong>Settings</strong></a></li>
            </ul>
            <div class="tab-content">
              <div id="activity-tab" role="tabpanel" aria-expanded="true" aria-labelledby="base-tab1" class="tab-pane active">
                <div id="activity-timeline" class="col-12 timeline-left">
                  <h6 class="mt-1 mb-3 text-bold-400">RECENT ACTIVITY</h6>
                  <div class="timeline">
                    <ul class="list-unstyled base-timeline activity-timeline ml-0">
                      <li>
                        <div class="timeline-icon bg-danger"><i class="ft-shopping-cart"></i></div>
                        <div class="base-timeline-info"><a href="#" class="text-uppercase text-danger">Update</a><span class="d-block">Jim Doe Purchased new equipments for zonal office.</span></div><small class="text-muted">just now</small>
                      </li>
                      <li>
                        <div class="timeline-icon bg-primary"><i class="fa fa-plane"></i></div>
                        <div class="base-timeline-info"><a href="#" class="text-uppercase text-primary">Added</a><span class="d-block">Your Next flight for USA will be on 15th August 2015.</span></div><small class="text-muted">25 hours ago</small>
                      </li>
                      <li>
                        <div class="timeline-icon bg-dark"><i class="ft-mic"></i></div>
                        <div class="base-timeline-info"><a href="#" class="text-uppercase text-dark">Assined</a><span class="d-block">Natalya Parker Send you a voice mail for next conference.</span></div><small class="text-muted">15 days ago</small>
                      </li>
                      <li>
                        <div class="timeline-icon bg-warning"><i class="ft-map-pin"></i></div>
                        <div class="base-timeline-info"><a href="#" class="text-uppercase text-warning">New</a><span class="d-block">Jessy Jay open a new store at S.G Road.</span></div><small class="text-muted">20 days ago</small>
                      </li>
                      <li>
                        <div class="timeline-icon bg-primary"><i class="ft-inbox"></i></div>
                        <div class="base-timeline-info"><a href="#" class="text-uppercase text-primary">Added</a><span class="d-block">voice mail for conference.</span></div><small class="text-muted">2 Week Ago</small>
                      </li>
                      <li>
                        <div class="timeline-icon bg-danger"><i class="ft-mic"></i></div>
                        <div class="base-timeline-info"><a href="#" class="text-uppercase text-danger">Update</a><span class="d-block">Natalya Parker Jessy Jay open a new store at S.G Road.</span></div><small class="text-muted">1 Month Ago</small>
                      </li>
                      <li>
                        <div class="timeline-icon bg-dark"><i class="ft-inbox"></i></div>
                        <div class="base-timeline-info"><a href="#" class="text-uppercase text-dark">Assined</a><span class="d-block">Natalya Parker Send you a voice mail for Updated conference.</span></div><small class="text-muted">1 Month ago</small>
                      </li>
                      <li>
                        <div class="timeline-icon bg-warning"><i class="ft-map-pin"></i></div>
                        <div class="base-timeline-info"><a href="#" class="text-uppercase text-warning">New</a><span class="d-block">Started New project with Jessie Lee.</span></div><small class="text-muted">2 Month ago</small>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
              <div id="settings-tab" aria-labelledby="base-tab2" class="tab-pane">
                <div id="settings" class="col-12">
                  <h6 class="mt-1 mb-3 text-bold-400">GENERAL SETTINGS</h6>
                  <ul class="list-unstyled">
                    <li>
                      <div class="togglebutton">
                        <div class="switch"><span class="text-bold-500">Notifications</span>
                          <div class="float-right">
                            <div class="form-group">
                              <div class="custom-control custom-checkbox mb-2 mr-sm-2 mb-sm-0">
                                <input id="notifications1" checked="checked" type="checkbox" class="custom-control-input">
                                <label for="notifications1" class="custom-control-label"></label>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <p>Use checkboxes when looking for yes or no answers.</p>
                    </li>
                    <li>
                      <div class="togglebutton">
                        <div class="switch"><span class="text-bold-500">Show recent activity</span>
                          <div class="float-right">
                            <div class="form-group">
                              <div class="custom-control custom-checkbox mb-2 mr-sm-2 mb-sm-0">
                                <input id="recent-activity1" checked="checked" type="checkbox" class="custom-control-input">
                                <label for="recent-activity1" class="custom-control-label"></label>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <p>The for attribute is necessary to bind our custom checkbox with the input.</p>
                    </li>
                    <li>
                      <div class="togglebutton">
                        <div class="switch"><span class="text-bold-500">Notifications</span>
                          <div class="float-right">
                            <div class="form-group">
                              <div class="custom-control custom-checkbox mb-2 mr-sm-2 mb-sm-0">
                                <input id="notifications2" type="checkbox" class="custom-control-input">
                                <label for="notifications2" class="custom-control-label"></label>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <p>Use checkboxes when looking for yes or no answers.</p>
                    </li>
                    <li>
                      <div class="togglebutton">
                        <div class="switch"><span class="text-bold-500">Show recent activity</span>
                          <div class="float-right">
                            <div class="form-group">
                              <div class="custom-control custom-checkbox mb-2 mr-sm-2 mb-sm-0">
                                <input id="recent-activity2" type="checkbox" class="custom-control-input">
                                <label for="recent-activity2" class="custom-control-label"></label>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <p>The for attribute is necessary to bind our custom checkbox with the input.</p>
                    </li>
                    <li>
                      <div class="togglebutton">
                        <div class="switch"><span class="text-bold-500">Show your emails</span>
                          <div class="float-right">
                            <div class="form-group">
                              <div class="custom-control custom-checkbox mb-2 mr-sm-2 mb-sm-0">
                                <input id="show-emails" type="checkbox" class="custom-control-input">
                                <label for="show-emails" class="custom-control-label"></label>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <p>Use checkboxes when looking for yes or no answers.</p>
                    </li>
                    <li>
                      <div class="togglebutton">
                        <div class="switch"><span class="text-bold-500">Show Task statistics</span>
                          <div class="float-right">
                            <div class="form-group">
                              <div class="custom-control custom-checkbox mb-2 mr-sm-2 mb-sm-0">
                                <input id="show-stats" checked="checked" type="checkbox" class="custom-control-input">
                                <label for="show-stats" class="custom-control-label"></label>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <p>The for attribute is necessary to bind our custom checkbox with the input.</p>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </aside>
    <!-- BEGIN VENDOR JS-->
    <script src="app-assets/vendors/js/core/jquery-3.3.1.min.js"></script>
    <script src="app-assets/vendors/js/core/popper.min.js"></script>
    <script src="app-assets/vendors/js/core/bootstrap.min.js"></script>
    <script src="app-assets/vendors/js/perfect-scrollbar.jquery.min.js"></script>
    <script src="app-assets/vendors/js/prism.min.js"></script>
    <script src="app-assets/vendors/js/jquery.matchHeight-min.js"></script>
    <script src="app-assets/vendors/js/screenfull.min.js"></script>
    <script src="app-assets/vendors/js/pace/pace.min.js"></script>
    <!-- BEGIN VENDOR JS-->
    <!-- BEGIN PAGE VENDOR JS-->
    <script src="app-assets/vendors/js/chartist.min.js"></script>
    <!-- END PAGE VENDOR JS-->
    <!-- BEGIN CONVEX JS-->
    <script src="app-assets/js/app-sidebar.js"></script>
    <script src="app-assets/js/notification-sidebar.js"></script>
    <!-- END CONVEX JS-->
    <!-- BEGIN PAGE LEVEL JS-->
    <script src="app-assets/js/dashboard-ecommerce.js"></script>
    <!-- END PAGE LEVEL JS-->
  </body>
</html>
