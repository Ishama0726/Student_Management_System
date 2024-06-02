<?php require_once('layout/header.php'); ?>

<main id="main" class="main">

	<div class="pagetitle">
		<h1>Update Teacher</h1>
		<nav>
			<ol class="breadcrumb">
				<li class="breadcrumb-item"><a href="index.html">Home</a></li>
				<li class="breadcrumb-item active">Update Teacher</li>
			</ol>
		</nav>
	</div>
	<!-- End Page Title -->

	<section class="section dashboard">

		<div class="row">
			<div class="col-lg-12">
				<div class="card">
					<div class="card-body">
						<h5 class="card-title" style="text-align: center;">Update Teacher Details</h5>
						<br>
						<div style="overflow-x:auto;">
							<table class="table table-striped" style="text-align:center; white-space:nowrap;font-size: 15px; " id="dataTable" width="100%" cellspacing="0">
								<thead>
									<tr>
										<th scope="col">Teacher Id</th>
										<th scope="col">Teacher Name</th>
										<th scope="col">NIC</th>
										<th scope="col">Gender</th>
										<th scope="col">Date of Birth</th>
										<th scope="col">Age</th>
										<th scope="col">Address</th>
										<th scope="col">Phone Number</th>
										<th scope="col">Email</th>
									</tr>
								</thead>
								<tbody>
									<?php if (empty($teacher_table)) : ?>
										<tr>
											<td colspan="9">- No Data Available In Table -</td>
										</tr>
									<?php else : ?>
										<?php foreach ($teacher_table as $value) : ?>
											<tr>
												<td><?= $value->t_id ?></td>
												<td><?= $value->t_name ?></td>
												<td><?= $value->t_nic ?></td>
												<td><?= $value->t_gender ?></td>
                                                <td><?= $value->t_dob ?></td>
                                                <td><?= $value->t_age ?></td>
                                                <td><?= $value->t_address ?></td>
                                                <td><?= $value->t_phone_number ?></td>
												<td><?= $value->t_email ?></td>
												<td>
												<td>
													<a onclick="return confirm('Are you sure you want to delete?')" href="<?= BASE ?>Sample/delete_teacher?Delete=<?= $value->t_id ?>"><i class="bi bi-trash3-fill"></i></a>
												</td>
											</tr>
										<?php endforeach; ?>
									<?php endif; ?>
								</tbody>
							</table>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
</main>
<!-- End #main -->
<script>
	$(document).ready(function() {
		$('#dataTable').DataTable();
	});
</script>

<script>
	$(document).ready(function() {
		$('#dataTable').Tabledit({
			deleteButton: false,
			editButton: false,
			columns: {
				identifier: [0,'t_id'],
				editable: [
					[1, 't_name'],
					[2, 't_nic']
                    [3, 't_gender'],
					[4, 't_dob']
                    [5, 't_age'],
					[6, 't_address']
                    [8, 't_phone_number'],
					[9, 't_email']
                    
					
				]
			},
			hideIdentifier: false,
			url: '<?=BASE?>/Sample/manage_teacher'
		});
	});
</script>

<?php require_once('layout/footer.php'); ?>