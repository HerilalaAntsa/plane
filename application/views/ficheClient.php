
<!-- page content -->
<div class="right_col" role="main">
    <div class="">
        <div class="page-title">
            <div class="title_left">
                <h3>Fiche Client</h3>
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
                        <h2><small>ID CLIENT : </small>000<?php echo $client->getId() ?></h2>
                        <ul class="nav navbar-right panel_toolbox">
                            <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                            </li>
                        </ul>
                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content">
                        <div class="col-md-3 col-sm-3 col-xs-12 profile_left">
                            <div class="profile_img">
                                <div id="crop-avatar">
                                    <!-- Current avatar -->
                                    <img class="img-responsive avatar-view" src="<?php echo base_url(); ?>assets/images/user.png" alt="Avatar" title="Change the avatar">
                                </div>
                            </div>
                            <h3><?php echo $client->getFullName() ?></h3>

                            <ul class="list-unstyled user_data">

                                <li><i class="fa  user-profile-icon"></i> <?php echo $client->getAge() ?> ans</h3>
                                </li>

                                <li><i class="fa fa-map-marker user-profile-icon"></i> <?php echo $client->getAdresse() ?></h3>
                                </li>

                                <li>
                                    <strong>Né le </strong> <?php echo $client->getDateNaissance() ?>
                                </li>

                                <li class="m-top-xs">
                                    <i class="fa fa-external-link user-profile-icon"></i>
                                    <a href="" target="_blank"><?php echo $client->getEmail() ?></h3></a>
                                </li>

                                <li class="m-top-xs">
                                <li>
                                    <i class="fa fa-phone user-profile-icon"></i> <?php echo $client->getTelephone() ?></h3>
                                </li>

                                <li>
                                    <strong>Sexe : </strong> <?php echo $client->getSexeString() ?>
                                </li>
                            </ul>

                            <a href="<?php echo base_url(); ?>Client/down/<?php echo $client->getId() ?>" class="btn btn-success"><i class="fa fa-file-pdf-o m-right-xs"></i> Historique d'appels</a>
                            <br />

                            <!-- start skills -->

                            <!-- end of skills -->

                        </div>

                        <div class="col-md-9 col-sm-9 col-xs-12">
                            <?php if($error!=''){?>
                                <div class="alert alert-warning">
                                    <?php echo $error ?>
                                </div>
                            <?php } ?>
                            <div class="row">
                                <div class="col-lg-offset-3 col-md-5 w3-center">
                                    <form action="<?php echo base_url() ?>Client/raccrocher/<?php echo $client->getId() ?>" method="post">
                                        <?php if($client->isOccupe()){ ?>
                                            <div ng-hide="showRaccrocher">
                                                <button type="button" class="btn btn-success" style="width: 100%" data-toggle="modal" data-target="#<?php echo $client->getId() ?>">
                                                    <i class="fa fa-phone m-right-ls"></i> Appeler
                                                </button>

                                                <div id="<?php echo $client->getId() ?>" class="modal fade" role="dialog">
                                                    <div class="modal-dialog">

                                                        <div class="">
                                                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                        </div>

                                                        <div class="w3-card-8 w3-dark-grey">

                                                            <div class="w3-container w3-center">
                                                                <h3>Utilisateur en ligne</h3>
                                                                <p> Ce client est actuellement en ligne avec <?php echo $client->getOccupe() ?> </p>

                                                            </div>

                                                        </div>

                                                    </div>
                                                </div>

                                            </div>
                                        <?php }else{ ?>
                                            <div ng-hide="showRaccrocher">
                                                <button type="button" class="btn btn-success" style="width: 100%" ng-click="raccrocher(<?php echo $client->getId() ?>)"><i class="fa fa-phone m-right-ls"></i> Appeler</button>
                                            </div>
                                        <?php } ?>
                                        <div ng-show="showRaccrocher">
                                            <button type="button" class="btn btn-danger" style="width: 100%" ng-click="appeler(<?php echo $client->getId() ?>)"><i class="fa fa-phone m-right-ls"></i> Raccrocher</button>

                                            <br><br>

<!--                                            TIMER                          -->
                                            <p> <i class="glyphicon glyphicon-time"></i> {{ heure }} : {{ minute }} : {{ seconde }} </p>

                                        </div>
                                        <ul class="to_do">
                                            <li>
                                                <p>
                                                    <input type="radio" class="" name="action" ng-model="action" value="3" checked> N'est pas intéressé </p>
                                            </li>
                                            <li>
                                                <p>
                                                    <input type="radio" class="" name="action" ng-model="action" value="1"> Rendez-vous</p>
                                            </li>
                                            <li>
                                                <p>
                                                    <input type="radio" class="" name="action" ng-model="action" value="2"> Rappeler</p>
                                            </li>
                                        </ul>
                                        <div ng-show="!isAction('3')">
                                            <label for="commentaire">Saisir une date :</label>
                                            <input type="date" class="" name="dateAction">
                                        </div>
                                        <div class="">
                                            <label for="commentaire">Commentaires :</label>
                                            <textarea name="commentaire" id="" cols="30" rows="6" class="col-sm-12"></textarea>
                                        </div>
                                        <input type="hidden" class="" name="duree" value="{{ dureeTotale }}">

                                        <button type="submit" class="btn btn-primary" style="width: 100%" ><i class="fa fa-phone m-right-ls"></i> Enregistrer</button>

                                    </form>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    var app = angular.module('myApp', []);
    app.controller('myCtrl', function($scope,$http,$interval) {
        $scope.action = '3';
        $scope.showRaccrocher=false;
        $scope.showAppeler=true;

        $scope.duree = 0;
        $scope.dureeTotale = -3;

        $scope.isAction = function(act) {
            return act === $scope.action;
        };

        $scope.seconde = "00";
        $scope.minute = "00";
        $scope.heure = "00";

        var sec = 0;
        var min = 0;
        var h = 0;
        $scope.start = function() {
            timer = $interval(function () {
                $scope.duree++;
                if ($scope.minute > 60) {
                    h++;
                    min = 0;
                    sec = 0;
                }
                if ($scope.seconde > 60) {
                    min++;
                    sec = 0;
                }

                if ($scope.seconde < 9) {
                    $scope.seconde = "0" + sec++;
                } else {
                    $scope.seconde = sec++;
                }
                if ($scope.minute < 9) {
                    $scope.minute = "0" + min;
                } else {
                    $scope.minute = min;
                }
                if ($scope.heure < 9) {
                    $scope.heure = "0" + h;
                } else {
                    $scope.heure = h;
                }

            }, 1000);
        }

        $scope.appeler = function(idclient) {
            $scope.showRaccrocher=false;
            $scope.showAppeler=true;
            $scope.dureeTotale = $scope.duree;
            $interval.cancel(timer);

            $http.get("<?php echo base_url() ?>Client/setPlusOccupe/"+idclient)
                .then(function(response) {

                }),(function(error) {

            });
            $scope.duree = 0;
        };
        $scope.raccrocher = function(idclient) {
            sec = "0"+0;
            min = 0;
            h = 0;
            $scope.showRaccrocher=true;
            $scope.showAppeler=false;

            $http.get("<?php echo base_url() ?>Client/setOccupe/"+idclient)
                .then(function(response) {

                }),(function(error) {

            });
            $scope.start();
        };
    });
</script>