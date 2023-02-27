<?php 
include("./conec.php");
$pagare=$_POST["nPagare"];
$monto=$_POST["montoC"];
$cuoIniC=$_POST["cuoIniC"];
$tasa= $_POST["tasaInC"];
$fechaDC=$_POST["fechaDC"];
$cuotas=$_POST["coutasC"];
$cedula=$_POST["ccC"];
$cliente=$_POST['nomCC'];
$fechaCredi=$_POST['fechaCredi'];
$obc=$_POST['obC'];
mysqli_select_db($conn, $database);
$consulta ="INSERT INTO tbl_credito (pag_cre,mon_cre,cuo_ini_cre,tas_cre,fec_des_cre,cuo_cre,fec_cre,id_cli_cre,obs_cre) VALUES ('$pagare' ,'$monto' ,'$cuoIniC' ,'$tasa' ,'$fechaDC' ,'$cuotas' ,'$fechaCredi' ,'$cliente', '$obc' );" ;
$res = mysqli_query($conn, $consulta);
if($res){
  header("Location: ../?x=3&m=4"); 
}else{
  echo $pagare."-/";
  echo $monto."-/";
  echo $cuotas."-/";
  echo $cuoIniC."-/";
  echo $fechaDC ."-/";
echo $cuotas."-/";
echo $cedula."-/";
echo $cliente."-/";
echo $fechaCredi."-/";
echo $obc."-/";
  //header("Location: ../?x=3&m=5"); 
}
?>