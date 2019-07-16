<?php 
define("DB_SERVER", "localhost");
define("DB_USER", "world_hello");
define("DB_PASSWORD", "asdfasf@123");
define("DB_DATABASE", "barcode_scan");

$con = mysqli_connect(DB_SERVER , DB_USER, DB_PASSWORD, DB_DATABASE);
$check="SELECT * FROM `barcodeno` WHERE barcode ='$barcode'";
$rs = mysqli_query($con,$check);
$data = mysqli_fetch_assoc($rs);
if($data== $row['barcode']) {
   $response = array();

$message = "data already exist";
array_push($response,array('message'=>$message));
echo json_encode($response); 
}
else
{
$date=$_POST["date"];
$place=$_POST["place"];
$tagno=$_POST["tagno"];
$query ="INSERT INTO `barcodeno`(`barcode`,`date`,`place`,`tagno`) VALUES ('$barcode','$date','$place','$tagno')";

if (mysqli_query($con,$query))
{
$response = array();

$message = "one item add in your bag";
array_push($response,array('message'=>$message));
echo json_encode($response); 
}
else
{
echo "Error adding user in database<br/>";
}
}