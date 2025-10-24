<?php
    $server = "localhost";
    $user = "root";
    $password = "";
    $bd = "barbearia";
    $connect = mysqli_connect($server, $user, $password, $bd);
    if(!$connect){
        die("Connection failed: " . mysqli_connect_error());
    }
?>