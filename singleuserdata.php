<?php
define("DB_SERVER", "localhost");
define("DB_USER", "world_hello");
define("DB_PASSWORD", "asdfaf@123");
define("DB_DATABASE", "barcode_scan");

$con = mysqli_connect(DB_SERVER , DB_USER, DB_PASSWORD, DB_DATABASE);  
  
$tagno = $_POST["tagno"];
 
$query = "SELECT * FROM `eventpeople` WHERE tagno='$tagno' ORDER BY id DESC"; 

$result = mysqli_query($con,$query);
		
if(mysqli_num_rows($result) > 0)
{

    while($response = mysqli_fetch_assoc($result))
    {
     $json_array[] = $response;	  
    }          
   echo json_encode($json_array);
    
 }else{
$message = "You don,t have any record";
	   // array_push($response,array("message"=>$message));
// 		echo json_encode($response);
        $response = array('allocation'=>'0',"message"=>$message);
        $json_array[] = $response;
        echo json_encode($json_array);
}
 
?>