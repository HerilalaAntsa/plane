
	<div class="about">
		<div class="container">
			<h2 class="fadeInDown" data-wow-duration="1000ms" data-wow-delay="100ms" >Places réservées</h2>
			<p>Veuillez noter ces informations concernant vos réservations :</p>
			<div class="col-md-6 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms" >
				<p>Vol aller :</p>
				<p><?php echo $numeroaller ?></p>
			</div>
			<?php if($numeroretour){ ?>
			<div class="col-md-6 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms" >
				<p>Vol retour :</p>
				<p><?php echo $numeroretour ?></p>
			</div>
			<?php } ?>
		</div>
	</div>

	
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