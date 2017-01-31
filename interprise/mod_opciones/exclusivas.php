<?php  session_start() ;
if (!isset($_SESSION['usuario'] )) {
header('Location: ../index.php');
}

require_once '../../db_connect.php';
// connecting to db
$con = new DB_CONNECT();
//sleep(10);
mysql_query("SET NAMES utf8");
mysql_query("SET CHARACTER_SET utf");  




?>
<!doctype html>
<html class="no-js" lang="">

<!-- Mirrored from sharpen.tomaj.sk/v1.7/html5/forms.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 23 May 2016 19:06:30 GMT -->
<head>
	<meta charset="utf-8">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<title>Opciones exclusivas</title>
	<meta name="description" content="...">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	<!-- Icons -->
	<link rel="apple-touch-icon" href="apple-touch-icon.png">
	
	<!-- CSS -->
	<link rel="stylesheet" href="../assets/bootstrap/css/bootstrap.min.css">
		
	<link rel="stylesheet" href="../assets/fonts/material-design-iconic-font/css/material-design-iconic-font.min.css">
	<link rel="stylesheet" href="../assets/css/jquery-ui.min.css">
	<link rel="stylesheet" href="../assets/css/select2.min.css">
	<link rel="stylesheet" href="../assets/font-awesome-4.4.0/css/font-awesome.min.css">
	 <link rel="stylesheet" href="../assets/css/fontello.css">
	<link rel="stylesheet" href="../assets/css/chartist.min.css">
	<link rel="stylesheet" href="../assets/css/bootstrap-datepicker.min.css">
	<link rel="stylesheet" href="../assets/css/bootstrap-datetimepicker.min.css">
	<link rel="stylesheet" href="../assets/css/bootstrap-colorpicker.min.css">
	<link rel="stylesheet" href="../assets/css/app.min.css">
	
  <script src="//cdn.tinymce.com/4/tinymce.min.js"></script>
  <script>
 


  </script>

	<link rel="stylesheet" href="../assets/sweetalert/sweetalert-master/dist/sweetalert.css">
	 
	<!-- Modernizr -->
	<script src="../assets/js/modernizr-2.8.3.min.js"></script>

	<!-- Google fonts -->
	<link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:400,700' rel='stylesheet' type='text/css'>
</head>
<body>
	<!--[if lt IE 8]>
		<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
	<![endif]-->


	<!-- Header -->
	<?php  require_once '../header.php'; ?>

	<aside class="aside">
		<!-- User profile -->
		<?php require_once '../usuario.php'; ?>
         <?php require_once '../nav.php'; ?>
		
		<!-- Pending tasks -->
		
	</aside>
	
	<?php  //require_once '../tareas-pendientes.php'; ?>
	<!-- Page Wrap -->
	<div class="pageWrap">

		<!-- Page content -->
		<div class="pageContent extended">
			<div class="container">
				<h1 class="pageTitle">
					<a href="#" title="#">Opciones exclusivas</a>
				</h1>
				<ol class="breadcrumb">
					<li><a href="../index.php">Opciones de negocio</a></li>
					<li class="active">Menu</li>
				</ol>
				
				
				
<div class="row">


<div class="col-xs-12 col-sm-2">
<div class="form-group">

<input type="hidden" readonly required class="form-control" value="<?php echo $data['data'][0]['id'] ?>" name="referencia" id="referencia" placeholder="Nº Referencia">

</div>
</div>


<input  readonly type="hidden" required class="form-control" value="<?php echo $_SESSION['usuario']['Id']?>" name="elaborado_por" id="elaborado_por" placeholder="Elaborado Por:">

 <input  readonly type="hidden" required class="form-control" value="<?php echo $_SESSION['usuario']['Id']?>" name="editado_por" id="editado_por" placeholder="Elaborado Por:">






<?php require_once '../funciones/asesor_funtion.php'; ?>


<div class="col-xs-12 col-sm-4">
<div class="form-group">

<input type="hidden" disabled value="<?php echo nombreAsessor($_SESSION['usuario']['Id'])?>" required class="form-control" name="elaborado" id="elaborado" placeholder="Elaborado:">
</div>
</div>


