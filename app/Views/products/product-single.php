<?php $this->engine->addData(["header_image" => true, "header_image_name" => $product["picture_url"]]); ?>
<?php $this->layout('layout', ['title' => 'Product name']) ?>

<?php $this->start('main_content') ?>

<div id="product-single">
    <div class="row">
        <div class="col-xs-8 col-xs-offset-2">
            <h2 class="text-primary text-center"><?php echo $product["name"]; ?> : <?php echo $product["subtitle"]; ?></h2>
        </div>
        <div class="col-xs-2"></div>
        <div class="col-xs-8 col-xs-offset-2">
            <p class="text-justify">
                <?php echo $product["description"]; ?> 
            </p>
        </div>
        <div class="col-xs-2"></div>
        <div class="col-xs-8 col-xs-offset-2">
            <p class="text-center lead text-primary">
                <?php echo $product["accroche"]; ?>
            </p>
        </div>
        <div class="col-xs-2"></div>
        <section class="row">
            <div class="col-xs-12 blueflag panel panel-primary" data-toggle="collapse" data-target="#basicSpec">
                <div class="container">
                    <div class="col-xs-12">
                        <h3><i class="fa fa-plus" aria-hidden="true"></i> BASIC SPECIFICATIONS</h3>
                    </div>
                </div>
            </div>
            <div class="row collapse" id="basicSpec">
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
            <div class="blueflag col-xs-12 panel panel-primary" data-toggle="collapse" data-target="#detailSpec">
                <div class="container">
                    <div class="col-xs-12">
                        <h3><i class="fa fa-plus" aria-hidden="true"></i> DETAIL SPECIFICATIONS</h3>
                    </div>
                </div>
            </div>
            <div class="row collapse" id="detailSpec">
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

<?php $this->insert('products/productRequestForm') ?>;

<?php $this->stop('main_content') ?>

<?php $this->start('css') ?>
	<link rel="stylesheet" href="<?= $this->assetUrl('css/pages/product-single.css') ?>">
<?php $this->stop('css') ?>