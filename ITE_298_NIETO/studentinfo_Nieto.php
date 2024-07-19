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


// sql to create table

$sql = "CREATE TABLE studentinfo_nieto (

id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,

firstname VARCHAR(30) NOT NULL,

lastname VARCHAR(30) NOT NULL,

section VARCHAR(30),

year INT(10),

address VARCHAR(100),

motto VARCHAR(100)

)";


if ($conn->query($sql) === TRUE) {

  echo "Table studentinfo_nieto created successfully";

} else {

  echo "Error creating table: " . $conn->error;

}


$conn->close();

?>
