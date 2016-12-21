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
        
        <div class="row">
            <div class="col-xs-10 col-xs-offset-1">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1450.787266043741!2d5.430373158298565!3d43.34409149478334!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x12c9bfd1e3c17035%3A0x4ff62b83cfad4e04!2s2+Rue+Marc+Donadille%2C+13013+Marseille!5e0!3m2!1sfr!2sfr!4v1481811953486" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
            </div>
        </div>
    </div>
    
    <div class="col-sm-4">
        <h3><i class="fa fa-info"></i> Contact information</h3>
        <ul class="list-unstyled">
<<<<<<< HEAD
            <li><a href="mailto:contact@akaoptics.com">contact@akaoptics.com</a></li>
=======
            <li><a href="mailto:contact@akaoptics.com" title="contact email">contact@akaoptics.com</a></li>
>>>>>>> Models
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