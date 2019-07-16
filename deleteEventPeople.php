<?php
define("DB_SERVER", "localhost");
define("DB_USER", "world_hello");
define("DB_PASSWORD", "asdfas@123");
define("DB_DATABASE", "barcode_scan");

$con = mysqli_connect(DB_SERVER , DB_USER, DB_PASSWORD, DB_DATABASE);  
  
$name = $_POST["name"];
$id = $_POST["id"];
 
$query = "DELETE FROM `eventpeople` WHERE id='$id'"; 


$result1 = mysqli_query($con,$query);
  
if ($result1 === TRUE)
 {
   
    //$response = array(); 
    $message = "Delete successfully.";
    $myObj->tag =$message;
    $myJSON = json_encode($myObj);
    echo $myJSON;
    
} 
?>