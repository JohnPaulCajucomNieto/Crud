<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "finals_database";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

 
	$id = $_GET['id'];
	
// sql to delete a record
$sql = "DELETE FROM database_table WHERE id = '$id'";

if ($conn->query($sql) === TRUE) {
  echo "Record deleted successfully";
  header("location:display.php");
} else {
  echo "Error deleting record: " . $conn->error;
  
}


?>