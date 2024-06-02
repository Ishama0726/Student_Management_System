<?php require_once('layout/header.php'); ?>

<main id="main" class="main">

	<div class="pagetitle">
		<h1>Dashboard</h1>
		<nav>
			<ol class="breadcrumb">
				<li class="breadcrumb-item"><a href="index.html">Home</a></li>
				<li class="breadcrumb-item active">Dashboard</li>
			</ol>
		</nav>
	</div>
	<!-- End Page Title -->

	<section class="section dashboard">
		<div class="row">
			<div class="col-xxl-4 col-md-4">
				<div class="card info-card card-type-a">
					<div class="card-body">
						<h5 class="card-title">Student <span>| Today</span></h5>
						<div class="d-flex align-items-center">
							<div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
								<i class="bi bi-people-fill"></i>
							</div>
							<div class="ps-3">
								<h6><?= $Dashboard['student'] ?></h6>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="col-xxl-4 col-md-4">
				<div class="card info-card card-type-a">
					<div class="card-body">
						<h5 class="card-title">Teacher<span>| Today</span></h5>
						<div class="d-flex align-items-center">
							<div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
								<i class="bi bi-people-fill"></i>
							</div>
							<div class="ps-3">
								<h6><?= $Dashboard['teacher'] ?></h6>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="col-xxl-4 col-md-4">
				<div class="card info-card card-type-c">
					<div class="card-body">
						<h5 class="card-title">Course Level Details <span>| Today</span></h5>
						<div class="d-flex align-items-center">
							<div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
								<i class="bi bi-cart-dash"></i>
							</div>
							<div class="ps-3">
								<h6><?= $Dashboard['level'] ?></h6>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-12">
				<div class="card">
					<div class="card-body">
						<h5 class="card-title" style="text-align: center;">View Course Details </h5>
						<br>
						<div style="overflow-x:auto;">
							<table class="table table-striped" style="text-align:center; white-space:nowrap;font-size: 15px; " id="dataTable" width="100%" cellspacing="0">
								<thead>
									<tr>
									<th scope="col">Level ID</th>
										<th scope="col">Level </th>
										<th scope="col">Admission Fee</th>
										<th scope="col">Placement Fee</th>
										<th scope="col">Term Fee</th>
										<th scope="col">Monthly Fee</th>
										<th scope="col">Exam Fee</th>
										<th scope="col">Class Day</th>
										<th scope="col">Class Time</th>
									</tr>
									</tr>
								</thead>
								<tfoot>
									<tr>
										<th scope="col">Level ID</th>
										<th scope="col">Level </th>
										<th scope="col">Admission Fee</th>
										<th scope="col">Placement Fee</th>
										<th scope="col">Term Fee</th>
										<th scope="col">Monthly Fee</th>
										<th scope="col">Exam Fee</th>
										<th scope="col">Class Day</th>
										<th scope="col">Class Time</th>
									</tr>
								</tfoot>
								<tbody>
									<?php
									
									foreach ($level_table as $value) {
										echo "<tr>";
										echo "<td>{$value->l_id}</td>";
										echo "<td>{$value->l_name}</td>";
										echo "<td>{$value->l_ad_fee}</td>";
										echo "<td>{$value->l_pla_fee}</td>";
										echo "<td>{$value->l_term_fee}</td>";
										echo "<td>{$value->l_mon_fee}</td>";
										echo "<td>{$value->l_exam_fee}</td>";
										echo "<td>{$value->l_cla_day}</td>";
										echo "<td>{$value->l_cla_time}</td>";
										echo "</tr>";
									}
									?>
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

