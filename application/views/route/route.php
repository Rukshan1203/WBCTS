<!-- Main content -->
<section class="content">
	<div class="row">
		<div class="col-md-12">
			<div class="box">
				<div class="box-header">
					<h3 class="box-title">Route</h3>
					<div class="text-right">
						<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#add_route_modal">Add New Route</button>
					</div>
				</div>
				<div class="box-body">
					<table class="table table table-bordered">
						<tr>
							<th>Route Name</th>
							<th>Route Number</th>
							<th>Origin</th>
							<th>Route Type</th>
							<th>Create Date</th>
							<th>Status</th>
						</tr>
					</table>
				</div>
				<div class="box-footer"></div>
			</div>

		</div>
	</div>
</section>

<!--add new route modal-->
 <div class="modal fade" tabindex="-1" role="dialog" id="add_route_modal">
	<div class="modal-dialog modal-lg" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<div class="modal-title"><b>Create New Route</b></div>
			</div>
			<form action="<?php echo base_url(); ?>route/route/add_route" method="post">
				<div class="modal-body">
					<div class="row">
						<div class="col-md-12">
							<div class="form-group">
								<label>Name</label>
								<input type="text" class="form-control" name="route_name" id="name" placeholder="Route Name" data-validation="required">
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
							<div class="form-group">
								<label>Email</label>
								<input type="email" class="form-control" name="email" id="email" placeholder="Email" data-validation="email">
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-6">
							<div class="form-group">
								<label>Mobile Number</label>
								<input type="number" class="form-control" name="mobile" id="mobile" placeholder="Mobile Number" pattern="[0-9]{9,10}">
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<label>ID</label>
								<input type="text" class="form-control" name="nic" id="nic" placeholder="NIC" pattern="[0-9]{9}[x|X|v|V]|[0-9]{11}[x|X|v|V]" title="Contain 10 or 12 character" required>
							</div>
						</div>
					</div>
				</div>

				<div class="modal-footer">
					<button type="reset" class="btn btn-default">Reset</button>
					<button type="submit" class="btn btn-primary">Create</button>
				</div>
			</form>
		</div>
	</div>
</div>


