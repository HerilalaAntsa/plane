<!-- page content -->
<div class="right_col" role="main">
    <div class="">
        <div class="page-title">
            <div class="title_left">
                <h3>Recherche avancé</h3>
            </div>

            <div class="title_right">
            </div>
        </div>

        <div class="clearfix"></div>

        <div class="row">
            <!-- form input mask -->
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                    <div class="x_title">
                        <h2>Recherche avancée</h2>
                        <ul class="nav navbar-right panel_toolbox">
                            <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                        </ul>
                        <div class="clearfix"></div>
                    </div>

                    <div class="x_content">
                        <br />
                        <form name="FormSort" id="MyForm" class="form-horizontal form-label-left" method="get" action="<?php echo base_url(); ?>Agent/listAgent">
                            <div class="row">
                                <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-3">Nom Agent</label>
                                    <div class="col-md-9 col-sm-9 col-xs-9">
                                        <input type="text" class="form-control" name="agent" value="">
                                        <span class="fa fa-user form-control-feedback right" aria-hidden="true"></span>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-3">Email Agent</label>
                                    <div class="col-md-9 col-sm-9 col-xs-9">
                                        <input type="text" class="form-control" name="email" value="">
                                        <span class="fa fa-user form-control-feedback right" aria-hidden="true"></span>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-3">Telephone Agent</label>
                                    <div class="col-md-9 col-sm-9 col-xs-9">
                                        <input type="text" class="form-control" name="telephone" value="">
                                        <span class="fa fa-user form-control-feedback right" aria-hidden="true"></span>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-3">Adresse Agent</label>
                                    <div class="col-md-9 col-sm-9 col-xs-9">
                                        <input type="text" class="form-control" name="adresse" value="">
                                        <span class="fa fa-user form-control-feedback right" aria-hidden="true"></span>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-3">Sexe</label>
                                    <div class="col-md-9 col-sm-9 col-xs-9">
                                        <select class="form-control" name="sexe">
                                            <option value="" selected>Tous</option>
                                            <option value="M">Homme</option>
                                            <option value="F">Femme</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                        <label class="control-label col-md-3 col-sm-3 col-xs-3">Poste</label>
                                        <div class="col-md-9 col-sm-9 col-xs-9">
                                            <select class="form-control" name="poste">
                                                <option value="TOUS" selected>Tous</option>
                                                <option value="1">Agent</option>
                                                <option value="11">Manager</option>
                                            </select>
                                        </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-3">Né entre le </label>
                                    <fieldset>
                                        <div class="control-group">
                                            <div class="controls">
                                                <div class="input-prepend input-group">
                                                    <span class="add-on input-group-addon"><i class="glyphicon glyphicon-calendar fa fa-calendar"></i></span>
                                                    <input type="text" style="width: 200px" name="dateRecherche" id="reservation" class="form-control" value="01/01/1950 - 01/25/2018" />
                                                </div>
                                            </div>
                                        </div>
                                    </fieldset>
                                </div>

                                <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-3">Statut</label>
                                    <div class="col-md-9 col-sm-9 col-xs-9">
                                        <div class="field-wrap">
                                            <label for="homme">aucun</label>
                                            <input class="" name="statut" type="radio" value="" id="" checked/>
                                        </div>
                                        <div class="field-wrap">
                                            <label for="homme">en ligne</label>
                                            <input class="" name="statut" type="radio" value="true" id="homme" />
                                        </div>
                                        <div class="field-wrap">
                                            <label for="femme">hors ligne</label>
                                            <input class="" name="statut" type="radio" value="false" id="femme" />
                                        </div>
                                    </div>
                                </div>

                                <input name="tri" type="hidden" ng-model="tri" id="triHidden"/>

                                <div class="form-group">
                                    <div class="col-md-9 col-md-offset-3">
                                        <button type="submit" class="btn btn-success">Rechercher</button>
                                    </div>
                                </div>

                        </form>
                    </div>
                </div>
            </div>

        </div>


        <div id="row">

            <div class="col-md-12 col-sm-12 col-xs-12 text-center">
                <?php if ($error!=""){ ?>
                    <div class="alert alert-warning">
                        <?php echo $error; ?>
                    </div>
                <?php } ?>
            </div>

            <table class="table table-striped jambo_table bulk_action" id="tableSort">
                <thead>
                <tr class="headings">
                    <th class="column-title">   <input style="background: #405467;border: #405467;" ng-click="idAgent()" type="submit" value="idagent" form="MyForm">   <span class="fa fa-sort-down" style="color: #fff" ></span></th>
                    <th class="column-title">   <input style="background: #405467;border: #405467;" ng-click="nomAgent()" type="submit" value="nom" form="MyForm">    <span class="fa fa-sort-down" style="color: #fff" ></span></th>
                    <th class="column-title">   <input style="background: #405467;border: #405467;" ng-click="posteAgent()" type="submit" value="hierarchie" form="MyForm">  <span class="fa fa-sort-down" style="color: #fff" ></span></th>
                    <th class="column-title text-center"">  <input style="background: #405467;border: #405467;" ng-click="sexeAgent()" type="submit" value="sexe" form="MyForm">    <span class="fa fa-sort-down" style="color: #fff" ></span></th>
                    <th class="column-title text-center">A deja effectué un appel   <span class="fa fa-sort-down" style="color: #fff" ></span></th>
                    <th class="column-title text-center">Statut     <span class="fa fa-sort-down" style="color: #fff" ></span></th>
                    <th class="column-title"></th>
                    <th class="column-title"></th>
                </tr>
                </thead>

                <tbody>
                <?php if($results){ ?>
                    <?php foreach ($results as $row){?>
                        <tr class="even pointer">
                            <td class=" "><?php echo $row->getId() ?></td>
                            <td class=" "><a href="<?php echo base_url(); ?>.Agent/fiche/<?php echo $row->getId() ?> "><?php echo $row->getFullName() ?></a></td>
                            <td class=" "><?php echo $row->getHierarchieString() ?></td>
                            <td class="text-center"><?php echo $row->getSexeString() ?></td>
                            <td class="text-center">
                                <?php if($row->aDejaAppele()){?>
                                    <span class="fa fa-check" style="color: #00a65a" ></span>
                                <?php }else{ ?>
                                    <span class="fa fa-times" style="color: #cd0a0a" ></span>
                                <?php } ?>
                            </td>
                            <td class="text-center">
                                <?php if($row->isEnLigne()){?>
                                    <span class="fa fa-circle" style="color: #00a65a" ></span> en ligne
                                <?php }else{
                                    if($row->getAgo()){?>
                                        <span class="fa fa-circle" style="color: #cd0a0a" ></span> en ligne il y a <?php echo $row->getAgo() ?>
                                    <?php }else{ ?>
                                        <span class="fa fa-circle" style="color: #7E7E7E" ></span><i><small> jamais en ligne </small></i>
                                    <?php } ?>
                                <?php } ?>
                            </td>
                            <td class=" ">
                                <button type="button" class="btn btn-danger btn-md" data-toggle="modal" data-target="#<?php echo $row->getId() ?>">
                                    <i class="fa fa-trash"></i> Supprimer
                                </button>
                                <a href="<?php echo base_url(); ?>Utilisateur/Modification/<?php echo $row->getId() ?>" type="button" class="btn btn-primary btn-md">
                                    <i class="fa fa-edit"></i> Modifier
                                </a>
                            </td>
                        </tr>

                        <!--                      MODAL                                     -->
                        <div id="<?php echo $row->getId() ?>" class="modal fade" role="dialog">
                            <div class="modal-dialog">

                                <div class="">
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                </div>

                                <div class="w3-card-8 w3-dark-grey">

                                    <div class="w3-container w3-center">
                                        <h3>Voulez-vous vraiment supprimer <?php echo $row->getFullName() ?> ?</h3>

                                        <div class="">
                                            <div class="x_content">
                                                <div class="" style="color:black;">
                                                    <form action="<?php echo base_url(); ?>Agent/Delete/<?php echo $row->getId() ?>" method="post">
                                                        <div class="" style="color:white;">
                                                            <div class="w3-section">
                                                                <button type="button" class="btn btn-lg" data-dismiss="modal">Non</button>
                                                                <button type="submit" class="btn btn-primary btn-lg">Oui</button>
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>

                            </div>
                        </div>

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

<script>
    var app = angular.module('myApp', []);
    app.controller('myCtrl', function($scope,$http) {

        $scope.idAgent = function() {
            $scope.tri = 'idagent';
            $("#triHidden").val($scope.tri);
            $("#MyForm").submit();
        };
        $scope.nomAgent = function() {
            $scope.tri = 'nom';
            $("#triHidden").val($scope.tri);
            $("#MyForm").submit();
        };
        $scope.posteAgent = function() {
            $scope.tri = 'hierarchie';
            $("#triHidden").val($scope.tri);
            $("#MyForm").submit();
        };
        $scope.sexeAgent = function() {
            $scope.tri = 'sexe';
            $("#triHidden").val($scope.tri);
            $("#MyForm").submit();
        };
    });
</script>