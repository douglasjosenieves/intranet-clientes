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


$id= $_SESSION['usuario']['Id'];

 $resul =  mysql_query("SELECT * FROM  contactos_web where id =$id");
$data = array();
while($row =  mysql_fetch_array($resul) ) {
$data['data'][] = $row;
}
?>




<!doctype html>
<html class="no-js" lang="">

<!-- Mirrored from sharpen.tomaj.sk/v1.7/html5/forms.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 23 May 2016 19:06:30 GMT -->
<head>
	<meta charset="utf-8">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<title>Plantilla Blanca</title>
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
	
					
				 <!--====================================================
					 =            AQUI VA EL CONTENIDO DEL SITE-            =
					 =====================================================-->
					 
				<form id="formulario">
	<!-- Page Wrap -->
	<div class="pageWrap">

		<!-- Page content -->
		<div class="pageContent extended">
			<div class="container">
				<h1 class="pageTitle">
					<a href="#" title="#">Formulario</a>
				</h1>
				<ol class="breadcrumb">
					<li><a href="dashboard.html">Sharpen</a></li>
					<li class="active">Formularios</li>
				</ol>
				
				<div id="generales" class="box rte">
					<h2 class="boxHeadline">Ficha de contacto</h2>
					<h3 class="boxHeadlineSub">Datos del formulario web.</h3>
					
					

					<div class="row">
	
		


 <div class="col-xs-12 col-sm-2">
								<div class="form-group">
									<label for="referencia">Nº Referencia</label>
									<input type="text" value="<?php echo $data['data'][0]['id'] ?>" readonly required class="form-control" name="referencia" id="referencia" placeholder="Nº Referencia">
								</div>
							</div>

								 
														 
															
							<input  readonly type="hidden" required class="form-control" value="website" name="soloParaVista" id="elaborado_por" placeholder="Elaborado Por:">


							<input  readonly type="hidden" required class="form-control" value="website" name="elaborado_por" id="elaborado_por" placeholder="Elaborado Por:">
														 
												 


													<div class="col-xs-12 col-sm-4">
														<div class="form-group">
															<label for="elaborado_por">Status del cliente:</label>
															<input  readonly type="text" required class="form-control" value="FORMULARIO"  name="status" id="status" placeholder="Status del cliente:">
														</div>
													</div>




<!-- <div class="col-xs-12 col-sm-4 col-sm-offset-2">
<div class="form-group">
<label for="basicInput">Buscar:</label>
<input type="text" value="<?php //echo $data['data'][0]['buscar'] ?>" class="form-control" name="buscar" id="buscar" placeholder="Buscar:" style="background-color: #accead; font-weight: 800;">
</div>

<div >
	<ul id="resultado_busqueda">
		 
	</ul>
</div>
</div> -->

