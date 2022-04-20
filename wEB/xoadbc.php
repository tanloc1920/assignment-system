<?php
    include "connectDB.php";
    $table = $_GET["table"];
    $field = $_GET["field"];
    $value = $_GET["value"];
    
    $arr= array();
    $query = "delete from `".$table."` where `".$field."` = '".$value."' ";
    // echo($query);
    $result = mysqli_query($con,$query);
    if($result){
        echo("Thành công");
    }
?>