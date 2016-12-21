<?php 
/*
* If page template get image in the header
* - include a div#header-image
* - load the url of the picture
* - add a margin to nav because of the absolute position of the div#header-image
*/

$this->engine->loadExtension(new League\Plates\Extension\URI($_SERVER['PATH_INFO']));

if($header_image == true)
{
?>
  <div id="header-image">
    <img src="<?= $this->assetUrl('img/' . $header_image_name ) ?>" alt="<?= $header_image_name ?>"/>
  </div>
  <nav class="navbar navbar-default" style="margin-bottom: 200px;">
<?php } else {
?>

  <nav class="navbar navbar-default">
<?php
}
?>
    <div class="container">
      <!-- Brand and toggle get grouped for better mobile display -->
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <!--logo ici-->
        <a class="navbar-brand" href="/akaproject/public/"></a>
        <img src="<?= $this->assetUrl('img/LogoAkaOptics.png') ?>"class="logo" alt="">
        
        
      </div>
  
      <!-- Collect the nav links, forms, and other content for toggling -->
      <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <ul class="nav navbar-nav navbar-right">
          <li <?= $this->uri('/products', 'class="selected"')?>><a href="/akaproject/public/products">Products</a></li>
  		    <li <?= $this->uri('/company', 'class="selected"')?>><a href="/akaproject/public/company">Company</a></li>
  		    <li <?= $this->uri('/achievements', 'class="selected"')?>><a href="/akaproject/public/achievements">Achievements</a></li>
  		    <li <?= $this->uri('/contact', 'class="selected"')?>><a href="/akaproject/public/contact">Contact</a></li>
        </ul>
      </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
  </nav>