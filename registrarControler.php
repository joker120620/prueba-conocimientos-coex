<?php 
include("./conec.php");
$nombre="juan"; //$_POST["nombreClie"];
$apellido= "Toloza"; //$_POST["apellidoClie"];
$cc= "32333"; // $_POST["nitClie"];
$direccion="43#554";// $_POST["direccionClie"];
$ciudad= "Bucaramanga"; //$_POST["ciudadClie"];
$telefono= "433455"; //$_POST["telefonoClie"];
$contacto="44555";//$_POST["contactoClie"];
mysqli_select_db($conn, $database);
$consulta ="INSERT INTO tbl_cliente (cc_cli,nom_cli,ape_cli,ciu_cli,tel_cli,dir_cli,cup_cli,fec_cli) VALUES ("$cc" ,"$nombre" ,"$apellido" ,"$ciudad","$telefono" ,"$direccion" ,"$cupo" ,"$fecha")` 
$resultado = mysqli_query($conn, $consulta);

?>