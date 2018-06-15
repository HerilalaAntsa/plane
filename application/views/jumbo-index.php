<?php setlocale(LC_TIME, 'fr_FR.utf8','fra') ?>
	<div id="breadcrumb">
		<div class="container">
			<div class="breadcrumb">
				<li><a href="<?php echo base_url() ?>">Jumbo Maki</a></li>
				<li>Jumbo</li>
			</div>
		</div>
	</div>

	<div class="services">
		<div class="container">
			<div class="row contact-wrap" style="color: initial">


                        <div class="col-sm-5">
                            <div class="panel panel-primary">
                                <div class="panel-heading">CAISSES SUPERMAKI</div>
                                <div class="panel-body">
                            <div class="container-fluid">

                               <button class="btn-success btn">Importer des donn&eacutees</button>
                                <?
                                foreach ($ltcaisseJumbo as $lt){

                                ?>

                                <table class="table table-hover">
                                    etooo : <?var_dump($ltcaisseJumbo);?>
                                    <thead>
                                    <tr>

                                        <th>Nom</th>
                                        <th>Nombre de caisse</th>
                                        <th>Total Vente</th>
                                        <th>Date</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td>jjj</td>
                                        <td>10</td>
                                        <td>1 200 000 Ar</td>
                                    </tr>
                                    <tr>
                                        <td>Apandrana</td>
                                        <td>6</td>
                                        <td>600 000 Ar</td>
                                    </tr>
                                    </tbody>

                                </table>
<?}?>
                            </div>

                        </div></div>
                </div>

                <div class="col-sm-7">
                    <div class="panel panel-primary">
                        <div class="panel-heading">STATISTIQUE DE VENTE</div>
                        <div class="panel-body">
                            <button class="btn-success btn">Mettre a jour</button>
                    <table class="table table-hover">
                        <thead>
                        <tr>
                            <th>SuperMaki</th>
                            <th>Argent en caisse</th>
                            <th>Factures</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>Ambanidia</td>
                            <td>1014 000 Ar</td>
                            <td>1123</td>
                        </tr>
                        <tr>
                            <td>Ankorondrano</td>
                            <td>2 109 000 Ar</td>
                            <td>1001</td>
                        </tr>
                        </tbody>
                    </table>
                </div>



</div>
                </div>
            </div>
        </div>
    </div>
