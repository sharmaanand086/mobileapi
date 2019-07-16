
<?php
define("DB_SERVER", "localhost");
define("DB_USER", "world_hello");
define("DB_PASSWORD", "asdfas@123");
define("DB_DATABASE", "barcode_scan");

$con = mysqli_connect(DB_SERVER , DB_USER, DB_PASSWORD, DB_DATABASE);  
  
$id = $_POST['id'];
$name = $_POST['name'];
 
if (!empty($name)&&!empty($id)) {
         

			$query="UPDATE `session_name` SET `name`='$name' WHERE id = '$id'";
			
            $result3 = mysqli_query($con,$query);
            $response3 = array();
           
            $message ="Thank you for your updating....";
            array_push($response3,array("message"=>$message));
            echo json_encode($response3); 
            mysqli_close($con);
        }else{
            $error = 1;
            $empty_name="Cannot be empty.";
            echo $empty_name;
        }
 
?>