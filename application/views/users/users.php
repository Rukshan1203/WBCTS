<!-- Main content -->
<section class="content">
	<div class="row">
		<div class="col-md-12">
			<div class="box">
				<div class="box-header">
					<h3 class="box-title">Users</h3>
					<div class="text-right">
						<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#add_user_modal">Add New User</button>
					</div>
				</div>
				<div class="box-body">
					<table class="table table-condensed">
						<tr>
							<th>User Name</th>
							<th>Email</th>
							<th>Create Date</th>
							<th>Status</th>
						</tr>
						<?php foreach ($users as $user){ ?>
							<tr>
								<td><?php echo $user->first_name; ?></td>
								<td><?php echo $user->email; ?></td>
								<td><?php echo $user->create_date; ?></td>
								<td><?php echo $user->status; ?></td>
							</tr>
						<?php } ?>
					</table>
				</div>
				<div class="box-footer"></div>
			</div>
		</div>
	</div>

</section>

<!--add new user modal-->
<div class="modal fade" tabindex="-1" role="dialog" id="add_user_modal">
	<div class="modal-dialog modal-lg" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<div class="modal-title"><b>Create New User</b></div>
			</div>
			<form action="<?php echo base_url(); ?>users/users/add_user" method="post">
				<div class="modal-body">
					<div class="row">
						<div class="col-md-6">
							<div class="form-group">
								<label>First Name</label>
								<input type="text" class="form-control" name="first_name" id="first_name" placeholder="First Name" data-validation="required">
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<label>Last Name</label>
								<input type="text" class="form-control" name="last_name" id="last_name" placeholder="Last Name" data-validation="required">
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
				</div>

				<div class="modal-footer">
					<button type="reset" class="btn btn-default">Reset</button>
					<button type="submit" class="btn btn-primary">Create</button>
				</div>
			</form>
		</div>
	</div>
</div>
