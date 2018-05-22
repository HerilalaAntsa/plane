<!-- page content -->
<div class="right_col" role="main">
    <div class="">
        <div class="page-title">
            <div class="title_left">
                <h3>Form advanced</h3>
            </div>

            <div class="title_right">
                <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Search for...">
                        <span class="input-group-btn">
                      <button class="btn btn-default" type="button">Go!</button>
                    </span>
                    </div>
                </div>
            </div>
        </div>

        <div class="clearfix"></div>

        <div class="row">
            <!-- form input mask -->
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                    <div class="x_title">
                        <h2>Input Mask</h2>
                        <ul class="nav navbar-right panel_toolbox">
                            <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                        </ul>
                        <div class="clearfix"></div>
                    </div>

                    <div class="x_content">
                        <br />
                        <form class="form-horizontal form-label-left" method="get" action="<?php echo base_url(); ?>Recherche/page">
                            <div class="row">
                                    <div class="form-group">
                                        <label class="control-label col-md-3 col-sm-3 col-xs-3">Nom Agent</label>
                                        <div class="col-md-9 col-sm-9 col-xs-9">
                                            <input type="text" class="form-control" name="agent" value="">
                                            <span class="fa fa-user form-control-feedback right" aria-hidden="true"></span>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-md-3 col-sm-3 col-xs-3">Nom client</label>
                                        <div class="col-md-9 col-sm-9 col-xs-9">
                                            <input type="text" class="form-control" name="client" value="">
                                            <span class="fa fa-user form-control-feedback right" aria-hidden="true"></span>
                                        </div>
                                    <div class="form-group">
                                        <label class="control-label col-md-3 col-sm-3 col-xs-3">Action</label>
                                        <div class="col-md-9 col-sm-9 col-xs-9">
                                            <select class="form-control" name="action">
                                                <option value="TOUS" selected>Tous</option>
                                                <option value="3">N'est pas intéressé</option>
                                                <option value="1">Rendez-vous</option>
                                                <option value="2">Rappeler</option>
                                            </select>
                                        </div>
                                    </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-3">Entre le </label>
                                <fieldset>
                                    <div class="control-group">
                                        <div class="controls">
                                            <div class="input-prepend input-group">
                                                <span class="add-on input-group-addon"><i class="glyphicon glyphicon-calendar fa fa-calendar"></i></span>
                                                <input type="text" style="width: 200px" name="dateRecherche" id="reservation" class="form-control" value="01/01/2017 - 01/25/2018" />
                                            </div>
                                        </div>
                                    </div>
                                </fieldset>
                            </div>

                            <div class="form-group">
                                <div class="col-md-9 col-md-offset-3">
                                    <button type="submit" class="btn btn-success">Rechercher</button>
                                </div>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
            <!-- /form input mask -->

                        </div>

        <div id="row">

            <table class="table table-striped jambo_table bulk_action">
                <thead>
                <tr class="headings">
                    <th class="column-title">Date/Heure debut</th>
                    <th class="column-title">Date/Heure fin</th>
                    <th class="column-title">Duree</th>
                    <th class="column-title">Action</th>
                    <th class="column-title">Avec (client)</th>
                    <th class="column-title">Par (agent)</th>
                </tr>
                </thead>

                <tbody>
                <?php if($results){ ?>
                    <?php foreach ($results as $row){?>
                        <tr class="even pointer">
                            <td class=" "><?php echo $row->getDateAppel() ?></td>
                            <td class=" "><?php echo $row->getDateFinAppel() ?></td>
                            <td class=" "><?php echo $row->getDureeAppelString() ?></td>
                            <td class=" "><?php echo $row->getAction() ?></td>
                            <td class=" "><?php echo $row->getClient() ?></td>
                            <td class=" "><?php echo $row->getAgent() ?></td>
                        </tr>
                    <?php } ?>
                <?php } ?>

                </tbody>
            </table>
            <?php if($links){ ?>
                <p><?php echo $links; ?></p>
            <?php } ?>
        </div>

                    </div>
                </div>
                <!-- /form datepicker -->

            </div>
        </div>
    </div>
</div>
<!-- /page content -->