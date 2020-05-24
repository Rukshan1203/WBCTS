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
				<a href="<?php  ?>" class="btn btn-primary"> Yes </a>
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


