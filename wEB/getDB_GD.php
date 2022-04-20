<?php
    include("connectDB.php");
    $arr= array();
    $query = "Select * from giaovien,giangday where giaovien.MAGV = giangday.MAGV";
    $result = mysqli_query($con,$query);

    while($temp = mysqli_fetch_array($result)){
        $ten = $temp["HOTENGV"];
        $hp = $temp["MM"];
        $tm = $temp["TENMON"];
        $hk = $temp["HK"];
        $nh = $temp["NH"];
        $id = $temp["id"];
        $line=array("hotengv"=>$ten,"mm"=>$hp,"tenmon"=>$tm,"hk"=>$hk,"nh"=>$nh,"id"=>$id);
        array_push($arr,$line);
    }
    // print_r($arr);
?>