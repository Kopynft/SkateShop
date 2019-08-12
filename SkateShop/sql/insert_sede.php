<?php

    include ("conexion.php");

    $con = connect();

    $direccion_s = $_POST["direccion_s"];
    $telefono_s = $_POST["telefono_s"];

    $sql = "INSERT INTO `sede`
            (`direccion_sede`, `telefono_sede`)
            VALUES('$direccion_s', '$telefono_s');";
    
    mysqli_query($con, $sql);

    header("Location: ../html/sedes.php");

?>