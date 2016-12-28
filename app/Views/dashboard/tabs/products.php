<?php $this->layout('layout', ['title' => 'Manage Users']) ?>

<?php $this->start('main_content') ?>
<div class="main-dashboard container">
    <div class="row">
        <div class="col-xs-2">
            <?= $this->insert('dashboard/navTabs'); ?>
        </div>
    
        <div id="dashboard-products" class="col-xs-8 col-xs-offset-1">
            <div class="container">
                
                <h2>Manage Products</h2>
                <div class="list-group col-xs-10">
                    <?php foreach($products as $product) { ?>
                    
                    <li class="list-group-item">
                        <span class="badge"><a href="/akaproject/public/aka-admin/products/edit/<?= $product["id"] ?>">Edit</a></span>
                        <span class="badge"><a href="/akaproject/public/aka-admin/products/delete/<?= $product["id"] ?>">Delete</a></span>
                        <h4 class="list-group-item-heading">
                            <?php if($product["picture_url"]) { ?>
                            <img src="/akaproject/public/<?= $product["picture_url"] ?>" width="150" />
                            <?php } else { ?>
                            <img src="/akaproject/public/uploads/default_product.png" width="150" />
                            <?php } ?>
                            <?= $product["name"] ?> <?= $product["subtitle"] ?>
                        </h4>
                    </li>
                    <?php } ?>
                </div>
                <a href="/akaproject/public/aka-admin/products/add" class="btn btn-primary btn-lg col-xs-3"><i class="fa fa-plus"></i> Add new product</a>                
            </div>
        </div>
    </div>
</div>
<?php $this->stop('main_content') ?>

<?php $this->start('css') ?>
	<link rel="stylesheet" href="<?= $this->assetUrl('css/pages/dashboard.css') ?>">
<?php $this->stop('css') ?>