</div>
					
				 <!--====================================================
					 =            AQUI VA EL CONTENIDO DEL SITE-            =
					 =====================================================-->
					 
					 		<div class="row">
			 		<div class="search-form-wrap">
							<form>
								<div class="input-group">
									<input type="text" name="clave" placeholder="Escriba palabra clave aquí! (Nombre de la opcion)" class="form-control">
									<div class="input-group-btn">
										<button class="btn btn-lg btn-green" type="submit">Buscador</button>
									</div>
								</div>
							</form>
							<div class="search-results-info">Resultados para:  <span class="text-green"><strong>"<?php echo $_GET['clave'] ?>"</strong></span></div>
						</div>


 <?php  mysql_query("SET NAMES utf8");
mysql_query("SET CHARACTER_SET utf");  
$id_cliente = $_SESSION['usuario']['Id'];

	 

if (isset($_GET['clave'])) {
	$texto = $_GET['clave'];

/*$resul =  mysql_query("SELECT * FROM form_fichas_opciones where anulado <> 1 and nombre_opcion like '%".$texto."%'  OR  sector like '%".$texto."%' OR cod_postal like '%".$texto."%'  "); */

$resul =  mysql_query("SELECT * FROM admin_crm.asing_fichas_exclusivas a, form_fichas_opciones f where a.id_opcion = f.ref and f.anulado <> 1 and a.id_cliente ='$id_cliente ' and f.nombre_opcion like '%".$texto."%'   "); 


} else {
$resul =  mysql_query("SELECT * FROM admin_crm.asing_fichas_exclusivas a, form_fichas_opciones f where a.id_opcion = f.ref and f.anulado <> 1 and a.id_cliente ='$id_cliente ' order by f.ref desc limit 6;");
}
			


				
 

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

			 
					 
					
 
				
				
				

				 <!--====  End of AQUI VA EL CONTENIDO DEL SITE-  ====-->
				</div> <!-- end container -->
				
				
			
			</div> <!-- end extended -->
			
		</div> <!-- end pageWrap -->
 
	
	<!-- Search modal -->

	<!-- JS -->
	<script src="../assets/js/jquery-1.11.3.min.js"></script>
	<script src="../assets/js/jquery-ui.min.js"></script>
	<script src="../assets/bootstrap/js/bootstrap.min.js"></script>
	 
	<script src="../assets/js/select2.min.js"></script>
	<script src="../assets/js/parsley.min.js"></script>
	<script src="../assets/js/throttle-debounce.min.js"></script>
	<script src="../assets/js/jquery.shuffle.min.js"></script>
	<script src="../assets/js/autosize.min.js"></script>
	<script src="../assets/js/raphael-min.js"></script>
	<script src="../assets/js/morris.min.js"></script>
	<script src="../assets/js/Chart.min.js"></script>
	<script src="../assets/js/chartist.min.js"></script>
	<script src="../assets/js/moment.min.js"></script>
	<script src="../assets/js/bootstrap-datepicker.min.js"></script>
	<script src="../assets/js/bootstrap-datetimepicker.min.js"></script>
	<script src="../assets/js/jquery.fullscreen.min.js"></script>
	<script src="../assets/js/jquery.mask.min.js"></script>
	<script src="../assets/js/charCount.js"></script>
	<script src="../assets/js/bootstrap-maxlength.js"></script>
	<script src="../assets/js/pwstrength-bootstrap-1.2.9.min.js"></script>
	<script src="../assets/js/bootstrap-colorpicker.min.js"></script>
	<script src="../assets/js/bootstrap-typeahead.js"></script>
	<script src="../assets/js/mention.js"></script>
	<script src="../assets/plugins/wysihtml-master/dist/wysihtml.min.js"></script>
	<script src="../assets/plugins/wysihtml-master/dist/wysihtml-toolbar.min.js"></script>
	<script src="../assets/plugins/wysihtml-master/parser_rules/advanced_and_extended.js"></script>
	<script src="../assets/plugins/ckeditor/ckeditor.js"></script>
	<script src="../assets/sweetalert/sweetalert-master/dist/sweetalert.min.js"></script>
	<script src="../assets/js/app.min.js"></script>
<script src='http://cdn.tinymce.com/4/tinymce.min.js'></script>
 

	<div class="visible-xs visible-sm extendedChecker"></div>


	
 
 
</body>

<!-- Mirrored from sharpen.tomaj.sk/v1.7/html5/forms.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 23 May 2016 19:06:56 GMT -->
</html>