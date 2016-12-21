
<?php $this->layout('layout', ['title' => 'Product name']) ?>


<?php $this->start('main_content') ?>
<<<<<<< HEAD

<?php debug($product) ?>
<?php debug($basicSpec) ?>
<?php debug($detailsSpec) ?>


=======
<div id="product-single">
    
    <div class="row">
        <div class="col-xs-8 col-xs-offset-2">
            <h2 class="text-primary text-center"><?php echo $product["name"]; ?> : <?php echo $product["subtitle"]; ?></h2>
        </div>
        <div class="col-xs-8 col-xs-offset-2">
            <p class="text-justify">
                <?php echo $product["description"]; ?> 
            </p>
        </div>
        <div class="col-xs-8 col-xs-offset-2">
            <p class="text-center lead text-primary">
                <?php echo $product["accroche"]; ?>
            </p>
        </div>
        <section class="row">
<<<<<<< HEAD
            <div class="col-xs-12 blueflag">
                <div class="col-xs-11 col-xs-offset-1">
                    <span>+ </span>BASIC SPECIFICATIONS
                </div>
=======
            <div class="col-xs-11 col-xs-offset-1">
                <span><i class="fa fa-3x fa-plus"></i></span>BASIC SPECIFICATIONS
>>>>>>> formContact
            </div>
            <div class="row">
                <?php foreach ($basic as $basicSpec)
                { ?>
                <div class="col-xs-2 col-xs-offset-2">
                     <i class="fa fa-5x fa-<?php echo $basicSpec['icon']; ?>"></i>
                </div>
                <div class="col-xs-6">
                    <h3 class="text-primary text-center"><?php echo $basicSpec['title']; ?></h3>
                    <p>
                        <?php echo $basicSpec['data']; ?>
                    </p>
                </div>
                <?php } ?>
            </div>
            
        </section>
        <section class="row">
<<<<<<< HEAD
            <div class="blueflag col-xs-12">
                <div class="col-xs-11 col-xs-offset-1">
                    <span>- </span>DETAILS SPECIFICATIONS
                </div>
=======
            <div class="col-xs-11 col-xs-offset-1">
                <span><i class="fa fa-3x fa-minus"></i></span>DETAILS SPECIFICATIONS
>>>>>>> formContact
            </div>
            <div class="row">
                <div class="col-xs-8 col-xs-offset-2">
                    <h3 class="text-center">WE HAVE AN EXPERIENCE WITH A LARGE RANGE OF<br />
                    <SPAN class="text-primary">STACK ACTUATOR DEFORMABLE MIRRORS</SPAN></h3>
                </div>
                <?php foreach ($details as $detailSpec)
                { ?>
                <div class="col-xs-8 col-xs-offset-2">
                    <div class="row">
                        <div class="col-xs-4 col-xs-offset-1 panel panel-default">
                            <?php echo $detailSpec['title']; ?>
                        </div>
                        <div class="col-xs-6 panel panel-default">
                            <?php echo $detailSpec['data']; ?>
                        </div>
                        
                    </div>
                </div>
                <?php } ?>
            </div>
        </section>
    </div>
</div>
<<<<<<< HEAD
>>>>>>> slider
=======
<!--<?php debug($product) ?>
<?php debug($basic) ?>
<?php debug($details) ?>-->
<?php $this->insert('products/productRequestForm') ?>;
>>>>>>> formContact
<?php $this->stop('main_content') ?>

<?php $this->start('css') ?>
	<link rel="stylesheet" href="<?= $this->assetUrl('css/pages/product-single.css') ?>">
<?php $this->stop('css') ?>