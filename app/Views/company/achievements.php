<?php $this->engine->addData(["header_image" => false]) ?>
<?php $this->layout('layout', ['title' => 'Achievements']) ?>

<?php $this->start('main_content') ?>

<h1><?= $title ?></h1>

  <div id="achievements" class="container-fluid">
  	<div class="row">
          <div class="col-xs-12 ach-tab-container">
            <div class="row">
                <div class="col-xs-3 ach-tab-menu">
                  <div class="list-group">
                    <a href="#" class="list-group-item active text-center">
                      <h4></h4><br/>Solar telescope
                    </a>
                    <a href="#" class="list-group-item text-center">
                      <h4></h4><br/>PW lasers
                    </a>
                    <a href="#" class="list-group-item text-center">
                      <h4></h4><br/>Exemple 3
                    </a>
                    <a href="#" class="list-group-item text-center">
                      <h4></h4><br/>Exemple 4
                    </a>
                    <a href="#" class="list-group-item text-center">
                      <h4></h4><br/>Exemple 5
                    </a>
                  </div>
                </div>
                <div class="col-xs-9 ach-tab">
                    <!-- First section -->
                    <div class="ach-tab-content active">
                        <div class="center">
                          <h1>Solar télescope</h1>
                          <h2>Cooming Soon</h2>
                          <h3>Solar telescope</h3>
                        </div>
                    </div>
                    <!-- Second section -->
                    <div class="ach-tab-content">
                        <center>
                          <h1></h1>
                          <h2>Cooming Soon</h2>
                          <h3>PW lasers</h3>
                        </center>
                    </div>
        
                    <!-- Third section -->
                    <div class="ach-tab-content">
                        <center>
                          <h1></h1>
                          <h2>Cooming Soon</h2>
                          <h3>Exemple 3</h3>
                        </center>
                    </div>

                    <!-- Fourth section -->
                    <div class="ach-tab-content">
                        <center>
                          <h1></h1>
                          <h2>Cooming Soon</h2>
                          <h3>Exemple 4</h3>
                        </center>
                    </div>

                    <!-- Fifth section -->
                    <div class="ach-tab-content">
                        <center>
                          <h1></h1>
                          <h2>Cooming Soon</h2>
                          <h3>Exemple 5</h3>
                        </center>
                    </div>
                </div>
          </div>
        </div>
    </div>
  </div>

<?php $this->stop('main_content') ?>

<?php $this->start('css') ?>
	<link rel="stylesheet" href="<?= $this->assetUrl('css/pages/achievements.css') ?>">
<?php $this->stop('css') ?>

<?php $this->start('js') ?>
	<script src="<?= $this->assetUrl('js/achievements.js') ?>"></script>
<?php $this->stop('js') ?>