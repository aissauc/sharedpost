<?php require(APP_ROOT . '/views/inc/header.php'); ?>

	<a href="<?= URL_ROOT ?>/posts" class="btn btn-light"><i class="fa fa-backward"></i> Back</a>

	<h1 class="text-center"><?= $data['post']->title; ?></h1>
	<div class="bg-secondary text-white p-2 mb-3">
		Written by: <?= $data['user']->name; ?> on : <?= $data['post']->created_at; ?>
	</div>
	<p class="lead"><?= $data['post']->body; ?></p>

	<?php if($data['post']->id == $_SESSION['user_id']) : ?>
	<hr>
	<!-- Edit post -->
	<a href="<?= URL_ROOT; ?>/posts/edit" class="btn btn-dark"><i class="fa fa-pencil"></i> Edit</a>

	<!-- Delete the post -->
	<form action="<?= URL_ROOT ?>/posts/delete/<?= $data['post']->id; ?>" method="post" class="pull-right">
		<input type="submit" value="Delete" class="btn btn-danger">
	</form>
	<?php endif; ?>

<?php require(APP_ROOT . '/views/inc/footer.php'); ?>