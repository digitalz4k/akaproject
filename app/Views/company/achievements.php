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
                      <h4>Solar telescope</h4>
                    </a>
                    <a href="#" class="list-group-item text-center">
                      <h4>PW lasers</h4>
                    </a>
                    <a href="#" class="list-group-item text-center">
                      <h4>Exemple 3</h4>
                    </a>
                    <a href="#" class="list-group-item text-center">
                      <h4>Exemple 4</h4>
                    </a>
                    <a href="#" class="list-group-item text-center">
                      <h4>Exemple 5</h4>
                    </a>
                  </div>
                </div>
                <div class="col-xs-9 ach-tab">
                    <!-- First section -->
                    <div class="ach-tab-content active">
                        <div class="center col-xs-11 col-xs-offset-1">
                          <h3>Solar télescope</h3>
                          <h5>Cooming Soon</h5>
                          <img src="<?= $this->assetUrl('img/product.jpg') ?>" class="image responsive"/>
                        </div>
                    </div>
                    <!-- Second section -->
                    <div class="ach-tab-content">
                        <div class="center col-xs-11 col-xs-offset-1">
                          <h3>PW lasers</h3>
                          <h5>Cooming Soon</h5>
                          <h6>Lorem ipsum dolor sit amet, consectetuer adipiscing elit,
                          sed diam nonummy nibh euismod tincidunt ut laoreet dolore
                          magna aliquam erat volutpat. Ut wisi enim ad minim veniam,
                          quis nostrud exerci tation ullamcorper suscipit lobortis nisl
                          ut aliquip ex ea commodo consequat. Duis autem vel eum iriure
                          dolor in hendrerit in vulputate velit esse molestie consequat,
                          vel illum dolore eu feugiat nulla facilisis at vero eros et
                          accumsan et iusto odio dignissim qui blandit praesent luptatum
                          zzril delenit augue duis dolore te feugait nulla facilisi.
                          Nam liber tempor cum soluta nobis eleifend option congue
                          nihil imperdiet doming id quod mazim placerat facer possim
                          assum. Typi non habent claritatem insitam; est usus legentis
                          in iis qui facit eorum claritatem. Investigationes
                          demonstraverunt lectores legere me lius quod ii legunt saepius.
                          Claritas est etiam processus dynamicus, qui sequitur mutationem
                          consuetudium lectorum. Mirum est notare quam littera gothica,
                          quam nunc putamus parum claram, anteposuerit litterarum formas
                          humanitatis per seacula quarta decima et quinta decima. Eodem
                          modo typi, qui nunc nobis videntur parum clari, fiant sollemnes
                          in futurum.</h6>
                        </div>
                    </div>
        
                    <!-- Third section -->
                    <div class="ach-tab-content">
                        <div class="center col-xs-11 col-xs-offset-1">
                          <h3>Exemple 3</h3>
                          <h5>Cooming Soon</h5>
                          <h6>Lorem ipsum dolor sit amet, consectetuer adipiscing elit,
                          sed diam nonummy nibh euismod tincidunt ut laoreet dolore
                          magna aliquam erat volutpat. Ut wisi enim ad minim veniam,
                          quis nostrud exerci tation ullamcorper suscipit lobortis nisl
                          ut aliquip ex ea commodo consequat. Duis autem vel eum iriure
                          dolor in hendrerit in vulputate velit esse molestie consequat,
                          vel illum dolore eu feugiat nulla facilisis at vero eros et
                          accumsan et iusto odio dignissim qui blandit praesent luptatum
                          zzril delenit augue duis dolore te feugait nulla facilisi.
                          Nam liber tempor cum soluta nobis eleifend option congue
                          nihil imperdiet doming id quod mazim placerat facer possim
                          assum. Typi non habent claritatem insitam; est usus legentis
                          in iis qui facit eorum claritatem. Investigationes
                          demonstraverunt lectores legere me lius quod ii legunt saepius.
                          Claritas est etiam processus dynamicus, qui sequitur mutationem
                          consuetudium lectorum. Mirum est notare quam littera gothica,
                          quam nunc putamus parum claram, anteposuerit litterarum formas
                          humanitatis per seacula quarta decima et quinta decima. Eodem
                          modo typi, qui nunc nobis videntur parum clari, fiant sollemnes
                          in futurum.</h6>
                        </div>
                    </div>

                    <!-- Fourth section -->
                    <div class="ach-tab-content">
                        <div class="center col-xs-11 col-xs-offset-1">
                          <h3>Exemple 4</h3>
                          <h5>Cooming Soon</h5>
                          <h6>lorem</h6>
                        </div>
                    </div>

                    <!-- Fifth section -->
                    <div class="ach-tab-content">
                        <div class="center col-xs-11 col-xs-offset-1">
                          <h3>Exemple 5</h3>
                          <h5>Cooming Soon</h5>
                          <h6>Lorem ipsum dolor sit amet, consectetuer adipiscing elit,
                          sed diam nonummy nibh euismod tincidunt ut laoreet dolore
                          magna aliquam erat volutpat. Ut wisi enim ad minim veniam,
                          quis nostrud exerci tation ullamcorper suscipit lobortis nisl
                          ut aliquip ex ea commodo consequat. Duis autem vel eum iriure
                          dolor in hendrerit in vulputate velit esse molestie consequat,
                          vel illum dolore eu feugiat nulla facilisis at vero eros et
                          accumsan et iusto odio dignissim qui blandit praesent luptatum
                          zzril delenit augue duis dolore te feugait nulla facilisi.
                          Nam liber tempor cum soluta nobis eleifend option congue
                          nihil imperdiet doming id quod mazim placerat facer possim
                          assum. Typi non habent claritatem insitam; est usus legentis
                          in iis qui facit eorum claritatem. Investigationes
                          demonstraverunt lectores legere me lius quod ii legunt saepius.
                          Claritas est etiam processus dynamicus, qui sequitur mutationem
                          consuetudium lectorum. Mirum est notare quam littera gothica,
                          quam nunc putamus parum claram, anteposuerit litterarum formas
                          humanitatis per seacula quarta decima et quinta decima. Eodem
                          modo typi, qui nunc nobis videntur parum clari, fiant sollemnes
                          in futurum.</h6>
                        </div>
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