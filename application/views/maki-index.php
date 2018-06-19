	<section id="main-slider" class="no-margin">
    </section><!--/#main-slider-->
	
	<div class="feature"  ng-app="helloApp" ng-controller="RepasCtrl">
		<div class="container">
			<div class="text-center">
				<div class="row contact-wrap" style="color:initial">
                        <h3>NewRest | commandes </h3>
                        <?php if ($error!=""){ ?>
                            <div class="alert alert-danger">
                                <?php echo $error; ?>
                            </div>
                        <?php } ?>
                        <div class="status alert alert-success" style="display: none"></div>
                        <?php echo form_open_multipart(base_url().'Repas/#',array('method'=>'post', 'id'=>'main-contact-form', 'class'=>'contact-form text-left', 'name'=>'contact-form', 'ng-submit'=>'addRow()'));?>

                    <div class="row">

                        <div class="panel-success col-lg-5">
                            <div class="col-md-4 form-group">
                                <label>Repas</label>
                                <select name="NOM" ng-model="NOM" class="form-control">
                                    <?php foreach ($ltRepas as $lt){?>
                                        <option value="<?php echo($lt->getNOM()); ?>"> <?php echo($lt->getNOM()); ?></option>
                                    <?php } ?>
                                </select>
                            </div>

                            <div class="col-sm-4">
                                <div class="form-group">
                                    <label>Quantite </label>
                                    <input type="number" step="1" ng-model="QUANTITE" name="QUANTITE" class="form-control" ); ?>
                                    <p style="color:red;"><?php echo form_error("quantite"); ?></p>
                                </div>
                            </div>

                            <div class="col-md-4 form-group">
                                <button id="btn1" class = "btn-success btn"><span class="fa fa-plus"></span></button>
                            </div>
                        </div>







                    </div>


                            <div class="container ">
                                <h2>Les commandes</h2>
                                <table class="table table-bordered">
                                    <thead>
                                    <tr>
                                        <th>Nom</th>
                                        <th>Quantit&eacute</th>
                                        <th>Prix</th>
                                    </tr>
                                    </thead>
                                        <tbody>
                                        <tr ng-repeat="rep in repas">
                                            <td>{{rep.NOM}}</td>
                                            <td>{{rep.QUANTITE}}</td>
                                            <td>{{rep.PRIX}} Ar</td>
                                        </tr>
                                        </tbody>
                                </table>

                            </div>

                </div>
            <div class="col-md-2 form-group">
                <button id="btn1" class = "btn-success btn">Commander</button>
            </div>
            <?php form_close()?>
				</div><!--/.row-->



			</div>
    </div>
		</div>

    <script>
        var helloApp = angular.module("helloApp", []);
        helloApp.controller("RepasCtrl", function($scope) {
            $scope.repas = [];
            $scope.addRow = function(){
                $scope.repas.push({ 'nom':$scope.NOM, 'quantite': $scope.QUANTITE });
                $scope.NOM='';
                $scope.QUANTITE='';
            };
        )};
    </script>

