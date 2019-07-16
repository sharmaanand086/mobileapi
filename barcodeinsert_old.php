<?php
   define("DB_SERVER", "localhost");
define("DB_USER", "world_hello");
define("DB_PASSWORD", "asdfasf@123");
define("DB_DATABASE", "barcode_scan");

$con = mysqli_connect(DB_SERVER , DB_USER, DB_PASSWORD, DB_DATABASE); 
 		
$barcode = $_POST["barcode"];        
        
        
    
	if(!empty($barcode))
	{
		
                $code = $_POST['barcode'];

               $query1 = "SELECT * FROM `barcodeno` WHERE barcode ='$code'";

               $result = mysqli_query($con,$query1);
 
               if(mysqli_num_row($result)>0){
                
                    $response1 = array();
		
	            $message1 = "bhag chutiya";
                    array_push($response1,array('message'=>$message1));
                    echo json_encode($response1); 
                 

             }else{
                $date=$_POST["date"];
                $place=$_POST["place"];
                $tagno=$_POST["tagno"];
		$query ="INSERT INTO `barcodeno`(`barcode`,`date`,`place`,`tagno`) VALUES ('$barcode','$date','$place','$tagno')";
		
		mysqli_query($con,$query);
		
		$response = array();
		
		$message = "one item add in your bag";
            array_push($response,array('message'=>$message));
            echo json_encode($response); 
 
           } 
           else 
	   {
           $response = array();
	   $message = "Please try again....";
            array_push($response,array('message'=>$message));
            echo json_encode($response); 
            }
          
     }
?>