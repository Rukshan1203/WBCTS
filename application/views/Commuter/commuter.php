<!-- Main content -->
<section class="content">
	<div class="row">
		<div class="col-md-12">
			<div class="box">
				<div class="box-header">
					<h3 class="box-title">Commuter</h3>
					<div class="text-right">
						<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#add_commuter_modal">Add New Commuter</button>
					</div>
				</div>
				<div class="box-body">
					<table class="table table-bordered table-responsive">
						<tr>
							<th>Commuter Name</th>
							<th>Email</th>
							<th>NIC</th>
							<th>Mobile Number</th>
							<th>Street</th>
							<th>Street Two</th>
							<th>Cities</th>
							<th>Postal Code</th>
							<th>Districts</th>
							<th>Provinces</th>
							<th>Create Date</th>
							<th>Status</th>
						</tr>
						<?php foreach ($commuter as $commuter){ ?>
							<tr>
								<td><?php echo $commuter->commuter_name; ?></td>
								<td><?php echo $commuter->email; ?></td>
								<td><?php echo $commuter->nic; ?></td>
								<td><?php echo $commuter->mobile; ?></td>
								<td><?php echo $commuter->street; ?></td>
								<td><?php echo $commuter->street_two; ?></td>
								<td><?php echo $commuter->cities; ?></td>
								<td><?php echo $commuter->postal_code; ?></td>
								<td><?php echo $commuter->districts; ?></td>
								<td><?php echo $commuter->provinces; ?></td>
								<td><?php echo $commuter->create_date; ?></td>
								<td><?php echo $commuter->status; ?></td>
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
<div class="modal fade" tabindex="-1" role="dialog" id="add_commuter_modal">
	<div class="modal-dialog modal-lg" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<div class="modal-title"><b>Create New Commuter</b></div>
			</div>
			<form action="<?php echo base_url(); ?>commuter/commuter/add_commuter" method="post">
				<div class="modal-body">
					<div class="row">
						<div class="col-md-12">
							<div class="form-group">
								<label>Name</label>
								<input type="text" class="form-control" name="commuter_name" id="name" placeholder="Commuter Name" data-validation="required">
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
					<div class="row">
						<div class="col-md-6">
							<div class="form-group">
								<label>Street</label>
								<input type="text" class="form-control" name="street" id="street" placeholder="Street" data-validation="required">
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<label>Street Two</label>
								<input type="text" class="form-control" name="street_two" id="street_two" placeholder="Street Two" data-validation="required">
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-3">
							<div class="form-group">
								<label>City</label>
								<select class="form-control" name="cities" id="cities" data-validation="required">
									<option selected disabled>Select One</option>
									<?php foreach ($cities as $city) { ?>
									<option value="<?php echo $city->name_en; ?>"><?php echo $city->name_en; ?></option>
									<?php } ?>
								</select>
							</div>
						</div>
						<div class="col-md-3">
							<div class="form-group">
								<label>Postal Code</label>
								<input type="text" class="form-control" name="postal_code" id="postal_code" placeholder="Postal Code" readonly>
							</div>
						</div>
						<div class="col-md-3">
							<div class="form-group">
								<label>District</label>
								<select class="form-control" name="districts" id="districts" data-validation="required">
									<option selected disabled>Select One</option>
									<?php foreach ($districts as $district) { ?>
										<option value="<?php echo $district->name_en; ?>"><?php echo $district->name_en; ?></option>
									<?php } ?>
								</select>
							</div>
						</div>
						<div class="col-md-3">
							<div class="form-group">
								<label>Province</label>
								<select class="form-control" name="provinces" id="provinces" data-validation="required">
									<option selected disabled>Select One</option>
									<?php foreach ($provinces as $province) { ?>
										<option value="<?php echo $province->name_en; ?>"><?php echo $province->name_en; ?></option>
									<?php } ?>
								</select>
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

<script>
	// adding alert (mod changes)
	$(document).ready(function(){
		$('#cities').change(function () {
			let cities = $(this).val();
			$.ajax({
				type: 'get',
				url: base_url + 'commuter/commuter/get_postal_code',
				async: false,
				dataType: 'json',
				data: {'cities': cities},
				success: function(response){
					$('#postal_code').val(response[0]['postcode']);
				}
			})
		});
	});

</script>


