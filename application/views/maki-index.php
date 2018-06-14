	<section id="main-slider" class="no-margin">
    </section><!--/#main-slider-->
	
	<div class="feature">
		<div class="container">
			<div class="text-center">
				<div class="row contact-wrap" style="color:initial">
                        <h3>SuperMaki | Caisse</h3>
                        <?php if ($error!=""){ ?>
                            <div class="alert alert-danger">
                                <?php echo $error; ?>
                            </div>
                        <?php } ?>
                        <div class="status alert alert-success" style="display: none"></div>
                        <?php echo form_open_multipart(base_url().'Candidat/SaveFacture',array('method'=>'post', 'id'=>'main-contact-form', 'class'=>'contact-form text-left', 'name'=>'contact-form'));?>

                    <div class="row">

                        <div class="col-md-4 form-group">
                            <label>Date & heure *</label>
                            <input type="text" name="dateheure" class="form-control date" required="required" value="<?php echo(date("Y-m-d h:i:s")); ?>" id="datetimepicker1">
                            <p style="color:red;"><?php echo form_error('dateheure'); ?></p>
                        </div>
                        <script type="text/javascript">
                            $(function () {
                                console.log("MIDITRA");
                                $('#datetimepicker1').datetimepicker();
                            });
                        </script>

                    </div>
                    <div class="row">
                        <div class="form-group">
                            <label>Num&eacute;ro de caisse</label>
                            <select name="numerocaisse" class="form-control">
                                <?php foreach ($ltCaisse as $caisse){?>
                                    <option value="<?php echo($caisse->getId()); ?>">Caisse n° <?php echo($caisse->getId()); ?></option>
                                <?php } ?>
                            </select>
                        </div>
                    </div>
                        <div class="row">


                            <div class="panel-heading"><h2>Produits</h2></div>

                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <div class="form-group">
                                            <label>Nom *</label>
                                            <select name="nom1" class="form-control">
                                                <option value="" selected></option>
                                                <?php foreach ($ltProduit as $produit){?>
                                                    <option value="<?php echo($produit->getId()); ?>"><?php echo($produit->getNom()); ?></option>
                                                <?php } ?>
                                            </select>
                                        </div>
                                        <p style="color:red;"><?php echo form_error('nomProduit'); ?></p>
                                    </div>
                                </div>

                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <label>Quantite *</label>
                                        <input type="number" step="0.001" name="quantite1" class="form-control" required="required" value="<?php echo set_value('quantite1'); ?>">
                                        <p style="color:red;"><?php echo form_error('quantite'); ?></p>
                                    </div>
                                </div>

                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <label>Prix Unitaire *</label>
                                        <input type="number" step="1000" name="prixunitaire1" class="form-control" required="required" value="<?php echo set_value('prixunitaire1'); ?>">
                                        <p style="color:red;"><?php echo form_error('prixunitaire'); ?></p>
                                    </div>
                                </div>
                        </div>
                    <div class="row">
                        <button type="button" name="ajoutProduit" class="btn btn-primary btn-lg" required="required"><span class="fa fa-plus"></span></button>
                    </div>
                    <div class="row">
                        <div class="col-md-offset-6">
                            <label for="totalprix" class="col-md-1 control-label">TOTAL </label>
                            <div class="col-md-4">
                                 <input type="number" step="1000" name="prixtotal" class="form-control" required="required">
                            </div>
                            <div class="col-md-4">
                                <p>Ar</p>
                            </div>
                        </div>
                    </div>
                    </div>

                    <div class="row">
                        <div class="form-group col-md-offset-10">
                            <button type="submit" name="submit" class="btn btn-primary btn-lg" required="required">Enregistrer</button>
                        </div>
                    </div>
					<?php echo form_close(); ?>
				</div><!--/.row-->


			</div>
		</div>


