<?php
$id=$_GET['id'];
include("./conec.php");
mysqli_select_db($conn, $database);
$consulta ="DELETE FROM tbl_cliente WHERE id_cli ='$id'";
$resultado = mysqli_query($conn, $consulta);
//
header("Location: ../?x=2&m=2");
//echo("<script>window.location.href('./index.php/?x=2');</script>");

?>