<?php

    $con = new mysqli("localhost", "root", "", "skateshop");
    $datossede = $con -> query("SELECT * FROM `sede`");

?>