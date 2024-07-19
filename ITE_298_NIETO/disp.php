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

$sql = "SELECT * FROM database_table";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
 

echo "<table border='1'>
<tr>
<th>ID</th> 
<th>FirstName</th> 
<th>LastName</th>  
<th>Section</th>  
<th>Year</th>  
<th>Room no</th>  
<th>Time-in</th>   
<th>Time-out</th>  

</tr>";
while($row = $result->fetch_assoc())
{ $id = $row ["id"];

echo "
<tr>
	<td>$id</td>
	<td>".$row["firstname"]."</td> 
	<td>".$row["lastname"]."</td> 
	<td>".$row["section"]."</td> 
	<td>".$row["year"]."</td> 
	<td>".$row["room"]."</td> 
	<td>".$row["time-in"]."</td> 
	<td>".$row["time-out"]."</td> 
	<td><a href='Editrecords.php?id=$id'>Update Data</a> |
	<a href='Deleterecords.php?id=$id'>Delete Data</a></td>
</tr>";
}
echo "</table>";
}else {
  echo "0 results";
}
$conn->close();
?>
<a href="index.php">Add Record</a>