<?php
    include("connectDB.php");
    $arr= array();
    $query = "Select * from congtac";
    $result = mysqli_query($con,$query);

    while($temp = mysqli_fetch_array($result)){
        $magv = $temp["MAGV"];
        $tengv = $temp["TENGV"];
        $sk = $temp["SK"];
        $dd = $temp["DD"];
        $id = $temp["id"];

        $line=array("msgv"=>$magv,"hotengv"=>$tengv,"sk"=>$sk,"dd"=>$dd,"id"=>$id);
        array_push($arr,$line);
    }
    //print_r($arr);
?>