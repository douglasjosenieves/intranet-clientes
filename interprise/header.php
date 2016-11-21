<?php require_once 'nav_define.php'; ?>
<script type="text/javascript">var usuarioOnline = <?php echo $_SESSION['usuario']['Id']; ?>;</script>
<header id="header" class="hidden-print">
		<h1 class="logo">
			<a href="#" title="#" class="js-nav-toggler">
				<i class="icon icon-close"></i>
			</a>
			<a href="<?php echo BASE_URL ?>index.php" title="GEA ERP"><img src="<?php echo BASE_URL ?>/img/icon-logo.png"> <span></span></a>
		</h1>

		<div class="pageContent">
			<div class="container">
				<ul class="topNavigation">
			
					<li>
						<div class="btn-group simpleList list-sm">
							<button type="button" class="btn dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								<i class="zmdi zmdi-notifications-active zmdi-hc-fw icon"></i>
								<span id="contactos_nuevos_total" class="badge"></span>
							</button>

							<ul id="contactos_nuevos" class="dropdown-menu pull-right">
							
								
							
							</ul>

						</div>
					</li>

						<li>
						<a href="<?php echo BASE_URL ?>index.php"   title="Refrescar">
					<i class="zmdi zmdi-home icon"></i>
						</a>
					</li>
 

					<li>
						<a href="#" title="#">
							<i class="zmdi zmdi-fullscreen-alt zmdi-hc-fw icon js-fullscreen-enter"></i>
						</a>
					</li>
				 
				</ul>
			</div>
		</div>
	</header>