<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $page ?> - <?= CONFIG['app_name'] ?></title>
    <meta name="description" content="">
    <meta name="keywords" content="">
    <link rel="icon" href="<?= BASE ?>assets/img/favicon.png">
    <link rel="apple-touch-icon" href="<?= BASE ?>assets/img/apple-touch-icon.png">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
    <link href="<?= BASE ?>assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?= BASE ?>assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="<?= BASE ?>assets/vendor/datatables/dataTables.min.css" rel="stylesheet">
    <link href="<?= BASE ?>assets/css/style.css" rel="stylesheet">

	<!-- Vendor JS Files -->
	<script src="<?= BASE ?>assets/vendor/jquery/jquery.min.js"></script>
	<script src="<?= BASE ?>assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
	<script src="<?= BASE ?>assets/vendor/chart.js/Chart.min.js"></script>
	<script src="<?= BASE ?>assets/vendor/datatables/jquery.dataTables.min.js"></script>
	<script src="<?= BASE ?>assets/vendor/datatables/dataTables.min.js"></script>
	<script src="<?= BASE ?>assets/vendor/datatables/jquery.tabledit.js"></script>

</head>

<body>
	<header id="header" class="header fixed-top d-flex align-items-center">
		<div class="d-flex align-items-center justify-content-between">
			<a href="index.html" class="logo d-flex align-items-center">
				<img src="<?= BASE ?>assets/img/logo.png" alt="">
				<span class="d-none d-lg-block"><?= CONFIG['app_name'] ?></span>
			</a>
			<i class="bi bi-list toggle-sidebar-btn"></i>
		</div><!-- End Logo -->
		<nav class="header-nav ms-auto">
			<ul class="d-flex align-items-center">
				<li class="nav-item dropdown pe-3">
					<a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
						<img src="<?= BASE ?>assets/img/profile-img.jpg" alt="Profile" class="rounded-circle">
						<span class="d-none d-md-block dropdown-toggle ps-2"><?= $User ?></span>
					</a><!-- End Profile Iamge Icon -->
					<ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
						<li class="dropdown-header">
							<h6><?= $User ?></h6>
							<span>Web Designer</span>
						</li>
						<li>
							<hr class="dropdown-divider">
						</li>
						<li>
							<a class="dropdown-item d-flex align-items-center" href="<?= BASE ?>Auth/login">
								<i class="bi bi-box-arrow-right"></i>
								<span>Sign Out</span>
							</a>
						</li>
					</ul><!-- End Profile Dropdown Items -->
				</li><!-- End Profile Nav -->
			</ul>
		</nav><!-- End Icons Navigation -->
	</header><!-- End Header -->
	<!-- ======= Sidebar ======= -->
	<aside id="sidebar" class="sidebar">
		<ul class="sidebar-nav" id="sidebar-nav1">
			<li class="nav-item">
				<a class="nav-link <?= ($page == "Dashboard") ? "" : "collapsed"; ?>" href="<?= BASE ?>Sample/index">
					<i class="bi bi-grid"></i>
					<span>Dashboard</span>
				</a>
			</li><!-- End Dashboard Nav -->
			<li class="nav-heading">Student </li> 
			<li class="nav-item">
				<a class="nav-link <?= ($pagegroup != "UserManagement2") ? "collapsed" : ""; ?>" data-bs-target="#usermanagement-nav1" data-bs-toggle="collapse" href="#">
					<i class="bi bi-menu-button-wide"></i>
					<span>Student Details</span><i class="bi bi-chevron-down ms-auto"></i>
				</a>
				<ul id="usermanagement-nav1" class="nav nav-content collapse <?= ($pagegroup == "UserManagement2") ? "show" : ""; ?>" data-bs-parent="#sidebar-nav">
					<li>
						<a href="<?= BASE ?>Sample/add_student" class="<?= ($page == "Add Student") ? "active" : ""; ?>">
							<i class="bi bi-circle"></i><span>Add Student</span>
						</a>
					</li>
					<li>
						<a href="<?= BASE ?>Sample/student_management" class="<?= ($page == "Student List") ? "active" : ""; ?>">
							<i class="bi bi-circle"></i><span>Student Details</span>
						</a>
					</li>
					<li>
						<a href="<?= BASE ?>Sample/manage_student" class="<?= ($page == "Update Student") ? "active" : ""; ?>">
							<i class="bi bi-circle"></i><span>Update Student</span>
						</a>
					</li>
					<li>
						<a href="<?= BASE ?>Sample/delete_student" class="<?= ($page == "Delete Student") ? "active" : ""; ?>">
							<i class="bi bi-circle"></i><span>Delete Student</span>
						</a>
					</li>
				</ul>
			</li><!-- End Components Nav -->

			<li class="nav-heading">Teacher</li>
			<li class="nav-item">
				<a class="nav-link <?= ($pagegroup != "UserManagement1") ? "collapsed" : ""; ?>" data-bs-target="#usermanagement-nav2" data-bs-toggle="collapse" href="#">
					<i class="bi bi-menu-button-wide"></i>
					<span>Teacher Details</span><i class="bi bi-chevron-down ms-auto"></i>
				</a>
				<ul id="usermanagement-nav2" class="nav nav-content collapse <?= ($pagegroup == "UserManagement1") ? "show" : ""; ?>" data-bs-parent="#sidebar-nav">
					<li>
						<a href="<?= BASE ?>Sample/add_teacher" class="<?= ($page == "Add Teacher") ? "active" : ""; ?>">
							<i class="bi bi-circle"></i><span>Add Teacher</span>
						</a>
					</li>
					<li>
						<a href="<?= BASE ?>Sample/teacher_management" class="<?= ($page == "Teacher List") ? "active" : ""; ?>">
							<i class="bi bi-circle"></i><span>Teacher Details</span>
						</a>
					</li>
					<li>
						<a href="<?= BASE ?>Sample/manage_teacher" class="<?= ($page == "Update Teacher") ? "active" : ""; ?>">
							<i class="bi bi-circle"></i><span>Update Teacher </span>
						</a>
					</li>
					<li>
						<a href="<?= BASE ?>Sample/delete_teacher" class="<?= ($page == "Delete Teacher") ? "active" : ""; ?>">
							<i class="bi bi-circle"></i><span>Delete Teacher</span>
						</a>
					</li>
				</ul>
			</li><!-- End Components Nav -->

			<li class="nav-heading">Course Level </li>
			<li class="nav-item">
				<a class="nav-link <?= ($pagegroup != "UserManagement") ? "collapsed" : ""; ?>" data-bs-target="#usermanagement-nav3" data-bs-toggle="collapse" href="#">
					<i class="bi bi-menu-button-wide"></i>
					<span>Course Level</span><i class="bi bi-chevron-down ms-auto"></i>
				</a>
				<ul id="usermanagement-nav3" class="nav nav-content collapse <?= ($pagegroup == "UserManagement") ? "show" : ""; ?>" data-bs-parent="#sidebar-nav">
					<li>
						<a href="<?= BASE ?>Sample/add_level" class="<?= ($page == "Add Level") ? "active" : ""; ?>">
							<i class="bi bi-circle"></i><span>Add Course Level</span>
						</a>
					</li>
					<li>
						<a href="<?= BASE ?>Sample/level_management" class="<?= ($page == "Level List") ? "active" : ""; ?>">
							<i class="bi bi-circle"></i><span>Course Level Details</span>
						</a>
					</li>
					<li>
						<a href="<?= BASE ?>Sample/update_level" class="<?= ($page == "Update Level") ? "active" : ""; ?>">
							<i class="bi bi-circle"></i><span>Update Course Level </span>
						</a>
					</li>
					<li>
						<a href="<?= BASE ?>Sample/delete_teacher" class="<?= ($page == "Delete Teacher") ? "active" : ""; ?>">
							<i class="bi bi-circle"></i><span>Delete Course Level</span>
						</a>
					</li>
				</ul>
			</li><!-- End Components Nav -->

			
			<li class="nav-heading">Authentication</li>
			<li class="nav-item">
				<a class="nav-link <?= ($page == "Login") ? "" : "collapsed"; ?>" href="<?= BASE ?>Auth/logout">
					<i class="bi bi-box-arrow-in-right"></i>
					<span>Log Out</span>
				</a>
			</li><!-- End Login Page Nav -->
		</ul>
	</aside><!-- End Sidebar-->