</div>
						


						<div class="row">
							



						
						
							
							
							
							
								
								
								<div class="col-xs-12 col-sm-3">
																<div class="form-group">
																	<label for="basicInput">Nombres:</label>
											<input type="text" value="<?php echo $data['data'][0]['nombres'] ?>" required class="form-control" name="nombres" id="nombres" placeholder="Nombres:">
																</div>
															</div>
								

								
									<div class="col-xs-12 col-sm-3">
																<div class="form-group">
																	<label for="basicInput">Apellidos:</label>
											<input type="text" value="<?php echo $data['data'][0]['apellidos'] ?>" required class="form-control" name="apellidos" id="apellidos" placeholder="Apellidos:">
																</div>
															</div>



															
							<div class="col-xs-12 col-sm-2 i">
								<div class="form-group">
									<label>País</label>
									<select name="pais"  id="pais" class="js-select ">
										<option value="">- Select país -</option>
										<option value="VENEZUELA">Venezuela</option>
										<option value="ESPANA">España</option>
											<option value="USA">Usa</option>
											<option value="OTRO">Otro</option>
								 
									</select>
								</div>
							</div>



																	
							<div class="col-xs-12 col-sm-2 i">
								<div class="form-group">
									<label>Procedencia (Publicitaria)</label>
									<select name="procedencia_publicitaria"  id="procedencia_publicitaria" class="js-select ">
										<option value="">- Seleccione -</option>
										<option value="WEBSITE">WEBSITE</option>
										<option value="FACEBOOK">FACEBOOK</option>
										<option value="INSTAGRAM">INSTAGRAM</option>
											<option value="TWITTER">TWITTER</option>
											<option value="ZOPIM">ZOPIM</option>
											<option value="OTRO">OTRO</option>
								 
									</select>
								</div>
							</div>

		<div class="col-xs-12 col-sm-2 i">
								<div class="form-group">
									<label>Tipo de cartera</label>
									<select name="tipo_cartera"  id="tipo_cartera" class="js-select ">
										<option value="">- Seleccione -</option>
										<option value="VENEZUELA">VENEZUELA</option>
										<option value="ESPAÑA">ESPAÑA</option>
							 
								 
									</select>
								</div>
							</div>




							</div>
							<div class="row">
							
						
						
							<div class="col-xs-12 col-sm-6">
														<div class="form-group">
															<label for="basicInput">E-mail:</label>
									<input type="email" value="<?php echo $data['data'][0]['email'] ?>" required class="form-control" name="email" id="email" placeholder="E-mail:">
														</div>
													</div>


													<div class="col-xs-12 col-sm-6">
								<div class="form-group">
									<label for="basicInput">Teléfono móvil:</label>
			<input type="text" value="<?php echo $data['data'][0]['movil'] ?>" required class="form-control" name="movil" id="movil" placeholder="Teléfono móvil:">
								</div>
							</div>

						
</div>

<div class="row">
						<div class="col-xs-12 col-sm-4">
								<div class="form-group">
									<label for="basicInput">Teléfono 2:</label>
			<input type="text" value="<?php echo $data['data'][0]['movil2'] ?>"  class="form-control" name="movil2" id="movil2" placeholder="Teléfono 2:">
								</div>
							</div>


<div class="col-xs-12 col-sm-8">
							<div class="row">

<div class="col-md-6">
<div class="form-field-wrapper">
<label for="basicInput">Viajaré mes:</label>
<select name="mes_viaje" id="mes_viaje" class="form-control">
<option value="">- Viajaré mes -</option>
<option value="ENERO">ENERO</option>
<option value="FEBRERO">FEBRERO</option>
<option value="MARZO">MARZO</option>
<option value="ABRIL">ABRIL</option>
<option value="MAYO">MAYO</option>
<option value="JUNIO">JUNIO</option>
<option value="JULIO">JULIO</option>
<option value="AGOSTO">AGOSTO</option>
<option value="SEPTIEMBRE">SEPTIEMBRE</option>
<option value="OCTUBRE">OCTUBRE</option>
<option value="NOVIEMBRE">NOVIEMBRE</option>
<option value="DICIEMBRE">DICIEMBRE</option>
</select>
</div>
</div>
<div class="col-md-6">
<div class="form-field-wrapper">
<label for="basicInput">Viajaré año:</label>
<select name="anio_viaje" id="anio_viaje" class="form-control">
<option value="">- Viajaré año -</option>
<option value="2016">2016</option>
<option value="2017">2017</option>
<option value="2018">2018</option>
<option value="2019">2019</option>
<option value="2020">2020</option>
<option value="2021">2021</option>
<option value="2022">2022</option>
<option value="2023">2023</option>
<option value="2024">2024</option>
<option value="2025">2025</option>
<option value="2026">2026</option>
<option value="2027">2027</option>
<option value="2028">2028</option>
<option value="2029">2029</option>
<option value="2030">2030</option>
</select>
</div>
</div>
                                </div>
                                </div>


												
