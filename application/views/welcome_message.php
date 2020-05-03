<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<link rel="icon" href="" type="image/gif" sizes="16x16">
	<title>Web Base Commuter Ticketing System</title>
	<!-- Tell the browser to be responsive to screen width -->
	<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
	<!-- Bootstrap 3.3.7 -->
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/bower_components/bootstrap/dist/css/bootstrap.min.css">
	<!-- Font Awesome -->
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/bower_components/font-awesome/css/font-awesome.min.css">
	<!-- Ionicons -->
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/bower_components/Ionicons/css/ionicons.min.css">
	<!-- Theme style -->
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/dist/css/AdminLTE.css">
	<!-- DataTables -->
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">
	<!-- bootstrap datepicker -->
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">
	<!-- AdminLTE Skins -->
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/dist/css/skins/_all-skins.min.css">
	<!-- Google Font -->
	<link rel="stylesheet"
		  href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
	<!-- jQuery 3 -->
	<script src="bower_components/jquery/dist/jquery.min.js"></script>
</head>
<body class="fixed sidebar-mini sidebar-mini-expand-feature skin-blue-light" style="height: auto; min-height: 100%;">
<!-- Site wrapper -->
<div class="wrapper">

	<!-- ================== Start Header ============================= -->
	<header class="main-header fixed">
		<!-- Logo -->
		<a href=""
		   class="logo">
			<!-- logo for regular state and mobile devices -->
			<span class="logo-lg"><b>WBCTS</b></span>
		</a>
		<!-- Header Navbar: style can be found in header.less -->
		<nav class="navbar navbar-static-top">
			<!-- Sidebar toggle button-->
			<a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</a>

			<div class="navbar-custom-menu">
				<ul class="nav navbar-nav">
					<li>
						<p class="navbar-text" style="color: #fff;" href="#" id="datetime"></p>
					</li>
					<li>
						<a href=""> <i class="fa fa-user-circle"
									   style="margin-right: 3px; vertical-align: bottom; font-size: 18px;"></i> </a>
					</li>
					<li>
						<a href="#" data-toggle="modal" data-target="#logout_modal"><i class="fa fa-sign-out"></i>
							Logout</a>
					</li>
				</ul>
			</div>
		</nav>
	</header>
	<!-- ================== End Header ============================= -->

	<!-- ================== Start Side Bar ============================ -->
	<aside class="main-sidebar">
		<!-- sidebar: style can be found in sidebar.less -->
		<section class="sidebar">
			<ul class="sidebar-menu">
				<li>
					<a href="">
						<i class="fa fa-tachometer"></i> &nbsp;&nbsp;<span>Dashboard</span>
						<span class="pull-right-container">
                                <i class="fa fa-angle-left pull-right"></i>
                        </span>
					</a>
				</li>
			</ul>
		</section>
		<!-- /.sidebar -->
	</aside>
	<!-- ================== End Side Bar =========================== -->

	<!-- ================== Start content =========================== -->
	<div class="content-wrapper">
		<!-- Main content -->
		<section class="content">
		</section>
	</div>
	<!-- ================== End content =========================== -->

	<!-- ================== Start Footer ============================ -->
	<footer class="main-footer">
		<strong>Web Based Commuter Ticketing System &copy; 2020</strong> All rights reserved.
	</footer>
	<!-- ================== End Footer ============================ -->

	<!-- logout modal-->
	<div class="modal fade" tabindex="-1" role="dialog" id="logout_modal">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h4 class="modal-title">Logout</h4>
				</div>
				<div class="modal-body">
					<span>Are you sure want to logout ?</span>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal"> No</button>
					<a href="" class="btn btn-primary"> Yes </a>
				</div>
			</div>
		</div>
	</div>
</div>

<!-- Bootstrap 3.3.7 -->
<script src="<?php echo base_url(); ?>assets/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- ChartJS -->
<script src="<?php echo base_url(); ?>assets/bower_components/chart.js/Chart.js"></script>
<!--Jquery Validator-->
<script src="<?php echo base_url(); ?>assets/js/jquery-validator.js"></script>
<!-- SlimScroll -->
<script src="<?php echo base_url(); ?>assets/bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="<?php echo base_url(); ?>assets/bower_components/fastclick/lib/fastclick.js"></script>
<!-- Bootstrap Notify -->
<script src="<?php echo base_url(); ?>assets/js/bootstrap-notify.min.js"></script>
<!-- DataTables -->
<script src="<?php echo base_url(); ?>assets/bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="<?php echo base_url(); ?>assets/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
<!-- bootstrap datepicker -->
<script src="<?php echo base_url(); ?>assets/bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url(); ?>assets/dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?php echo base_url(); ?>assets/dist/js/demo.js"></script>
<script>
	$(document).ready(function () {
		$('.sidebar-menu').tree();
	})

	$(function () {
		$('#datepicker').datepicker({
			autoclose: true,
			format: 'yyyy-mm-dd',
			changeMonth: true,
			changeYear: true,
			todayHighlight: true,
			orientation: 'bottom left',
		})
	});
</script>
<script>
	$(function () {
		$('.data_tables').DataTable({
			'paging': true,
			'lengthChange': true,
			'searching': true,
			'ordering': true,
			'info': true,
			'autoWidth': false,
			"pageLength": 10,
		})
	})
</script>
<script>
	// jquery validate plugin
	$.validate();
</script>
</body>
</html>

