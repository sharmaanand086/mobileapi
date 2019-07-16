<?php
 include("isdk.php");
  $app = new iSDK;
    $host = "localhost";
    $db_user = "world_hello";
    $db_password = "asdfas@123";
    $db_name = "barcode_scan";
    
    $con = mysqli_connect($host,$db_user,$db_password,$db_name);
  		
     $barcode = $_POST["barcode"]; 
        

    
	if(!empty($barcode))
	{
		
                

$query1 = "SELECT * FROM `barcodeno` WHERE barcode ='$barcode'";

$result = mysqli_query($con,$query1);
$row = mysqli_fetch_assoc($result);

if($barcode ==$row["barcode"])
{
//echo "adsasd";
$response1 = array();

$message1 = "already exist";
array_push($response1,array('message'=>$message1));
echo json_encode($response1); 
}
else
{
$barcode = $_POST["barcode"]; 
$date=$_POST["date"];
$place=$_POST["place"];
 $tagno=$_POST["tagno"];
$time=$_POST["time"];
$session_name=$_POST["session_name"];
$query ="INSERT INTO `barcodeno`(`id`, `barcode`, `date`, `place`, `tagno`, `time`, `session_name`) VALUES  ('','$barcode','$date','$place','$tagno','$time','$session_name')";

mysqli_query($con,$query);

$response = array();

$message = "one item add";
array_push($response,array('message'=>$message));
echo json_encode($response); 
if ($app->cfgCon("connectionName")) 
        		{
                     
                      $grp1 = array('_allocationname1'  => $session_name);
                      $query1234 = $app->dsUpdate("Contact", $barcode , $grp1);
                      //var_dump($session_name);
        		}
           }    
     }
else 
{
$response = array();
$message = "Please try again....";
array_push($response,array('message'=>$message));
echo json_encode($response); 
} 

?>