<?php $this->layout('layout', ['title' => 'Contact']) ?>

<?php $this->start('main_content') ?>
<div class="main-dashboard">
    <div class="row">
        <?= $this->insert('dashboard/navTabs'); ?>
    
        <div id="dashboard-home col-xs-10">
                <h1 class="text-center">Welcome, <span class="text-primary">{name}</span></h1>
                <p class="text-center">Manage your website in this dashboard.</p>        </div>
        
    </div>
</div>
<?php $this->stop('main_content') ?>
<?php $this->start('js') ?>
	<script src="<?= $this->assetUrl('js/dashboard.js') ?>"></script>
<?php $this->stop('js') ?>



