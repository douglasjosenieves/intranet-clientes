
				<?php 
// connecting to db
//echo $_SESSION['usuario']['Tipo'].$_SESSION['usuario']['Nombre'].$_SESSION['usuario']['Apellido'] ;
require_once '../../db_connect.php';


// connecting to db
$con = new DB_CONNECT();
//sleep(10);
mysql_query("SET NAMES utf8");
mysql_query("SET CHARACTER_SET utf"); 
extract ($_POST);

 ?>

				<?php 
			$idu = $usuario;
				$i=0;
				$resul =  mysql_query("SELECT * FROM `seguimiento` where anulado <> 1 and status='ABIERTO' and id_contacto = $idu");
				while($row =  mysql_fetch_array($resul) ) {
				
								
				//echo $row['nombre'];
				$opciones['contacto'][]=$row;
				
				 //$imagen = explode(';',$opciones['opciones'][0]['capture1']) ;
				 ?>
				


				<li>
									<a href="#" title="#" class="clearfix">
										<span class="pull-left"><i class="zmdi zmdi-accounts-add zmdi-hc-fw icon"></i> <span class="label label-info">Nuevo</span> <?php echo $opciones['contacto'][$i]['asunto']  ?></span>
										<span class="pull-right info"><?php echo $opciones['contacto'][$i]['fecha']  ?></span>
									</a>
								</li>



																	
					     
			 
					<?php $i++;  }?>
						<li>
									<a href="#" title="#" class="clearfix text-center">
										<i class="zmdi zmdi-plus-square icon"></i> See all
									</a>
								</li>