<?php
require 'configure.php';
 
$word = $_POST["srh"];
echo "The Inputted Word is $word"."<br>";
//echo trim($word,"%");
/*if (strcmp($word,trim($word))){
echo "String Equals";
} else { echo "String Not equals";} */

try{
$conn = mysqli_connect($dbhost, $dbuser, $dbpass, $database);
/* check connection */
if (mysqli_connect_errno()) {
printf("Connect failed: %s\n", mysqli_connect_error());
exit();
}
else{
echo '<br>Connected successfully<br>';

$query = "SELECT * from entries where word LIKE '$word'";
$result = $conn->query($query);
$row = $result->fetch_assoc();
$counter = 0;
if (!$row) {	
printf("<h1>No word Found</h1>");
exit();
}
else {
print("<h1>".$row['word']."</h1><br>");
while($row){
if(strcmp($row['word'],trim($word,"%"))==0){
echo "&nbsp;&nbsp;&nbsp;".$row['wordtype'].$row['definition']."<br>";
echo "<----------------------------------------------------------------------------------><br>";
}
else {
$word = $row['word'];
//echo ++$counter;
echo "<h1>New Word Found = ".$row['word']."</h1><br>";
echo "&nbsp;&nbsp;&nbsp;".$row['wordtype'].$row['definition']."<br>";
echo "<----------------------------------------------------------------------------------><br>";
}
$row = $result->fetch_assoc();
}
}
mysqli_close($conn);

}


/*else {
print "No Result Found";
}*/
}


catch(exception $e)
{
echo "$e";
}
?>

<html>
<body>
   <h1><a href="The Dictionary.html">Home</a></h1>
</body>
</html>
