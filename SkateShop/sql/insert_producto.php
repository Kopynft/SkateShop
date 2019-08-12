<?php

    include ("conexion.php");

    $con = connect();

    $codigo_p = $_POST["codigo_p"];
    $nombre_p = $_POST["nombre_p"];
    $t_producto = $_POST["t_producto"];
    $comprado = $_POST["comprado"];
    
    $sql = "INSERT INTO `producto`
            (`codigo_producto`, `nombre_producto`,  `tipo`, `comprado_a`)
            VALUES('$codigo_p', '$nombre_p', '$t_producto', '$comprado');";

    mysqli_query($con, $sql);

    header("Location: ../html/productos.php");
?>