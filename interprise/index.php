<?php session_start() ;
if (!isset($_SESSION['usuario'] )) {
header('Location: ../index.php');

}
require_once __DIR__ . '../../db_connect.php';



$db = new DB_CONNECT();
//sleep(10);


 
 ?>






<!doctype html>
<html class="no-js" lang="es">

<!-- Mirrored from sharpen.tomaj.sk/v1.7/html5/dashboard.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 23 May 2016 19:05:06 GMT -->
<head>
	<meta charset="utf-8">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<title>INTRANET | CLIENTES</title>
	<meta name="description" content="...">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	<!-- Icons -->
	<link rel="apple-touch-icon" href="apple-touch-icon.png">
<link rel="icon" href="favicon.ico" type="image/x-icon"/>
	<!-- CSS -->
	<link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/fonts/material-design-iconic-font/css/material-design-iconic-font.min.css">
	<link rel="stylesheet" href="assets/css/jquery-ui.min.css">
	<link rel="stylesheet" href="assets/css/select2.min.css">
	<link rel="stylesheet" href="assets/font-awesome-4.4.0/css/font-awesome.min.css">
		<!-- html comment <link rel="stylesheet" href="assets/css/fontello.css">-->
	<link rel="stylesheet" href="assets/css/chartist.min.css">
	<link rel="stylesheet" href="assets/css/app.min.css">
   
<link rel="stylesheet" href="assets/sweetalert/sweetalert-master/dist/sweetalert.css">
   
	<!-- Modernizr -->
	<script src="assets/js/modernizr-2.8.3.min.js"></script>

	<!-- Google fonts -->
	<link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:400,700' rel='stylesheet' type='text/css'>
</head>
<body>
	<!--[if lt IE 8]>
		<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
	<![endif]-->

	<!-- Header -->
	<?php  require_once 'header.php'; ?>
	
	<aside class="aside">
		<!-- User profile -->
		<?php require_once 'usuario.php'; ?>
         <?php require_once 'nav.php'; ?>
		
		<!-- Pending tasks -->
		
	</aside>
	
	<!-- Page Wrap -->
	<div class="pageWrap">

		<!-- Page content -->
		<div class="pageContent extended">
			<div class="container">
				<div class="boxHeader pageBoxHeader clearfix">
					<div class="pull-left">
						<h1 class="pageTitle">
							<a href="#" title="#">Panel de control - <?php echo $_SESSION['usuario']['Tipo_acceso']; ?>
</a>
						</h1>
						<ol class="breadcrumb">
							<li><a href="index.php">Inicio</a></li>
							<li class="active">Bienvenido(a) <?php echo $_SESSION['usuario']['Nombres'] ?> -<?php echo $_SESSION['usuario']['Apellidos'] ?> (<?php echo $_SESSION['usuario']['Id'] ?>)</li>
						</ol>
					</div>

					<div class="btn-group pull-right boxHeaderOptions">
						<button type="button" class="btn dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							<i class="zmdi zmdi-more-vert"></i>
						</button>
						<ul class="dropdown-menu">
							<li><a href="<?php echo BASE_URL ?>index.php" title="#"><i class="zmdi zmdi-home zmdi-hc-fw"></i> Inicio</a></li>
							<li><a href="#"  title="#" class="salir"><i class="zmdi zmdi-close zmdi-hc-fw"></i> Salir</a></li>
		 
						</ul>
					</div>
				</div>
				

				<!-- Statsbar -->
			 
	     
	 

	    
</div>


<div class="container">
				
<!--=============================================
=            AQUI VA EL COD DEL HOME            =
==============================================-->

				<div class="row">
			 
		<?php 

		 mysql_query("SET NAMES utf8");
mysql_query("SET CHARACTER_SET utf");  

$resul =  mysql_query("SELECT * FROM form_fichas_opciones where anulado <> 1 order by ref desc limit 6;");

			




 $st = 0;
$data = array();
 
