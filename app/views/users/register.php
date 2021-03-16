<?php require(APP_ROOT . '/views/inc/header.php'); ?>

<div class="row">
	<div class="col-md-6 mx-auto">
		<div class="card card-body bg-light mt-5">
			<h2>Create an account</h2>
			<p>Please fill out this form to register with us</p>
			<form action="<?= URL_ROOT?>/users/register" method="POST">
				<div class="form-group">
					<label for="name">Name: <sup>*</sup></label>
					<input type="text" name="name" id="name" class="form-control form-control-lg <?= (!empty($data['name_err'])) ? 'is-invalid' : '' ?>">
					<span class="invalid-feedback"><?= $data['name_err'] ?></span>
				</div>
				<div class="form-group">
					<label for="email">Email: <sup>*</sup></label>
					<input type="text" name="email" id="email" class="form-control form-control-lg <?= (!empty($data['email_err'])) ? 'is-invalid' : '' ?>">
					<span class="invalid-feedback"><?= $data['email_err'] ?></span>
				</div>
				<div class="form-group">
					<label for="password">Password: <sup>*</sup></label>
					<input type="password" name="password" id="password" class="form-control form-control-lg <?= (!empty($data['password_err'])) ? 'is-invalid' : '' ?>">
					<span class="invalid-feedback"><?= $data['password_err'] ?></span>
				</div>
				<div class="form-group">
					<label for="confrim_password">Confirm password: <sup>*</sup></label>
					<input type="password" name="confirm_password" id="confrim_password" class="form-control form-control-lg <?= (!empty($data['confirm_password_err'])) ? 'is-invalid' : '' ?>">
					<span class="invalid-feedback"><?= $data['confirm_password_err'] ?></span>
				</div>
				<div class="row">
					<div class="col">
						<input type="submit" value="Regsiter" class="btn btn-success btn-block">
					</div>
					<div class="col">
						<a href="<?= URL_ROOT; ?>/users/login" class="btn btn-light btn-block">Hava an account ? Login</a>
					</div>

				</div>
			</form>
		</div>
	</div>
</div>

<?php require(APP_ROOT . '/views/inc/footer.php'); ?>