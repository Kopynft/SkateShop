<?php

    $con = new mysqli("localhost", "root", "", "skateshop");
    $datospersona = $con -> query("SELECT * FROM `persona`");

?>