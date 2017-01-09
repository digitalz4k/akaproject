<?php $this->layout('layout', ['title' => 'Dashboard']) ?>

<?php $this->start('main_content') ?>
<div class="main-dashboard container">
    <div class="row">
        <div class="col-xs-2">
            <?= $this->insert('dashboard/navTabs'); ?>
        </div>
    
        <div id="dashboard-home" class="col-xs-10">
            <div class="row">
                <h1 class="text-center">Welcome, <span class="text-primary"><?= $w_user["first_name"] ?> <?= $w_user["last_name"] ?></span></h1>
                <p class="text-center">Manage your website in this dashboard.</p>
                
                <?php foreach($stats as $key=>$stat) { ?>
                    <div class="dashboard_stats col-xs-4">
                        <h2><?= ucfirst($key); ?></h2>
                        <p class="number">
                            <?= $stat ?>
                        </p>
                    </div>
                <?php } ?>
                
            </div>
        </div>
        
    </div>
</div>
<?php $this->stop('main_content') ?>

<?php $this->start('css') ?>
	<link rel="stylesheet" href="<?= $this->assetUrl('css/pages/dashboard.css') ?>">
<?php $this->stop('css') ?>

<?php $this->start('js') ?>
	<script src="<?= $this->assetUrl('js/dashboard.min.js') ?>"></script>
<?php $this->stop('js') ?>