<?php $this->start('main_content') ?>
<div class="col-xs-8">
    <div class="form-group new-produit">
        <label for="nom-produit">Nom du produit:</label>
        <input type="text" class="form-control" id="nom-produits">
    </div>
    <div class="form-group">
        <label for="description-produit">Description du produit:</label>
        <textarea class="form-control" rows="5" id="comment"></textarea>
    </div>
    <div class="form-group">
        <label for="sel1">Spécifications:</label>
<!--*********************CREATION DE SPEC*******************************************        -->
    <div>
        <button type="button" class="btn btn-primary btn-create-spec">Create spec</button>
        <!--quand click sur bouton btn-create-spec form d'ajout de spec s'affiche-->
    <div class="form-spec">
    <div class="form-group new-spec">
        <label for="nom-produit">Nom de la spéc:</label>
        <input type="text" class="form-control" id="nom-produits">
    </div>
    <div class="form-group">
        <label for="description-produit">Description de la spec:</label>
        <textarea class="form-control" rows="5" id="comment"></textarea>
        <!--Ajouter soit dans spec basic, soit dans détail-->
    <div class="btn-group" data-toggle="buttons">
        <label class="btn btn-primary active">
            <input type="radio" name="options" id="spec-basic" autocomplete="off" checked> Spec basic
        </label>
        <label class="btn btn-primary">
            <input type="radio" name="options" id="spec-detail" autocomplete="off"> Spec detail
        </label>
    <div>
        <button type="button" class="btn btn-primary btn-create-spec">Ajouter</button>
    </div> 
</div>
<?php $this->stop('main_content') ?>

<?php $this->start('css') ?>
	<link rel="stylesheet" href="<?= $this->assetUrl('css/pages/dashboard.css') ?>">
<?php $this->stop('css') ?>