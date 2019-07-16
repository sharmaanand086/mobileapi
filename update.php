<?php
define("DB_SERVER", "localhost");
define("DB_USER", "world_hello");
define("DB_PASSWORD", "sdfaaf@123");
define("DB_DATABASE", "barcode_scan");

$con = mysqli_connect(DB_SERVER , DB_USER, DB_PASSWORD, DB_DATABASE);  
  
$date = $_POST["date"];
$tagno = $_POST["tagno"];
 
$query = "UPDATE `barcode` SET  `tagno` = '$tagno' WHERE date='$date'"; 


$result1 = mysqli_query($con,$query);
  
if ($result1 === TRUE)
 {
   
    //$response = array(); 
    $message = "Tag updated successfully.";
    $myObj->tag =$message;
    $myJSON = json_encode($myObj);
    echo $myJSON;
    
   // array_push($response,array("tag"=>$message));
     //echo json_encode("tag"=>$message);
   //echo json_encode(array("server_response"=>$response));

      // $data = array_push($data,array('tag' => 'Tag updated successfully'));
        //echo json_encode($data);
  //$msg = "Tag updated successfully";
   

     
} 
else 
{
    echo "Error updating record: " . $conn->error;
}
 
 
 
?>