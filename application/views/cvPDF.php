<!DOCTYPE html>
<html>
<head>
</head>
<body>
<div class="row">
    <div class="col-sm-3"></div>
    <div class="col-sm-9">
        <div class="row">
            <h2>Ticket</h2><hr>

            <div class="row well">
                <p><?php echo $ltStats()->getNOMSUPERMAKI(); ?></p>
                <?php foreach ($ltStats as $lt){?>
                 <p><b>Caisse :</b> <?php echo $cv->getIDCAISSE()->getNom(); ?></p>

                <br>
                <hr>
                <br><br>
                <?php }?>

            </div>



        </div>
    </div>
</div>
</body>
</html>