<?php
//    require_once ('config.php');
   require 'configure.php';

$q=$_REQUEST["q"]; 
$q = trim($q);
try{    
$conn = new mysqli($dbhost, $dbuser, $dbpass, $database);

$sql="SELECT DISTINCT word FROM entries WHERE word LIKE '$q%'";
$results = $conn->query($sql);

    $json=array();

    while($row = $results->fetch_assoc()) {
  //    array_push($json, $row['word']);
  $json[]= $row['word'];    
}

    echo json_encode($json);
$conn->close();
} catch(exception $e){
echo "You are in catch..!";
} 
?>
