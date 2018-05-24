<?php setlocale(LC_TIME, 'fr_FR.utf8','fra') ?>
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
				<?php echo form_open(base_url().'Vol/recherche',array('method'=>'get', 'id'=>'main-contact-form', 'class'=>'contact-form text-left', 'name'=>'contact-form'));?>
				<div class="col-sm-5 col-sm-offset-1">
					<div class="form-group">

						<label>Ville de départ *</label>
						<input type="text" name="villedepart" class="form-control" required="required" id="autocomplete">
					</div>
					<div class="form-group">
						<label>Date de départ *</label>
						<input type="text" name="datedepart" class="form-control from" required="required">
					</div>
					<div class="form-group">
						<div class="radio">
							<label><input type="radio" name="typevol" value="true">Aller - Retour</label>
						</div>
						<div class="radio">
							<label><input type="radio" name="typevol" value="false">Aller simple</label>
						</div>
					</div>
					<div class="form-group">
						<input type="number" min="0" max="9" value="1" name="nombreadulte">
						<label>Adultes</label>
					</div>
					<div class="form-group">
						<input type="number" min="0" max="9" value="0" name="nombreenfant">
						<label>Enfant(2 - 11ans)</label>
					</div>
					<div class="form-group">
						<input type="number" min="0" max="9" value="0" name="nombrebebe">
						<label>Bébé</label>
					</div>
				</div>

				<div class="col-sm-5">
					<div class="form-group">
						<label>Ville d'arrivée *</label>
						<input type="text" name="villearrivee" class="form-control" required="required" id="autocomplete1">
					</div>
					<div class="form-group">
						<label>Date d'arrivée *</label>
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
						<button type="submit" name="submit" class="btn btn-primary btn-lg" required="required">Rechercher</button>
					</div>
				</div>
				<?php echo form_close(); ?>
			</div><!--/.row-->
		</div>
	</div>	
	
	<div class="sub-services">
		<div class="container">
			<div class="col-md-12">

                <?php echo form_open(base_url().'Vol/reserver',array('method'=>'post'));?>
					<table class="table text-center" style="color: initial">
						<thead>
						<tr class="active">
                            <?php foreach ($allers as $date => $vol){
                                $dateformat = strtotime($date);
                            ?>
                                <th style="text-align: center !important;"><?php echo strftime('%A %d %b %Y', $dateformat); ?></th>
                            <?php } ?>
						</tr>
						</thead>
						<tbody>
						<tr class="success">
                            <?php foreach ($allers as $vol){
                            if ($vol->getId()) { ?>
                                <td><label><input type="radio" name="numerovolaller" value="<?php echo $vol->getId() ?>" checked><br>A partir de <?php echo $vol->getTarifAdulte() ?> €</label></td>
                            <?php }else echo '<td>-</td>';
                            } ?>
						</tr>
						</tbody>
					</table>
					<?php echo form_hidden($hidden); ?>
                    <?php if(isset($retours)){ ?>
                    <table class="table text-center" style="color: initial">
                        <thead>
                        <tr class="active">
                            <?php foreach ($retours as $date => $vol){
                                $dateformat = strtotime($date); ?>
                                <th style="text-align: center !important;"><?php echo strftime('%A %d %b %Y', $dateformat); ?></th>
                            <?php } ?>
                        </tr>
                        </thead>
                        <tbody>
                        <tr class="success">
                            <?php foreach ($retours as $vol) {
                                if ($vol->getId()) { ?>
                                    <td><label>
                                            <input type="radio" name="numerovolretour" value="<?php echo $vol->getId() ?>" checked>
                                            <br>A partir de <?php echo $vol->getTarifAdulte() ?> €</label></td>
                                <?php }else echo '<td>-</td>';
                            } ?>
                        </tr>
                        </tbody>
                    </table>
                    <?php } ?>
					<button type="submit" name="submit" class="btn btn-primary btn-lg pull-right" required="required">Réservez</button>
				<?php form_close() ?>
			</div>
		</div>
	</div>