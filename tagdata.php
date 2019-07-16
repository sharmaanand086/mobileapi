<?php
define("DB_SERVER", "localhost");
define("DB_USER", "world_hello");
define("DB_PASSWORD", "adsfas@123");
define("DB_DATABASE", "barcode_scan");

$con = mysqli_connect(DB_SERVER , DB_USER, DB_PASSWORD, DB_DATABASE);  
  
$date = $_POST["place"];
 
$query = "SELECT * FROM `barcode` WHERE place='$date' ORDER BY id DESC"; 

$result = mysqli_query($con,$query);

if(mysqli_num_rows($result)>0)
{

    while($response = $result->fetch_assoc())
    {
       
            $tagno[]= array(                    
		'tagno'=> $response["tagno"],
		'place'=> $response["place"],
		'time'=>$response["time"],
		'ctf'=>$response["ctf"],
		'name'=>$response["name"],
		'date'=>$response["date"],
		'tf'=>$response["TF"],
			'ss_name'=>$response["ss_name"]
          );
    }          
   echo json_encode($tagno);
    
 } 
 $response ='No data found';
  
$tagno2 = array('message'=>$response);

 echo json_encode($tagno2);
 
?>