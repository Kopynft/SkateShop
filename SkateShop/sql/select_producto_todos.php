<?php

    $con = new mysqli("localhost", "root", "", "skateshop");
    $datosproducto = $con -> query("SELECT * FROM `producto`");

?>