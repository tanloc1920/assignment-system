<?php
    include "connectDB.php";
    $magv = $_POST["msgv"];
    $tm = $_POST["tenmon"];
    $mm = $_POST["mm"];
    $hk = $_POST["hk"];
    $nh = $_POST["nh"];

    $con->set_charset("utf-8");
    $sql="insert into giangday(MAGV,MM,TENMON,HK,NH) values('$magv','$mm','$tm','$hk','$nh') ";
    $result=$con->query($sql);
    header("location:editgd.php");
?>