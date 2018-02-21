<?php require_once APPPATH . '/views/inc/header.php'; ?>
<div class="container-fluid bg-light">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-lg-10">
				<?php if (!empty($error['db_error'])) : ?>
					<div class="card border-0 my-4 p-4">
						<div class="card-body">
							<ul>
								<?php
									echo '<div class="alert alert-danger">' . $error['db_error'] . '</div>';
								?>
							</ul>
						</div>
					</div>
				<?php endif; ?>
				<div class="card border-0 my-4 p-4">
					<div class="card-header bg-transparent">
						<h3>Signup</h3>
					</div>
					<div class="card-body">
						<form action="<?php echo ROOTPATH; ?>/users/signup" method="post">
							<div class="form-group row">
								<label for="name" class="col-sm-3 col-md-2 text-sm-right">Name</label>
								<div class="col-sm-9 col-md-10">
									<input type="text" id="name" class="form-control text-primary <?php echo (isset($error['name_error'])) ? 'is-invalid' : ''; ?>" name="name" placeholder="Enter Name" required autofocus="true" value="<?php echo $name; ?>">
									<div class="invalid-feedback">
										<?php echo (isset($error['name_error'])) ? $error['name_error'] : ''; ?>
									</div>
								</div>
							</div>
							<div class="form-group row">
								<label for="email" class="col-sm-3 col-md-2 text-sm-right">Email</label>
								<div class="col-sm-9 col-md-10">
									<input type="email" id="email" class="form-control text-primary <?php echo (isset($error['email_error'])) ? 'is-invalid' : ''; ?>" name="email" placeholder="Enter Email" required value="<?php echo $email; ?>">
									<div class="invalid-feedback">
										<?php echo (isset($error['email_error'])) ? $error['email_error'] : ''; ?>
									</div>
								</div>
							</div>
							<div class="form-group row">
								<label for="password" class="col-sm-3 col-md-2 text-sm-right">Password</label>
								<div class="col-sm-9 col-md-10">
									<input type="password" id="password" class="form-control text-primary <?php echo (isset($error['password_error'])) ? 'is-invalid' : ''; ?>" name="password" placeholder="Enter Password" required>
									<div class="invalid-feedback">
										<?php echo (isset($error['password_error'])) ? $error['password_error'] : ''; ?>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-12">
									<button type="submit" class="btn btn-primary btn-block" name="signup">Signup</button>
								</div>
							</div>
						</form>
					</div>
					<div class="card-footer bg-transparent row">
						<div class="col-12">
							<a class="btn btn-link" href="<?php echo ROOTPATH . '/users/login'; ?>">Already have an account? Login here</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<?php require_once APPPATH . '/views/inc/footer.php'; ?>