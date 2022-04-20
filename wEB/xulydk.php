<?php
    include "connectDB.php";
    $mssv = $_POST["mssv"];
    $ten = $_POST["hovaten"];
    $sdt = $_POST["phone"];
    $lop = $_POST["lop"];
    $uutien1 = $_POST["uutien1"];
    $uutien2 = $_POST["uutien2"];
    $uutien3 = $_POST["uutien3"];
    $uutien4 = $_POST["uutien4"];

    $con->set_charset("utf-8");
    $sql="insert into dangkydetai(mssv,hovaten,phone,lop,uutien1,uutien2,uutien3,uutien4) values('$mssv','$ten','$sdt','$lop','$uutien1','$uutien2','$uutien3','$uutien4') ";
    $result=$con->query($sql);
    header("location:dangkydetai.php");
?>