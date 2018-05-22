<!-- page content -->
<div class="right_col" role="main">
    <div class="">
        <div class="page-title">
            <div class="title_left">
                <h3>Detail Statistiques </h3>
            </div>
        </div>

        <div class="clearfix"></div>
        <div id="row">

            <table class="table table-striped jambo_table bulk_action">
                <thead>
                <tr class="headings">
                    <th class="column-title">Date/Heure debut</th>
                    <th class="column-title">Date/Heure fin</th>
                    <th class="column-title">Duree</th>
                    <th class="column-title">Action</th>
                    <th class="column-title">Avec (client)</th>
                    <th class="column-title">Par (agent)</th>
                </tr>
                </thead>

                <tbody>
                <?php if($results){ ?>
                    <?php foreach ($results as $row){?>
                        <tr class="even pointer">
                            <td class=" "><?php echo $row->getDateAppel() ?></td>
                            <td class=" "><?php echo $row->getDateFinAppel() ?></td>
                            <td class=" "><?php echo $row->getDureeAppelString() ?></td>
                            <td class=" "><?php echo $row->getAction() ?></td>
                            <td class=" "><?php echo $row->getClient() ?></td>
                            <td class=" "><?php echo $row->getAgent() ?></td>
                        </tr>
                    <?php } ?>
                <?php } ?>

                </tbody>
            </table>
            <?php if($links){ ?>
                <p><?php echo $links; ?></p>
            <?php } ?>
        </div>

    </div>
</div>
<!-- /form datepicker -->

</div>
</div>
</div>
</div>
<!-- /page content -->