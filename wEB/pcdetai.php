<?php
    class PC{
        public $Max_SV;
        public $Max_DT;
        public $data = array();
        function set_MAXSV($num){
            $this->Max_SV=$num;
        }
        function set_MAXDT($num){
            $this->Max_DT=$num;
        }
        function printData(){
              echo ("SV UT1 UT2 UT3 UT4");
              echo("<br>");
              for ($i=0;$i<count($data);$i++){
                       $temp = $data[$i];
                       echo($this->data[$i]["UT1"]); echo(" ");
                       echo($this->data[$i]["UT2"]); echo(" ");
                       echo($this->data[$i]["UT3"]); echo(" ");
                       echo($this->data[$i]["UT4"]); echo(" ");
                       echo("<br>");
               }
      
           }
          function addData($UT1=0,$UT2=0,$UT3=0,$UT4=0){
              $temp = array("UT1"=>$UT1,"UT2"=>$UT2,"UT3"=>$UT3,"UT4"=>$UT4);
              array_push($this->data,$temp);
          }
          function check_DT($UT,$k,$res){
              //var_dump($res);
              $res[$this->data[$k][$UT]]=1;
              for($i=$k+1;$i<$this->Max_SV;$i++){
                  $ok[4]=[0,0,0,0];
                  if($res[$this->data[$i]["UT1"]]== 0) $ok[0]=1; else $ok[0]=0; 
                  if($res[$this->data[$i]["UT2"]]== 0) $ok[1]=1; else $ok[1]=0;   
                  if($res[$this->data[$i]["UT3"]]== 0) $ok[2]=1; else $ok[2]=0; 
                  if($res[$this->data[$i]["UT4"]]== 0) $ok[3]=1; else $ok[3]=0;
                  if($ok[0]==1 || $ok[1]==1 || $ok[2]==1 || $ok[3]==1) continue;
                  if($ok[0]==0 && $ok[1]==0 && $ok[2]==0 && $ok[3]==0){
                      return 0;
                  }
              }
              return 1;
          }
          function thuchien(){
              $kq= array();
              $res=array();
              $sv=array();
              for($i=0;$i<$this->Max_DT;$i++){
                  $res[$i]=0;
              }
              //print_r($this->data);
              for($i=0;$i<$this->Max_SV;$i++){
                if($res[$this->data[$i]["UT1"]] == 0 && $this->check_DT("UT1",$i,$res) ){
                          $res[$this->data[$i]["UT1"]] = 1;
                          $sv[$i]=$this->data[$i]["UT1"];
                  }
                  else if($res[$this->data[$i]["UT2"]] == 0 && $this->check_DT("UT2",$i,$res) ){
                          $res[$this->data[$i]["UT2"]] = 1;
                          $sv[$i]=$this->data[$i]["UT2"];
                  }
                  else if($res[$this->data[$i]["UT3"]] == 0 && $this->check_DT("UT3",$i,$res) ){
                          $res[$this->data[$i]["UT3"]] = 1;
                          $sv[$i]=$this->data[$i]["UT3"];
                  }
                  else if($res[$this->data[$i]["UT4"]] == 0 && $this->check_DT("UT4",$i,$res) ){
                          $res[$this->data[$i]["UT4"]] = 1;
                          $sv[$i]=$this->data[$i]["UT4"];
                  }
                  
              }
              for($i=0;$i<$this->Max_SV;$i++){
                  $kq[$i]=$sv[$i];
              //    echo($sv[$i]."<br>");
              }
              return $kq;
          }
        
    }
    include("connectDB.php");
    $query = "Select * from dangkydetai";
    $result = mysqli_query($con,$query);
    $data= array();
    while($temp = mysqli_fetch_array($result)){
        $ten = $temp["hovaten"];
        $ut1 = $temp["uutien1"];
        $ut2 = $temp["uutien2"];
        $ut3 = $temp["uutien3"];
        $ut4 = $temp["uutien4"];

        $line=array("ten"=>$ten,"uutien1"=>$ut1,"uutien2"=>$ut2,"uutien3"=>$ut3,"uutien4"=>$ut4);
        array_push($data,$line);
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
    $res=$title->thuchien();
        
?>