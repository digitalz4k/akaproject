<?php $this->engine->addData(["header_image" => false]) ?>
<?php $this->layout('layout', ['title' => 'Home']) ?>

<?php $this->start('main_content') ?>
<section id="home">
    
    <!-- slider section -->
    <!--<div id="slider">-->
    <!--<h2>Slider here</h2>-->
        
    <!--</div>-->
    <div class="container-fluid">
		<div id="myCarousel" class="carousel slide" data-ride="carousel">
		  <!-- Indicators -->
			  <ol class="carousel-indicators">
			    <li data-target="#myCarousel" data-slide-to="0" class="active"><img src="<?= $this->assetUrl('img/Bimorph_deformable_mirrors.png') ?>" alt="bimorph_deformable_mirrors"></li>
			    <li data-target="#myCarousel" data-slide-to="1"><img src="<?= $this->assetUrl('img/Stack_actuator_deformable_mirrors.png') ?>" alt="stack_actuator_deformable_mirrors" /></li>
			    <li data-target="#myCarousel" data-slide-to="2"><img src="<?= $this->assetUrl('img/Very_large_deformable_mirrors.png') ?>" alt="very_large_deformable_mirrors"></li>
			    <li data-target="#myCarousel" data-slide-to="3"><img src="<?= $this->assetUrl('img/Wavefront_sensor.png') ?>" alt="wavefront_sensor"></li>
			    
			  </ol>
		
		  <!-- Wrapper for slides -->
		
		
			  <div class="carousel-inner" role="listbox">
			    <div class="item active">
			      	<a href="#"><img src="<?= $this->assetUrl('img/Bimorph_deformable_mirrors.png') ?>" alt="bimorph_deformable_mirrors"></a>
			    <div class="carousel-caption">
        			<h2>Bimorph deformable mirrors</h2>
        		</div>
			    </div>
				<div class="item">
			    	 <a href="#">	<img src="<?= $this->assetUrl('img/Stack_actuator_deformable_mirrors.png') ?>" alt="stack_actuator_deformable_mirrors"></a>
			    <div class="carousel-caption">
        			<h2>Stack actuator deformable mirrors </h2>
        		</div>
			    </div>
		
			    <div class="item">
			     	<a href="#"> <img src="<?= $this->assetUrl('img/Very_large_deformable_mirrors.png') ?>" alt="very_large_deformable_mirrors"></a>
			    <div class="carousel-caption">
        			<h2>Very large deformable mirrors</h2>
        		</div>
			    </div>
		
			    <div class="item">
			     	<a href="#"> <img src="<?= $this->assetUrl('img/Wavefront_sensor.png') ?>" alt="wavefront_sensor"></a>
			     <div class="carousel-caption">
        			<h2>Wavefront sensor</h2>
        		</div>
			    </div>
			  </div>
		
		  <!-- Left and right controls -->
			  <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
			  	<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
			  	<span class="sr-only">Previous</span>
			  </a>
			  <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
			  	<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
			  	<span class="sr-only">Next</span>
			  </a>
		</div>
	</div>
  
    
    
</section>

<footer>
	
	<div id="events">
        <h2>Meet Aka Optics</h2>
        <p class="blueband">Photonics West 2017 Booth #5653 (with Active Optics NightN) 31 January - 2 February Moscone Center San Francisco – USA <a href="#"><i class="fa fa-link"></i> </a> </p>
    </div>
	
	
</footer>
<?php $this->stop('main_content') ?>

<?php $this->start('css') ?>
	<link rel="stylesheet" href="<?= $this->assetUrl('css/pages/home.css') ?>">
<?php $this->stop('css') ?>

<?php $this->start('js') ?>
	<script src="<?= $this->assetUrl('js/home.js') ?>"></script>
<?php $this->stop('js') ?>