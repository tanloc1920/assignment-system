<?php
    include("connectDB.php");
    $arr= array();
    $query = "Select * from detai";
    $result = mysqli_query($con,$query);

    while($temp = mysqli_fetch_array($result)){
        $stt = $temp["STT"];
        $ten = $temp["TENDETAI"];
        $hotengv = $temp["TENGV"];
        $magv = $temp["MSGV"];

        $line=array("stt"=>$stt,"ten"=>$ten,"magv"=>$magv,"hotengv"=>$hotengv);
        array_push($arr,$line);
    }
    // print_r($arr);
?>