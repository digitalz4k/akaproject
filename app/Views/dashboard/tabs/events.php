<?php $this->layout('layout', ['title' => 'Manage Events']) ?>

<?php $this->start('main_content') ?>
<div class="main-dashboard container">
    <div class="row">
        
        <div class="col-xs-2">
            <?= $this->insert('dashboard/navTabs'); ?>
        </div>
        
        <div id="dashboard-events col-xs-8 col-xs-offset-2">
            <div class="container-fluid">
                <!-- Liste boostrap + chaque event boutton edit et delete -->
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
            </div>
        </div>
    </div>
</div>
<?php $this->stop('main_content') ?>

<?php $this->start('css') ?>
	<link rel="stylesheet" href="<?= $this->assetUrl('css/pages/dashboard.css') ?>">
<?php $this->stop('css') ?>