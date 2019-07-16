<?php
 $host = "localhost";
    $db_user = "world_hello";
    $db_password = "asdfas@123";
    $db_name = "barcode_scan";
    
    $con = mysqli_connect($host,$db_user,$db_password,$db_name);
    
  $id = $_POST["id"];
    $uqniceno = $_POST["uqniceno"];
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $date = $_POST['dt'];
    $time = $_POST['tm'];
    $coachname = $_POST['coachname'];
    $tagno =$_POST['tagno'];
    
    $query = "UPDATE `eventpeople` SET `uqniceno`='$uqniceno',`name`='$name',`phone`='$phone' WHERE uqniceno = '$uqniceno'";
    
    mysqli_query($con,$query);
    $response = array();
	if($query==true){
	    	$message = "Thank you for update...";
            array_push($response,array('message'=>$message));
            echo json_encode($response); 
	}	else {
	$message = "Failed...";
            array_push($response,array('message'=>$message));
            echo json_encode($response); 
	}
?>