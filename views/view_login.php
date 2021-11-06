<!DOCTYPE html>
<html>
<head>
	<!-- Basic Page Info -->
	<meta charset="utf-8">
	<title>Login SISCOIN</title>
	<?php require_once('partials/head.php'); ?>
</head>


<body class="login-page">
	<div class="login-header box-shadow">
		<div class="container-fluid d-flex justify-content-between align-items-center">
			<div class="brand-logo">
				<a href="./index.php">
					<img src="views/vendors/images/siscoin-logo.svg" alt="">
				</a>
			</div>
			<div class="dashboard-setting">
			<div class ="dropdown">
				<div id="google_translate_element" class="google"></div>
			</div>	
		</div>
		</div>
	</div>

	<div class="login-wrap d-flex align-items-center flex-wrap justify-content-center">
		<div class="container">
			<div class="row align-items-center">
				<!-- Contenedor de imagen inicio sesión -->
				<div class="col-md-6 col-lg-7">
					<img src="views/vendors/images/login-page-img.png" alt="">
				</div>

				<!-- Contenedor para el formulario -->
				<div class="col-md-6 col-lg-5">
					<div class="login-box bg-white box-shadow border-radius-10">
						<div class="login-title">
							<h2 class="text-center text-primary">Iniciar Sesión</h2>
						</div>

<!-- Comienzo de formulario para iniciar sesión  -->
						<form action="index.php" method="post">
							<!-- <div class="select-role">
								<div class="btn-group btn-group-toggle" data-toggle="buttons">
									<label class="btn active">
										<input type="radio" name="options" id="admin">
										<div class="icon"><img src="vendors/images/briefcase.svg" class="svg" alt=""></div>
										<span>I'm</span>
										Manager
									</label>
									<label class="btn">
										<input type="radio" name="options" id="user">
										<div class="icon"><img src="vendors/images/person.svg" class="svg" alt=""></div>
										<span>Soy</span>
										Empleado
									</label>
								</div>
							</div> -->


							<!-- TextField USUARIO -->
							<div class="input-group custom">
								<input type="text" class="form-control form-control-lg" name="user" placeholder="Usuario">
								<div class="input-group-append custom">
									<span class="input-group-text"><i class="icon-copy dw dw-user1"></i></span>
								</div>
							</div>

							<!-- TextField para contraseña -->
							<div class="input-group custom">
								<input type="password" class="form-control form-control-lg" name="pass" placeholder="**********">
								<div class="input-group-append custom">
									<span class="input-group-text"><i class="dw dw-padlock1"></i></span>
								</div>
							</div>

							
							<div class="row pb-30">
								<!-- CheckBox para recordar credenciales
										SIN FUNCIONAMIENTO
																	-->						
								<div class="col-6">
									<div class="custom-control custom-checkbox">
										<input type="checkbox" class="custom-control-input" name="recordarme" id="recordarme">
										<label class="custom-control-label" for="recordarme">Recordarme</label>
									</div>
								</div>
								<!-- Botón para RECUPERAR CONTRASEÑA
										SIN FUNCIONAMIENTO
																	-->

								<div class="col-6">
									<div class="forgot-password"><a href="#">He olvidado mi contraseña</a></div>
								</div>
							</div>

							<!-- BOTÓN INICIAR -->
							<div class="row">
								<div class="col-sm-12">
									<div class="input-group mb-0">
										<input class="btn btn-outline-primary btn-lg btn-block" type="submit" name="ingresar" value="Ingresar">
									</div>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- js -->
	<script type="text/javascript">
function googleTranslateElementInit() {
	new google.translate.TranslateElement({pageLanguage: 'es', includedLanguages: 'en, es', layout: google.translate.TranslateElement.InlineLayout.SIMPLE, gaTrack: true}, 'google_translate_element');
        }
</script>

<script type="text/javascript" src="https://translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>

	<?php require_once('partials/scriptJS.php'); ?>
</body>
</html>