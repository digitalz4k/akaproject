<?php $this->layout('layout', ['title' => 'Manage Users']) ?>

<?php $this->start('main_content') ?>
	<div class="main-dashboard container">
	    <div class="row">
	        <div class="col-xs-2">
	            <?= $this->insert('dashboard/navTabs'); ?>
	        </div>
	    
	        <div id="dashboard-settings col-xs-8">
	        	<form method="POST">
	        		<div class="form-group">
	        			<label for="website_name">Set your website title</label>
	        			<input type="text" id="website_name" name="website_name" value="<?= $settings["website_name"] ?>" />
	        		</div>
	        		<div class="form-group">
	        			<label for="website_contact_email">What's your contact email?</label>
	        			<input type="text" id="website_contact_email" name="website_contact_email" value="<?= $settings["website_contact_email"] ?>" />
	        		</div>
	        		<div class="form-group">
	        			<label for="website_logo">Upload your company logo <img src="<?= $this->assetUrl('img/'.$settings["website_logo"]); ?>" width="45" /></label>
	        			<input type="file" id="website_logo" name="website_logo" />
	        		</div>
	        		<div class="form-group">
	        			<label for="website_description">Describe your company</label>
	        			<textarea id="website_description name="website_drescription"><?= $settings["website_description"] ?></textarea>
	        		</div>
	        		<div class="form-group">
	        			<input type="submit" class="btn btn-primary" value="Update"/>
	        		</div>
	        	</form>
	        </div>
	    </div>
    </div>
<?php $this->stop('main_content') ?>

<?php $this->start('css') ?>
	<link rel="stylesheet" href="<?= $this->assetUrl('css/pages/dashboard.css') ?>">
<?php $this->stop('css') ?>