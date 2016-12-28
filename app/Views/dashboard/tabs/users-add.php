<?php $this->layout('layout', ['title' => 'Add new user']) ?>

<?php $this->start('main_content') ?>
<div class="main-dashboard">
    <div class="row">
        <div class="col-xs-2">
            <?= $this->insert('dashboard/navTabs'); ?>
        </div>
    
        <div id="dashboard-users-add" class="col-xs-8">
            <div class="container">
               <h2 class="text-center text-primary">Add User</h2>
                <p class="text-center"><strong><?= $msg ?></strong></p>
                <form method="POST" class="text-center">
                    <div class="form-group">
                        <input type="text" name="first_name" placeholder="First name" />
                    </div>
                    <div class="form-group">
                        <input type="text" name="last_name" placeholder="Last name" />
                    </div>
                    <div class="form-group">
                        <input type="text" name="email" placeholder="Email" />
                    </div>
                    <div class="form-group">
                        <input type="password" name="password" placeholder="Password" />
                        <input type="password" name="confirm" placeholder="Confirm password" />
                    </div>
                    <div class="form-group">
                        <label for="role">Choose Role</label>
                        <select name="role" id="role">
                            <option value="user" selected>User</option>
                            <option value="admin">Admin</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <input type="submit" class="btn btn-primary btn-lg" value="Create"/>
                    </div>
                </form>
            </div>
        </div>
                
<?php $this->stop('main_content') ?>

<?php $this->start('css') ?>
	<link rel="stylesheet" href="<?= $this->assetUrl('css/pages/dashboard.css') ?>">
<?php $this->stop('css') ?>