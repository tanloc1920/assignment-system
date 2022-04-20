<?php
    include "connectDB.php";
    $mssv = $_POST["msgv"];
    $ten = $_POST["hovatengv"];
    $bm = $_POST["bm"];
    $cv = $_POST["cv"];

    $con->set_charset("utf-8");
    $sql="insert into giaovien values('$mssv','$ten','$bm','$cv') ";
    $result=$con->query($sql);
    header("location:editgv.php");
?>