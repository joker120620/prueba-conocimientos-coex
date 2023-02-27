<?php 
include("./conec.php");
$nombre=$_POST["nombreClie"];
$apellido=$_POST["apellidoClie"];
$cc=$_POST["nitClie"];
$direccion= $_POST["direccionClie"];
$ciudad=$_POST["ciudadClie"];
$telefono=$_POST["telefonoClie"];
$contacto=$_POST["contactoClie"];
$fecha=$_POST['diaDClie'];
$cupo=$_POST['cupoClie'];
mysqli_select_db($conn, $database);
$consulta ="INSERT INTO tbl_cliente (cc_cli,nom_cli,ape_cli,ciu_cli,tel_cli,dir_cli,cup_cli,fec_cli) VALUES ('$cc' ,'$nombre' ,'$apellido' ,'$ciudad' ,'$telefono' ,'$direccion' ,'$cupo' ,'$fecha' );" ;
$resultado = mysqli_query($conn, $consulta);
if($resultado){
  header("Location: ../?x=2&m=1"); 
}
?>