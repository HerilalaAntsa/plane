<!DOCTYPE html>
<html>
<head>
</head>
<body>
<div class="row">
    <div class="col-sm-3"></div>
    <div class="col-sm-9">
        <div class="row">
            <h2>Curriculum Vitae </h2><hr>

            <div class="row well">
                <p><?php echo $cv->getId(); ?></p>
                <p style="float:right"><img width="100px" src="<?php echo base_url()."assets/images/".$cv->getCandidat()->getPhoto(); ?>"/></p>
                <p><b>Nom :</b> <?php echo $cv->getCandidat()->getNom(); ?></p>
                <p><b>Prénom :</b> <?php echo $cv->getCandidat()->getPrenom(); ?></p>
                <p><b>Né le :</b> <?php echo $cv->getCandidat()->getDatenaissanceString(); ?></p>
                <p><b>Age :</b> <?php echo $cv->getCandidat()->getAge(); ?></p>
                <p><b>Adresse :</b> <?php echo $cv->getCandidat()->getAdresse(); ?></p>
                <p><b>Téléphone :</b> <?php echo $cv->getCandidat()->getTel(); ?></p>
                <p><b>Adresse email :</b> <?php echo $cv->getCandidat()->getMail(); ?></p>
                <p><b>Sexe :</b> <?php echo $cv->getCandidat()->getSexe(); ?></p>
                <br>
                <hr>
                <br><br>
                    <p><b>Civilité</b> : <?php echo $cv->getCivilite(); ?></p>
                    <p><b>Expérience</b> : <?php echo $cv->getExperience(); ?></p>
                    <p><b>Formation</b> : <?php echo $cv->getFormation(); ?></p>
                    <p><b>Compétence</b> : <?php echo $cv->getCompetence(); ?></p>
                    <p><b>Situation</b> : <?php echo $cv->getSituation(); ?></p>
                    <p><b> Domaine</b> : <?php echo $cv->getDomaine(); ?></p>
                    <p><b>Disponibilité</b> : <?php echo $cv->getDisponibilite(); ?></p>
                    <p><b>Ville</b> : <?php echo $cv->getVille(); ?></p>
                    <p><b>Niveau d'étude</b> : <?php echo $cv->getNiveauEtude(); ?></p>

            </div>



        </div>
    </div>
</div>
</body>
</html>