<?php require_once('layout/header.php'); ?>
<main id="main" class="main">
	<div class="pagetitle">
		<h1>Update Student</h1>
		<nav>
			<ol class="breadcrumb">
				<li class="breadcrumb-item"><a href="index.html">Home</a></li>
				<li class="breadcrumb-item active">Student List</li>
			</ol>
		</nav>
	</div>
	<!-- End Page Title -->
	<section class="section dashboard">
		<div class="row justify-content-center">
			<div class="col-lg-6">
				<div class="card">
					<div class="card-body">
						<h5 class="card-title">Update Student</h5>
						<!-- Vertical Form -->
						<form class="row g-3" method="POST">
							<div class="col-12">
								<label for="inputId" class="form-label">Student ID</label>
								<input type="hidden" name="inputId" value="<?= $update_student->id ?>">
								<input type="text" class="form-control" id="inputId" disabled value="<?= $update_student->id?>">
							</div>
					    	<div class="col-12">
								<label for="inputName" class="form-label">Name</label>
								<input type="Text" class="form-control" name="inputName" id="inputName" value="<?= $update_student->name ?>">
							</div>
							<div class="col-12">
								<label for="inputDateOfBirth" class="form-label">Date Of Birth</label>
								<input type="date" class="form-control" name="inputDateOfBirth" id="inputDateOfBirth" value="<?= $update_student->dob ?>">
							</div>
							<div class="col-12">
								<label for="inputGender" class="form-label">Gender</label>
								<input type="Text" class="form-control" name="inputGender" id="inputGender" value="<?= $update_student->gender ?>">
							</div>
							<div class="col-12">
								<label for="inputEmail" class="form-label">Email</label>
								<input type="email" class="form-control" name="inputEmail" id="inputEmail" value="<?= $update_student->email ?>">
							</div>
                            <div class="col-12">
								<label for="inputAddress" class="form-label">Address</label>
								<input type="Text" class="form-control" name="inputAddress" id="inputAddress"  placeholder="1234 Main St" value="<?= $update_student->address ?>">
							</div>
                            
                            <div class="col-12">
								<label for="inputPhoneNumber" class="form-label">Phone Number</label>
								<input type="Tel" class="form-control" name="inputPhoneNumber" id="inputPhoneNumber" value="<?= $update_student->phone_number ?>">
							</div>
							<div class="col-12">
								<label for="inputSchoolPresent" class="form-label">School Present</label>
								<input type="Text" class="form-control" name="inputSchoolPresent" id="inputSchoolPresent" value="<?= $update_student->school_present ?>">
							</div>
							<div class="col-12">
								<label for="inputGrade" class="form-label">Grade</label>
								<input type="Text" class="form-control" name="inputGrade" id="inputGrade" value="<?= $update_student->grade ?>">
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