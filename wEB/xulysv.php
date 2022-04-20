<?php
    include "connectDB.php";
    $mssv = $_POST['mssv'];
    $ten = $_POST["hovaten"];
    $date = $_POST["date"];
    $lop = $_POST["lop"];
    
    $con->set_charset("utf-8");
    $sql="insert into sinhvien values('$mssv','$ten','$date','$lop') ";
    echo($sql);
    $result=$con->query($sql);
    header("location:editsv.php");
?>