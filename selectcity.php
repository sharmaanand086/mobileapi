
<?php
   $host = "localhost";
    $db_user = "world_hello";
    $db_password = "asdfsa@123";
    $db_name = "barcode_scan";
    $con = mysqli_connect($host,$db_user,$db_password,$db_name);
   
$query = "SELECT * FROM `city`"; 

$result = mysqli_query($con,$query);

if(mysqli_num_rows($result)>0)
{

    while($response = mysqli_fetch_assoc($result))
    {
     $json_array[] = $response ;	  
    }          
  echo json_encode($json_array);
    
 }else{
$message = "You dont have any Item";
	    array_push($response,array("message"=>$message));
		echo json_encode($response);
}
 
 
?>
