
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
                                    <img class="img-responsive avatar-view" src="<?php echo base_url(); ?>assets/images/<?php echo $cv->getPhoto(); ?>" alt="Avatar" title="Change the avatar">
                                </div>
                            </div>
                            <h3><?php echo $cv->getFullName(); ?></h3>

                            <ul class="list-unstyled user_data">
                                <li><i class="fa  user-profile-icon"></i> <?php echo $cv->getAge() ?> ans</h3>
                                </li>

                                <li><i class="fa fa-map-marker user-profile-icon"></i> <?php echo $cv->getAdresse() ?></h3>
                                </li>

                                <li>
                                    <strong>Né le </strong> <?php echo $cv->getDateNaissance() ?>
                                </li>

                                <li><i class="fa fa-sex user-profile-icon">Sexe :</i> <?php echo $cv->getSexe(); ?>
                                </li>

                                <li>
                                    <i class="fa fa-briefcase user-profile-icon"></i> <?php echo $cv->getHierarchieString(); ?>
                                </li>

                                <li class="m-top-xs">
                                    <i class="fa fa-external-link user-profile-icon"></i>
                                    <a href="http://www.kimlabs.com/profile/" target="_blank"><?php echo $cv->getEmail(); ?></a>
                                </li>

                                <li>
                                    <i class="fa fa-phone user-profile-icon"></i> <?php echo $cv->getTelephone() ?></h3>
                                </li>
                            </ul>

                            <a href="<?php echo base_url(); ?>Cv/Modification/<?php echo $cv->getId() ?>" type="button" class="btn btn-success btn-md">
                                <i class="fa fa-edit"></i> Modifier
                            </a>

                            <br />

                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>