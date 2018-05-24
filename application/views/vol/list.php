<table border="1" width="100%">
    <tr>
        <th>IDVOL</th>
        <th>IDAVION</th>
        <th>VILLEDEPART</th>
        <th>VILLEARRIVE</th>
        <th>DATEDEPART</th>
        <th>DATEARRIVE</th>
        <th>DISTANCEVOL</th>
        <th>TARIFENFANT</th>
        <th>TARIFADULTE</th>
        <th>TARIFBEBE</th>
        <th>TARIFENFANTEAFFAIRE</th>
        <th>TARIFADULTEAFFAIRE</th>
        <th>TARIFBEBEAFFAIRE</th>
        <th>Actions</th>
    </tr>
    <?php foreach($vol as $V){ ?>
        <tr>
            <td><?php echo $V['IDVOL']; ?></td>
            <td><?php echo $V['IDAVION']; ?></td>
            <td><?php echo $V['VILLEDEPART']; ?></td>
            <td><?php echo $V['VILLEARRIVE']; ?></td>
            <td><?php echo $V['DATEDEPART']; ?></td>
            <td><?php echo $V['DATEARRIVE']; ?></td>
            <td><?php echo $V['DISTANCEVOL']; ?></td>
            <td><?php echo $V['TARIFENFANT']; ?></td>
            <td><?php echo $V['TARIFADULTE']; ?></td>
            <td><?php echo $V['TARIFBEBE']; ?></td>
            <td><?php echo $V['TARIFENFANTEAFFAIRE']; ?></td>
            <td><?php echo $V['TARIFADULTEAFFAIRE']; ?></td>
            <td><?php echo $V['TARIFBEBEAFFAIRE']; ?></td>
            <td>
                <a href="<?php echo site_url('vol/edit/'.$V['IDVOL']); ?>">Modifier</a> |
                <a href="<?php echo site_url('vol/remove/'.$V['IDVOL']); ?>">Supprimer</a>
            </td>
        </tr>
    <?php } ?>
</table>