</div>

	<hr />
					<h2 class="boxHeadline">Pre información</h2>
					<h3 class="boxHeadlineSub"></h3>

			
						<!-- Checkboxes -->
						<div class="row checkboxes">
							<div class="col-xs-12 col-sm-4 i">
								<label>
									<input name="pre_informacion[]" id="SOY CIUDADANO EUROPEO" value="SOY CIUDADANO EUROPEO" type="checkbox">
									<span>Soy ciudadano europeo</span>
								</label>
							</div>
							<div class="col-xs-12 col-sm-4 i">
								<label>
								<input  name="pre_informacion[]" id="PRETENDO EMIGRAR" value="PRETENDO EMIGRAR" type="checkbox">
									<span>Pretendo emigrar en <?php echo date(Y); ?></span>
								</label>
							</div>
							<div class="col-xs-12 col-sm-4 i">
								<label>
									<input name="pre_informacion[]"  id="NO SE CUANDO PODRE EMIGRAR" value="NO SE CUANDO PODRE EMIGRAR" type="checkbox">
									<span>No sé cuándo podre emigrar</span>
								</label>
							</div>
						</div>
						<div class="row checkboxes">
							<div class="col-xs-12 col-sm-4 i">
								<label>
									<input name="pre_informacion[]" id="YA HE VENDIDO MIS PROPIEDADES" value="YA HE VENDIDO MIS PROPIEDADES" type="checkbox">
									<span>Ya he vendido mis propiedades</span>
								</label>
							</div>
							<div class="col-xs-12 col-sm-4 i">
								<label>
									<input name="pre_informacion[]"  id="ESTOY EN PROCESO DE VENTA DE MIS PROPIEDADES" value="ESTOY EN PROCESO DE VENTA DE MIS PROPIEDADES" type="checkbox">
									<span>Estoy en proceso de venta de mis propiedades</span>
								</label>
							</div>
							<div class="col-xs-12 col-sm-4 i">
								
							</div>
						</div>
						<div class="row checkboxes">
							<div class="col-xs-12 col-sm-4 col-sm-offset-4 i">
							 
							</div>
							<div class="col-xs-12 col-sm-4 i">
								
							</div>
						</div>


						<!-- Break -->
						<hr />

			


						 
						
						

						<!-- Textarea -->
						<div class="row">
							<div class="col-xs-12 col-sm-12">
								<div class="form-group">
									<label  for="textarea1">¿Por qué escoge España como destino?</label>
									<textarea required  id="por_que_escoge_destino_españa"  name="porque_espana" class="form-control" rows="8"><?php echo $data['data'][0]['porque_espana'] ?></textarea>
								</div>
							</div>
						
						</div>

						<hr />
						

						<div class="row">
							



	<div class="col-xs-12 col-sm-4">
								<div class="form-group">
									<label for="basicInput">¿Cuál es su presupuesto para inversión?</label>
			<input type="number" value="<?php echo $data['data'][0]['inversion'] ?>" required class="form-control" name="inversion" id="presupuesto_a_invertir" placeholder="¿Cuál es su presupuesto para inversión?">
								</div>
							</div>



						</div>
		<hr />
						
					

				</div>

<div id="detalles">
				<div id="" class="box rte">
				<h2 class="boxHeadline">Datos personales y profesionales</h2>
					<h3 class="boxHeadlineSub">Formulario.</h3>

<div class="row">
	

	
	<div class="col-xs-12 col-sm-4">
	<div class="form-group">
	<label for="basicInput">Fecha Contratación</label>
	<input type="date" value="<?php echo $data['data'][0]['fecha_contratacion'] ?>"  class="form-control" name="fecha_contratacion" id="fecha_contratacion" placeholder="Fecha Contratación">
	</div>
	</div>
		
</div>

					<div class="row">
						


	<div class="col-xs-12 col-sm-4">
								<div class="form-group">
									<label for="basicInput">Documento:</label>
			<input type="text" value="<?php echo $data['data'][0]['documento'] ?>"  class="form-control" name="documento" id="documento" placeholder="Documento:">
								</div>
							</div>



<div class="col-xs-12 col-sm-4">
<div class="form-group">
<label for="basicInput">Nombre del Cliente Fiscal</label>
<input type="text" value="<?php echo $data['data'][0]['cliente'] ?>"  class="form-control" name="cliente" id="cliente" placeholder="Nombre del Cliente Fiscal">
</div>
</div>



							
								<div class="col-xs-12 col-sm-4">
															<div class="form-group">
																<label for="basicInput">Fecha de nacimiento:</label>
										<input type="date" value="<?php echo $data['data'][0]['fecha_nacimiento'] ?>"  class="form-control" name="fecha_nacimiento" id="fecha_nacimiento" placeholder="Fecha de nacimiento:">
															</div>
														</div>


				

											</div>

