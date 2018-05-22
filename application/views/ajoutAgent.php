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
                        <form class="form-horizontal form-label-left" method="post" action="<?php echo base_url(); ?>Utilisateur/Inscription" enctype="multipart/form-data">
                            <div class="row">
                                <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-3">Nom</label>
                                    <div class="col-md-9 col-sm-9 col-xs-9">
                                        <input type="text" class="form-control" name="nom" value="<?php echo set_value('nom'); ?>">
                                        <span class="fa fa-user form-control-feedback right" aria-hidden="true"></span>
                                        <p style="color:red;"><?php echo form_error('nom'); ?></p>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-3">Prenom</label>
                                    <div class="col-md-9 col-sm-9 col-xs-9">
                                        <input type="text" class="form-control" name="prenom" value="<?php echo set_value('prenom'); ?>">
                                        <span class="fa fa-user form-control-feedback right" aria-hidden="true"></span>
                                        <p style="color:red;"><?php echo form_error('prenom'); ?></p>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-3">Email</label>
                                    <div class="col-md-9 col-sm-9 col-xs-9">
                                        <input type="text" class="form-control" name="email" value="<?php echo set_value('email'); ?>">
                                        <span class="fa fa-user form-control-feedback right" aria-hidden="true"></span>
                                        <p style="color:red;"><?php echo form_error('email'); ?></p>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-3">Mot de passe</label>
                                    <div class="col-md-9 col-sm-9 col-xs-9">
                                        <input type="password" class="form-control" name="pass">
                                        <span class="fa fa-user form-control-feedback right" aria-hidden="true"></span>
                                        <p style="color:red;"><?php echo form_error('pass'); ?></p>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-3">Confirmer votre mot de passe</label>
                                    <div class="col-md-9 col-sm-9 col-xs-9">
                                        <input type="password" class="form-control" name="confirmPass">
                                        <span class="fa fa-user form-control-feedback right" aria-hidden="true"></span>
                                        <p style="color:red;"><?php echo form_error('confirmPass'); ?></p>
                                    </div>
                                </div>
                                <div class="form-group">
                                        <label class="control-label col-md-3 col-sm-3 col-xs-3">Poste</label>
                                        <div class="col-md-9 col-sm-9 col-xs-9">
                                            <select class="form-control" name="poste">
                                                <option value="1" <?php echo set_select('poste','1'); ?>>Agent</option>
                                                <option value="11" <?php echo set_select('poste','11'); ?>>Manager</option>
                                            </select>
                                        </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-3">Sexe</label>
                                    <div class="col-md-9 col-sm-9 col-xs-9">
                                        <div class="field-wrap">
                                            <label for="homme">Homme</label>
                                            <input class="" name="sexe" type="radio" value="M" id="homme" />
                                        </div>
                                        <div class="field-wrap">
                                            <label for="femme">Femme</label>
                                            <input class="" name="sexe" type="radio" value="F" id="femme" />
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-3">Date de naissance</label>
                                    <fieldset>
                                        <div class="control-group">
                                            <div class="controls">
                                                <div class="input-prepend input-group">
                                                    <span class="add-on input-group-addon"><i class="glyphicon glyphicon-calendar fa fa-calendar"></i></span>
                                                    <input type="date" style="width: 200px" name="dateNaissance" class="form-control" value="<?php echo set_value('dateNaissance'); ?>" required/>
                                                </div>
                                            </div>
                                        </div>
                                    </fieldset>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-3">Adresse</label>
                                    <div class="col-md-9 col-sm-9 col-xs-9">
                                        <input type="text" class="form-control" name="adresse" value="<?php echo set_value('adresse'); ?>">
                                        <span class="fa fa-user form-control-feedback right" aria-hidden="true"></span>
                                        <p style="color:red;"><?php echo form_error('adresse'); ?></p>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-3">Telephone</label>
                                    <div class="col-md-9 col-sm-9 col-xs-9">
                                        <input type="text" class="form-control" name="telephone" data-inputmask="'mask' : '(261) 99-99-999-99'" value="<?php echo set_value('telephone'); ?>">
                                        <span class="fa fa-phone form-control-feedback right" aria-hidden="true"></span>
                                        <p style="color:red;"><?php echo form_error('telephone'); ?></p>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-3">Photo de profil</label>
                                    <div class="col-md-9 col-sm-9 col-xs-9">
                                        <input type="file" name="photo" value="user.png" value="<?php echo set_value('photo'); ?>">
                                        <span class="fa fa-user form-control-feedback right" aria-hidden="true"></span>
                                    </div>
                                </div>

                                <?php if ($error!=""){ ?>
                                    <div class="alert alert-danger">
                                        <?php echo $error; ?>
                                    </div>
                                <?php } ?>

                                <div class="form-group">
                                    <div class="col-md-9 col-md-offset-3">
                                        <button type="submit" class="btn btn-success">Enregistrer</button>
                                    </div>
                                </div>

                        </form>
                    </div>
                </div>
            </div>
            <!-- /form input mask -->