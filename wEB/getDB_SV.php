<?php
    include("connectDB.php");
    $arr= array();
    $query = "Select * from sinhvien";
    $result = mysqli_query($con,$query);

    while($temp = mysqli_fetch_array($result)){
        $mssv = $temp["MASV"];
        $ten = $temp["HOTEN"];
        $ns = $temp["NGAYSINH"];
        $ml = $temp["ML"];
        $line=array("mssv"=>$mssv,"ten"=>$ten,"ns"=>$ns,"ml"=>$ml);
        array_push($arr,$line);
    }
    //print_r($arr);
?>