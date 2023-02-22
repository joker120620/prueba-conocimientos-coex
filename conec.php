<?php
$servername = "localhost";
$database = "prueba";
$username = "root";
$password = "";
$conn = mysqli_connect($servername, $username, $password, $database);
if (!$conn) {
    die("Connection fallida: " . mysqli_connect_error());
}
echo "Connected correcta";
mysqli_close($conn);
?>