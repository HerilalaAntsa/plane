
<!-- page content -->
<div class="right_col" role="main">
    <div class="">
        <div class="page-title">
            <div class="title_left">
                <h3>Fiche Agent</h3>
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
                        <h2>Detail Agent</h2>
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
                                    <img class="img-responsive avatar-view" src="<?php echo base_url(); ?>assets/images/<?php echo $agent->getPhoto(); ?>" alt="Avatar" title="Change the avatar">
                                </div>
                            </div>
                            <h3><?php echo $agent->getFullName(); ?></h3>

                            <ul class="list-unstyled user_data">
                                <li><i class="fa  user-profile-icon"></i> <?php echo $agent->getAge() ?> ans</h3>
                                </li>

                                <li><i class="fa fa-map-marker user-profile-icon"></i> <?php echo $agent->getAdresse() ?></h3>
                                </li>

                                <li>
                                    <strong>Né le </strong> <?php echo $agent->getDateNaissance() ?>
                                </li>

                                <li><i class="fa fa-sex user-profile-icon">Sexe :</i> <?php echo $agent->getSexeString(); ?>
                                </li>

                                <li>
                                    <i class="fa fa-briefcase user-profile-icon"></i> <?php echo $agent->getHierarchieString(); ?>
                                </li>

                                <li class="m-top-xs">
                                    <i class="fa fa-external-link user-profile-icon"></i>
                                    <a href="http://www.kimlabs.com/profile/" target="_blank"><?php echo $agent->getEmail(); ?></a>
                                </li>

                                <li>
                                    <i class="fa fa-phone user-profile-icon"></i> <?php echo $agent->getTelephone() ?></h3>
                                </li>
                            </ul>

                            <a href="<?php echo base_url(); ?>Utilisateur/Modification/<?php echo $agent->getId() ?>" type="button" class="btn btn-success btn-md">
                                <i class="fa fa-edit"></i> Modifier
                            </a>

                            <br />

                        </div>
                        <div class="col-md-9 col-sm-9 col-xs-12">

<!--                            <div class="profile_title">-->
<!--                                <div class="col-md-6">-->
<!--                                    <h2>User Activity Report</h2>-->
<!--                                </div>-->
<!--                                <div class="col-md-6">-->
<!--                                    <div id="reportrange" class="pull-right" style="margin-top: 5px; background: #fff; cursor: pointer; padding: 5px 10px; border: 1px solid #E6E9ED">-->
<!--                                        <i class="glyphicon glyphicon-calendar fa fa-calendar"></i>-->
<!--                                        <span>December 30, 2014 - January 28, 2015</span> <b class="caret"></b>-->
<!--                                    </div>-->
<!--                                </div>-->
<!--                            </div>-->
<!--                            -->
<!--                            <!-- start of user-activity-graph -->
<!--                            <div id="graph_bar" style="width:100%; height:280px;"></div>-->
<!--                            <!-- end of user-activity-graph -->

                            <!-- start skills -->
