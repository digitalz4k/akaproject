<?php $this->layout('layout', ['title' => 'Manage Users']) ?>

<?php $this->start('main_content') ?>
<div class="main-dashboard container">
    <div class="row">
        <div class="col-xs-2">
            <?= $this->insert('dashboard/navTabs'); ?>
        </div>
    
        <div id="dashboard-users col-xs-8 col-xs-offset-2">
            <div class="container">
                 <a href="/akaproject/public/users/add" class="btn btn-primary btn-lg pull-right"><i class="fa fa-plus"></i> Add new user</a>
                <h2>Manage Users</h2>
                <div class="list-group col-xs-10">
                    <?php foreach($users as $user) { ?>
                    
                    <li class="list-group-item">
                        <span class="badge"><a href="/akaproject/public/users/edit/<?= $user["id"] ?>">Edit</a></span>
                        <span class="badge"><a href="/akaproject/public/users/delete/<?= $user["id"] ?>">Delete</a></span>
                        <h4 class="list-group-item-heading">
                            <?= $user["first_name"] ?> <?= $user["last_name"] ?>
                        </h4>
                        <p class="list-group-item-text">
                            ID: <?= $user["id"] ?> <br/>
                            Email: <?= $user["email"] ?> <br/>
                            Role: <?= $user["role"] ?> <br/>
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

