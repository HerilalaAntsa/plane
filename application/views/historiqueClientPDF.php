

<!DOCTYPE html>
<html>
<head>
</head>
<body>
<div class="">
</div>
<div class="row">
    <div class="col-sm-3"></div>
    <div class="col-sm-9">
        <div class="row">
            <h2>HISTORIQUE DES APPELS DE <?php echo $client->getFullName() ?></h2><hr>

            <div class="row well">
                <p>TOUS LES APPELS</p>

                <table class="table" border="1">
                    <thead>
                    <tr>
                        <th></th>
                        <th>Date</th>
                        <th>Duree</th>
                        <th>Action</th>
                        <th>Date action</th>
                        <th>Commentaire</th>
                        <th>Avec (agent)</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php if($ltAppel!=null){?>
                        <?php foreach ($ltAppel as $res):?>
                            <tr>
                                <td>Appel <?php echo $res->getEtat() ?></td>
                                <td><?php echo $res->getDateAppel() ?></td>
                                <td><?php echo $res->getDureeAppel() ?></td>
                                <td><?php echo $res->getAction() ?></td>
                                <td><?php echo $res->getDateAction() ?></td>
                                <td><?php echo $res->getCommentaireAction() ?></td>
                                <td><?php echo $res->getAgent()->getFullName() ?></td>
                            </tr>
                        <?php endforeach; ?>
                    <?php } ?>
                    </tbody>
                </table>

            </div>

            <br><br>
            <hr>

        </div>
    </div>
</div>
</body>
</html>