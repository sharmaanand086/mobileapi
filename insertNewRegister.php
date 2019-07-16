<?php
 $host = "localhost";
    $db_user = "world_hello";
    $db_password = "adsfas@123";
    $db_name = "barcode_scan";
    
    $con = mysqli_connect($host,$db_user,$db_password,$db_name);
    
  
    $name = $_POST["name"];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $tag = $_POST['tagno'];
    $query = "INSERT INTO `new_register`(`name`, `email`, `phone`, `tagno`) VALUES ('$name','$email','$phone','$tag')";
    
    mysqli_query($con,$query);
    $response = array();
		
		$message = "Thank you for new register...";
            array_push($response,array('message'=>$message));
            echo json_encode($response); 
?>