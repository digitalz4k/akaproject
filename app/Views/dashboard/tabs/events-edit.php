<?php $this->layout('layout', ['title' => 'Edit Events']) ?>

<?php $this->start('main_content') ?>
<div class="main-dashboard">
    <div class="row">
        <div class="col-xs-2">
            <?= $this->insert('dashboard/navTabs'); ?>
        </div>
    
        <div id="dashboard-events-edit" class="col-xs-8 col-xs-offset-2">
            <div class="container">
               <h2>Edit Event</h2>
                <p><strong><?= $msg ?></strong></p>
                <form method="POST">
                    <div class="form-group">
                        <input type="text" name="title" value="<?= $event["title"] ?>" />
                    </div>
                    <div class="form-group">
                        <input type="text" name="date" value="<?= $event["date"] ?>"/>
                    </div>
                    <div class="form-group">
                        <input type="text" name="place" value="<?= $event["place"] ?>"/>
                    </div>
                    <div class="form-group">
                        <input type="text" name="description" value="<?= $event["description"] ?>"/>
                    </div>
                    <div class="form-group">
                        <input type="text" name="link" value="<?= $event["link"] ?>"/>
                    </div>
                    
                    <div class="form-group">
                        <input type="submit" class="btn btn-primary btn-lg" value="Update"/>
                    </div>
                </form>
            </div>
        </div>
                
<?php $this->stop('main_content') ?>

<?php $this->start('css') ?>
	<link rel="stylesheet" href="<?= $this->assetUrl('css/pages/dashboard.css') ?>">
<?php $this->stop('css') ?>