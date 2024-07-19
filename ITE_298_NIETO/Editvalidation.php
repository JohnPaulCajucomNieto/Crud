<html>
<head>
	<title>Update Records</title>
</head><body>
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
	$id = $_GET ["id"];
	$Firstname = $_GET ["Firstname"];	
	$Lastname = $_GET ["Lastname"];	
	$Section = $_GET ["Section"];	
	$Year = $_GET ["Year"];	
	$Address = $_GET ["Address"];	
	$Motto = $_GET ["Motto"];


	 

 $edit = mysqli_query($conn,"UPDATE studentinfo_nieto set Firstname='$Firstname' , Lastname='$Lastname'
, section='$Section', year='$Year', address='$Address', motto='$Motto' where id='$id'");
	
  if($edit)
    {
        mysqli_close($conn); // Close connection
        header("location:display.php"); // redirects to all records page
        exit;
    }
    else
    {    
        echo mysqli_error();
      
    }    	
	?>	
</body>
</html>