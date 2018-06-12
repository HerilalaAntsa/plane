
	<div id="breadcrumb">
		<div class="container">	
			<div class="breadcrumb">							
				<li><a href="ezjob-index.php">Plan'Air</a></li>
				<li>Réservation</li>
			</div>		
		</div>	
	</div>
	
	<section id="contact-page" style="background: url(<?php echo base_url(); ?>assets/images/slider/bg2.jpg) no-repeat">
        <div class="container" style="padding:6em 0">
            <div class="center">        
                <h2>Depot de CV</h2>
            </div>

			<div class="row contact-wrap">
				<div class="status alert alert-success" style="display: none"></div>
				<?php echo form_open(base_url().'Candidat/soumettre',array('method'=>'get', 'id'=>'main-contact-form', 'class'=>'contact-form text-left', 'name'=>'contact-form', 'style'=>'padding-top:4em;'));?>
					<div class="col-sm-5 col-sm-offset-1">
						<div class="form-group">
							<label>Nom *</label>
							<input type="text" name="names" class="form-control" required="required" id="autocomplete">
						</div>

						<div class="form-group">
							<label>Prenoms *</label>
							<input type="text" name="Prenoms" class="form-control from" required="required">
						</div>

						<div class="form-group">
                            <label>Situation actuelle *</label>
							<div class="radio">
								<label><input type="radio" name="typevol">En poste</label>
							</div>
							<div class="radio">
								<label><input type="radio" name="typevol">En recherche</label>
							</div>
						</div>

					</div>
					<div class="col-sm-5">
						<div class="form-group">
							<label>Ville d'arrivée *</label>
							<input type="text" name="villearrivee" class="form-control" required="required" id="autocomplete1">
						</div>
						<div class="form-group">
							<label>Date de retour *</label>
							<input type="text" name="datearrivee" class="form-control to" required="required">
						</div>
						<div class="form-group">
							<label>Classe</label>
							<select name="classe" class="form-control">
								<option value="false" selected>Economique</option>
								<option value="true">Affaire</option>
							</select>
						</div>
						<div class="form-group">
							<label>Plus ou moins nombre de jours</label>
							<select name="nbjour" class="form-control">
								<option value="1">1</option>
								<option value="2">2</option>
								<option value="3" selected>3</option>
								<option value="4">4</option>
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