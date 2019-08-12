<?php

function connect()
{
    $username = "root";
    $password = "";
    $server = "localhost";
    $database = "skateshop";
    $con = mysqli_connect($server, $username, $password, $database) or die ("Error al conectar ").mysql_error();

    return $con;

}

?>