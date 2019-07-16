<?php

 $host = "localhost";
    $db_user = "world_hello";
    $db_password = "adsfas@123";
    $db_name = "barcode_scan";
    
    $con = mysqli_connect($host,$db_user,$db_password,$db_name);
    
  
    $name = $_POST["name"];
    $tag = $_POST['tag_no'];
    $query = "INSERT INTO `session_name`(`id`, `tagno`, `name`) VALUES('','$tag','$name')";
    mysqli_query($con,$query);
    $query2 = "UPDATE `barcode` SET `ss_name`='True' WHERE tagno='$tag'"; 
    mysqli_query($con,$query2);
    if ($query ==true and $query2 == true)
 {
   
    $response = array();
	$message = "Name added and updated successfully";
    array_push($response,array('message'=>$message));
    echo json_encode($response); 
 }
?>