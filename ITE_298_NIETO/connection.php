<?PHP
$servername = "localhost";
$username = "root";
$password = "";
// CREATE CONNECTION
$conn = new mysqli($servername, $username,
$password);
// CHECK CONNECTION
if ($conn->connect_error) {
die("CONNECTION FAILED: " .
$conn->connext_error);
}
echo "CONNECTED SUCCESSFULLY";
?>