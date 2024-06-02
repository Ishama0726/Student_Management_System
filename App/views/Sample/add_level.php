<?php require_once('layout/header.php'); ?>
<main id="main" class="main">
	<div class="pagetitle">
		<h1>Add Level</h1>
		<nav>
			<ol class="breadcrumb">
				<li class="breadcrumb-item"><a href="index.html">Home</a></li>
				<li class="breadcrumb-item active">Add Level</li>
			</ol>
		</nav>
	</div>
	<!-- End Page Title -->
	<section class="section dashboard">
		<div class="row justify-content-center">
			<div class="col-lg-6">
				<div class="card">
					<div class="card-body">
						<h5 class="card-title">New Level</h5>
						<!-- Vertical Form -->
						<form class="row g-3" method="POST">

							<div class="col-12">
								<label for="inputLevelId" class="form-label">Course Level Id</label>
								<input type="Text" class="form-control" name="inputLevelId" id="inputCourseLevelId">
							</div>
							<div class="col-12">
								<label for="inputLevelName" class="form-label">Course Level </label>
								<input type="Text" class="form-control" name="inputLevelName" id="inputLevelName" >
							</div>
                            <div class="col-12">
								<label for="inputLevelAdmission" class="form-label"> Admission Fee</label>
								<input type="number" class="form-control" name="inputLevelAdmission" id="inputLevelAdmission" >
							</div>
							<div class="col-12">
								<label for="inputLevelPlacement" class="form-label">Placement Fee</label>
								<input type="number" class="form-control" name="inputLevelPlacement" id="inputLevelPlacement" >
							</div>
							<div class="col-12">
								<label for="inputLevelTerm" class="form-label">Term Fee</label>
								<input type="number" class="form-control" name="inputLevelTerm" id="inputLevelTerm" >
							</div>
							<div class="col-12">
								<label for="inputLevelMonthly" class="form-label">Monthly Fee</label>
								<input type="number" class="form-control" name="inputLevelMonthly" id="inputLevelMonthly" >
							</div>
                            <div class="col-12">
								<label for="inputLevelExam" class="form-label">Exam Fee</label>
								<input type="number" class="form-control" name="inputLevelExam" id="inputLevelExam" >
							</div>
							<div class="col-12">
								<label for="inputLevelClasDay" class="form-label">Class Day</label>
								<input type="text" class="form-control" name="inputLevelClassDay" id="inputLevelDay" >
							</div>
							<div class="col-12">
								<label for="inputLevelTime" class="form-label">Class Time</label>
								<input type="test" class="form-control" name="inputLevelTime" id="inputLevelTime " >
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