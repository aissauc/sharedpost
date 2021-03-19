<?php require(APP_ROOT . '/views/inc/header.php'); ?>
	<a href="<?= URL_ROOT ?>/posts" class="btn btn-light"><i class="fa fa-backward"></i> Back</a>
	<div class="card card-body bg-light mt-5">
			<h2>Create new post</h2>
			<p>Create a post with form </p>
			<form action="<?= URL_ROOT?>/posts/add" method="POST">
				<div class="form-group">
					<label for="title">Email: <sup>*</sup></label>
					<input type="text" name="title" id="title" class="form-control form-control-lg <?= (!empty($data['title_err'])) ? 'is-invalid' : '' ?>">
					<span class="invalid-feedback"><?= $data['title_err'] ?></span>
				</div>
				<div class="form-group">
					<label for="body">body: <sup>*</sup></label>
					<textarea type="text" name="body" id="body" class="form-control form-control-lg <?= (!empty($data['body_err'])) ? 'is-invalid' : '' ?>"></textarea>
					<span class="invalid-feedback"><?= $data['body_err'] ?></span>
				</div>
				<input type="submit" class="btn btn-success" value="Submit">
			</form>
		</div>
	</div>
</div>

<?php require(APP_ROOT . '/views/inc/footer.php'); ?>