<div class="row">
	
										
					<div class="col-xs-12 col-sm-4">
												<div class="form-group">
													<label for="basicInput">Teléfono de oficina:</label>
							<input type="text" value="<?php echo $data['data'][0]['telefono_oficina'] ?>" class="form-control" name="telefono_oficina" id="telefono_oficina" placeholder="Teléfono de oficina:">
												</div>
											</div>

	<div class="col-xs-12 col-sm-4">
								<div class="form-group">
									<label for="basicInput">Dirección de domicilio</label>
			<input type="text" value="<?php echo $data['data'][0]['direccion_domicilio'] ?>"  class="form-control" name="direccion_domicilio" id="direccion_domicilio" placeholder="Dirección de domicilio">
								</div>
							</div>



							
								<div class="col-xs-12 col-sm-4">
															<div class="form-group">
																<label for="basicInput">Dirección de oficina</label>
										<input type="text" value="<?php echo $data['data'][0]['direccion_oficina'] ?>"  class="form-control" name="direccion_oficina" id="direccion_oficina" placeholder="Dirección de oficina">
															</div>
														</div>

</div>

														<div class="row">
															


	<div class="col-xs-12 col-sm-4">
								<div class="form-group">
									<label for="basicInput">Titulación</label>
			<input type="text" value="<?php echo $data['data'][0]['titulacion'] ?>"  class="form-control" name="titulacion" id="titulacion" placeholder="Titulación">
								</div>
							</div>




						
							<div class="col-xs-12 col-sm-4">
														<div class="form-group">
															<label for="basicInput">Año de experiencia laboral</label>
									<input type="number" value="<?php echo $data['data'][0]['anos_laboral'] ?>"  class="form-control" name="anos_laboral" id="anos_laboral" placeholder="Año de experiencia laboral">
														</div>
													</div>
						
							</div>
							
<hr>

<div class="row">
	


	<div class="col-xs-12 col-sm-6">
								<div class="form-group">
									<label for="basicInput">Monto mínimo de inversión</label>
			<input type="number" value="<?php echo $data['data'][0]['monto_minimo_inversion'] ?>"  class="form-control" name="monto_minimo_inversion" id="monto_minimo_inversion" placeholder="Monto minimo de inversion">
								</div>
							</div>



	<div class="col-xs-12 col-sm-6">
								<div class="form-group">
									<label for="basicInput">Monto máximo inversión:</label>
			<input type="number" value="<?php echo $data['data'][0]['monto_maximo_inversion'] ?>"  class="form-control" name="monto_maximo_inversion" id="monto_maximo_inversion" placeholder="Monto máximo inversión:">
								</div>
							</div>



</div>
<hr>

<div class="row">
	



	<div class="col-xs-12 col-sm-4">
								<div class="form-group">
									<label for="basicInput">Ultima visita a España</label>
			<input type="date" value="<?php echo $data['data'][0]['ultima_visita_espana'] ?>"  class="form-control" name="ultima_visita_espana" id="ultima_visita_espana" placeholder="Ultima visita a España">
								</div>
							</div>


							
								<div class="col-xs-12 col-sm-4">
															<div class="form-group">
																<label for="basicInput">Tiempo de estadía de la ultima visita</label>
										<input type="text" value="<?php echo $data['data'][0]['tiempo_estadia_ultima_visita'] ?>"  class="form-control" name="tiempo_estadia_ultima_visita" id="tiempo_estadia_ultima_visita" placeholder="Tiempo de estadía de la ultima visita">
															</div>
														</div>





														
			<div class="col-xs-12 col-sm-4">



<div class="form-group">

<label for="basicInput">Ciudades visitadas</label>
<textarea name="ciudades__visitadas" id="ciudades__visitadas"  value="<?php echo $data['data'][0]['ciudades__visitadas'] ?>" class="form-control"  rows="3" ><?php echo $data['data'][0]['ciudades__visitadas'] ?></textarea>

