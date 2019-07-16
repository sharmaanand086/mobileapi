<?php
 set_time_limit(0);
 	include("isdk.php");
	//include('adler32.php');	 
    	$withtagid= $_POST['tagname'];
         $response = array();
                                // $myObj->name = $withtagid;
                                // $myObj->Email= $withtagid;
                                // $myObj->phone= $withtagid;
                                // array_push($response,$myObj);
                                // $myJSON = json_encode($response);
                                //  echo $myJSON;
 		$app = new iSDK;
		if ($app->cfgCon("connectionName")) 
		{                
                $contactId1= $withtagid;					 
				$returnFields=array('Id','FirstName','Email','Phone1');
				$contacts = $app->dsFind("Contact",1000,0,'Id',$contactId1, $returnFields);
				
				$contactId=$contacts[0]['Id'];
				$first=$contacts[0]['FirstName'];
				$email=$contacts[0]['Email'];
				$phone=$contacts[0]['Phone1'];
			                    $response = array();
                                $myObj->name = $first;
                                $myObj->Email= $email;
                                $myObj->phone= $phone;
                                array_push($response,$myObj);
                                $myJSON = json_encode($response);
                                 echo $myJSON;
                               
			       
				
				 
		}
 

?>