<?php
 include("isdk.php");
  $app = new iSDK;if ($app->cfgCon("connectionName")) 
        		{
        		    $session_name = 'bhavesh';
                     $barcode = 713209;
                      $grp1 = array('_allocationname1'  => $session_name);
                      $query1234 = $app->dsUpdate("Contact", $barcode , $grp1);
                      //var_dump($session_name);
        		}