</div>

 
</div>

	<div class="col-xs-12 col-sm-4">
								<div class="form-group">
									<label for="basicInput">Fecha estipulada de llegada a España</label>
			<input type="date" value="<?php echo $data['data'][0]['fecha_estipulada_llegada_espana'] ?>"  class="form-control" name="fecha_estipulada_llegada_espana" id="fecha_estipulada_llegada_espana" placeholder="Fecha estipulada de llegada a España">
								</div>
							</div>
														
							



</div>


													








														
							


					

				</div><!-- ciero los detalles  -->
				


            



				<div id="" class="box rte">
				<h2 class="boxHeadline">Datos familiares.</h2>
					<h3 class="boxHeadlineSub">Formulario</h3>


<div class="row">
	


	<div class="col-xs-12 col-sm-4">
								<div class="form-group">
									<label for="basicInput">Nº Integrantes familiares:</label>
			<input type="number" value="<?php echo $data['data'][0]['integrantes_familiar'] ?>"  class="form-control" name="integrantes_familiar" id="integrantes_familiar" placeholder="Nº Integrantes familiares:">
								</div>
							</div>




	<div class="col-xs-12 col-sm-4">
								<div class="form-group">
									<label for="basicInput">Cónyuge Nombres:</label>
			<input type="text" value="<?php echo $data['data'][0]['conyuge_nombres'] ?>"  class="form-control" name="conyuge_nombres" id="conyuge_nombres" placeholder="Conyuge Nombres:">
								</div>
							</div>






	<div class="col-xs-12 col-sm-4">
								<div class="form-group">
									<label for="basicInput">Cónyuge Apellidos:</label>
			<input type="text" value="<?php echo $data['data'][0]['conyuge_apellidos'] ?>"  class="form-control" name="conyuge_apellidos" id="conyuge_apellidos" placeholder="Cónyuge Apellidos:">
								</div>
							</div>



</div>


<div class="row">
	



	<div class="col-xs-12 col-sm-4">
								<div class="form-group">
									<label for="basicInput">Cónyuge fecha de nacimiento:</label>
			<input type="date" value="<?php echo $data['data'][0]['conyuge_fecha_nacimiento'] ?>"  class="form-control" name="conyuge_fecha_nacimiento" id="conyuge_fecha_nacimiento" placeholder="Conyuge fecha de nacimiento:">
								</div>
							</div>


<div class="col-xs-12 col-sm-4">
								<div class="form-group">
									<label for="basicInput">Cónyuge documento</label>
			<input type="text" value="<?php echo $data['data'][0]['conyuge_documentos'] ?>"  class="form-control" name="conyuge_documentos" id="conyuge_documentos" placeholder="Conyuge documento">
								</div>
							</div>




	<div class="col-xs-12 col-sm-4">
								<div class="form-group">
									<label for="basicInput">Cónyuge tel. Móvil</label>
			<input type="text" value="<?php echo $data['data'][0]['conyuge_tel_movil'] ?>"  class="form-control" name="conyuge_tel_movil" id="conyuge_tel_movil" placeholder="Conyuge telf. Movil">
								</div>
							</div>


</div>

<div class="row">
	


	<div class="col-xs-12 col-sm-4">
								<div class="form-group">
									<label for="basicInput">Cónyuge tel. Oficina</label>
			<input type="text" value="<?php echo $data['data'][0]['conyuge_tel_oficina'] ?>"  class="form-control" name="conyuge_tel_oficina" id="conyuge_tel_oficina" placeholder="Conyuge tel. Oficina">
								</div>
							</div>



							
								<div class="col-xs-12 col-sm-4">
															<div class="form-group">
																<label for="basicInput">Cónyuge email:</label>
										<input type="email" value="<?php echo $data['data'][0]['conyuge_email'] ?>"  class="form-control" name="conyuge_email" id="conyuge_email" placeholder="Cónyuge email:">
															</div>
														</div>
								


</div>

<hr>
<h2 class="boxHeadline">Numero de hijos.</h2>
<!-- <button type="button" id="agregar_hijos" class="btn bg-green">Agregar <i class="fa fa-plus"></i></button>
<button type="button" id="remove_hijos" class="btn bg-red">Remover <i class="fa fa-eraser"></i></button> -->
<div id="hijos" class="row">
	
