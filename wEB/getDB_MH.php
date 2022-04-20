<?php
    include("connectDB.php");
    $arr= array();
    $query = "Select * from monhoc";
    $result = mysqli_query($con,$query);

    while($temp = mysqli_fetch_array($result)){
        $mm = $temp["MM"];
        $tenm = $temp["TENMON"];
        $tc = $temp["TC"];

        $line=array("mm"=>$mm,"tenm"=>$tenm,"tc"=>$tc);
        array_push($arr,$line);
    }
    //print_r($arr);
?>