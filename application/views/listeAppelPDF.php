

<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

	<link href="<?php echo base_url(); ?>assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="<?php echo base_url(); ?>assets/vendors/css/font-awesome.min.css" rel="stylesheet">
</head>
<body>
<div class="container">
	<div class="row">
		<div class="col-sm-12">
            <h2>HISTORIQUE DES APPELS PAR TELEOPERATEURS</h2><hr>

            <div class="well table-responsive">

                <?php if($ltAgent!=null) { ?>
                    <?php foreach ($ltAgent as $row): ?>
                        <h2><?php echo $row->getfullName() ?></h2>

                        <table class="table table-striped jambo_table bulk_action">
                            <thead>
                            <tr class="headings">
                                <th></th>
                                <th>Date/Heure debut</th>
                                <th>Date/Heure fin</th>
                                <th>Duree</th>
                                <th>Action</th>
                                <th>Date action</th>
                                <th>Commentaire</th>
                                <th>Avec (client)</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php if ($row->getLtAppel() != null) { ?>
                                <?php foreach ($row->getLtAppel() as $res): ?>
                                    <tr class="even pointer">
                                        <td>Appel <?php echo $res->getEtat() ?></td>
                                        <td><?php echo $res->getDateAppel() ?></td>
                                        <td><?php echo $res->getDateFinAppel() ?></td>
                                        <td><?php echo $res->getDureeAppel() ?> s</td>
                                        <td><?php echo $res->getAction() ?></td>
                                        <td><?php echo $res->getDateAction() ?></td>
                                        <td><?php echo $res->getCommentaireAction() ?></td>
                                        <td><?php echo $res->getClient() ?></td>
                                    </tr>
                                <?php endforeach; ?>
                            <?php } ?>
                            </tbody>
                        </table>

                    <?php endforeach;
                }?>
            </div>

            <br><br>
            <hr>

        </div>
    </div>
</div>
</body>
</html>