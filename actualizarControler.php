<?php 
include("conec.php");
$id=$_POST["idCliea"];
$nombre=$_POST["nombreCliea"];
$apellido=$_POST["apellidoCliea"];
$cc=$_POST["nitCliea"];
$direccion= $_POST["direccionCliea"];
$ciudad=$_POST["ciudadCliea"];
$telefono=$_POST["telefonoCliea"];
$contacto=$_POST["contactoCliea"];
$estado=$_POST["est_clia"];

$fecha=$_POST['diaDCliea'];
$cupo=$_POST['cupoCliea'];
mysqli_select_db($conn, $database);
$consulta ="UPDATE tbl_cliente SET cc_cli='$cc',nom_cli='$nombre',ape_cli='$apellido',ciu_cli='$ciudad' ,tel_cli='$telefono' ,dir_cli='$direccion' ,cup_cli='$cupo' ,fec_cli='$fecha', est_cli='$estado' WHERE id_cli=$id" ;
$resultado = mysqli_query($conn, $consulta);
if($resultado){
 header("Location: ../?x=2&m=3"); 
}
?>