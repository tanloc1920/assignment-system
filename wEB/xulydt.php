<?php
    include "connectDB.php";
    $msgv = $_POST["msgv"];
    $tengv = $_POST["hovatengv"];
    $stt = $_POST["mdt"];
    $ten = $_POST["ten"];

    $con->set_charset("utf-8");
    $sql="insert into detai values('$msgv','$tengv','$stt','$ten') ";
    $result=$con->query($sql);
    header("location:editdt.php");
?>