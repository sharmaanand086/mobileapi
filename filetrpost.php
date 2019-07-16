<?php
    $host = "localhost";
    $db_user = "world_hello";
    $db_password = "pass@safdas";
    $db_name = "barcode_scan";
    $con = mysqli_connect($host,$db_user,$db_password,$db_name);
  $d = $_POST['date'];
 $t = $_POST['tagno'];
 $p = $_POST['place'];
 $name=$_POST['name'];
 $type=$_POST['ctf'];
 $query = "";
 $query .= "SELECT * FROM `barcode` WHERE place = '$p' AND ";
 $check = 0;
 $upcheck = 0;
 if($_POST['date'] == "") {
       $check =0;
       $upcheck =0;
  }else{
      $check =1;
      $upcheck =1;
     $query .= " date='$d'";
  }
  
  if($_POST['tagno'] == "") {
       $check =0;
       $upcheck =0;
  }else{
      $check =1;
      $upcheck =1;
     $query .= " tagno='$t'";
  }
  
    if($_POST['name'] == "") {
       $check =0;
       $upcheck =0;
  }else{
      $check =1;
      $upcheck =1;
     $query .= " name='$name'";
  }
  
  if($_POST['ctf'] == "") {
       $check =0;
       $upcheck =0;
  }else{
      $check =1;
      $upcheck =1;
     $query .= " ctf='$type'";
  }
  //echo $query;
 $result = mysqli_query($con,$query);
  if(mysqli_num_rows($result)>0){
        while($response = mysqli_fetch_assoc($result))
    {
     $json_array[] = $response ;	  
    }          
  echo json_encode($json_array);
  }
  
 ?>