<?php require_once 'hijos.php';  ?>
 


 



<!-- <div class="item_hijos">
	<div class="col-xs-12 col-sm-3">
								<div class="form-group">
									<label for="basicInput">Hijo Nombre</label>
			<input type="text" value=""  class="form-control" name="hijos_nombre[]" id="hijos_nombre[]" placeholder="Hijo Nombre">
								</div>
							</div>


							
								<div class="col-xs-12 col-sm-3">
															<div class="form-group">
																<label for="basicInput">Hijo Apellido</label>
										<input type="text" value=""  class="form-control" name="hijos_apellidos[]" id="hijos_apellidos[]" placeholder="Hijo Apellido">
															</div>
														</div>
							



	<div class="col-xs-12 col-sm-3">
								<div class="form-group">
									<label for="basicInput">Hijo fecha de nacimiento</label>
			<input type="date" value=""  class="form-control" name="hijos_fecha_nacimiento[]" id="hijos_fecha_nacimiento[]" placeholder="Hijo fecha de nacimiento">
								</div>
							</div>



							
								<div class="col-xs-12 col-sm-3">
															<div class="form-group">
																<label for="basicInput">Hijo documento</label>
										<input type="text" value=""  class="form-control" name="hijos_documentos[]" id="hijos_documentos[]" placeholder="Hijo documento">
															</div>
														</div>

</div>
 -->
 
</div>
							
<div class="row" id="mas_hijos">
	


</div>



 

 
<hr>
<!-- <div class="row">
	
	<label for="comentarios_sobre_negocio"><i class="fa fa-image" style="font-size: 30px;
    color: #fe5621;"></i> Cargar imagen: (20 Archivos permitidos) image/*, .pdf</label>
<div id="dZUpload" class="dropzone" style=" border-color: #e6e7ed;border-left: 3px solid #4bae4f;  " >
<div class="dz-default dz-message"></div>
</div>
<div id="img"></div>

</div> -->
	

				</div><!-- BOX FAMILIARES -->




				<div id="" class="box rte">
				<h2 class="boxHeadline">Ficha de opciones.</h2>
					<h3 class="boxHeadlineSub">Formulario</h3>



<?php 

$sector_array  = array  ('Agricultura', 'Alimentación', 'Animales Domésticos', 'Artes Gráficas', 'Asegurador', 'Comercio', 'Construcción', 'Decoración', 'Deportes', 'Dietética', 'Electrónica', 'Estética / Cosmética', 'Farmacia', 'Financiero', 'Ganadería', 'Industria Alimentaria', 'Industria Textil', 'Informática', 'Inmobiliario', 'Moda', 'Ocio/Tiempo Libre', 'Restauración', 'Servicios', 'Transporte', 'Sanidad');
 ?>






<?php foreach ($sector_array   as $value) {
	
 ?>
<!-- qui aqui van las opciones -->


<?php }
	
 ?>
							 
<div class="row">

	<div class="col-xs-12 col-sm-4 ">
								<div class="form-group">
									<label>Opcion 1</label>
									<select name="opcion1" id="opcion1" class="js-select ">
										<option disabled selected value="">- Select opción -</option>
										
<?php foreach ($sector_array   as $value) {

?>
<!-- qui aqui van las opciones -->
<option value="<?php  echo $value ?>"><?php  echo $value ?></option>

<?php }

?>


									
								 
									</select>
								</div>

<div class="row checkboxes">
								<div class="col-xs-12 col-sm-4 i">
								<label>
									<input class="o1"  name="opcion_1_tipo[]" data-nombre="FRANQUICIA" value="FRANQUICIA" type="checkbox">
									<span>Franquicia</span>
								</label>
							</div>

							<div class="col-xs-12 col-sm-4 i">
								<label>
									<input class="o1"  name="opcion_1_tipo[]" data-nombre="PYME" value="PYME" type="checkbox">
									<span>PYME</span>
								</label>
							</div>
</div>
							</div>

								<div class="col-xs-12 col-sm-4 ">
								<div class="form-group">
									<label>Opcion 2</label>
									<select name="opcion2" id="opcion2" class="js-select ">
											<option disabled selected value="">- Select opción -</option>
										
