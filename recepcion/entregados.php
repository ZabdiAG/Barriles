<?php
/**
 * Created by PhpStorm.
 * User: Ivette
 * Date: 5/07/15
 * Time: 10:46 PM
 */ 

include_once 'header.php';
include_once 'dbConnection.php';

$dbConnection = new DbConnection();

$result = $dbConnection->obtenerEntregados();


?>

<table class="ui celled table">
    <thead>
        <tr>
            <th>ID</th>
            <th>Fecha de entrega</th>
            <th>Proveedor</th>
            <th>Requisitor</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($result as $row):?>
            <tr>
                <td><?php echo $row['idMaterial']?></td>
                <td><?php echo $row['fechaEntrega']?></td>
                <td><?php echo $row['proveedor']?></td>
                <td><?php echo $row['requisitor']?></td>
            </tr>
        <?php endforeach;?>
    </tbody>
</table>