<!--                            <h4>Statistiques</h4>-->
<!--                            <h5><strong>--><?php //echo $stats->getQuantiteTotale() ?><!-- </strong> Appel(s) en total</h5>-->
<!--                            <ul class="list-unstyled user_data">-->
<!--                                <li>-->
<!--                                    <p>--><?php //echo $stats->getPasinteresse() ?><!-- </strong> Appel(s) pas intéressé</p>-->
<!--                                    <div class="progress progress_md">-->
<!--                                        <div class="progress-bar bg-red" role="progressbar" data-transitiongoal="--><?php //echo $stats->getPasinteressePourcentage() ?><!--">--><?php //echo $stats->getPasinteressePourcentage() ?><!-- %</div>-->
<!--                                    </div>-->
<!--                                </li>-->
<!--                                <li>-->
<!--                                    <p>--><?php //echo $stats->getRendezvous() ?><!-- </strong> Appel(s) demandant un rendez-vous</p>-->
<!--                                    <div class="progress progress_md">-->
<!--                                        <div class="progress-bar bg-green" role="progressbar" data-transitiongoal="--><?php //echo $stats->getRendezvousPourcentage() ?><!--">--><?php //echo $stats->getRendezvousPourcentage() ?><!-- %</div>-->
<!--                                    </div>-->
<!--                                </li>-->
<!--                                <li>-->
<!--                                    <p>--><?php //echo $stats->getRappeler() ?><!-- </strong> Appel(s) demandant un rappel</p>-->
<!--                                    <div class="progress progress_md">-->
<!--                                        <div class="progress-bar bg-green" role="progressbar" data-transitiongoal="--><?php //echo $stats->getRappelerPourcentage() ?><!--">--><?php //echo $stats->getRappelerPourcentage() ?><!-- %</div>-->
<!--                                    </div>-->
<!--                                </li>-->
<!--                            </ul>-->
<!--                            <!-- end of skills -->
<!--                            <br>-->
<!--                            <hr>-->

                            <div class="" role="tabpanel" data-example-id="togglable-tabs">
                                <ul id="myTab" class="nav nav-tabs bar_tabs" role="tablist">
                                    <li role="presentation" class="active"><a href="#tab_content1" id="home-tab" role="tab" data-toggle="tab" aria-expanded="true">Tous</a>
                                    </li>
                                    <li role="presentation" class=""><a href="#tab_content2" role="tab" id="profile-tab" data-toggle="tab" aria-expanded="false">Appel entrant</a>
                                    </li>
                                    <li role="presentation" class=""><a href="#tab_content3" role="tab" id="profile-tab2" data-toggle="tab" aria-expanded="false">Appel sortant</a>
                                    </li>
                                </ul>
                                <div id="myTabContent" class="tab-content">
                                    <div role="tabpanel" class="tab-pane fade active in" id="tab_content1" aria-labelledby="home-tab">

                                        <!-- start recent activity -->
                                        <ul class="messages">
                                            <?php if(isset($ltAppelEntrant)){
                                                foreach ($ltAppel as $appel){ ?>

                                                    <li>
                                                        <img src="<?php echo base_url(); ?>assets/images/user.png"  class="avatar" alt="Avatar">
                                                        <div class="message_wrapper">
                                                            <h4 class="heading"><?php echo $appel->getClient() ?></h4>
                                                            <blockquote class="message">
                                                                <?php echo $appel->getDateAppel() ?>
                                                                <?php if($appel->isAppelEntrant()){?>
                                                                    <span class="fa fa-reply" style="color: #00a65a" ></span>
                                                                <?php }else{ ?>
                                                                    <span class="fa fa-share" style="color: #cd0a0a" ></span>
                                                                <?php } ?>
                                                                <br>
                                                                <small><i>Durée : <?php echo $appel->getDureeAppelString() ?></i></small>
                                                                <?php echo $appel->getCommentaireAction() ?>
                                                            </blockquote>
                                                            <br />
                                                            <p class="url">
                                                                <?php if($appel->getAction()=='rendez-vous'){?>
                                                                    <span class="fs1 text-info" aria-hidden="true" data-icon=""></span>
                                                                    <a href="#"><i class="fa fa-pencil-square-o"></i> Rendez-vous le <?php echo $appel->getDateAction() ?> </a>
                                                                <?php } ?>
                                                                <?php if($appel->getAction()=='rappeler'){?>
                                                                    <span class="fs1 text-info" aria-hidden="true" data-icon=""></span>
                                                                    <a href="#"><i class="fa fa-pencil-square-o"></i> Rappeler le <?php echo $appel->getDateAction() ?> </a>
                                                                <?php } ?>
                                                            </p>
                                                        </div>
                                                    </li>
                                                <?php }
                                            }  ?>
                                        </ul>
                                        <!-- end recent activity -->

                                    </div>
                                    <div role="tabpanel" class="tab-pane fade" id="tab_content2" aria-labelledby="profile-tab">

                                        <ul class="messages">
                                            <?php if(isset($ltAppelEntrant)){
                                            foreach ($ltAppelEntrant as $appel){?>
                                                <li>
                                                    <img src="<?php echo base_url(); ?>assets/images/user.png"  class="avatar" alt="Avatar">
                                                    <div class="message_wrapper">
                                                        <h4 class="heading"><?php echo $appel->getClient() ?></h4>
                                                        <blockquote class="message">
                                                            <?php echo $appel->getDateAppel() ?>
                                                            <?php if($appel->isAppelEntrant()){?>
                                                                <span class="fa fa-reply" style="color: #00a65a" ></span>
                                                            <?php }else{ ?>
                                                                <span class="fa fa-share" style="color: #cd0a0a" ></span>
                                                            <?php } ?>
                                                            <br>
                                                            <?php echo $appel->getCommentaireAction() ?>
                                                        </blockquote>
                                                        <br />
                                                        <p class="url">
                                                            <?php if($appel->getAction()=='rendez-vous'){?>
                                                                <span class="fs1 text-info" aria-hidden="true" data-icon=""></span>
                                                                <a href="#"><i class="fa fa-pencil-square-o"></i> Rendez-vous le <?php echo $appel->getDateAction() ?> </a>
                                                            <?php } ?>
                                                            <?php if($appel->getAction()=='rappeler'){?>
                                                                <span class="fs1 text-info" aria-hidden="true" data-icon=""></span>
                                                                <a href="#"><i class="fa fa-pencil-square-o"></i> Rappeler le <?php echo $appel->getDateAction() ?> </a>
                                                            <?php } ?>
                                                        </p>
                                                    </div>
                                                </li>
                                            <?php }} ?>
                                        </ul>

                                    </div>
                                    <div role="tabpanel" class="tab-pane fade" id="tab_content3" aria-labelledby="profile-tab">
                                        <ul class="messages">

                                            <?php if(isset($ltAppelSortant)){
                                                foreach ($ltAppelSortant as $appel){?>
                                                    <li>
                                                        <img src="<?php echo base_url(); ?>assets/images/user.png"  class="avatar" alt="Avatar">
                                                        <div class="message_wrapper">
                                                            <h4 class="heading"><?php echo $appel->getClient() ?></h4>
                                                            <blockquote class="message">
                                                                <?php echo $appel->getDateAppel() ?>
                                                                <?php if($appel->isAppelEntrant()){?>
                                                                    <span class="fa fa-reply" style="color: #00a65a" ></span>
                                                                <?php }else{ ?>
                                                                    <span class="fa fa-share" style="color: #cd0a0a" ></span>
                                                                <?php } ?>
                                                                <br>
                                                                <?php echo $appel->getCommentaireAction() ?>
                                                            </blockquote>
                                                            <br />
                                                            <p class="url">
                                                                <?php if($appel->getAction()=='rendez-vous'){?>
                                                                    <span class="fs1 text-info" aria-hidden="true" data-icon=""></span>
                                                                    <a href="#"><i class="fa fa-pencil-square-o"></i> Rendez-vous le <?php echo $appel->getDateAction() ?> </a>
                                                                <?php } ?>
                                                                <?php if($appel->getAction()=='rappeler'){?>
                                                                    <span class="fs1 text-info" aria-hidden="true" data-icon=""></span>
                                                                    <a href="#"><i class="fa fa-pencil-square-o"></i> Rappeler le <?php echo $appel->getDateAction() ?> </a>
                                                                <?php } ?>
                                                            </p>
                                                        </div>
                                                    </li>
                                                <?php }
                                            } ?>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>