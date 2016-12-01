<?php
require_once 'nav_define.php';
?>


		<nav class="simpleList asideNavigation">
			<ul>
				<li class="active"><a href="<?php echo BASE_URL ?>index.php" title="#"><i class="zmdi zmdi-home zmdi-hc-fw icon"></i> <span class="hidden-xs hidden-sm">Inicio</span></a></li>
				
				

				<li class="sub js-submenu">
					<div><i class="zmdi zmdi-account-box zmdi-hc-fw icon"></i> <span class="hidden-xs hidden-sm">Perfil <i class="zmdi zmdi-plus plus"></i></span></div>
					<ul>
					<li><a href="<?php echo BASE_URL ?>mod_perfil/index.php" title="#">Mis Datos </a></li>
					<li><a href="<?php echo BASE_URL ?>mod_perfil/cambioDeClave.php" >Cambio de clave </a></li>
					</li>
						 
					</ul>
				</li>


<li class="sub js-submenu">
					<div><i class="zmdi zmdi-city-alt zmdi-hc-fw icon"></i> <span class="hidden-xs hidden-sm" title="Opciones de negocio">Opc. de Negocios  <i class="zmdi zmdi-plus plus"></i></span></div>

					<ul>
							
					<li><a href="<?php echo BASE_URL ?>mod_opciones/diarios.php" title="#">Diarios</a></li>
					<li><a href="<?php echo BASE_URL ?>mod_opciones/exclusivas.php" title="#">Exclusivas</a></li>
					<li><a href="<?php echo BASE_URL ?>mod_opciones/franquicias.php" title="#">Franquicias</a></li>
					

					</ul>
				</li>

	<li class="sub js-submenu">
					<div><i class="zmdi zmdi-notifications-active zmdi-hc-fw icon"></i> <span class="hidden-xs hidden-sm">Mis seguimientos <i class="zmdi zmdi-plus plus"></i></span></div>

					<ul >
			<li><a href="<?php echo BASE_URL ?>mod_seguimientos/index.php" title="Perfil del usuario">Nuevo</a></li>

<li><a href="<?php echo BASE_URL ?>mod_seguimientos/ejecutivo_comercial.php" title="Perfil del usuario">Ejecutivo y Comercial</a></li>
			
<li><a href="<?php echo BASE_URL ?>mod_seguimientos/financiero.php" title="Perfil del usuario">Financiero</a></li>
				<li><a href="<?php echo BASE_URL ?>mod_seguimientos/legal.php" title="Perfil del usuario">Legal</a></li>

		<li><a href="<?php echo BASE_URL ?>mod_seguimientos/administrativo.php" title="Perfil del usuario">Administración contable</a></li>


		<li><a href="<?php echo BASE_URL ?>mod_seguimientos/tecnologia.php" title="Perfil del usuario">Tecnología</a></li>			
				<li><a href="<?php echo BASE_URL ?>mod_seguimientos/estudios.php" title="Perfil del usuario">Estudios contratados</a></li>


						 
					</ul>
				</li>




				<li class="sub js-submenu">
					<div><i class="zmdi zmdi-folder zmdi-hc-fw icon"></i> <span class="hidden-xs hidden-sm">Mi documentación  <i class="zmdi zmdi-plus plus"></i></span></div>
					<ul>

					 

 

					<li><a href="<?php echo BASE_URL ?>mod_mi_documentacion/index.php" title="#">Documentación</a></li>
		
			
								
					</ul>


				</li>






				<li class="sub js-submenu">
					<div><i class="zmdi zmdi-calendar-check zmdi-hc-fw icon"></i> <span class="hidden-xs hidden-sm">Control de visitas <i class="zmdi zmdi-plus plus"></i></span></div>
                 <ul>
					    <li><a href="<?php echo BASE_URL ?>mod_control_visitas/index.php" title="Perfil del usuario">Visitas</a></li>
			 
 

						 
					</ul>

				</li>
				





<!--=================================================
=            AQUI VA TODO EL MENU DELUXE            =
==================================================-->
		
<?php

  if ($_SESSION['usuario']['Tipo_acceso'] == 'DELUXE') {
  	  require_once 'nav_deluxe.php'; 	
  } 

  
  							


  ?>
	


<!--====  End of AQUI VA TODO EL MENU DELUXE  ====-->



				
				<li class="sub js-submenu">
					<div><i class="zmdi zmdi-help-outline zmdi-hc-fw icon"></i> <span class="hidden-xs hidden-sm">Ayuda <i class="zmdi zmdi-plus plus"></i></span></div>

					<ul >
						
<li><a href="<?php echo BASE_URL ?>mod_ayuda/index.php" title="">Nuevo ticket de soporte</a></li>
<li><a href="<?php echo BASE_URL ?>mod_ayuda/tutorial.php" title="">Tutorial</a></li>

						 
					</ul>
				</li>


		<li class="sub js-submenu">
					<div><i class="zmdi zmdi-label zmdi-hc-fw icon"></i> <span class="hidden-xs hidden-sm">	Enlaces de interes <i class="zmdi zmdi-plus plus"></i></span></div>

					<ul >
						
<li><a href="http://cohenyaguirre.es" title="">www.cohenyaguirre.es</a></li>


						 
					</ul>
				</li>


			</ul>
		</nav>
		

	