while($row =  mysql_fetch_array($resul) ) {
	$data[]= $row;
 
 ?>
	

<?php 

$imagen = explode(';',$data[$st]['capture1']) ;


if (!empty($imagen[0])) {

	$imagen0 = 'http://cohenyaguirre.tk/interprise/file-upload/tumb/'.$imagen[0].'';
	}

else{

$imagen0 = 'http://cohenyaguirre.tk/interprise/img/sin_imagen_disponible.jpg';
	}

if (!empty($imagen[1])) {

$imagen1 = 'http://cohenyaguirre.tk/interprise/file-upload/tumb/'.$imagen[1].'';
	}

else{

$imagen1 = 'http://cohenyaguirre.tk/interprise/img/sin_imagen_disponible.jpg';
	}

?>

<div class="col-xs-12 col-md-6 col-lg-4">
						<div class="box taskCard">
							<div class="rte">
								<h2 class="title"><?php  echo $data[$st]['nombre_opcion'] ?></h2>
							</div>
					<div class="participants">
								<div class="text-light-gray title">Ref# <?php  echo $data[$st]['ref'] ?></div>
								<ul class="usersList">
									<li><a href="<?php echo BASE_URL ?>mod_opciones/reporte.php?id=<?php  echo $data[$st]['ref'] ?>" title="#"><img src="<?php echo $imagen0;  ?>" alt="#" width="44" height="44"></a></li>
									<li><a href="<?php echo BASE_URL ?>mod_opciones/reporte.php?id=<?php  echo $data[$st]['ref'] ?>" title="#"><img src="<?php echo $imagen1;  ?>" alt="#" width="44" height="44"></a></li>
									
								</ul>
							</div>
							<p><?php echo substr($data[$st]['comentarios_sobre_negocio'], 0,300) ?>... <a href="<?php echo BASE_URL ?>mod_opciones/reporte.php?id=<?php  echo $data[$st]['ref'] ?>" title="#" class="text-orange"><strong>Ver mas</strong></a></p>

							<div class="info">
								<span class="text-light-gray"><i class="fa fa-fw fa-clock-o"></i> Fecha de publicación:</span> <strong><?php  echo $data[$st]['fecha'] ?></strong><br>
								<span class="text-light-gray"><i class="zmdi  zmdi-local-store"></i> Sector:</span> <strong><?php  echo $data[$st]['sector'] ?></strong><br>
								<span class="text-light-gray"><i class="fa fa-fw fa-eur"></i> Inversón:</span> <strong><?php  echo $data[$st]['nosotros_ofrecemos'] ?> €</strong>
							</div>
						</div>
					</div>



<?php  $st++;} ?>

</div>

			 

					 
		 



<!--====  End of AQUI VA EL COD DEL HOME  ====-->

</div><!-- html container -->
			 
		  

			 
			</div>
		</div>
	</div>

	<!-- Search modal -->
<?php // require_once 'buscar.php'; ?>

	<!-- JS -->
	<script src="assets/js/jquery-1.11.3.min.js"></script>
	<script src="assets/js/jquery-ui.min.js"></script>
	<script src="assets/bootstrap/js/bootstrap.min.js"></script>	
	<script src="assets/js/select2.min.js"></script>
	<script src="assets/js/parsley.min.js"></script>
	<script src="assets/js/throttle-debounce.min.js"></script>
	<script src="assets/js/jquery.shuffle.min.js"></script>
	<script src="assets/js/autosize.min.js"></script>
	<script src="assets/js/raphael-min.js"></script>
	<script src="assets/js/morris.min.js"></script>
	<script src="assets/js/Chart.min.js"></script>
	<script src="assets/js/chartist.min.js"></script>
	<script src="assets/js/jquery.fullscreen.min.js"></script>
	<script src="assets/js/app_index.min.js"></script>
   <script src="assets/sweetalert/sweetalert-master/dist/sweetalert.min.js"></script>
	<div class="visible-xs visible-sm extendedChecker"></div>

</body>

 <?php require_once 'js.php'; ?>
 
<!-- Mirrored from sharpen.tomaj.sk/v1.7/html5/dashboard.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 23 May 2016 19:05:52 GMT -->
</html>