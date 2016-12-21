
<?php $this->layout('layout', ['title' => 'Product name']) ?>

<?php $this->start('main_content') ?>

<?php debug($product) ?>
<?php debug($basicSpec) ?>
<?php debug($detailsSpec) ?>


<?php $this->stop('main_content') ?>

<?php $this->start('css') ?>
	<link rel="stylesheet" href="<?= $this->assetUrl('css/pages/products.css') ?>">
<?php $this->stop('css') ?>