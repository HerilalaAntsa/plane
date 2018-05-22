	<div id="breadcrumb">
		<div class="container">	
			<div class="breadcrumb">							
				<li><a href="planair-index.php">Plan'Air</a></li>
				<li>Recherche</li>
			</div>		
		</div>	
	</div>

	<form id="main-contact-form" class="contact-form text-left" name="contact-form" method="post" action="sendemail.php">
	<div class="services" style="padding: 0">
		<div class="container">
			<div class="row contact-wrap form-inline" style="color: initial">
				<div class="status alert alert-success" style="display: none"></div>
				<h2>Passagers</h2>
				<ol class="passager-list">
					<li>
						<div class="form-group">
							<label>Nom</label>
							<input type="text" name="villedepart" class="form-control" required="required" id="autocomplete">
						</div>
						<div class="form-group">
							<label>Prénom</label>
							<input type="text" name="villearrivee" class="form-control" required="required" id="autocomplete">
						</div>
						<div class="form-group">
							<label>Date de naissance</label>
							<input type="date" name="datedepart" class="form-control from" required="required">
						</div>
					</li>
					<li>
						<div class="form-group">
							<label>Nom</label>
							<input type="text" name="villedepart" class="form-control" required="required">
						</div>
						<div class="form-group">
							<label>Prénom</label>
							<input type="text" name="villearrivee" class="form-control" required="required">
						</div>
						<div class="form-group">
							<label>Date de naissance</label>
							<input type="date" name="datedepart" class="form-control from" required="required">
						</div>
					</li>
					<li>
						<div class="form-group">
							<label>Nom</label>
							<input type="text" name="villedepart" class="form-control" required="required">
						</div>
						<div class="form-group">
							<label>Prénom</label>
							<input type="text" name="villearrivee" class="form-control" required="required">
						</div>
						<div class="form-group">
							<label>Date de naissance</label>
							<input type="date" name="datedepart" class="form-control from" required="required">
						</div>
					</li>
					<li>
						<div class="form-group">
							<label>Nom</label>
							<input type="text" name="villedepart" class="form-control" required="required">
						</div>
						<div class="form-group">
							<label>Prénom</label>
							<input type="text" name="villearrivee" class="form-control" required="required">
						</div>
						<div class="form-group">
							<label>Date de naissance</label>
							<input type="date" name="datedepart" class="form-control from" required="required">
						</div>
					</li>
				</ol>
			</div><!--/.row-->
		</div>
	</div>	
	
	<div class="sub-services">
		<div class="container">
			<div class="col-md-12">
				<div class="row contact-wrap" style="color: initial">
					<div class="status alert alert-success" style="display: none"></div>
						<h4>Vos informations</h4>
						<div class="col-sm-5 col-sm-offset-1">
							<div class="form-group">
								<label>Nom *</label>
								<input type="text" name="villedepart" class="form-control" required="required">
							</div>
							<div class="form-group">
								<label>Adresse *</label>
								<input type="date" name="datedepart" class="form-control from" required="required">
							</div>
						</div>
						<div class="col-sm-5">
							<div class="form-group">
								<label>Ville d'arrivée *</label>
								<input type="text" name="villearrivee" class="form-control" required="required">
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
								<button type="submit" name="submit" class="btn btn-primary btn-lg" required="required">Rechercher</button>
							</div>
						</div>
				</div><!--/.row-->
			</div>
		</div>
	</div>
	</form>