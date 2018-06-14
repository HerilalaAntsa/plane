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
                        <?php echo form_open_multipart(base_url().'Candidat/SendCV',array('method'=>'post', 'id'=>'main-contact-form', 'class'=>'contact-form text-left', 'name'=>'contact-form'));?>

                        <div class="row">


                            <div class="panel-heading"><h2>Produits</h2></div>

                                <div class="col-sm-3">
                                    <div class="form-group">
                                        <label>Nom *</label>
                                        <input type="text" name="produit" class="form-control" required="required" value="<?php echo set_value('nom'); ?>">
                                        <p style="color:red;"><?php echo form_error('produit'); ?></p>
                                    </div>
                                </div>

                                <div class="col-sm-3">
                                    <div class="form-group">
                                        <label>Quantite *</label>
                                        <input type="text" name="produit" class="form-control" required="required" value="<?php echo set_value('quantite'); ?>">
                                        <p style="color:red;"><?php echo form_error('quantite'); ?></p>
                                    </div>
                                </div>

                                <div class="col-sm-3">
                                    <div class="form-group">
                                        <label>Prix Unitaire *</label>
                                        <input type="text" name="produit" class="form-control" required="required" value="<?php echo set_value('prixunitaire'); ?>">
                                        <p style="color:red;"><?php echo form_error('prixunitaire'); ?></p>
                                    </div>
                                </div>

                                <div class="col-md-offset-8 form-group ">
                                    <button type="submit" name="submit" class="btn btn-primary btn-lg" required="required">Confirmer</button>
                                </div>


                        </div>
                    </div>

                    <div class="row">

                    </div>
					<?php echo form_close(); ?>
				</div><!--/.row-->


			</div>
		</div>

