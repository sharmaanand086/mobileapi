<?php
    $host = "localhost";
    $db_user = "world_hello";
    $db_password = "passs";
    $db_name = "barcode_scan";
    $con = mysqli_connect($host,$db_user,$db_password,$db_name);
    
    $date = $_POST["date"];
    $year = date('Y', strtotime($date));
    $month = date('F', strtotime($date));
    $day = date('d',strtotime($date));
    $ogdate = "$month $day, $year";
 
    $tagno = $_POST["tagno"];
    $place = $_POST["place"];
    $Name = $_POST["Name"];
    $time = $_POST["time"];
    $Type = $_POST["Type"];
    $ctf= $_POST["Type"];
    
    $exists = "SELECT * FROM `barcode` WHERE tagno=$tagno";
   if ($result=mysqli_query($con,$exists))
  {
  // Return the number of rows in result set
  $rowcount=mysqli_num_rows($result);
   if($rowcount==0){
       $query = "INSERT INTO `barcode`(`id`, `date`, `tagno`, `place`, `name`, `Type`, `ctf`, `time`) VALUES ('','$ogdate','$tagno','$place','$Name','$Type','$ctf','$time')";
       $res = mysqli_query($con,$query);
       
   }else{
       ?>
       <script>
           alert('Tag number already exists');
       </script>
       <?php
         
   }
  
  }
   
       
    ?>
    <script>
      window.location.href="http://magicconversion.com/barcodescanner/";
    </script>