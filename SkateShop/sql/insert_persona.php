<?php

    include ("conexion.php");

    $con = connect();

    $id = $_POST["id"];
    $t_id = $_POST["t_id"];
    $nombre = $_POST["nombre"];
    $salario = $_POST["salario"];
    $direccion = $_POST["direccion"];
    $telefono = $_POST["telefono"];
    $tipo = $_POST["t_persona"];
    
    if($tipo == "E")
    {
        $sql = "INSERT INTO `persona`
            (`identificacion`, `tipo_de_identificacion`,  `nombre`, `salario`, `tipo`)
            VALUES('$id', '$t_id', '$nombre', '$salario', '$tipo');";
    }

    else if ($tipo == "C")
    {
        $sql = "INSERT INTO `persona`
            (`identificacion`, `tipo_de_identificacion`,  `nombre`, `direccion`, `telefono`, `tipo`)
            VALUES('$id', '$t_id', '$nombre', '$direccion', '$telefono', '$tipo');";
    }

    mysqli_query($con, $sql);

    header("Location: ../html/personas.php");
?>