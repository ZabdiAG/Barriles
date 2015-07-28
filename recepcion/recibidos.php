<?php

include 'dbConnection.php';
include 'header.php';

$dbConnection = new DbConnection();


$result = $dbConnection->obtenerRecibidos();

?>

<table class="ui celled table">
    <thead>
        <tr>
            <th>ID</th>
            <th>Fecha automatico</th>
            <th>Proveedor</th>
            <th>Empresa</th>
            <th>Requisitor</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($result as $row):?>
            <tr>
                <td><?php echo $row['idMaterial']?></td>
                <td><?php echo $row['fechaAutomatico']?></td>
                <td><?php echo $row['proveedor']?></td>
                <td><?php echo $row['empresa']?></td>
                <td><?php echo $row['requisitor']?></td>
            </tr>
        <?php endforeach;?>
    </tbody>
</table>

