	<section id="main-slider" class="no-margin">
        <div class="carousel slide">      
            <div class="carousel-inner">
                <div class="item active" style="background-image: url(<?php echo base_url(); ?>assets/images/slider/bg1.jpg)">
                    <div class="container">
                        <div class="row slide-margin">
                            <div class="col-sm-6">
                                <div class="carousel-content">
                                    <h2 class="animation animated-item-1">Bienvenue <span>Plan'Air</span></h2>
                                    <p class="animation animated-item-2">Prolongez votre voyage et découvrez des destinations authentiques desservies par notre réseau régional et interne au cœur du pays.</p>
                                    <a class="btn-slide animation animated-item-3" href="#">Réservez</a>
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
					<h3>Réservez dès maintenant votre vol</h3>
					<div class="status alert alert-success" style="display: none"></div>
					<?php echo form_open(base_url().'recherche',array('method'=>'get', 'id'=>'main-contact-form', 'class'=>'contact-form text-left', 'name'=>'contact-form'));?>
						<div class="col-sm-5 col-sm-offset-1">
							<div class="form-group">
								<label>Ville de départ *</label>
								<input type="text" name="villedepart" class="form-control" required="required">
							</div>
							<div class="form-group">
								<label>Date de départ *</label>
								<input type="text" name="datedepart" class="form-control from" required="required">
							</div>
							<div class="form-group">
								<div class="radio">
									<label><input type="radio" name="typevol" value="true">Aller - Retour</label>
								</div>
								<div class="radio">
									<label><input type="radio" name="typevol" value="false">Aller simple</label>
								</div>
							</div>
							<div class="form-group">
								<input type="number" min="0" max="9" value="1" name="nombreadulte">
								<label>Adultes</label>
							</div>
							<div class="form-group">
								<input type="number" min="0" max="9" value="0" name="nombreenfant">
								<label>Enfant(2 - 11ans)</label>
							</div>
							<div class="form-group">
								<input type="number" min="0" max="9" value="0" name="nombrebebe">
								<label>Bébé</label>
							</div>
						</div>
						<div class="col-sm-5">
							<div class="form-group">
								<label>Ville d'arrivée *</label>
								<input type="text" name="villearrivee" class="form-control" required="required">
							</div>
							<div class="form-group">
								<label>Date d'arrivée *</label>
								<input type="text" name="datearrivee" class="form-control to" required="required">
							</div>
							<div class="form-group">
								<label>Classe</label>
								<select name="classe" class="form-control">
									<option value="false" selected>Economique</option>
									<option value="true">Affaire</option>
								</select>
							</div>
							<div class="form-group">
								<button type="submit" name="submit" class="btn btn-primary btn-lg" required="required">Réservez</button>
							</div>
						</div>
					<?php echo form_close(); ?>
				</div><!--/.row-->
				<div class="col-md-3">
					<div class="hi-icon-wrap hi-icon-effect wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms" >
						<i class="fa fa-book"></i>
						<h2>Plan'Air E-ticket</h2>
						<p> L’utilisation du billet électronique vous épargne les préoccupations administratives</p>
					</div>
				</div>
				<div class="col-md-3">
					<div class="hi-icon-wrap hi-icon-effect wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="900ms" >
						<i class="fa fa-cloud"></i>
						<h2>Confort</h2>
						<p>Un confort assuré par nos partenaires.</p>
					</div>
				</div>
				<div class="col-md-3">
					<div class="hi-icon-wrap hi-icon-effect wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="1200ms" >
						<i class="fa fa-laptop"></i>	
						<h2>Réservation en ligne</h2>
						<p>On vous évite le déplacement, la réservation se fait en ligne.</p>
					</div>
				</div>
				<div class="col-md-3">
					<div class="hi-icon-wrap hi-icon-effect wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms" >
						<i class="fa fa-heart-o"></i>	
						<h2>Plan'Air Miles</h2>
						<p>Gagner des miles à chaque vol</p>
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