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
		<div class="row justify-content-center">
			<div class="col-lg-6">
				<div class="card">
					<div class="card-body">
						<h5 class="card-title">Update Teacher</h5>
						<!-- Vertical Form -->
						<form class="row g-3" method="POST">
							<div class="col-12">
								<label for="inputId" class="form-label">Teacher ID</label>
								<input type="hidden" name="inputId" value="<?= $teacher_management-> t_id?>">
								<input type="text" class="form-control" id="inputId" disabled value="<?= $teacher_management-> t_id ?>">
							</div>
							<div class="col-12">
								<label for="inputName" class="form-label">Teacher Name</label>
								<input type="Text" class="form-control" id="inputName" value="<?= $teacher_management-> t_name ?>">
							</div>
							<div class="col-12">
								<label for="inputNic" class="form-label">NIC </label>
								<input type="number" class="form-control" name="inputNic" id="inputNic" value="<?= $teacher_management-> t_nic ?>">
							</div>
                            <div class="col-12">
								<label for="inputGender" class="form-label">Gender </label>
								<input type="Text" class="form-control" name="inputGender" id="inputGender" value="<?= $teacher_management-> t_gender ?>">
							</div>
							<div class="col-12">
								<label for="inputDateOfBirth" class="form-label">Date of Birth</label>
								<input type="date" class="form-control" name="inputDateOfBirth" id="inputDateOfBirth" value="<?= $teacher_management->t_dob ?>">
							</div>
                            <div class="col-12">
								<label for="inputAge" class="form-label">Age</label>
								<input type="number" class="form-control" name="inputAge" id="inputAge" value="<?= $teacher_management->t_age ?>">
							</div>
                            <div class="col-12">
								<label for="inputAddress" class="form-label">Address </label>
								<input type="text" class="form-control" name="inputAddress" id="inputAddress"  placeholder="1234 Main St" value="<?= $teacher_management->t_address ?>">
							</div>
                            <div class="col-12">
								<label for="inputPhoneNumber" class="form-label">Phone Number</label>
								<input type="number" class="form-control" name="inputPhoneNumber" id="inputPhoneNumber" value="<?= $teacher_management->t_phone_number ?>">
							</div>
                            <div class="col-12">
								<label for="inputEmail" class="form-label">Email</label>
								<input type="email" class="form-control" name="inputEmail" id="inputEmail" value="<?= $teacher_management->t_email ?>">
							</div>
							
                           
							<div class="text-center">
								<button type="submit" class="btn btn-primary">Submit</button>
								<button type="reset" class="btn btn-secondary">Reset</button>
							</div>
						</form>
						<!-- Vertical Form -->
					</div>
				</div>
			</div>
		</div>
	</section>
</main>
<!-- End #main -->
<?php require_once('layout/footer.php'); ?>