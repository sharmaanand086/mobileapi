<?php

    $host = "localhost";
    $db_user = "world_hello";
    $db_password = "asfdas@123";
    $db_name = "barcode_scan";
    
    $con = mysqli_connect($host,$db_user,$db_password,$db_name);
    $coachcouny = array();
    $tagnumber = $_POST['tagnum'];
    //$_POST['tagnum'];
    $query = "SELECT * FROM `session_name` WHERE tagno = '$tagnumber' ORDER BY id ASC"; 
    $result = mysqli_query($con,$query);
    $rowcount=mysqli_num_rows($result);
            while($row = $result->fetch_assoc())
            {
              $coachcouny[] = $row['name'];
            } 
    //var_dump($coachcouny);
    $query1 = "SELECT * FROM `eventpeople` WHERE tagno = '$tagnumber' ORDER BY id ASC"; 
    $result1 = mysqli_query($con,$query1);
    $rowcount1=mysqli_num_rows($result1);
    //var_dump($rowcount1);
    $abc = 0;
            while($row1 = $result1->fetch_assoc())
            {
                $conid = $row1['uqniceno'];
                //var_dump($conid);
                if($abc < $rowcount1){
                       $aloction = $abc % $rowcount;
                        $allicationname = $coachcouny[$aloction];
                        //var_dump($allicationname);
                         $query2 = "UPDATE `eventpeople` SET `allocation`='$aloction',`coachname`='$allicationname' WHERE `tagno` = '$tagnumber' AND uqniceno = '$conid'"; 
                         $result2 = mysqli_query($con,$query2);
                        // var_dump($aloction);
                        
                }
                $abc++;
                
            } 
            
            $message = "Tag updated successfully.";
                        $myObj->tag =$message;
                        $myJSON = json_encode($myObj);
                        echo $myJSON;
            
?>