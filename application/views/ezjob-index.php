	<section id="main-slider" class="no-margin">
        <div class="carousel slide">      
            <div class="carousel-inner">
                <div class="item active" style="background-image: url(<?php echo base_url(); ?>assets/images/slider/bg1.jpg)">
                    <div class="container">
                        <div class="row slide-margin">
                            <div class="col-sm-6">
                                <div class="carousel-content">
                                    <h2 class="animation animated-item-1">Bienvenue <span>Easy Job</span></h2>
                                    <p class="animation animated-item-2">Trouver le <strong>JOB</strong> de votre reve avec nos services au pointe de la technologie et nos grands collaborateurs partout a Madagascar.</p>
                                    <a class="btn-slide animation animated-item-3" href="#">Deposer mon CV</a>
                                </div>
                            </div>

                            <div class="col-sm-6 hidden-xs animation animated-item-4">
                                <div class="slider-img">
                                    <img src="<?php echo base_url(); ?>assets/images/slider/img3.png" class="img-responsive">
                                </div>
                            </div>

                        </div>
                    </div>
                </div><!--/.item-->             
            </div><!--/.carousel-inner-->
        </div><!--/.carousel-->
    </section><!--/#main-slider-->
	
	<div class="feature">
		<div class="container">
			<div class="text-center">
				<div class="row contact-wrap" style="color:initial">
					<h3>Deposer votre CV dès maintenant</h3>
                    <?php if ($error!=""){ ?>
                        <div class="alert alert-danger">
                            <?php echo $error; ?>
                        </div>
                    <?php } ?>
					<div class="status alert alert-success" style="display: none"></div>
					<?php echo form_open_multipart(base_url().'Candidat/SendCV',array('method'=>'post', 'id'=>'main-contact-form', 'class'=>'contact-form text-left', 'name'=>'contact-form'));?>
                    <div class="row">
                    <div class="col-sm-5 col-sm-offset-1">

                            <div class="form-group">
                                <label class="radio-inline"><input type="radio" name="sexe" value="H">Homme</label>
                                <label class="radio-inline"x><input type="radio" name="sexe" value="F">Femme</label>
                                <p style="color:#dd0000;"><?php echo form_error('sexe'); ?></p>
                            </div>

							<div class="form-group">
								<label>Nom *</label>
								<input type="text" name="nom" class="form-control" required="required">
                                <p style="color:red;"><?php echo form_error('nom'); ?></p>
							</div>

							<div class="form-group">
								<label>Prenoms *</label>
								<input type="text" name="prenom" class="form-control" required="required">
                                <p style="color:red;"><?php echo form_error('prenom'); ?></p>
							</div>

                            <div class="form-group">
                                <label>Email *</label>
                                <input type="email" name="email" class="form-control" required="required">
                                <p style="color:red;"><?php echo form_error('email'); ?></p>
                            </div>

                        <div class="form-group">
                            <label>Telephone *</label>
                            <input type="text" name="telephone" class="form-control" required="required">
                            <p style="color:red;"><?php echo form_error('telephone'); ?></p>
                        </div>

                        <div class="form-group">
                            <label>Adresse *</label>
                            <input type="text" name="adresse" class="form-control" required="required">
                            <p style="color:red;"><?php echo form_error('adresse'); ?></p>
                        </div>

                        <div class="form-group">
                            <label>Ville *</label>
                            <select class="form-control" id="ville" name="ville">
                                <option value="Antananarivo">Antananarivo</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label>Date de naissance *</label>
                            <input type="text-area" name="dateNaissance" class="form-control from" required="required">
                        </div>

                        <div class="form-group">
                            <label>Etat civil *</label>
                            <select class="form-control" id="etatCivil" name="etatCivil">
                                <option value="encouple">En couple</option>
                                <option value="celibataire">C&eacutelibataire</option>
                                <option value="veuf">Veuf/veuve</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label class="control-label">Votre photo*</label>
                            <div class="">
                                <input type="file"  name="photo">
                                <span class="fa fa-user form-control-feedback right" aria-hidden="true"></span>
                            </div>
                        </div>


						</div>

						<div class="col-sm-5">
                            <div class="form-group">
                                <label>Niveau d'&eacute;tude *</label>
                                <select class="form-control" id="niveauEtude" name="niveauEtude"  required="required">
                                    <option value="bepc">BEPC</option>
                                    <option value="bac">BAC</option>
                                    <option value="bac+2">BAC+2</option>
                                    <option value="bac+3">BAC+3</option>
                                    <option value="bac+4">BAC+4</option>
                                    <option value="bac+5">BAC+5</option>
                                    <option value="autre">Autre</option>
                                </select>

                                <input type="text" name="niveauEtudeAutre" class="form-control" placeholder="Autre">
                            </div>

                            <div class="form-group">
                                <label for="Experience">Experiences:</label>
                                <textarea class="form-control" rows="5" id="formation"  name="experience" required="required"></textarea>
                            </div>

                            <div class="form-group">
                                <label for="Formation">Formations:</label>
                                <textarea class="form-control" rows="5" id="formation"  name="formation" required="required"></textarea>
                            </div>

                            <div class="form-group">
                                <label for="Formation">Comp&eacute;tences:</label>
                                <textarea class="form-control" rows="5" id="comptence"  name="comptence" required="required"></textarea>
                            </div>

                            <div class="form-group col-sm-6">
                                <label>Situation actuelle *</label>
                                    <select class="form-control" id="situation" name="situation">
                                        <option value="enposte">En poste</option>
                                        <option value="enrecherche">En recherche</option>
                                    </select>
                            </div>

                            <div class="form-group col-sm-6">
                                <label>Disponibilite *</label>
                                <select class="form-control" id="dispo" name="dispo">
                                    <option value="immediate">Immediate</option>
                                    <option value="preavis">Avec preavis</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label>Domaines d'activit&eacutes *</label>
                                    <select class="form-control" id="domaine" name="domaine">
                                        <option value="gestion">Gestion</option>
                                        <option value="informatique">Informatique</option>
                                        <option value="comptabilisation">Comptabilit&eacute</option>
                                        <option value="commerce">Commerce</option>
                                        <option value="agroalimentaire">Agroalimentaire</option>
                                    </select>
                            </div>
						</div>
                    </div>
                    <div class="row">
                        <div class="col-md-offset-8 form-group ">
                            <button type="submit" name="submit" class="btn btn-primary btn-lg" required="required">Envoyer CV</button>
                        </div>
                    </div>
					<?php echo form_close(); ?>
				</div><!--/.row-->
				<div class="col-md-3">
					<div class="hi-icon-wrap hi-icon-effect wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms" >
						<i class="fa fa-book"></i>
						<h2>Easy Job E-Z</h2>
						<p> L’utilisation de notre site vous épargne les préoccupations administratives</p>
					</div>
				</div>
				<div class="col-md-3">
					<div class="hi-icon-wrap hi-icon-effect wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="900ms" >
						<i class="fa fa-cloud"></i>
						<h2>Dossiers</h2>
						<p>Un depot assuré par nos partenaires.</p>
					</div>
				</div>
				<div class="col-md-3">
					<div class="hi-icon-wrap hi-icon-effect wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="1200ms" >
						<i class="fa fa-laptop"></i>	
						<h2>Entretiens en ligne</h2>
						<p>On vous évite le déplacement, les entretiens se font en ligne.</p>
					</div>
				</div>
				<div class="col-md-3">
					<div class="hi-icon-wrap hi-icon-effect wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms" >
						<i class="fa fa-heart-o"></i>	
						<h2>Easy Job Miles</h2>
						<p>Gagner des miles à chaque depots</p>
					</div>
				</div>
			</div>
		</div>
	</div>
	
	<div class="about">
		<div class="container">
			<h2 class="fadeInDown" data-wow-duration="1000ms" data-wow-delay="100ms" >Sur nous</h2>
			<div class="col-md-6 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms" >
				<img src="<?php echo base_url(); ?>assets/images/6.jpg" class="img-responsive"/>
				<p>Plan'Air dessert 19 destinations sur l’ensemble de son réseau qui s’étend de Madagascar vers l’Océan Indien, et l’Europe.
				</p>
			</div>
			<div class="col-md-6 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms" >
				<p>Plan'Air, transporteur international de premier plan.
				<p>Figure incontournable du transport aérien dans la région Océan Indien, Plan'Air propose des offres étendues via des vols opérés en partage de codes avec ses partenaires.</p>
				<p>Grâce au partenariat avec Air Mauritius, la destination Maurice est ainsi desservie jusqu’à 06 vols hebdomadaires entre Antananarivo et Port-Louis.</p>
				<p>La Réunion est desservie quotidiennement entre Antananarivo et Saint-Denis conjointement avec Air Austral.</p>
				<p>Le partenariat avec Air Seychelles a permis la reprise de la destination Seychelles.</p>
			</div>
		</div>
	</div>

	<section id="partner">
        <div class="container">
            <div class="center wow fadeInDown">
                <h2>Nos Partenaires</h2>
                <p>Les partenaires de la compagnie Plan'Air assurant votre expérience au cours des vols.</p>
            </div>    

            <div class="partners">
                <ul>
                    <li> <a href="#"><img class="img-responsive wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms" src="<?php echo base_url(); ?>assets/images/partners/partner1.png"></a></li>
                    <li> <a href="#"><img class="img-responsive wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms" src="<?php echo base_url(); ?>assets/images/partners/partner2.png"></a></li>
                    <li> <a href="#"><img class="img-responsive wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="900ms" src="<?php echo base_url(); ?>assets/images/partners/partner3.png"></a></li>
                    <li> <a href="#"><img class="img-responsive wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="1200ms" src="<?php echo base_url(); ?>assets/images/partners/partner4.png"></a></li>
                    <li> <a href="#"><img class="img-responsive wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="1500ms" src="<?php echo base_url(); ?>assets/images/partners/partner5.png"></a></li>
                </ul>
            </div>        
        </div><!--/.container-->
    </section><!--/#partner-->
	
	<section id="conatcat-info">
        <div class="container">
            <div class="row">
                <div class="col-sm-8">
                    <div class="media contact-info wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
                        <div class="pull-left">
                            <i class="fa fa-phone"></i>
                        </div>
                        <div class="media-body">
                            <h2>Have a question or need a custom quote?</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation +0123 456 70 80</p>
                        </div>
                    </div>
                </div>
            </div>
        </div><!--/.container-->    
    </section><!--/#conatcat-info-->