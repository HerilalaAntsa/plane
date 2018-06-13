<?php setlocale(LC_TIME, 'fr_FR.utf8','fra') ?>
	<div id="breadcrumb">
		<div class="container">	
			<div class="breadcrumb">							
				<li><a href="<?php echo base_url() ?>">Easy Job</a></li>
				<li>Recherche</li>
			</div>		
		</div>	
	</div>
	
	<div class="services" style="padding: 0; color:initial;">
		<div class="container">
			<div class="row contact-wrap" style="color: initial">
				<div class="status alert alert-success" style="display: none"></div>
				<?php echo form_open(base_url().'Recherche',array('method'=>'get', 'id'=>'main-contact-form', 'class'=>'contact-form text-left', 'name'=>'contact-form'));?>
				<div class="col-sm-5 col-sm-offset-1">

                    <div class="form-group">
						<label>Niveau d'etude maximum acquis *</label>
                        <select class="form-control" id="niveauEtude" name="niveauEtude"  required="required">
                            <option value="bepc" <?php echo set_select('niveauEtude',"bepc"); ?>>BEPC</option>
                            <option value="bac" <?php echo set_select('niveauEtude',"bac"); ?>>BAC</option>
                            <option value="bac+2" <?php echo set_select('niveauEtude',"bac+2"); ?>>BAC+2</option>
                            <option value="bac+3" <?php echo set_select('niveauEtude',"bac+3"); ?>>BAC+3</option>
                            <option value="bac+4" <?php echo set_select('niveauEtude',"bac+4"); ?>>BAC+4</option>
                            <option value="bac+5" <?php echo set_select('niveauEtude',"bac+5"); ?>>BAC+5</option>
                            <option value="autre" <?php echo set_select('niveauEtude',"autre"); ?>>Autre</option>
                        </select>
                        <p style="color:red;"><?php echo form_error('niveauEtude'); ?></p>
					</div>

					<div class="form-group">
                        <select class="form-control" id="disponibilite" name="disponibilite">
                            <option value="immediate" <?php echo set_select('disponibilite',"immediate"); ?>>Immediate</option>
                            <option value="preavis" <?php echo set_select('disponibilite',"preavis"); ?>>Avec preavis</option>
                        </select>
                        <p style="color:red;"><?php echo form_error('disponibilite'); ?></p>
                    </div>

                    <div class="form-group">
                        <label>Domaine d'activit&eacute *</label>
                        <select class="form-control" id="domaine" name="domaine">
                            <option value="gestion" <?php echo set_select('domaine',"gestion"); ?>>Gestion</option>
                            <option value="informatique" <?php echo set_select('domaine',"informatique"); ?>>Informatique</option>
                            <option value="comptabilisation" <?php echo set_select('domaine',"comptabilisation"); ?>>Comptabilit&eacute</option>
                            <option value="commerce" <?php echo set_select('domaine',"commerce"); ?>>Commerce</option>
                            <option value="agroalimentaire" <?php echo set_select('domaine',"agroalimentaire"); ?>>Agroalimentaire</option>
                        </select>
                        <p style="color:red;"><?php echo form_error('domaine'); ?></p>
                    </div>

                    <button type="submit" class="btn btn-primary btn-lg pull-right" required="required">Rechercher</button>
				</div>

                <?php echo form_close(); ?>
			</div><!--/.row-->
		</div>
        <div class="container bg-success">
            <h2>Résultats</h2>
            <p>Résultats de recherche des CV disponibles</p>
            <div class="table-responsive">
                <table class="table table-hover">
                    <thead>
                    <tr>
                        <th>#</th>
                        <th>Photo</th>
                        <th>Nom</th>
                        <th>Prénom</th>
                        <th>Age</th>
                        <th>Adresse</th>
                        <th>Téléphone</th>
                        <th>Email</th>
                        <th>Sexe</th>
                        <th>Dossier</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php if($results){
                        foreach ($results as $row){ ?>
                            <tr>
                                <td><?php echo $row->getId(); ?></td>
                                <td><img width="20px" src="<?php echo base_url()."assets/images/".$row->getCandidat()->getPhoto(); ?>"/></td>
                                <td><?php echo $row->getCandidat()->getNom(); ?></td>
                                <td><?php echo $row->getCandidat()->getPrenom(); ?></td>
                                <td><?php echo $row->getCandidat()->getAge(); ?></td>
                                <td><?php echo $row->getCandidat()->getAdresse(); ?></td>
                                <td><?php echo $row->getCandidat()->getTel(); ?></td>
                                <td><?php echo $row->getCandidat()->getMail(); ?></td>
                                <td><?php echo $row->getCandidat()->getSexe(); ?></td>
                                <td>
                                    <p><b>Civilité</b> : <?php echo $row->getCivilite(); ?></p>
                                    <p><b>Expérience</b> : <?php echo $row->getExperience(); ?></p>
                                    <p><b>Formation</b> : <?php echo $row->getFormation(); ?></p>
                                    <p><b>Compétence</b> : <?php echo $row->getCompetence(); ?></p>
                                    <p><b>Situation</b> : <?php echo $row->getSituation(); ?></p>
                                    <p><b> Domaine</b> : <?php echo $row->getDomaine(); ?></p>
                                    <p><b>Disponibilité</b> : <?php echo $row->getDisponibilite(); ?></p>
                                    <p><b>Ville</b> : <?php echo $row->getVille(); ?></p>
                                    <p><b>Niveau d'étude</b> : <?php echo $row->getNiveauEtude(); ?></p>
                                </td>
                            </tr>
                        <?php }
                    } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
	
