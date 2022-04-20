<?php
    include "connectDB.php";
    $mm = $_POST["mm"];
    $tenm = $_POST["tenm"];
    $tc = $_POST["tc"];

    $con->set_charset("utf-8");
    $sql="insert into monhoc values('$mm','$tenm','$tc') ";
    $result=$con->query($sql);
    header("location:editmh.php");
?>