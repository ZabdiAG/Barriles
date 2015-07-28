<?php

// Campos: iDmaterial, tipo material, fecha automatico, provedor, guia, empresa, requisitor , email, fecha entrega
include_once 'dbConnection.php';
include_once 'header.php';
$mysqli = new DbConnection();

if(isset($_POST['registrar'])) {
    //insercion de datos en la base de datos
    $tipoMaterial       = $_POST['tipo_material'];
    $fechaAutomatico    = $_POST['fecha_automatico'];
    $proveedor          = $_POST['proveedor'];
    $guia               = $_POST['guia'];
    $empresa            = $_POST['empresa'];
    $requisitor         = $_POST['requisitor'];
    $email              = $_POST['email'];
    $fechaEntrega       = $_POST['fecha_entrega'];



    $consulta = "
        INSERT INTO material_indirecto( tipoMaterial,fechaAutomatico,proveedor, guia, empresa, requisitor, email, fechaEntrega)
        VALUES ('$tipoMaterial','$fechaAutomatico','$proveedor','$guia','$empresa','$requisitor','$email','$fechaEntrega')
    ";
    $res = $mysqli->mysqli->query($consulta);

    if($res == false ){
        echo "failed to execute query :";
        echo "(" . $mysqli->errno . ") " . $mysqli->error;
    }

}

?>


<!DOCTYPE HTML>
<html>
<head>
    <meta charset="utf-8">

    <!--load front end framework semantic-->
    <link rel="stylesheet" type="text/css" href="dist/semantic.min.css">
    <script type="text/javascript" src="dist/semantic.min.js"></script>
</head>

    <div class="ui form">
        <form action="registrar.php" method="post">

        <!--// Campos: iDmaterial, tipo material, fecha automatico, proveedor, guia, empresa, requisitor , email, fecha entrega-->

            <input type="text" name="registrar" hidden="true">
            <div class="required field">
                <label>Fecha automático</label>
                <input type="date" name="fecha_automatico" style="width:205px;"><br>
            </div>
            <div class="two fields">
                <div class="required field">
                    <label>Proveedor</label>
                    <input type="text" name="proveedor" placeholder="Proveedor"><br>
                </div>
                <div class="required field">
                    <label>Tipo de material</label>
                    <input type="text" name="tipo_material" placeholder="Tipo de material"><br>
                </div>
            </div>
            <div class="two fields">
                <div class="required field">
                    <label>Guía</label>
                    <input type="text" name="guia" placeholder="Guía"><br>
                </div>
                <div class="required field">
                    <label>Empresa</label>
                    <input type="text" name="empresa" placeholder="Empresa"><br>
                </div>
            </div>
            <div class="two fields">
                <div class="required field">
                    <label>Requisitor</label>
                    <input type="text" name="requisitor" placeholder="Requisitor"><br>
                </div>
                <div class="required field">
                    <label>Email</label>
                    <input type="email" name="email" placeholder="Email"><br>
                </div>
            </div>
            <div class="unrequired field">
                <label>Fecha de entrega</label>
                <input type="date" name="fecha_entrega" style="width:205px;"><br>
            </div>
            <button class="ui green button">
                Enviar
                <!--<input type="submit">-->
            </button>
        </form>
    </div>

</html>

