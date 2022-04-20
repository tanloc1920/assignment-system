<?php
    include("connectDB.php");
    $arr= array();
    $query = "Select * from giaovien";
    $result = mysqli_query($con,$query);

    while($temp = mysqli_fetch_array($result)){
        $magv = $temp["MAGV"];
        $tengv = $temp["HOTENGV"];
        $bm = $temp["BM"];
        $td = $temp["CV"];
        $line=array("magv"=>$magv,"tengv"=>$tengv,"bm"=>$bm,"cv"=>$td);
        array_push($arr,$line);
    }
    //print_r($arr);
?>