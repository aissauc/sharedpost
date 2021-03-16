<?php require(APP_ROOT . '/views/inc/header.php'); ?>

<h1 class="display-2"><?= $data['title'] ?></h1>
<p class="lead"><?= $data['description'] ?></p>
<p>version: <strong><?= APP_VERSION ?></strong></p>
<?php require(APP_ROOT . '/views/inc/footer.php'); ?>