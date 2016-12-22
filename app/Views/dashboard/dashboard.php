<?php $this->layout('layout', ['title' => 'Dashboard']) ?>
<?php $this->start('main_content') ?>

<div id="main-dashboard">
    <div class="row">
        <nav class=" col-xs-2">
			<ul class="nav nav-pills nav-stacked" >
				<li> <a href="#"><i class="glyphicon glyphicon-home" aria-hidden="true"></i> Acceuil</a></li>				
                <li> <a href="#"> Nouveau produit</a></li>
				<!--Form Nom du produit-->
				<!--               description-->
				<!--               ajouter des specs-->
				<!--               specs basic  avec un  select multiple-->
			    <!--               specs detail-->
			    <li> <a href="#"> Modification / Supression produit</a></li>
				<li> <a href="#"> Nouvel évènement</a></li>
				<li> <a href="/akaproject/public/aka-admin/logout"><i class="glyphicon glyphicon-off" aria-hidden="true"></i> Déconnexion</a></li>
			</ul>
		</nav>
    
        <div id="dashboard-section">
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
        </div>        
    </div>
</div>
<?php $this->stop('main_content') ?>
<?php $this->start('js') ?>
	<script src="<?= $this->assetUrl('js/dashboard.js') ?>"></script>
<?php $this->stop('js') ?>



