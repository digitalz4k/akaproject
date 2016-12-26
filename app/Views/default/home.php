<?php $this->engine->addData(["header_image" => false]) ?>
<?php $this->layout('layout', ['title' => 'Home']) ?>

<?php $this->start('main_content') ?>
<section id="home">
    
    <!-- slider section -->
    <!--<div id="slider">-->
    <!--    <h2>Slider here</h2>-->
        
    <!--</div>-->
    <div class="container-fluid">
		<div id="myCarousel" class="carousel slide" data-ride="carousel">
		  <!-- Indicators -->
			  <ol class="carousel-indicators">
			    <li data-target="#myCarousel" data-slide-to="0" class="active"><img src="<?= $this->assetUrl('img/actMirror.png') ?>" alt="actMirror"></li>
			    <li data-target="#myCarousel" data-slide-to="1"><img src="<?= $this->assetUrl('img/bimMirrors.png') ?>" alt="bimMirrors" /></li>
			    <li data-target="#myCarousel" data-slide-to="2"><img src="<?= $this->assetUrl('img/closedloopsystems.png') ?>" alt="closedloopsystem"></li>
			    <li data-target="#myCarousel" data-slide-to="3"><img src="<?= $this->assetUrl('img/M2.png') ?>" alt="M2"></li>
			    <li data-target="#myCarousel" data-slide-to="4"><img src="<?= $this->assetUrl('img/WFSensor.png') ?>" alt="WFSensor"></li>
			  </ol>
		
		  <!-- Wrapper for slides -->
		
		
			  <div class="carousel-inner" role="listbox">
			    <div class="item active">
			      <img src="<?= $this->assetUrl('img/actMirror.png') ?>" alt="actMirror">
			    </div>
		
			    <div class="item">
			     	<img src="<?= $this->assetUrl('img/bimMirrors.png') ?>" alt="bimMirrors">
			    </div>
		
			    <div class="item">
			     	 <img src="<?= $this->assetUrl('img/closedloopsystems.png') ?>" alt="closedloopsystem">
			    </div>
		
			    <div class="item">
			     	 <img src="<?= $this->assetUrl('img/M2.png') ?>" alt="M2">
			    </div>
		
			     <div class="item">
			     	 <img src="<?= $this->assetUrl('img/WFSensor.png') ?>" alt="WFSensor">
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
  
    <div id="events">
        <h2>Meet Aka Optics</h2>
        <ul class="list-inline list-unstyled">
        	
        <?php
			if (count($events)>0)
			{
	        	// S'il n'y a pas d'events, afficher un message "No events." par exemple
	        	foreach ($events as $event)
	        	{ ?>
	        		<li><a href="<?php echo $event['link'] ?>"><?php echo $event['title'] ?></a> <?php echo $event['place'] ?> <?php echo $event['description'] ?> <?php echo $event['date'] ?></li>
        <?php
        		}
			}
			else
			{
		?>
				<li><?php echo 'No scheduled event'; ?></li>
		<?php
			}
        ?>
        
        </ul>
        
    </div>
    
</section>
<?php $this->stop('main_content') ?>

<?php $this->start('css') ?>
	<link rel="stylesheet" href="<?= $this->assetUrl('css/pages/home.css') ?>">
<?php $this->stop('css') ?>

<?php $this->start('js') ?>
	<script src="<?= $this->assetUrl('js/home.js') ?>"></script>
<?php $this->stop('js') ?>