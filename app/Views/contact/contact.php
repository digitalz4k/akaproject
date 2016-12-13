<?php $this->engine->addData(["header_image" => true, "header_image_name" => "contact.jpg"]) ?>
<?php $this->layout('layout', ['title' => 'Contact']) ?>

<?php $this->start('main_content') ?>
<div class="row">
    <div class="col-sm-8">
        <h2 class="text-primary">Our office is located in the south of France,<br/>
        in the city of Marseille in Provence.</h2>
        
        <p>The pure sky of Provence has long been ideal for astronomers and many observatories are installed in our region.</p>
        
        <p>Their technological leadership has attracted international level research laboratories and industries in optics & photonics,
        now federated in <b>OPTITEC</b>, France’s first Optics & Photonics Competitiveness Cluster.</p>
        
        <img src="<?= $this->assetUrl('img/map.png') ?>" alt="map"></img>
    </div>
    
    <div class="col-sm-4">
        <h3><i class="fa fa-info"></i> Contact information</h3>
        <ul class="list-unstyled">
            <li>contact[@]akaoptics.com</li>
            <li>Tel: +33 4 91 05 50 86</li>
            <li>Fax: +33 4 91 05 50 87</li>
        </ul>
        
        <h3><i class="fa fa-location-arrow"></i> Address</h3>
        <ul class="list-unstyled">
            <li>2 rue Marc Donadille</li>
            <li>13013 MARSEILLE</li>
            <li>FRANCE</li>
        </ul>
        
        <h3><i class="fa fa-legal"></i> Legal information</h3>
        <ul class="list-unstyled">
            <li>AKA OPTICS is a French SAS</li>
            <li>(Société par Actions Simplifiée)</li>
            <li>Capital: 100 000 €</li>
            <li>SIREN: 790 049 985 RCS Marseille</li>
        </ul>
    </div>
</div>
<?php $this->stop('main_content') ?>

<?php $this->start('css') ?>
	<link rel="stylesheet" href="<?= $this->assetUrl('css/pages/contact.css') ?>">
<?php $this->stop('css') ?>