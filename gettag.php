<?php
define("DB_SERVER", "localhost");
define("DB_USER", "world_hello");
define("DB_PASSWORD", "asfdas@123");
define("DB_DATABASE", "barcode_scan");

$con = mysqli_connect(DB_SERVER , DB_USER, DB_PASSWORD, DB_DATABASE);  
 if(isset($_POST['submit'])){ 
$date = $_POST["date"];
 
$query = "SELECT * FROM `barcode` WHERE date='$date'"; 

$result = mysqli_query($con,$query);

if(mysqli_num_rows($result)>0)
{

    while($response = $result->fetch_assoc()) {
          $tagno[]= array(
            'id'=> $response["id"],             
            'tagno'=> $response["tagno"],
            'place'=> $response["place"],
            'name'=> $response['name']
          );
    }          
   echo json_encode($tagno);
    
}
else{
    $response = array();
    $code = "data_false";
    $message = "Failed...";
    array_push($response,array("code"=>$code,"message"=>$message));
    echo json_encode(array("server_response"=>$response));
}
 }
 
?>