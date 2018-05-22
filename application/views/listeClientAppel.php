
<!-- page content -->
<div class="right_col" role="main">
    <div class="">
        <div class="page-title">
            <div class="title_left">
                <h3>Liste des clients</h3>
            </div>

            <div class="title_right">
                <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Rechercher...">
                        <span class="input-group-btn">
                      <button class="btn btn-default" type="button">Go!</button>
                    </span>
                    </div>
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
                                <h2>
                                    Lister les clients qui n'ont pas été appelé depuis

                                </h2>
                            </div>

                            <div class="clearfix"></div>

                            <?php foreach ($ltClient as $client){?>
                                <div class="col-md-4 col-sm-4 col-xs-12 profile_details">
                                    <div class="well profile_view">
                                        <div class="col-sm-12">
                                            <h4 class="brief"><i><strong>ID: 000<?php echo $client->getId() ?> </strong></i></h4>
                                            <div class="left col-xs-7">
                                                <h2><?php echo $client->getFullName() ?></h2>
                                                <p><strong><?php echo $client->getAge() ?> ans</strong></p>
                                                <p><strong><?php echo $client->getEmail() ?> </strong></p>
                                                <ul class="list-unstyled">
                                                    <li><i class="fa fa-building"></i> Addresse: <?php echo $client->getAdresse() ?></li>
                                                    <li><i class="fa fa-phone"></i> Tel #: + <?php echo $client->getTelephone() ?></li>
                                                </ul>
                                            </div>
                                            <div class="right col-xs-5 text-center">
                                                <img src="<?php echo base_url(); ?>assets/images/user.png" alt="" class="img-circle img-responsive">
                                            </div>
                                        </div>
                                        <div class="col-xs-12 bottom text-center">
                                            <div class="col-xs-12 col-sm-6 emphasis">
                                                <a href="<?php echo base_url(); ?>.Client/fiche/<?php echo $client->getId() ?>" type="button" class="btn btn-primary btn-xs">
                                                    <i class="fa fa-user"> </i> Voir profil
                                                </a>
                                                <button type="button" class="btn btn-success btn-xs" data-toggle="modal" data-target="#<?php echo $client->getId() ?>">
                                                    <i class="fa fa-phone"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!--                      MODAL                                     -->
                                <div id="<?php echo $client->getId() ?>" class="modal fade" role="dialog">
                                    <div class="modal-dialog">

                                        <div class="">
                                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                                        </div>

                                        <div class="w3-card-8 w3-dark-grey">

                                            <div class="w3-container w3-center">
                                                <h3>Appel sortant</h3>
                                                <img src="<?php echo base_url(); ?>assets/images/user.png" alt="Avatar" class="img-circle">
                                                <h3><?php echo $client->getFullName() ?></h3>
                                                <p> <i class="glyphicon glyphicon-time"></i> {{minute}} : {{seconde}} </p>

                                                <div class="">
                                                    <div class="x_content">
                                                        <div class="" style="color:black;">
                                                            <form action="">
                                                                <ul class="to_do">
                                                                    <li>
                                                                        <p>
                                                                            <input type="radio" class="" name="action"> N'est pas intéressé </p>
                                                                    </li>
                                                                    <li>
                                                                        <p>
                                                                            <input type="radio" class="" name="action"> Rendez-vous</p>
                                                                    </li>
                                                                    <li>
                                                                        <p>
                                                                            <input type="radio" class="" name="action"> Rappeler</p>
                                                                    </li>
                                                                </ul>
                                                                <div class="" style="color:white;">
                                                                    <label for="commentaire">Commentaires :</label>
                                                                    <textarea name="commentaire" id="" cols="30" rows="4" class="col-sm-12"></textarea>
                                                                    <div class="w3-section">
                                                                        <button class="btn btn-danger btn-lg"><i class="glyphicon glyphicon-earphone"></i> Raccrocher</button>
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



                            <!--                      <div class="col-md-4 col-sm-4 col-xs-12 profile_details">-->
                            <!--                        <div class="well profile_view">-->
                            <!--                          <div class="col-sm-12">-->
                            <!--                            <h4 class="brief"><i>Digital Strategist</i></h4>-->
                            <!--                            <div class="left col-xs-7">-->
                            <!--                              <h2>Nicole Pearson</h2>-->
                            <!--                              <p><strong>About: </strong> Web Designer / UI. </p>-->
                            <!--                              <ul class="list-unstyled">-->
                            <!--                                <li><i class="fa fa-building"></i> Address: </li>-->
                            <!--                                <li><i class="fa fa-phone"></i> Phone #: </li>-->
                            <!--                              </ul>-->
                            <!--                            </div>-->
                            <!--                            <div class="right col-xs-5 text-center">-->
                            <!--                              <img src="images/user.png" alt="" class="img-circle img-responsive">-->
                            <!--                            </div>-->
                            <!--                          </div>-->
                            <!--                          <div class="col-xs-12 bottom text-center">-->
                            <!--                            <div class="col-xs-12 col-sm-6 emphasis">-->
                            <!--                              <p class="ratings">-->
                            <!--                                <a>4.0</a>-->
                            <!--                                <a href="#"><span class="fa fa-star"></span></a>-->
                            <!--                                <a href="#"><span class="fa fa-star"></span></a>-->
                            <!--                                <a href="#"><span class="fa fa-star"></span></a>-->
                            <!--                                <a href="#"><span class="fa fa-star"></span></a>-->
                            <!--                                <a href="#"><span class="fa fa-star-o"></span></a>-->
                            <!--                              </p>-->
                            <!--                            </div>-->
                            <!--                            <div class="col-xs-12 col-sm-6 emphasis">-->
                            <!--                              <button type="button" class="btn btn-success btn-xs"> <i class="fa fa-user">-->
                            <!--                                </i> <i class="fa fa-comments-o"></i> </button>-->
                            <!--                              <button type="button" class="btn btn-primary btn-xs">-->
                            <!--                                <i class="fa fa-user"> </i> View Profile-->
                            <!--                              </button>-->
                            <!--                            </div>-->
                            <!--                          </div>-->
                            <!--                        </div>-->
                            <!--                      </div>-->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    var app = angular.module('myApp', []);
    app.controller('myCtrl', function($scope, $interval) {
        $scope.theTime = Time.parse("00:00:00");
        $scope.seconde = 0;
        $scope.minute = 0;
        $interval(function () {
            $scope.seconde += 1;
            if($scope.seconde>60){
                $scope.minute += 1;
                $scope.seconde = 0;
            }
        }, 1000);
    });
</script>