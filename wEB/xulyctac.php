<?php
    include "connectDB.php";
    $magv = $_POST["msgv"];
    $tengv = $_POST["tengv"];
    $sk = $_POST["sk"];
    $dd = $_POST["dd"];

    $con->set_charset("utf-8");
    $sql="insert into congtac(MAGV,TENGV,SK,DD) values('$magv','$tengv','$sk','$dd') ";
    $result=$con->query($sql);
    header("location:editctac.php");
?>