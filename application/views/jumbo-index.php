<?php setlocale(LC_TIME, 'fr_FR.utf8','fra') ?>
	<div id="breadcrumb">
		<div class="container">	
			<div class="breadcrumb">							
				<li><a href="<?php echo base_url() ?>">Easy Job</a></li>
				<li>Jumbo</li>
			</div>		
		</div>	
	</div>
	
	<div class="services" style="padding: 0; color:initial;">
		<div class="container">
			<div class="row contact-wrap" style="color: initial">
				<div class="col-sm-5 col-sm-offset-1">

                    <div class="container">
                        <button class="btn-success btn">Importer des donn&eacutees</button>
                        <h2>Liste de nos caisse SUPERMAKI</h2>
                        <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>Nom</th>
                                        <th>Nombre de caisse</th>
                                        <th>Vente</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Ambanidia</td>
                                        <td>10</td>
                                        <td>1 200 000 Ar</td>
                                    </tr>
                                    <tr>
                                        <td>Apandrana</td>
                                        <td>6</td>
                                        <td>600 000 Ar</td>
                                    </tr>
                                </tbody>
                        </table>
                    </div>


        <div class="container bg-success">
            <h2>Résultats</h2>
            <p>Résultats de recherche des CV disponibles</p>
            <div class="table-responsive">
                <table class="table table-hover">
                    <thead>
                    <tr>
                        <th></th>
                        <th>Nom</th>
                        <th>Nombre de caisse</th>
                        <th>Vente</th>
                        <th>Date</th>
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
                                <td><a class="btn btn-primary" href="<?php echo base_url()."Candidat/pdf/".$row->getId(); ?>">PDF</a>
                                    <a class="btn btn-info" href="<?php echo base_url()."Candidat/ficheCV/".$row->getId(); ?>">Voir</a>
                                    <a class="btn btn-warning" href="<?php echo base_url()."Candidat/Modification/".$row->getId(); ?>">Modifier</a>
                                </td>
                            </tr>
                        <?php }
                    } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
	
