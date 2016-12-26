<?php $this->layout('layout', ['title' => 'Contact']) ?>
<?php $this->start('main_content') ?>

<div id="main-dashboard">
    <div class="row">
        <nav class="col-xs-2">
			<ul class="nav nav-pills nav-stacked" >
				<li><a href="#"><i class="glyphicon glyphicon-home" aria-hidden="true"></i> Home</a></li>
                <li><a href="#tabs-products"><i class="fa fa-tags"></i> Manage Products</a></li>
				<li><a href="/akaproject/public/events/list"><i class="fa fa-calendar"></i> Manage Events</a></li>
				<li><a href="#tabs-products"><i class="fa fa-users"></i> Manage Users</a></li>
				<li><a href="#tabs-products"><i class="fa fa-cogs"></i> Settings</a></li>
				<li> <a href="/akaproject/public/logout"><i class="glyphicon glyphicon-off" aria-hidden="true"></i> Logout</a></li>
			</ul>
		</nav>
    
        <div id="dashboard-section col-xs-10">
                <h1 class="text-center">Welcome, <span class="text-primary">{name}</span></h1>
                <p class="text-center">Manage your website in this dashboard.</p>
        </div>
        
    </div>
</div>
<?php $this->stop('main_content') ?>
<?php $this->start('js') ?>
	<script src="<?= $this->assetUrl('js/dashboard.js') ?>"></script>
<?php $this->stop('js') ?>



