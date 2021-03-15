<?php require APP_ROOT . '/views/inc/header.php' ?>

<h1>welcome <?= $data['title']; ?></h1>


<ul>

	<?php foreach($data['posts'] as $post) : ?>
 
 		<li><?= $post->title; ?></li>

	<?php endforeach; ?>

</ul>

<?php require APP_ROOT . '/views/inc/footer.php' ?>