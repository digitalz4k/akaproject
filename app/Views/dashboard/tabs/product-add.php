<?php $this->layout('layout', ['title' => 'Add Product']) ?>

<?php $this->start('main_content') ?>
<div class="main-dashboard container">
    <div class="row">
        <div class="col-xs-2">
            <?= $this->insert('dashboard/navTabs'); ?>
        </div>
    
        <div id="dashboard-products col-xs-8 col-xs-offset-2">
            <div class="container">
                <h2>Add Product</h2>
                <p><strong><?= $msg ?></strong></p>
                <form method="POST">
                
                    <div class="form-group ">
                        <label for="name">Title</label>
                        <input type="text" id="name" name="name">
                    </div>
                    
                    <div class="form-group">
                        <label for="subtitle">Subtitle</label>
                        <input type="text" id="subtitle" name="subtitle">
                    </div>
                    
                    <div class="form-group">
                        <label for="description">Description</label>
                        <input type="text" id="description" name="description">
                    </div>
                    
                    <div class="form-group">
                        <label for="tagline">Tagline</label>
                        <input type="text" id="tagline" name="tagline">
                    </div>
                    
                    <div class="form-group">
                        <label for="picture">Picture</label>
                        <input type="file" id="picture" name="picture">
                    </div>
                        
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary btn-create-spec">Create new product</button>
                    </div> 
                    
                </form>
                
            </div>
        </div>
    </div>
</div>
<?php $this->stop('main_content') ?>

<?php $this->start('css') ?>
	<link rel="stylesheet" href="<?= $this->assetUrl('css/pages/dashboard.css') ?>">
<?php $this->stop('css') ?>