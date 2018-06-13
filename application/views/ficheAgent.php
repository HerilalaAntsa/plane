
<!-- page content -->
<div class="right_col" role="main">
    <div class="">
        <div class="page-title">
            <div class="title_left">
                <h3>Votre CV</h3>
            </div>

            <div class="title_right">
                <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                </div>
            </div>
        </div>

        <div class="clearfix"></div>

        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                    <div class="x_title">
                        <h2>Detail CV</h2>
                        <ul class="nav navbar-right panel_toolbox">
                            <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                        </ul>
                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content">
                        <?php if ($error!=""){ ?>
                            <div class="alert alert-danger">
                                <?php echo $error; ?>
                            </div>
                        <?php } ?>
                        <div class="col-md-3 col-sm-3 col-xs-12 profile_left">
                            <div class="profile_img">
                                <div id="crop-avatar">
                                    <!-- Current avatar -->
                                    <img width="100px" class="img-responsive avatar-view" src="<?php echo base_url(); ?>assets/images/<?php echo $cv->getCandidat()->getPhoto(); ?>" alt="Avatar" title="Change the avatar">
                                </div>
                            </div>
                            <h3><?php echo $cv->getCandidat()->getFullName(); ?></h3>

                            <ul class="list-unstyled user_data" style="color: initial">
                                <li><i class="fa  user-profile-icon"></i> <?php echo $cv->getCandidat()->getAge() ?> ans</h3>
                                </li>

                                <li><i class="fa fa-map-marker user-profile-icon"></i> <?php echo $cv->getCandidat()->getAdresse() ?></h3>
                                </li>

                                <li>
                                    <strong>Né le </strong> <?php echo $cv->getCandidat()->getDateNaissanceString() ?>
                                </li>

                                <li><i class="fa fa-sex user-profile-icon">Sexe :</i> <?php echo $cv->getCandidat()->getSexe(); ?>
                                </li>


                                <li class="m-top-xs">
                                    <i class="fa fa-external-link user-profile-icon"></i>
                                    <a href="http://www.kimlabs.com/profile/" target="_blank"><?php echo $cv->getCandidat()->getMail(); ?></a>
                                </li>

                                <li>
                                    <i class="fa fa-phone user-profile-icon"></i> <?php echo $cv->getCandidat()->getTel() ?></h3>
                                </li>
                            </ul>

                            <a href="<?php echo base_url(); ?>Candidat/Modification/<?php echo $cv->getId() ?>" type="button" class="btn btn-success btn-md">
                                <i class="fa fa-edit"></i> Modifier
                            </a>

                            <br />

                        </div>
                        <div class="col-md-9 col-sm-9 col-xs-12 well">
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
        </div>
    </div>
</div>