<?php foreach ($sector_array   as $value) {

?>
<!-- qui aqui van las opciones -->
<option value="<?php  echo $value ?>"><?php  echo $value ?></option>

<?php }

?>
								 
									</select>
								</div>

								<div class="row checkboxes">
								<div class="col-xs-12 col-sm-4 i">
								<label>
									<input class="o2"  name="opcion_2_tipo[]" data-nombre="FRANQUICIA" value="FRANQUICIA" type="checkbox">
									<span>Franquicia</span>
								</label>
							</div>

							<div class="col-xs-12 col-sm-4 i">
								<label>
									<input class="o2"  name="opcion_2_tipo[]" data-nombre="PYME" value="PYME" type="checkbox">
									<span>PYME</span>
								</label>
							</div>
</div>
							</div>


								<div class="col-xs-12 col-sm-4">
								<div class="form-group">
									<label>Opcion 3</label>
									<select name="opcion3" id="opcion3" class="js-select ">
											<option disabled selected value="">- Select opción -</option>
										
<?php foreach ($sector_array   as $value) {

?>
<!-- qui aqui van las opciones -->
<option value="<?php  echo $value ?>"><?php  echo $value ?></option>

<?php }

?>
								 
									</select>
								</div>

								<div class="row checkboxes">
								<div class="col-xs-12 col-sm-4 i">
								<label>
									<input class="o3"  name="opcion_3_tipo[]" data-nombre="FRANQUICIA" value="FRANQUICIA" type="checkbox">
									<span>Franquicia</span>
								</label>
							</div>

							<div class="col-xs-12 col-sm-4 i">
								<label>
									<input class="o3"  name="opcion_3_tipo[]" data-nombre="PYME" value="PYME" type="checkbox">
									<span>PYME</span>
								</label>
							</div>
</div>

							</div>
						
						 
						
						</div> 


<hr>

						<div class="row">

	<div class="col-xs-12 col-sm-4 ">
								<div class="form-group">
									<label>Opcion 4</label>
									<select name="opcion4" id="opcion4" class="js-select ">
										<option disabled selected value="">- Select opción -</option>
										
<?php foreach ($sector_array   as $value) {

?>
<!-- qui aqui van las opciones -->
<option value="<?php  echo $value ?>"><?php  echo $value ?></option>

<?php }

?>


									
								 
									</select>
								</div>

<div class="row checkboxes">
								<div class="col-xs-12 col-sm-4 i">
								<label>
									<input  class="o4"  name="opcion_4_tipo[]" data-nombre="FRANQUICIA" value="FRANQUICIA" type="checkbox">
									<span>Franquicia</span>
								</label>
							</div>

							<div class="col-xs-12 col-sm-4 i">
								<label>
									<input  class="o4"  name="opcion_4_tipo[]" data-nombre="PYME" value="PYME" type="checkbox">
									<span>PYME</span>
								</label>
							</div>
</div>
							</div>

								<div class="col-xs-12 col-sm-4 ">
								<div class="form-group">
									<label>Opcion 5</label>
									<select name="opcion5" id="opcion5" class="js-select ">
											<option disabled selected value="">- Select opción -</option>
										
<?php foreach ($sector_array   as $value) {

?>
<!-- qui aqui van las opciones -->
<option value="<?php  echo $value ?>"><?php  echo $value ?></option>

<?php }

?>
								 
									</select>
								</div>

								<div class="row checkboxes">
								<div class="col-xs-12 col-sm-4 i">
								<label>
									<input class="o5"  name="opcion_5_tipo[]" data-nombre="FRANQUICIA" value="FRANQUICIA" type="checkbox">
									<span>Franquicia</span>
								</label>
							</div>

							<div class="col-xs-12 col-sm-4 i">
								<label>
									<input class="o5"  name="opcion_5_tipo[]" data-nombre="PYME" value="PYME" type="checkbox">
									<span>PYME</span>
								</label>
							</div>
</div>
							</div>


								<div class="col-xs-12 col-sm-4">
								<div class="form-group">
									<label>Opcion 6</label>
									<select name="opcion6" id="opcion6" class="js-select ">
											<option disabled selected value="">- Select opción -</option>
										
