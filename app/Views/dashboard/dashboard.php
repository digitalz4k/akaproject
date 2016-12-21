<?php $this->layout('layout', ['title' => 'Contact']) ?>
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
					    
				<li> <a href="#"> Nouvel évènement</a></li>
				<li> <a href="#"><i class="glyphicon glyphicon-cog" aria-hidden="true"></i> Paramètres</a></li>
				<li> <a href="#"><i class="glyphicon glyphicon-off" aria-hidden="true"></i> Déconnexion</a></li>
			</ul>
		</nav>
    </div>
        <div id="dashboard-section">
            <div class="col-xs-8">
                <div class="form-group">
                    <label for="nom-produit">Nom du produit:</label>
                    <input type="text" class="form-control" id="nom-produits">
                </div>
                <div class="form-group">
                    <label for="description-produit">Description du produit:</label>
                    <textarea class="form-control" rows="5" id="comment"></textarea>
                </div>
                <div class="form-group">
                    <label for="sel1">Spéc:</label>
                    <select class="form-control" id="sel1">
                        <option></option>
                        <option></option>
                        <option></option>
                        <option></option>
                    </select>
                </div>
                
            </div>
            
        </div>
    </div>
    
</div>


<!--section gauche nav -->

<!--ajouter un nouveau produit-->
<!--            form -->
<!--        nouvel évenement-->
        
<!--section droite content-->
<!--    form ajout -->
<!--        nom du produit-->
<!--        description-->
<!--        ajouter des spec -->
<!--            avec menu qui deroule avec bouton création de spec -->
<!--                spec basic  select multiple -->
<!--                spec detail -->

<?php $this->stop('main_content') ?>



