<?php  session_start();  
//error_reporting(0);
//header('Content-type: application/json');
require_once __DIR__ . '../../../../db_connect.php';
//sleep(2);
 
// connecting to db
$db = new DB_CONNECT();
//sleep(10);
mysql_query("SET NAMES utf8");
mysql_query("SET CHARACTER_SET utf");   

setlocale(LC_TIME, 'es_VE'); # Localiza en español es_Venezuela
date_default_timezone_set('America/Caracas');
$fecha = date("Y-m-d H:i:s");
$ip=$_SERVER['REMOTE_ADDR'];
extract ($_POST);
$images = serialize($imagenes);


 $clavemd5 = md5($clave); 
//$clave='122';
//$id='1';

 



 



$qry = "UPDATE `contactos_web` SET `clave` = '$clavemd5' WHERE `id` = $id;";
 

$resul = mysql_query($qry);







if ($resul==1) {
  
echo $resul;
}

else
{
echo 'false'.$qry;


}
 


  
   
 





?>