<html>
<head>
	<title>Adding Row to a database</title>
</head>
<body>

	<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "ite298_nieto";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
$id = $_POST ["id"];
	$firstname = $_POST ["firstname"];	
	$lastname = $_POST ["lastname"];
		$section = $_POST ["section"];	
	$year = $_POST ["year"];
		$address = $_POST ["address"];	
	$motto = $_POST ["motto"];
	

$sql = "insert into studentinfo_nieto (id, firstname, lastname, section, year, address, motto)
VALUES ('$id', '$firstname','$lastname', '$section','$year', '$address','$motto')";

	if ($conn->query($sql) == TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();
header("location:display.php")
?>
</body>
</html>