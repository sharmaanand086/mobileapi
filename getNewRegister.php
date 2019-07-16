
<?php
define("DB_SERVER", "localhost");
define("DB_USER", "world_hello");
define("DB_PASSWORD", "asdfas@123");
define("DB_DATABASE", "barcode_scan");

$con = mysqli_connect(DB_SERVER , DB_USER, DB_PASSWORD, DB_DATABASE);  
  
$tag = $_POST['tagno'];
 
$query = "SELECT * FROM `new_register` WHERE tagno = '$tag'"; 

$result = mysqli_query($con,$query);

if(mysqli_num_rows($result)>0)
{

    while($response = mysqli_fetch_assoc($result))
    {
     $json_array[] = $response;	  
    }          
   echo json_encode($json_array);
    
 }else{
         $message = "You dont have any Data";
	    array_push($response,array("message"=>$message));
		echo json_encode($response);
}
 
?>