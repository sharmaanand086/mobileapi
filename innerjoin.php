<?php
define("DB_SERVER", "localhost");
define("DB_USER", "world_hello");
define("DB_PASSWORD", "asdfas@123");
define("DB_DATABASE", "barcode_scan");

$con = mysqli_connect(DB_SERVER , DB_USER, DB_PASSWORD, DB_DATABASE);  
  
$date = $_POST["place"];
 
$resultArr = array();
$sql = "SELECT * FROM barcode WHERE  place= '$date' ORDER BY id DESC";
$result = mysqli_query($con,$sql);

if ($result->num_rows > 0) {
    //echo'0000';
    $resultArr = array();
    while($row = $result->fetch_assoc()) {
        $td = $row['tagno'];
        $resultArr['question'][$row['id']] = array(  'date' => $row['date'], 'tagno' => $row['tagno'], 'place' => $row['place'], 'name' => $row['name'], 'ctf' => $row['ctf'], 'time' => $row['time'], 'TF' => $row['TF'] );
  // var_dump($resultArr['question'][$row['id']]);
        //Anwser table results
        $sql2 = "SELECT name FROM session_name WHERE tagno='$td'";
        $result2 = mysqli_query($con,$sql2);
        while($row2 = $result2->fetch_assoc()) {
            $resultArr['question'][$row['id']]['session_name'][] = $row2;
          //var_dump($row2);
        }
    }
    $resultArr['question'] = array_values($resultArr['question']);
} else {
    $resultArr = array('success' => false, 'total' => 0);
    echo "question 0 results";
}
echo json_encode($resultArr);   
 
?>