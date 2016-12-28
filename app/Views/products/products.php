<?php $this->engine->addData(["header_image" => false]) ?>
<?php $this->layout('layout', ['title' => 'Products']) ?>

<?php $this->start('main_content') ?>
<div id="products" class="container">
    
    <h2 class="text-primary text-center">AKA Optics manufactures Adaptive Optics Closed Loop Systems,<br/> Deformable Mirrors, Wavefront Sensors and M2 Meters</h2>
    
    <div class="swiper">
        <ul class="swipe-section">
            <li class="swipe-item col col-xs-4 swipe-helper">
                <div class="swipe-content">
                    <img src="<?= $this->assetUrl('img/swipe_helper.png') ?>" alt="helper" width="40">
                </div>
            </li>
            <?php foreach ($products as $key => $product)
            { ?>
            <li class="swipe-item col col-xs-4 <?php if($key == 1) { echo "active"; } ?>">
                <?php if (isset($product["picture_url"])) { ?>
                <img class="swipe-img" src="/akaproject/public/<?= $product["picture_url"] ?>" />
                <?php } ?>
                <div class="swipe-content">
                    <h3><?php echo $product['name']; ?></h3>
                    <p><?php echo $product['tagline']; ?></p>
                    <div class="swipe-footer">
                        <a href="/akaproject/public/products/<?php echo $product['id']; ?>" class="btn btn-primary btn-lg">Discover <i class="fa fa-arrow-right"></i> </a>
                    </div>
                </div>
            </li>
            <?php } ?>
        </ul>
    </div>
    
</div>
<?php $this->stop('main_content') ?>

<?php $this->start('css') ?>
	<link rel="stylesheet" href="<?= $this->assetUrl('css/pages/products.css') ?>">
<?php $this->stop('css') ?>

<?php $this->start('js') ?>
    <script src="https://hammerjs.github.io/dist/hammer.min.js"></script>
	<script src="<?= $this->assetUrl('libs/Swiper/Swiper.js') ?>"></script>
	<script src="<?= $this->assetUrl('js/products.js') ?>"></script>
<?php $this->stop('js') ?>