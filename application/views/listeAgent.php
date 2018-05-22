
<!-- page content -->
<div class="right_col" role="main">
    <div class="">
        <div class="page-title">
            <div class="title_left">
                <h3>Liste des agents (téléopérateurs)</h3>
            </div>

            <div class="title_right">
                <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                    <a href="<?php echo base_url(); ?>Agent/down" class="btn btn-success"><i class="fa fa-file-pdf-o m-right-xs"></i> Liste des appels par agents</a>
                </div>
            </div>
        </div>

        <div class="clearfix"></div>

        <div class="row">
            <div class="col-md-12">
                <div class="x_panel">
                    <div class="x_content">
                        <div class="row">
                            <div class="col-md-12 col-sm-12 col-xs-12 text-center">
                                <?php if ($error!=""){ ?>
                                    <div class="alert alert-warning">
                                        <?php echo $error; ?>
                                    </div>
                                <?php } ?>
                            </div>

                            <div class="clearfix"></div>

                            <?php foreach ($ltAgent as $agent){?>
                                <div class="col-md-4 col-sm-4 col-xs-12 profile_details">
                                    <div class="well profile_view">
                                        <div class="col-sm-12">
                                            <h4 class="brief">
                                                <i><strong><?php echo $agent->getHierarchieString(); ?> N°: 000<?php echo $agent->getId() ?> </strong></i>
                                                <?php if($agent->isEnligne()){?>
                                                    <span class="fa fa-phone" style="color: #00a65a" ></span><i><small> En ligne </small></i>
                                                <?php }else{
                                                    if($agent->getAgo()){?>
                                                        <span class="fa fa-phone" style="color: #cd0a0a" ></span><i><small> en ligne il y a <?php echo $agent->getAgo() ?> </small></i>
                                                    <?php }else{ ?>
                                                        <span class="fa fa-phone" style="color: #cd0a0a" ></span><i><small> jamais en ligne </small></i>
                                                    <?php } ?>
                                                <?php } ?>
                                            </h4>
                                            <div class="left col-xs-7">
                                                <h2><?php echo $agent->getFullName() ?> </h2>
                                                <p><strong><?php echo $agent->getEmail() ?> </strong></p>
                                                <hr>
                                                <span class="fa fa-phone" > Dernier appel : </span><p> <strong> <?php echo $agent->getNomClient() ?> </strong></p>
                                            </div>
                                            <div class="right col-xs-5 text-center">
                                                <img src="<?php echo base_url(); ?>assets/images/<?php echo $agent->getPhoto() ?>" alt="" class="img-circle img-responsive">
                                            </div>
                                        </div>
                                        <div class="col-xs-12 bottom text-center">
                                            <div class="col-xs-12 col-sm-6 emphasis">
                                                <a href="<?php echo base_url(); ?>.Agent/fiche/<?php echo $agent->getId() ?> " type="button" class="btn btn-primary btn-xs">
                                                    <i class="fa fa-user"> </i> Details
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            <?php } ?>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>