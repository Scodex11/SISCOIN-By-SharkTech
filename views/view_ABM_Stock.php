<?php 
	require_once('../controllers/controller_equip.php');
?>

<!DOCTYPE html>
<html>
<head>
	<!-- Basic Page Info -->
	<meta charset="utf-8">
	<title>ABM STOCK EQUIPAMIENTO</title>

	<!-- Site favicon -->
	<link rel="apple-touch-icon" sizes="180x180" href="vendors/images/apple-touch-icon.png">
	<link rel="icon" type="image/png" sizes="32x32" href="vendors/images/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="16x16" href="vendors/images/favicon-16x16.png">

	<!-- Mobile Specific Metas -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<!-- Google Font -->
	<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
	<!-- CSS -->
	<link rel="stylesheet" type="text/css" href="vendors/styles/core.css">
	<link rel="stylesheet" type="text/css" href="vendors/styles/icon-font.min.css">
	<link rel="stylesheet" type="text/css" href="vendors/styles/style.css">


	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-119386393-1"></script>
	<script>
		window.dataLayer = window.dataLayer || [];
		function gtag(){dataLayer.push(arguments);}
		gtag('js', new Date());

		gtag('config', 'UA-119386393-1');
	</script>
</head>
<body>
	<!-- Pantalla carga -->
	<!-- <//?php 
	// require_once('pantalla_carga.php') ?> -->

	<!-- HEADER  -->
	<div class="header">
		<div class="header-left">
			<div class="menu-icon dw dw-menu"></div>
			<div class="search-toggle-icon dw dw-search2" data-toggle="header_search"></div>
		</div>
		<div class="header-right">
			<div class="dashboard-setting user-notification">
				<div class="dropdown">
					<a class="dropdown-toggle no-arrow" href="javascript:;" data-toggle="right-sidebar">
						<i class="dw dw-settings2"></i>
					</a>
				</div>
			</div>

            <!-- BOTON de notifiaciones -->
			
            <div class="user-notification">
				<div class="dropdown">
					<a class="dropdown-toggle no-arrow" href="#" role="button" data-toggle="dropdown">
						<i class="icon-copy dw dw-notification"></i>
						<span class="badge notification"></span>
					</a>
					<div class="dropdown-menu dropdown-menu-right">
                        <!-- Notificaciones -->
						<div class="notification-list mx-h-350 customscroll">
							<ul>
								<li>
									<a href="#">
										<img src="vendors/images/img.jpg" alt="">
										<h3>John Doe</h3>
										<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed...</p>
									</a>
								</li>
								<li>
									<a href="#">
										<img src="vendors/images/photo1.jpg" alt="">
										<h3>Lea R. Frith</h3>
										<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed...</p>
									</a>
								</li>
								<li>
									<a href="#">
										<img src="vendors/images/photo2.jpg" alt="">
										<h3>Erik L. Richards</h3>
										<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed...</p>
									</a>
								</li>
								<li>
									<a href="#">
										<img src="vendors/images/photo3.jpg" alt="">
										<h3>John Doe</h3>
										<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed...</p>
									</a>
								</li>
								<li>
									<a href="#">
										<img src="vendors/images/photo4.jpg" alt="">
										<h3>Renee I. Hansen</h3>
										<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed...</p>
									</a>
								</li>
								<li>
									<a href="#">
										<img src="vendors/images/img.jpg" alt="">
										<h3>Vicki M. Coleman</h3>
										<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed...</p>
									</a>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
			<div class="user-info-dropdown">
				<div class="dropdown">
					<a class="dropdown-toggle" href="#" role="button" data-toggle="dropdown">
						<span class="user-icon">
							<img src="vendors/images/photo1.jpg" alt="">
						</span>
						<span class="user-name">Facundo Rodriguez</span>
					</a>
					<div class="dropdown-menu dropdown-menu-right dropdown-menu-icon-list">
						<a class="dropdown-item" href="#"><i class="dw dw-user1"></i>Perfil</a>
						<a class="dropdown-item" href="#"><i class="dw dw-settings2"></i>Configuración</a>
						<a class="dropdown-item" href="#"><i class="dw dw-help"></i>Ayuda</a>
						<a class="dropdown-item" href="#"><i class="dw dw-logout"></i>Cerrar Sesión</a>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Menú configuracion de color  -->
	<div class="right-sidebar">
		<div class="sidebar-title">
			<h3 class="weight-600 font-16 text-blue">
				Opciones de Color
			</h3>
			<div class="close-sidebar" data-toggle="right-sidebar-close">
				<i class="icon-copy ion-close-round"></i>
			</div>
		</div>
		<div class="right-sidebar-body customscroll">
			<div class="right-sidebar-body-content">
				<h4 class="weight-600 font-18 pb-10">Color Banner Superior</h4>
				<div class="sidebar-btn-group pb-30 mb-10">
					<a href="javascript:void(0);" class="btn btn-outline-primary header-white active">Claro</a>
					<a href="javascript:void(0);" class="btn btn-outline-primary header-dark">Oscuro</a>
				</div>

				<h4 class="weight-600 font-18 pb-10">Color Menú</h4>
				<div class="sidebar-btn-group pb-30 mb-10">
					<a href="javascript:void(0);" class="btn btn-outline-primary sidebar-light ">Claro</a>
					<a href="javascript:void(0);" class="btn btn-outline-primary sidebar-dark active">Oscuro</a>
				</div>

			</div>
		</div>
	</div>


