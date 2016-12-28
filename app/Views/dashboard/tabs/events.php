<?php $this->layout('layout', ['title' => 'Manage Events']) ?>
<?php $this->start('main_content') ?>


    <div class="col-xs-3 panel panel-heading panel-primary text-center text-primary">Name</div>
    <div class="col-xs-3 panel panel-heading panel-primary text-center text-primary">Link</div>
    <div class="col-xs-3 panel panel-heading panel-primary text-center text-primary">Place</div>
    <div class="col-xs-3 panel panel-heading panel-primary text-center text-primary">Date</div>


<?php
    foreach($events as $event)
    {   
        $date = strtotime($event['date']);
        $event['formatDate'] = date('Y-m-d', $date);
?>
        <div class="col-xs-3 panel panel-default"><?= $event['title'] ?></div>
        <div class="col-xs-3 panel panel-default"><?= $event['link'] ?></div>
        <div class="col-xs-3 panel panel-default"><?= $event['place'] ?></div>
        <div class="col-xs-3 panel panel-default"><?= $event['formatDate'] ?></div>
<?php
        
    }
?>

<?php $this->stop('main_content') ?>

<?php $this->start('css') ?>
	<link rel="stylesheet" href="<?= $this->assetUrl('css/pages/dashboard.css') ?>">
<?php $this->stop('css') ?>