<?php foreach ($sector_array   as $value) {

?>
<!-- qui aqui van las opciones -->
<option value="<?php  echo $value ?>"><?php  echo $value ?></option>

<?php }

?>
								 
									</select>
								</div>

								<div class="row checkboxes">
								<div class="col-xs-12 col-sm-4 i">
								<label>
									<input class="o6" name="opcion_6_tipo[]" data-nombre="FRANQUICIA" value="FRANQUICIA" type="checkbox">
									<span>Franquicia</span>
								</label>
							</div>

							<div class="col-xs-12 col-sm-4 i">
								<label>
									<input class="o6"  name="opcion_6_tipo[]" data-nombre="PYME" value="PYME" type="checkbox">
									<span>PYME</span>
								</label>
							</div>
</div>

							</div>
						
						 
						
						</div> 







</div><!-- FICHA DE OPCIONES -->




	
</div> <!-- CIERRO LOS DIV OCULTOS -->



				<div class="box rte">

<?php 

 if ($_GET['tipo']=='editar') {
 	$botonNombre= 'Editar';
 	$url= 'envios/update.php';


/*=====================================================
=            PARA VERIFICAR LOS CHECK LINS            =
=====================================================*/

$preinfo =  unserialize( $data['data'][0]['pre_informacion'] );	


$opcion_tipo_1 = unserialize($data['data'][0]['opcion_tipo_1']) ;
$opcion_tipo_2 = unserialize($data['data'][0]['opcion_tipo_2']) ;
$opcion_tipo_3 = unserialize($data['data'][0]['opcion_tipo_3']) ;
$opcion_tipo_4 = unserialize($data['data'][0]['opcion_tipo_4']) ;
$opcion_tipo_5 = unserialize($data['data'][0]['opcion_tipo_5']) ;
$opcion_tipo_6 = unserialize($data['data'][0]['opcion_tipo_6']) ;

/*=====  End of PARA VERIFICAR LOS CHECK LINS  ======*/







 }

 else{
	$botonNombre= 'Guardar';
	$url= 'envios/insert.php';

 }
 ?>

	<!-- 			<center>

  
<a type="button" href="../mod_seguimientos/index.php?id=<?php //echo $data['data'][0]['id'] ?>" target="_blank" value="Seguimientos" class="btn bg-orange">Seguimiento <i class="fa fa-exclamation-triangle" aria-hidden="true"></i></a>

<input type="reset" value="Reset" class="btn bg-gray">
						<button type="submit"  id="boton" data-loading-text="<i class='fa fa-circle-o-notch fa-spin'></i>Loading..." class="btn btn-primary"><?php// echo $botonNombre; ?> <i class="fa fa-save"></i></button>
						</center>
 -->


					
				</div>


			</div>	<!-- Page content -->
		</div><!-- pageContent -->
	</div><!-- pageWrap -->
</form>	 
					 
					
 
				
				</div><!-- box rate -->
				

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
<script type="text/javascript">

$(document).ready(function() {

$('input , select , textarea').attr('disabled', 'true');
 

	$('#pais').val('<?php echo $data['data'][0]['pais'] ?>').change();
$('#status').val('<?php echo $data['data'][0]['status'] ?>').change();
$('#mes_viaje').val('<?php echo $data['data'][0]['mes_viaje'] ?>').change();
$('#anio_viaje').val('<?php echo $data['data'][0]['anio_viaje'] ?>').change();

$('#opcion1').val('<?php echo $data['data'][0]['opcion1'] ?>').change();    
$('#opcion2').val('<?php echo $data['data'][0]['opcion2'] ?>').change();   
$('#opcion3').val('<?php echo $data['data'][0]['opcion3'] ?>').change();   
$('#opcion4').val('<?php echo $data['data'][0]['opcion4'] ?>').change();   
$('#opcion5').val('<?php echo $data['data'][0]['opcion5'] ?>').change();   
$('#opcion6').val('<?php echo $data['data'][0]['opcion6'] ?>').change();   
});

	

</script>

<!-- Mirrored from sharpen.tomaj.sk/v1.7/html5/forms.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 23 May 2016 19:06:56 GMT -->
</html>