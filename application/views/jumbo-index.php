<?php setlocale(LC_TIME, 'fr_FR.utf8','fra') ?>
<script type="text/javascript" src="www.gstatic.com/charts/loader.js"></script>

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

                        <div class="col-sm-6">
                            <div class="panel panel-primary">
                                <div class="panel-heading">CAISSES SUPERMAKI</div>
                                <div class="panel-body">
                                   <button class="btn-success btn">Importer des donn&eacutees</button>
                                    <table class="well - table-hover table">
                                        <thead>
                                            <tr>
                                                <th>Lieu </th>
                                                <th>Numero caisse</th>
                                                <th>Total Vente</th>
                                                <th>Nombre de facture</th>
                                            </tr>
                                        </thead>

                                        <?php
                                        foreach ($ltcaisseJumbo as $liste):?>
                                        <tbody>
                                            <tr>
                                                <td><?php echo $liste->getNOMSUPERMAKI()?></td>
                                                <td><?php echo $liste->getIDCAISSE()?></td>
                                                <td><?php echo $liste->getARGENTENCAISSE()?> Ar</td>
                                                <td><?php echo $liste->getNOMBREFACTUREPARSUPERMAKI()?> tickets</td>

                                            </tr>
                                        </tbody>
                                        <?php endforeach;?>
                                    </table>
                                 </div>
                            </div>
                        </div>

                            <div class="col-sm-6">
                                <div class="panel panel-primary">
                                    <div class="panel-heading">STATISTIQUE DE VENTE</div>
                                    <div class="panel-body">

                                    </div>
                                </div>
                            </div>

        </div>
    </div>


