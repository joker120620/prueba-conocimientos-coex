<?php
$servername = "rdswssh45zep1dpvgvsjvpo.mysql.rds.aliyuncs.com";
$database = "game";
$username = "jtp";
$password = "crgGodH8WaYAXgtu";
$conn = mysqli_connect($servername, $username, $password, $database);
if (!$conn) {
    die("Connection fallida: " . mysqli_connect_error());
}
?>