<!-- Menú IZQUIERDA -->
	<?php require_once('menu_informatica.php') ?>
	
<!-- INFORMACIÓN INICIAL -->
	<div class="main-container">
		<div class="pd-ltr-20 xs-pd-20-10">
			<div class="min-height-200px">
				
			<!-- Comienzo de CONTENEDOR FORMULARIO -->
				<div class="pd-20 card-box mb-30">
					<div class="clearfix">
						<div class="pull-left">
							<h4 class="text-blue h4">¡Gestiona tu equipamiento! 🦈</h4>
							<p class="mb-30">Rellene el formulario a continuación...</p>
						</div>
					</div>

					
					<!-- FORMULARIO DE EQUIPAMIENTO -->
					<form action="#" method="post">
					
						<!-- Text field: name="inventario" -->
							<div class="form-group row">
								<label class="col-sm-12 col-md-2 col-form-label">N°Inventario</label>
								<div class="col-sm-12 col-md-10">
									<input class="form-control" type="text" placeholder="Ej: 123" name="inventario">
								</div>
							</div>
						<!-- Text field: name="serie" -->
							<div class="form-group row">
								<label class="col-sm-12 col-md-2 col-form-label">N°Serie</label>
								<div class="col-sm-12 col-md-10">
									<input class="form-control" type="text" placeholder="Ej: qwer1234" name="serie">
								</div>
							</div>
						<!-- Text field: name="nombre" -->	
							<div class="form-group row">
								<label class="col-sm-12 col-md-2 col-form-label">Nombre: </label>
								<div class="col-sm-12 col-md-10">
									<input class="form-control" type="text" placeholder="Ej: Monitor LED" name="nombre">
								</div>
							</div>
						<!-- Text field: name="descripcion" -->	
							<div class="form-group row">
								<label class="col-sm-12 col-md-2 col-form-label">Descripcion: </label>
								<div class="col-sm-6 col-md-10">
									<input class="form-control" type="text" placeholder="Ej: Monitor HP 35 pulgadas con lucesistas gamer porque es para gamers" name="descripcion">
								</div>
							</div>
						<!-- Text field: name="marca" -->
							<div class="form-group row">
								<label class="col-sm-12 col-md-2 col-form-label">Marca</label>
								<div class="col-sm-12 col-md-10">
									<input class="form-control" type="text" placeholder="Ej: Logitech" name="marca">
								</div>
								
							</div>	
						<!-- Botones ABM -->
							<div class="btn list">
								<input type="submit" name="btn_guardar" value="Guardar" class="btn btn-outline-success">
								<input type="submit" name="btn_modificar" value ="Modificar" class="btn btn-outline-warning">
								<input type="submit" name="btn_eliminar" value="Eliminar" class="btn btn-outline-danger">
							</div>
					</form>
					
				</div>
	<!-- Fin CONTENEDOR FORMULARIO -->

	<!-- Comienzo de Tabla EQUIPAMIENTO -->
	<div class="pd-20 card-box mb-30">
		<div class="clearfix mb-20">
			<div class="pull-left">
				<h4 class="text-blue h4">Tabla de Flores</h4>
			</div>
		</div>
		<table class="table table-bordered">
			<thead>
				<tr>
					<th >N° Inventario</th>
					<th >N° Serie</th>
					<th >Nombre</th>
					<th >Descripcion</th>
					<th >Marca</th>
					
				</tr>
			</thead>
			<tbody>
			<?php
                  foreach ($datosEquip as $dato){
                      echo "<tr> <td>".$dato['N°Inventario']."</td>
                      <td>".$dato['N°Serie']."</td>
                      <td>".$dato['Nombre']."</td>
                      <td>".$dato['descripcion']."</td>
					  <td>".$dato['marca']."</td>
                      </tr>";
                  }
          ?> 
			</tbody>
		</table>
		
		</div>
		
	</div>
	<!-- Fin de Tabla EQUIPAMIENTO -->
				

			</div>
<!-- Créditos al creador de la plantilla -->
			<div class="footer-wrap pd-20 mb-20 card-box">
				DeskApp - Bootstrap 4 Admin Template By <a href="https://github.com/dropways" target="_blank">Ankit Hingarajiya</a>
			</div>
		</div>
	</div>
	<!-- js -->
	<script src="vendors/scripts/core.js"></script>
	<script src="vendors/scripts/script.min.js"></script>
	<script src="vendors/scripts/process.js"></script>
	<script src="vendors/scripts/layout-settings.js"></script>
</body>
</html>