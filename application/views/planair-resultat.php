	<div id="breadcrumb">
		<div class="container">	
			<div class="breadcrumb">							
				<li><a href="planair-index.php">Plan'Air</a></li>
				<li>Recherche</li>
			</div>		
		</div>	
	</div>
	
	<div class="services" style="padding: 0">
		<div class="container">
			<div class="row contact-wrap" style="color: initial">
				<div class="status alert alert-success" style="display: none"></div>
				<form id="main-contact-form" class="contact-form text-left" name="contact-form" method="post" action="sendemail.php">
					<h2>Recherche</h2>
					<div class="col-sm-5 col-sm-offset-1">
						<div class="form-group">
							<label>Ville de départ *</label>
							<input type="text" name="villedepart" class="form-control" required="required">
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
				</form>
			</div><!--/.row-->
		</div>
	</div>	
	
	<div class="sub-services">
		<div class="container">
			<div class="col-md-12">
				<form>
					<table class="table text-center" style="color: initial">
						<thead>
						<tr class="active">
							<th style="text-align: center !important;">19-05-2018</th>
							<th style="text-align: center !important;">20-05-2018</th>
							<th style="text-align: center !important;">21-05-2018</th>
							<th style="text-align: center !important;">22-05-2018</th>
							<th style="text-align: center !important;">23-05-2018</th>
							<th style="text-align: center !important;">24-05-2018</th>
							<th style="text-align: center !important;">25-05-2018</th>
						</tr>
						</thead>
						<tbody>
						<tr class="success">
							<td><label><input type="radio" name="optradio"> Option 2</label></td>
							<td><label><input type="radio" name="optradio"> Option 2</label></td>
							<td><label><input type="radio" name="optradio"> Option 2</label></td>
							<td><label><input type="radio" name="optradio"> Option 2</label></td>
							<td><label><input type="radio" name="optradio"> Option 2</label></td>
							<td><label><input type="radio" name="optradio"> Option 2</label></td>
							<td><label><input type="radio" name="optradio"> Option 2</label></td>
						</tr>
						</tbody>
					</table>
					<button type="submit" name="submit" class="btn btn-primary btn-lg pull-right" required="required">Réservez</button>
				</form>
			</div>
		</div>
	</div>