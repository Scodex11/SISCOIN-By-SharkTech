<?php require_once('../controllers/controller_solicita.php') ?>
<!DOCTYPE html>
<html>

<head>
	<!-- Basic Page Info -->
	<meta charset="utf-8">
	<title>NUEVA SOLICITUD</title>

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
	<link rel="stylesheet" type="text/css" href="src/plugins/jquery-steps/jquery.steps.css">
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

<!-- HEADER  -->
<body class="login-page">
<div class="header">
		<div class="header-left">
			<div class="menu-icon dw dw-menu"></div>
			<div class="search-toggle-icon dw dw-search2" data-toggle="header_search"></div>
		</div>
		<div class="header-right">
		<div class="menu-icon"></div>
		<div class="dashboard-setting user-notification">
			<div class ="dropdown">
				<div id="google_translate_element" class="google"></div>
			</div>	
		</div>
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


	<div class="login-header box-shadow">
		<div class="container-fluid d-flex justify-content-between align-items-center">
		</div>
	</div>

<!-- Menú IZQUIERDA -->

	<?php require_once('partials/menu_oficina.php') ?>

	<div class="main-container">
		<div class="pd-ltr-20 xs-pd-20-10">
			<div class="min-height-200px">
				
			<!-- Comienzo de CONTENEDOR FORMULARIO -->
				<div class="pd-20 card-box mb-30">
					<div class="clearfix">
						<div class="pull-left">
							<h4 class="text-blue h4">Nueva Solicitud</h4>
							<p class="mb-30">Rellene el formulario para contactar con Depto. Informática</p>
						</div>
					</div>

					
					<!-- FORMULARIO DE ALTA SOLICITUDES -->
					<form action="#" method="post">
					
						<!-- comboBox name = "cbx_Equipo" -->
							<div class="form-group row">
								<label class="col-sm-12 col-md-2 col-form-label">Tipo Equipo: </label>
								<div class="col-sm-12 col-md-10">
									<select class="custom-select col-12" name="cbx_Equipo">
										<?php 
											foreach($comboTipoEquipo as $datos) { ?>
												<option value="<?php echo $datos['ID']; ?>"><?php echo $datos['categoria']; ?></option>
										<?php } ?> 
									</select>
								</div>
							</div>
						
						<!-- cbx name = "fechaCambio"	 -->
							<div class="form-group row">
								<label class="col-sm-12 col-md-2 col-form-label">Fecha Hoy: </label>
								<div class="col-sm-12 col-md-10">
									<input class="form-control" placeholder="0000-00-00" type="text" id="fechaCambio" name="fechaCambio" >
								</div>
							</div>

						<!-- comboBox name = "cbx_Oficina" -->
							<div class="form-group row">
								<label class="col-sm-12 col-md-2 col-form-label">Oficina: </label>
								<div class="col-sm-12 col-md-10">
									<select class="custom-select col-12" name="cbx_Oficina">
										<?php 
											foreach($comboOficina as $datos) { ?>
												<option value="<?php echo $datos['ID_Oficina']; ?>"><?php echo $datos['denominacion']; ?></option>
										<?php } ?> 
									</select>
								</div>
							</div>

							<!-- ComboBox name ="motivo" -->
							<div class="form-group row">
							<label class="col-sm-12 col-md-2 col-form-label">Motivo: </label>
							<div class="col-sm-12 col-md-10">
								<select class="custom-select col-12" name ="motivo">
									<option selected="">Seleccione...</option>
									<option value="Reponer">Reponer</option>
									<option value="Reparar">Reparar</option>
									<option value="Equipo Nuevo">Equipo Nuevo</option>
									<option value="Otro...">Otro...</option>
								</select>
							</div>
						</div>

							<!-- text field name = "detalle" -->
							<div class="form-group row">
								<label class="col-sm-12 col-md-2 col-form-label">Detalle: </label>
								<div class="col-sm-12 col-md-10">
									<input class="form-control" type="text" placeholder="Describa la razón de la solicitud. *PUEDE ESTAR EN BLANCO*" name="detalle">
								</div>
							</div>

							<!-- textField name = "cantidad' -->
							<div class="form-group row">
							<label class="col-sm-12 col-md-2 col-form-label">Cantidad Equipos</label>
							<div class="col-sm-12 col-md-10">
								<input class="form-control" value="1" type="text" name="cantidad" maxlength="1"/>
							</div>
						</div>
							<div class="btn list">
								<input type="submit" name="btn_enviar" value="Enviar" class="btn btn-outline-success">
							</div>
					</form>
					
					<!-- Comienzo de Tabla SOLICITUDES -->
	<div class="pd-20 card-box mb-30">
		<div class="clearfix mb-20">
			<div class="pull-left">
				<h4 class="text-blue h4">Listado de Solicitudes</h4>
			</div>
		</div>
		<table class="table table-bordered">
			<thead>
				<tr>
					<th>Fecha</th>
					<th>N°</th>
					<th>Cat. Equipo</th>
					<th>Oficina</th>
					<th>Estado</th>
					<th>Motivo</th>
					<th>Detalle</th>
					<th>Cant Equipos</th>
				</tr>
			</thead>
			<tbody>
			<?php
			// Tabla manipulada desde 'controller_soli'
                  foreach ($datosSoli as $dato){

                      echo "<tr> <td>".$dato['fecha']."</td>
					  <td>".$dato['N°Solicitud']."</td>
                      <td>".$dato['Categoria']."</td>
                      <td>".$dato['Denominacion']."</td>
                      <td>".$dato['Estado_Solicitud']."</td>
                      <td>".$dato['motivo']."</td>
                      <td>".$dato['detalle']."</td>
                      <td>".$dato['Cantidad_Equipos']."</td>
                      </tr>";
                  }
         	 ?> 
			</tbody>
		</table>
		
		</div>
		
	</div>
	<!-- Fin de Tabla EQUIPAMIENTO -->
				</div>


	<!-- <div class="register-page-wrap d-flex align-items-center flex-wrap justify-content-center">
		<div class="container">
			<div class="row align-items-center">
				<div class="col-md-6 col-lg-7">
					<img src="vendors/images/register-page-img.png" alt="">
				</div>
				<div class="col-md-6 col-lg-5">
					<div class="register-box bg-white box-shadow border-radius-10">
						<div class="wizard-content">
							<form class="tab-wizard2 wizard-circle wizard">
								<h5>Datos del Usuario</h5>
								<section>
									<div class="form-wrap max-width-600 mx-auto">
										<div class="form-group row">
											<label class="col-sm-4 col-form-label">Usuario *</label>
											<div class="col-sm-8">
												<input type="text" class="form-control" name = "user">
											</div>
										</div>
										<div class="form-group row">
											<label class="col-sm-4 col-form-label">Contraseña *</label>
											<div class="col-sm-8">
												<input type="password" class="form-control" name = "pass">
											</div>
										</div>
										<div class="form-group row">
											<label class="col-sm-4 col-form-label">Confirma contraseña*</label>
											<div class="col-sm-8">
												<input type="password" class="form-control">
											</div>
										</div>
									</div>
								</section>
								<!-- Step 2 -->
								<!-- <h5>Personal Information</h5>
								<section>
									<div class="form-wrap max-width-600 mx-auto">
										<div class="form-group row">
											<label class="col-sm-4 col-form-label">Full Name*</label>
											<div class="col-sm-8">
												<input type="text" class="form-control">
											</div>
										</div>
										<div class="form-group row align-items-center">
											<label class="col-sm-4 col-form-label">Gender*</label>
											<div class="col-sm-8">
												<div class="custom-control custom-radio custom-control-inline pb-0">
													<input type="radio" id="male" name="gender" class="custom-control-input">
													<label class="custom-control-label" for="male">Male</label>
												</div>
												<div class="custom-control custom-radio custom-control-inline pb-0">
													<input type="radio" id="female" name="gender" class="custom-control-input">
													<label class="custom-control-label" for="female">Female</label>
												</div>
											</div>
										</div>
										<div class="form-group row">
											<label class="col-sm-4 col-form-label">City</label>
											<div class="col-sm-8">
												<input type="text" class="form-control">
											</div>
										</div>
										<div class="form-group row">
											<label class="col-sm-4 col-form-label">State</label>
											<div class="col-sm-8">
												<input type="text" class="form-control">
											</div>
										</div>
									</div>
								</section> -->
								
								<!-- Step 3 -->
								<!-- <h5>Visualiza la informacion</h5>
								<section>
									<div class="form-wrap max-width-600 mx-auto">
										<ul class="register-info">
											<li>
												<div class="row">
													<div class="col-sm-4 weight-600">Usuario</div>
													<div class="col-sm-8">Example</div>
												</div>
											</li>
											<li>
												<div class="row">
													<div class="col-sm-4 weight-600">Contraseña</div>
													<div class="col-sm-8">.....</div>
												</div>
											</li>
										</ul>
									</div>
								</section>
								
								<input type="submit" class="btn btn-outline-success" value="Registrar" name = "registrar">
							</form>
						</div>
					</div>
				</div>
			</div>
		</div> -->
	<!-- </div> -->
	<!-- js -->
	<script type="text/javascript">
function googleTranslateElementInit() {
	new google.translate.TranslateElement({pageLanguage: 'es', includedLanguages: 'en, es', layout: google.translate.TranslateElement.InlineLayout.SIMPLE, gaTrack: true}, 'google_translate_element');
        }
</script>

<script type="text/javascript" src="https://translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
 

	<script src="vendors/scripts/scriptFecha.js"></script>
	<script src="vendors/scripts/core.js"></script>
	<script src="vendors/scripts/script.min.js"></script>
	<script src="vendors/scripts/process.js"></script>
	<script src="vendors/scripts/layout-settings.js"></script>
	<script src="src/plugins/jquery-steps/jquery.steps.js"></script>
	<script src="vendors/scripts/steps-setting.js"></script>
</body>

</html>


