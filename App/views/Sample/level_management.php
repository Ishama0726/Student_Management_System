<?php require_once('layout/header.php'); ?>

<main id="main" class="main">

	<div class="pagetitle">
		<h1>Level List</h1>
		<nav>
			<ol class="breadcrumb">
				<li class="breadcrumb-item"><a href="index.html">Home</a></li>
				<li class="breadcrumb-item active">Level List</li>
			</ol>
		</nav>
	</div>
	<!-- End Page Title -->

	<section class="section dashboard">

		<div class="row">
			<div class="col-lg-12">
				<div class="card">
					<div class="card-body">
						<h5 class="card-title" style="text-align: center;">Level Details</h5>
						<br>
						<div style="overflow-x:auto;">
							<table class="table table-striped" style="text-align:center; white-space:nowrap;font-size: 15px; " id="dataTable" width="100%" cellspacing="0">
								<thead>
									<tr>
                                        <th scope="col">Id</th>
										<th scope="col">Course Level</th>
									    <th scope="col">Admission Fee</th>
										<th scope="col">Placement Fee</th>
										<th scope="col">Term Fee</th>
										<th scope="col">Monthly Fee</th>
										<th scope="col">Exam Fee</th>
										<th scope="col">Class Day</th>
                                        <th scope="col">Class Day</th>
									</tr>
								</thead>
								
								<tbody>
									<?php if (empty($level_management)) : ?>
										<tr>
											<td colspan="10">- No Data Available In Table -</td>
										</tr>
									<?php else : ?>
										<?php foreach ($level_management as $value) : ?>
											<tr>
												<td><?= $value->l_id?></td>
												<td><?= $value->l_name?></td>
												<td><?= $value->l_ad_fee ?></td>
												<td><?= $value->l_pla_fee ?></td>
                                                <td><?= $value->l_term_fee ?></td>
                                                <td><?= $value->l_mon_fee ?></td>
                                                <td><?= $value->l_exam_fee ?></td>
                                                <td><?= $value->l_cla_day ?></td>
												<td><?= $value->l_cla_time ?></td>
												<td>
													<a href="<?= BASE ?>Sample/update_level?l_id=<?= $value->l_id ?>"><i class="bi bi-pencil"></i></a> |
													<a onclick="return confirm('Are you sure you want to delete?')" href="<?= BASE ?>Sample/delete_student?Delete=<?= $value->id ?>"><i class="bi bi-trash3-fill"></i></a>
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
<?php require_once('layout/footer.php'); ?>


                                        