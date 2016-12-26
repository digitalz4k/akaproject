<?php $this->layout('layout', ['title' => 'Perdu ?']) ?>

<?php $this->start('main_content'); ?>
<div class="row">
    <div class="col-xs-10 col-xs-offset-1">
        <h1 class="text-center">404. OMG! I'm lost !</h1>
        <div class="col-xs-12">
            <img src="<?= $this->assetUrl('img/jcvd404.png') ?>" alt="lost"/>
        </div>
    </div>
</div>
<?php $this->stop('main_content'); ?>
