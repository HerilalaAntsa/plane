<div class="right_col" role="main">
    <div class="">
        <div class="page-title">
            <div class="title_left">
                <h3>Statistiques</h3>
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
                <h2>Statistiques des appels par teleoperateur</h2>
                <ul class="nav navbar-right panel_toolbox">
                    <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                    </li>
                </ul>
                <div class="clearfix"></div>
            </div>

            <div class="x_content">

                <div class="table-responsive">
                    <table class="table table-striped jambo_table bulk_action">
                        <thead>
                        <tr class="headings">
                            <th class="column-title">ID </th>
                            <th class="column-title">Nom </th>
                            <th class="column-title">Total nombre d'appels </th>
                            <th class="column-title">Répartitions </th>
                        </tr>
                        </thead>

                        <tbody>
                        <?php foreach ($stats as $row){?>
                            <tr class="even pointer">
                                <td class=" "><?php echo $row->getAgent()->getId() ?></td>
                                <td class=" "><?php echo $row->getAgent()->getFullName() ?></td>
                                <td class=" "><a href="<?php echo base_url(); ?>Recherche/detailStatistique/<?php echo $row->getAgent()->getFullName()?>"><?php echo $row->getQuantiteTotale() ?> appel(s) </a></td>
                                <td class=" ">
                                    <?php if($row->getQuantiteTotale()!=0){ ?>
                                        <ul class="list-inline user_data">
                                            <li>
                                                <a href="<?php echo base_url(); ?>Recherche/detailStatistique/<?php echo $row->getAgent()->getFullName()?>/<?php echo('pas interesse') ?>"><p><?php echo $row->getPasinteresse() ?> </strong> Appel(s) pas intéressé</p></a>
                                                <div class="progress progress_md">
                                                    <div class="progress-bar bg-red" role="progressbar" data-transitiongoal="<?php echo $row->getPasinteressePourcentage() ?>"><?php echo $row->getPasinteressePourcentage() ?> %</div>
                                                </div>
                                            </li>
                                            <li>
                                                <a href="<?php echo base_url(); ?>Recherche/detailStatistique/<?php echo $row->getAgent()->getFullName()?>/<?php echo('rendez-vous') ?>"><p><?php echo $row->getRendezvous() ?> </strong> Appel(s) demandant un rendez-vous</p></a>
                                                <div class="progress progress_md">
                                                    <div class="progress-bar bg-green" role="progressbar" data-transitiongoal="<?php echo $row->getRendezvousPourcentage() ?>"><?php echo $row->getRendezvousPourcentage() ?> %</div>
                                                </div>
                                            </li>
                                            <li>
                                                <a href="<?php echo base_url(); ?>Recherche/detailStatistique/<?php echo $row->getAgent()->getFullName()?>/<?php echo('rappeler') ?>"><p><?php echo $row->getRappeler() ?> </strong> Appel(s) demandant un rappel</p></a>
                                                <div class="progress progress_md">
                                                    <div class="progress-bar bg-green" role="progressbar" data-transitiongoal="<?php echo $row->getRappelerPourcentage() ?>"><?php echo $row->getRappelerPourcentage() ?> %</div>
                                                </div>
                                            </li>
                                        </ul>
                                    <?php } ?>
                                </td>
                            </tr>
                        <?php } ?>

                        </tbody>
                    </table>
                </div>


            </div>
        </div>
    </div>
    </div>
</div>
</div>