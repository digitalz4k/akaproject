<?php $this->engine->addData(["header_image" => false]) ?>
<?php $this->layout('layout', ['title' => 'Achievements']) ?>

<?php $this->start('main_content') ?>

<h1><?= $title ?></h1>

<?php $this->stop('main_content') ?>

<?php $this->start('css') ?>
	<link rel="stylesheet" href="<?= $this->assetUrl('css/pages/products.css') ?>">
<?php $this->stop('css') ?>