	<div id="breadcrumb">
		<div class="container">	
			<div class="breadcrumb">							
				<li><a href="planair-index.php">Plan'Air</a></li>
				<li>Recherche</li>
			</div>		
		</div>	
	</div>
	<?php echo form_open(base_url().'go',array('method'=>'post', 'id'=>'main-contact-form', 'class'=>'contact-form text-left', 'name'=>'contact-form'));?>
	<div class="services" style="padding: 0">
		<div class="container">
			<div class="row contact-wrap form-inline" style="color: initial">
				<div class="status alert alert-success" style="display: none"></div>
				<?php echo form_hidden($hidden); ?>
				<h2>Passagers</h2>
				<?php if($nbadulte){
					echo form_hidden('nombreadulte', $nbadulte);
				?>
				<ol class="passager-list">
					Adulte
					<?php for($i = 0; $i < $nbadulte; $i++){ ?>
					<li>
						<div class="form-group">
							<label>Nom</label>
							<input type="text" name="nompassager[]" class="form-control" required="required">
						</div>
						<div class="form-group">
							<label>Prénom</label>
							<input type="text" name="prenompassager[]" class="form-control">
						</div>
						<div class="form-group">
							<label>Date de naissance</label>
							<input type="date" name="naissancepassager[]" class="form-control adulte" required="required">
						</div>
					</li>
					<?php } ?>
				</ol>
				<?php }
					if($nbenfant){
						echo form_hidden('nombreenfant', $nbenfant);
				?>
				<ol class="passager-list">
					Enfant
					<?php for($i = 0; $i < $nbenfant; $i++){ ?>
						<li>
							<div class="form-group">
								<label>Nom</label>
								<input type="text" name="nompassager[]" class="form-control" required="required">
							</div>
							<div class="form-group">
								<label>Prénom</label>
								<input type="text" name="prenompassager[]" class="form-control">
							</div>
							<div class="form-group">
								<label>Date de naissance</label>
								<input type="date" name="naissancepassager[]" class="form-control enfant" required="required">
							</div>
						</li>
					<?php } ?>
				</ol>
				<?php }
				if($nbbebe){
					echo form_hidden('nombrebebe', $nbbebe);
				?>
				<ol class="passager-list">
					Bébé
					<?php for($i = 0; $i < $nbbebe; $i++){ ?>
						<li>
							<div class="form-group">
								<label>Nom</label>
								<input type="text" name="nompassager[]" class="form-control" required="required">
							</div>
							<div class="form-group">
								<label>Prénom</label>
								<input type="text" name="prenompassager[]" class="form-control">
							</div>
							<div class="form-group">
								<label>Date de naissance</label>
								<input type="date" name="naissancepassager[]" class="form-control bebe" required="required">
							</div>
						</li>
					<?php } ?>
				</ol>
				<?php } ?>
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
								<input type="text" name="nomclient" class="form-control" required="required">
							</div>
							<div class="form-group">
								<label>Prénom</label>
								<input type="text" name="prenomclient" class="form-control from" required="required">
							</div>
						</div>
						<div class="col-sm-5">
							<div class="form-group">
								<label>Adresse Email</label>
								<input type="text" name="emailclient" class="form-control" required="required">
							</div>
							<div class="form-group">
								<label>Téléphone</label>
								<input type="date" name="telephoneclient" class="form-control" required="required">
							</div>
							<div class="form-group">
								<label>Adresse</label>
								<input type="text" name="adresseclient" class="form-control">
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