<?php $this->engine->addData(["header_image" => false]) ?>
<?php $this->layout('layout', ['title' => 'Products']) ?>

<?php $this->start('main_content') ?>
<div id="products">
    
    <h2 class="text-primary text-center">AKA Optics manufactures Adaptive Optics Closed Loop Systems,<br/> Deformable Mirrors, Wavefront Sensors and M2 Meters</h2>
    
    <div class="swiper">
    <ul class="swipe-section">
      <li class="swipe-item col col-xs-4 swipe-helper">
          <div class="swipe-content">
              <img src="<?= $this->assetUrl('img/swipe_helper.png') ?>" alt="helper" width="40">
          </div>
      </li>
        <li class="swipe-item col col-xs-4">
            <div class="swipe-content">
                <h3>Adaptive optics closed loop systems</h3>
                <p>Adaptive Optics is a key enabling technology for most High Power Lasers and Astronomical Telescopes
and in general for all optical systems affected by wavefront aberration.</p>
                <div class="swipe-footer">
                    <button class="btn btn-primary btn-lg">Discover <i class="fa fa-arrow-right"></i> </button>
                </div>
            </div>
        </li>
        <li class="swipe-item col col-xs-4 active">
            <div class="swipe-content">
                <h3>Bimorph deformable mirrors</h3>
                <span class="subtitle">A proven technology</span>
                <p>Bimorph deformable mirrors are the bestsellers for high power lasers
and in general for low order aberrations correction in laser & imaging (Zernike coefficient up to 24).</p>
                <div class="swipe-footer">
                    <button class="btn btn-primary btn-lg">Discover <i class="fa fa-arrow-right"></i> </button>
                </div>
            </div>
        </li>
        <li class="swipe-item col col-xs-4">
            <div class="swipe-content">
                <h3>Stack actuators deformable mirrors</h3>
                <span class="subtitle">For high order aberrations correction</span>
                <p>Stack actuators deformable mirrors are the bestsellersfor high resolution imaging
and in general for high order aberrations correction in laser & imaging (Zernike coefficient > 24).</p>
                <div class="swipe-footer">
                    <button class="btn btn-primary btn-lg">Discover <i class="fa fa-arrow-right"></i> </button>
                </div>
            </div>
        </li>
        <li class="swipe-item col col-xs-4">
            <div class="swipe-content">
                <h3>Shack-Hartman wavefront sensors</h3>
                <span class="subtitle">A very effective technology</span>
                <p>Shack-Hartman wavefront sensors are the bestsellers for any wavefront application.</p>
                <div class="swipe-footer">
                    <button class="btn btn-primary btn-lg">Discover <i class="fa fa-arrow-right"></i> </button>
                </div>
            </div>
        </li>
        <li class="swipe-item col col-xs-4">
            <div class="swipe-content">
                <h3>M2 meters</h3>
                <p>M2 meters – or M squared meters - are made by connecting a digital camera to a software which is able to analyze the beam parameters.</p>
                <div class="swipe-footer">
                    <button class="btn btn-primary btn-lg">Discover <i class="fa fa-arrow-right"></i> </button>
                </div>
            </div>
        </li>
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