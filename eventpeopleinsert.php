<?php
 $host = "localhost";
    $db_user = "world_hello";
    $db_password = "asfdas@123";
    $db_name = "barcode_scan";
    
    $con = mysqli_connect($host,$db_user,$db_password,$db_name);
    
  
    $uqniceno = $_POST["uqniceno"];
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $date = $_POST['dt'];
    $time = $_POST['tm'];
    $coachname = $_POST['coachname'];
    $tagno =$_POST['tagno'];
    $allocationno = $_POST['allocation'];
    
    $sql = "SELECT * FROM eventpeople WHERE uqniceno = '$uqniceno' AND tagno = '$tagno'";
    $result = $con->query($sql);

        if ($result->num_rows > 0) {
            $response1 = array();
           $message1 = "User Already Exists";
                        array_push($response1,array('message'=>$message1));
                        echo json_encode($response1);
        }else{
            $query = "INSERT INTO `eventpeople`(`id`, `uqniceno`, `name`, `phone`, `dt`, `tm`, `coachname`, `tagno`,`allocation`) VALUES ('','$uqniceno','$name','$phone','$date','$time','$coachname','$tagno','$allocationno')";
                mysqli_query($con,$query);
                 $query1 = "UPDATE `eventpeople` SET `allocation`='$allocationno' WHERE tagno = '$tagno'";
                 mysqli_query($con,$query1);
                $response = array();
            	if($query==true){
            	    	$message = "Thank you for register...";
                        array_push($response,array('message'=>$message));
                        echo json_encode($response); 
            	}	else {
                    	$message = "Failed...";
                        array_push($response,array('message'=>$message));
                        echo json_encode($response); 
            	}
        }
    
    
?>