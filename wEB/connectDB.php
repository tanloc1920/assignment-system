<?php
    $host = "localhost:3306";
    $user = "root";
    $pass = "";
    $dbname = "dulieu";
    $con = new mysqli($host,$user,$pass,$dbname);
    if ($con->connect_error){
        echo("khong ket noi duoc");
    }
?>