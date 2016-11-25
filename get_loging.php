<?php session_start();  
 

require_once __DIR__ . '/db_connect.php';

 
$db = new DB_CONNECT();

//sleep(10);
mysql_query("SET NAMES utf8");
mysql_query("SET CHARACTER_SET utf");   

setlocale(LC_TIME, 'es_VE'); # Localiza en español es_Venezuela
date_default_timezone_set('America/Caracas');
$fechaphp = date("Y-m-d H:i:s");

$email=$_REQUEST['email'];
$clave=$_REQUEST['clave'];

//827ccb0eea8a706c4c34a16891f84e7b por defecto 12345

$clavemd5 = md5($clave);
//sleep(5);

 
  $qry = "SELECT * FROM contactos_web where email='$email' and clave='$clavemd5' and anulado <> 1";


  $resul =  mysql_query($qry);
  while($row =  mysql_fetch_array($resul) ) {

$id = $row['id'];
$nombres = $row['nombres'];
$apellidos = $row['apellidos'];
$email = $row['email'];
$movil = $row['movil'];
$documento = $row['documento'];
$tipo_acceso = $row['tipo_acceso'];
$anulado =  $row['anulado'];
//echo $row['nombre'];
}


  session_start();

  $arreglo = array('Ingreso' =>'si', 
'Id' =>$id,
'Nombres' =>$nombres,
'Apellidos' =>$apellidos,
'Email' =>$email,
'movil' =>$movil,
'Documento' =>$documento,
'Tipo_acceso' =>$tipo_acceso,
'Anulado' =>$anulado);

 






 

if ($id!='') {
  require_once 'crear-log.php';
  write_log($email,'success');

  $_SESSION['usuario'] = $arreglo;
echo 1;
}

else
{
echo 'false'.$id;


}



  
   die;
 







 
?>