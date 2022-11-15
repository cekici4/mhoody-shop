<?php 
session_start();

if (empty($_SESSION['email'])) {
    Header("Location:/webshop/admin/views/user_login.php");
}else{
    require($_SERVER['DOCUMENT_ROOT'] . '/webshop/admin/database.php');
}

include 'header.php';




?>

<body>
<div class="container">
<div class="row">
		<div class="col-12">
			<!-- Page title -->
			<div class="my-5">
				
				<hr>
			</div>
			<!-- Form START -->
			<form class="file-upload">
				<div class="row mb-5 gx-5">
					<!-- Contact detail -->
					<div class="col-xxl-8 mb-5 mb-xxl-0">
						<div class="bg-secondary-soft px-4 py-5 rounded">
							<div class="row g-3">
								<h4 class="mb-4 mt-0">Contact detail</h4>
								<!-- First Name -->
								<div class="col-md-6">
									<label class="form-label">First Name *</label>
									<input type="text" class="form-control" placeholder="" aria-label="First name" value="">
								</div>
								<!-- Last name -->
								<div class="col-md-6">
									<label class="form-label">Last Name *</label>
									<input type="text" class="form-control" placeholder="" aria-label="Last name" value="">
								</div>
								
								<!-- Mobile number -->
								<div class="col-md-6">
									<label class="form-label">Mobile number *</label>
									<input type="text" class="form-control" placeholder="" aria-label="Phone number" value="">
								</div>
								<!-- Email -->
								<div class="col-md-6">
									<label for="inputEmail4" class="form-label">Email *</label>
									<input type="email" class="form-control" id="inputEmail4" value="<?php print_r($_SESSION['email']); ?>">
								</div>
								
								
							</div> <!-- Row END -->
						</div>
					</div>
					
						</div>
					</div>

					<!-- change password -->
					<div class="col-xxl-6">
						<div class="bg-secondary-soft px-4 py-5 rounded">
							<div class="row g-3">
								<h4 class="my-4">Change Password</h4>
								<!-- Old password -->
								<div class="col-md-6">
									<label for="exampleInputPassword1" class="form-label">Old password *</label>
									<input type="password" class="form-control" id="exampleInputPassword1">
								</div>
								<!-- New password -->
								<div class="col-md-6">
									<label for="exampleInputPassword2" class="form-label">New password *</label>
									<input type="password" class="form-control" id="exampleInputPassword2">
								</div>
								<!-- Confirm password -->
								<div class="col-md-12">
									<label for="exampleInputPassword3" class="form-label">Confirm Password *</label>
									<input type="password" class="form-control" id="exampleInputPassword3">
								</div>
							</div>
						</div>
					</div>
				</div> <!-- Row END -->
				<!-- button -->
				<div class="gap-3 d-md-flex justify-content-md-end text-center">
					<button type="button" class="btn btn-danger btn-lg">Delete profile</button>
					<button type="button" class="btn btn-primary btn-lg">Update profile</button>
				</div>
			</form> <!-- Form END -->
		</div>
	</div>
	</div>
</body>
<?php
        include($_SERVER['DOCUMENT_ROOT'] . '/webshop/components/footer.html');
?>