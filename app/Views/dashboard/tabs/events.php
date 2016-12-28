<?php $this->layout('layout', ['title' => 'Manage Events']) ?>

<?php $this->start('main_content') ?>
<div class="main-dashboard container">
    <div class="row">
        
        <div class="col-xs-2">
            <?= $this->insert('dashboard/navTabs'); ?>
        </div>
        
        <div id="dashboard-events col-xs-8 col-xs-offset-2">
            <div class="container">
                <a href="/akaproject/public/aka-admin/events/add" class="btn btn-primary btn-lg pull-right"><i class="fa fa-plus"></i> Add new event</a>
                <h2>Manage Events</h2>
                <div class="list-group col-xs-10">
                    <?php foreach($events as $event) { 
                    $date = strtotime($event['date']);
        			$event['formatDate'] = date('Y-M-d', $date);
                    ?>
                    
                    <li class="list-group-item">
                        <span class="badge"><a href="/akaproject/public/aka-admin/events/edit/<?= $event["id"] ?>">Edit</a></span>
                        <span class="badge"><a href="/akaproject/public/aka-admin/events/delete/<?= $event["id"] ?>">Delete</a></span>
                        <h4 class="list-group-item-heading text-primary">
                            <?= $event["title"] ?>
                        </h4>
                        <p class="list-group-item-text">
                            Title: <?= $event["title"] ?>
                        </p>
                        <p class="list-group-item-text">
                            Date: <?= $event["formatDate"] ?>
                        </p>
                        <p class="list-group-item-text">
                            Location: <?= $event["place"] ?>
                        </p>
                        <p class="list-group-item-text">
                            Description: <?= $event["description"] ?>
                        </p>
                        <p class="list-group-item-text">
                            Link: <?= $event["link"] ?>
                        </p>
                    </li>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $this->stop('main_content') ?>

<?php $this->start('css') ?>
	<link rel="stylesheet" href="<?= $this->assetUrl('css/pages/dashboard.css') ?>">
<?php $this->stop('css') ?>