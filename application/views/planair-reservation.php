
	<div id="breadcrumb">
		<div class="container">	
			<div class="breadcrumb">							
				<li><a href="planair-index.php">Plan'Air</a></li>
				<li>Réservation</li>
			</div>		
		</div>	
	</div>
	
	<section id="contact-page" style="background: url(images/slider/bg2.jpg) no-repeat">
        <div class="container" style="padding:6em 0">
            <div class="center">        
                <h2>Réservez</h2>
                <p>Recherchez et réservez votre vol.</p>
            </div>

			<div class="row contact-wrap">
				<div class="status alert alert-success" style="display: none"></div>
				<?php echo form_open(base_url().'recherche',array('method'=>'get', 'id'=>'main-contact-form', 'class'=>'contact-form text-left', 'name'=>'contact-form', 'style'=>'padding-top:4em;'));?>
					<div class="col-sm-5 col-sm-offset-1">
						<div class="form-group">
							<label>Ville de départ *</label>
							<input type="text" name="villedepart" class="form-control" required="required" id="autocomplete">
						</div>
						<div class="form-group">
							<label>Date de départ *</label>
							<input type="date" name="datedepart" class="form-control from" required="required">
						</div>
						<div class="form-group">
							<div class="radio">
								<label><input type="radio" name="typevol">Aller - Retour</label>
							</div>
							<div class="radio">
								<label><input type="radio" name="typevol">Aller simple</label>
							</div>
						</div>
						<div class="form-group" style="color: initial">
							<input type="number" min="0" max="9" value="1" name="nombreadulte">
							<label>Adultes</label>
							<input type="number" min="0" max="9" value="0" name="nombreenfant">
							<label>Enfant(2 - 11ans)</label>
							<input type="number" min="0" max="9" value="0" name="nombrebebe">
							<label>Bébé</label>
						</div>
					</div>
					<div class="col-sm-5">
						<div class="form-group">
							<label>Ville d'arrivée *</label>
							<input type="text" name="villearrivee" class="form-control" required="required" id="autocomplete">
						</div>
						<div class="form-group">
							<label>Date d'arrivée *</label>
							<input type="date" name="datearrivee" class="form-control to" required="required">
						</div>
						<div class="form-group">
							<label>Classe</label>
							<select name="classe" class="form-control">
								<option value="false" selected>Economique</option>
								<option value="true">Affaire</option>
							</select>
						</div>
						<div class="form-group">
							<button type="submit" name="submit" class="btn btn-primary btn-lg" required="required">Réservez</button>
						</div>
					</div>
				<?php echo form_close() ?>
			</div><!--/.row-->
        </div><!--/.container-->
    </section><!--/#contact-page-->