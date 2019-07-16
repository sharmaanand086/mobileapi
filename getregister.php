<?php
 $host = "localhost";
    $db_user = "world_hello";
    $db_password = "asdfsa@123";
    $db_name = "barcode_scan";
    $con = mysqli_connect($host,$db_user,$db_password,$db_name);
include("isdk.php");
    $email = $_POST["email"];
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $tagno =$_POST['tagno'];
    $date = $_POST['dt'];
    $time = $_POST['tm'];
    $coachname = $_POST['coachname'];
    $allocationno = $_POST['allocation'];
    
    
    $app = new iSDK;
		if ($app->cfgCon("connectionName")) 
		{ 
		    	$contactId = $app->addWithDupCheck(array('FirstName' => $name, 'Email' => $email,'Phone1' => $phone), 'Email');
		    		$groupId = $tagno; 					// Registration speaktofortune.com/payment/
                	$result = $app->grpAssign($contactId, $groupId);
		
		$uqniceno = $contactId;
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
		}
?>