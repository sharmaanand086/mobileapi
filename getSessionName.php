
<?php
define("DB_SERVER", "localhost");
define("DB_USER", "world_hello");
define("DB_PASSWORD", "asdfa@123");
define("DB_DATABASE", "barcode_scan");

$con = mysqli_connect(DB_SERVER , DB_USER, DB_PASSWORD, DB_DATABASE);  
  
$tag = $_POST['tagno'];
 
$query = "SELECT * FROM `session_name` WHERE tagno='$tag' ORDER BY id ASC"; 

$result = mysqli_query($con,$query);
//var_dump($result);
if(mysqli_num_rows($result)>0)
{

    while($response = mysqli_fetch_assoc($result))
    {
     $json_array[] = $response;	  
    }          
   echo json_encode($json_array);
   
 }else{
//  $response ='';
  
// $tagno2 = array('message'=>$response);

//  echo json_encode($tagno2);
 
 $message = "No allocation name. Please contact to admin";
	   // array_push($response,array("message"=>$message));
// 		echo json_encode($response);
        $response = array("message"=>$message);
        $json_array[] = $response;
        echo json_encode($json_array);
 } 
?>