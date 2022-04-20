<?php
    include("connectDB.php");
    $query = "Select * from dangkydetai";
    $result = mysqli_query($con,$query);

    while($temp = mysqli_fetch_array($result)){
        $ten = $temp["hovaten"];
        $ut1 = $temp["uutien1"];
        $ut2 = $temp["uutien2"];
        $ut3 = $temp["uutien3"];
        $ut4 = $temp["uutien4"];

        $line=array("ten"=>$ten,"uutien1"=>$ut1,"uutien2"=>$ut2,"uutien3"=>$ut3,"uutien4"=>$ut4);
        array_push($data,$line);
        //print_r($data);
    }
    $title = new PC();
    
    $query = "Select * from dangkydetai";
    $result = mysqli_query($con,$query);
    $MAXSV = $result->num_rows;

    $query = "Select * from detai";
    $result = mysqli_query($con,$query);
    $MAXDT = $result->num_rows;

    $title->set_MAXSV($MAXSV);
    $title->set_MAXDT($MAXDT);

    for($i=0;$i <count($data); $i++){
        $title->addData($data[$i]["uutien1"],$data[$i]["uutien2"],$data[$i]["uutien3"],$data[$i]["uutien4"]);   
    }
?>