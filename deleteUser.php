<?php

$id=$_GET['id'];
include("./conec.php");
mysqli_select_db($conn, $database);
$consulta ="UPDATE tbl_cliente
SET est_cli = '0' 
WHERE id_cli='$id' ;";
$resultado = mysqli_query($conn, $consulta);
echo("<script>
location.replace('../index.php');
</script>");
?>