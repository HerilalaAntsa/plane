<?php setlocale(LC_TIME, 'fr_FR.utf8','fra') ?>
	<div id="breadcrumb">
		<div class="container">	
			<div class="breadcrumb">							
				<li><a href="ezjob-index.php">Easy Job</a></li>
				<li>Recherche</li>
			</div>		
		</div>	
	</div>
	
	<div class="services" style="padding: 0">
		<div class="container">
			<div class="row contact-wrap" style="color: initial">
				<div class="status alert alert-success" style="display: none"></div>
				<?php echo form_open(base_url().'Cv/recherche',array('method'=>'get', 'id'=>'main-contact-form', 'class'=>'contact-form text-left', 'name'=>'contact-form'));?>
				<div class="col-sm-5 col-sm-offset-1">

                    <div class="form-group">
						<label>Niveau d'etude maximum acquis *</label>
                            <select name="classe" class="form-control">
                                <option selected>BEPC</option>
                                <option>BACC</option>
                                <option>DTS</option>
                                <option>LICENCE</option>
                                <option>MASTER 1</option>
                                <option>MASTER 2</option>
                                <option>DOCTORAT</option>
                            </select>
					</div>

					<div class="form-group">
                        <label>Disponibilit&eacute *</label>
                        <select name="classe" class="form-control">
                            <option value="TRUE" selected>Immediate</option>
                            <option value="FALSE" >Avec pr&eacuteavis</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label>Domaine d'activit&eacute *</label>
                        <select name="classe" class="form-control">
                            <option value="TRUE" selected>Immediate</option>
                            <option value="FALSE" >Avec pr&eacuteavis</option>
                        </select>
                    </div>

                    <button type="submit" name="submit" class="btn btn-primary btn-lg pull-right" required="required">Rechercher</button>
				</div>

                <?php echo form_close(); ?>
			</div><!--/.row-->
		</div>
	</div>	
	
