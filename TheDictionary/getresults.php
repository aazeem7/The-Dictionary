<?php
require_once 'configure.php';
$word = $_REQUEST["srh"];
//$word = "Apple";
try{

	$conn = mysqli_connect($dbhost, $dbuser, $dbpass, $database);
	if (mysqli_connect_errno()) {
	printf("Connect failed: %s\n", mysqli_connect_error());
	exit();
	} else {

		$sql = "SELECT * from entries where word LIKE '$word'";
		$result = $conn->query($sql);
		$definition = NULL;
		$counter = 0;
		$wordtype = NULL;
		while ($row = $result->fetch_assoc()) {
		$wordtype .= $row['wordtype'].", ";
		$definition .= ++$counter.") ".$row['word']."(".$row['wordtype'].")"." :<br>"."&nbsp&nbsp&nbsp&nbsp".$row['definition']."<br>";	
		}
		
		echo "<h2 class=\"word\">$word</h2>"."<h5 class=\"type1\">Word Type:</h5>"."<h6 class=\"type2\">$wordtype</h6>"."<h5 class=\"type3\">Definition:</h5><p class=\"definition\">$definition</p>";

    $conn->close();
	} 
}

catch(exception $e){
  echo "Unknown Error Occured<br>";
}

?>
