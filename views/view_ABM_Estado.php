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
						<span class="user-name"><?php echo $_SESSION['nombreCompleto']?></span>
					</a>
					<div class="dropdown-menu dropdown-menu-right dropdown-menu-icon-list">
						<form action="../index.php" method="POST">
							<!-- <a class="dropdown-item" href="#"><i class="dw dw-user1"></i>Perfil</a>
							<a class="dropdown-item" href="#"><i class="dw dw-settings2"></i>Configuración</a>
							<a class="dropdown-item" href="#"><i class="dw dw-help"></i>Ayuda</a> -->
							<input type="submit" class="dropdown-item" name="cerrar_sesion" value="Cerrar Sesión">
						</form>
					</div>
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
	<?php require_once('partials/menu_informatica.php') ?>
	
<!-- INFORMACIÓN INICIAL -->
	<div class="main-container">
		<div class="pd-ltr-20 xs-pd-20-10">
			<div class="min-height-200px">
				
			<!-- Comienzo de CONTENEDOR FORMULARIO -->
				<div class="pd-20 card-box mb-30">
					<div class="clearfix">
						<div class="pull-left">
							<h4 class="text-blue h4">¡Gestiona el Estado! 🦈</h4>
							<p class="mb-30">Rellene el formulario a continuación...</p>
						</div>
					</div>

					
					<!-- FORMULARIO DE EQUIPAMIENTO -->
					<form action="#" method="post">

						<!-- N°Inventario name="inventario" -->
						<div class="form-group row">
							<label class="col-sm-12 col-md-2 col-form-label">N°Inventario</label>
							<div class="col-sm-12 col-md-10">
								<select class="custom-select col-12" name = "inventario">
									<option selected="">Elige...</option>
									<?php 
										foreach($datosEquip as $datos) { ?>
											<option value="<?php echo $datos['N°Inventario']; ?>"><?php echo $datos['N°Inventario']." ".$datos['Nombre']; ?></option>
									<?php } ?> 
								</select>
								</div>
							</div>
						<!-- cbx name = "fechaInicio	" -->
						<div class="form-group row">
							<label class="col-sm-12 col-md-2 col-form-label">Fecha Ingreso</label>
							<div class="col-sm-12 col-md-10">
								<input class="form-control" placeholder="0000-00-00" type="date" name = "fechaInicio">
							</div>
						</div>

							<!-- Estados name="cbx_Estado" -->
							<div class="form-group row">
							<label class="col-sm-12 col-md-2 col-form-label">Estado</label>
							<div class="col-sm-12 col-md-10">
								<select class="custom-select col-12" name = "cbx_Estado">
									<option selected="">Elige...</option>
									<?php 
										foreach($cbxEstado as $datos) { ?>
											<option value="<?php echo $datos['ID_Estado']; ?>"><?php echo $datos['Nombre_Estado']; ?></option>
									<?php } ?> 
								</select>
							</div>
						</div>	
							
						<!-- Text field: name="fechaCambio" -->	
							<div class="form-group row">
								<label class="col-sm-12 col-md-2 col-form-label">Fecha Cambio</label>
								<div class="col-sm-12 col-md-10">
									<input class="form-control" placeholder="0000-00-00" type="date" name = "fechaCambio">
								</div>
							</div>
							
						<!-- Botones ABM -->
							<div class="btn list">
								<input type="submit" name="btn_guardarEstado" value="Guardar" class="btn btn-outline-success">
								<input type="submit" name="btn_modificarEstado" value ="Modificar" class="btn btn-outline-warning">
								<!-- <input type="submit" name="btn_eliminarEstado" value="Eliminar" class="btn btn-outline-danger"> -->
							</div>
					</form>
					
				</div>
	<!-- Fin CONTENEDOR FORMULARIO -->

	<!-- Comienzo de Tabla EQUIPAMIENTO -->
	<div class="pd-20 card-box mb-30">
		<div class="clearfix mb-20">
			<div class="pull-left">
				<h4 class="text-blue h4">Estado de Equipamiento</h4>
			</div>
		</div>
		<table class="table table-bordered">
			<thead>
				<tr>
					<th>Fecha Inicio</th>
					<th>Nombre Equipamiento</th>
					<th>Estado</th>
					<th>Fecha Cambio</th>
				</tr>
			</thead>
			<tbody>
			<?php
			// Tabla manipulada desde 'controllers_equip'
                  foreach ($datosEstado as $dato){
                      echo "<tr> <td>".$dato['Fecha_Inicio']."</td>
                      <td>".$dato['nombre']."</td>
                      <td>".$dato['nombre_Estado']."</td>
                      <td>".$dato['Fecha_Cambio']."</td>
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