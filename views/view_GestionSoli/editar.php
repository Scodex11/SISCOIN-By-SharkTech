<?php
	require_once('../../controllers/controller_GestionSoli.php');
	$gs = $soliEquip->getDatosId($_GET['id']);
	
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>..:: Gestion de Solicitud ::..</title>
	<link rel="stylesheet" type="text/css" href="../estilosProfe/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="../estilosProfe/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../estilosProfe/css/bootstrap-theme.css">
    <link rel="stylesheet" type="text/css" href="../estilosProfe/css/bootstrap-theme.min.css">
</head>
<body>
	<div class="container">
	<div class="menu-icon"></div>
		<div class="dashboard-setting user-notification">
			<div class ="dropdown">
				<div id="google_translate_element" class="google"></div>
			</div>	
		</div>
		<ol class="breadcrumb">
		  <li><a href="view_ABM_tipoEquipamiento.php">Inicio</a></li>
		  <li class="active">Gestion de Solicitud</li>
		</ol>
		<div class="panel panel-primary">
			<div class="panel-heading">
				<h3 class="panel-title">Gestion de Solicitud</h3>
			</div>
			<div class="panel-body">
				<form name="form" action="" method="post">
					<p>
					<label for="estadoSolicitud">Estado:</label>
						<select class="custom-select col-12" name ="estadoSolicitud">
										<option selected=""><?php echo $gs[0]->Estado_Solicitud;?></option>
										<option value="ACEPTAR">ACEPTAR</option>
										<option value="DENEGAR">DENEGAR</option>
						</select>
					</p>
					<!-- <p>
					<label for="estadoSolicitud">Estado:</label>
                        <input type="text" name="estadoSolicitud" placeholder="Ej: Disco Duro HDD" class="form-control" required="true" value="<?php //echo $gs[0]->Estado_Solicitud;?>"/>
                    </p> -->
                    <hr />
                    <input type="hidden" name="id" value="<?php echo $gs[0]->N°Solicitud;?>" />
                    <input type="hidden" name="idequip" value="<?php echo $gs[0]->ID_Equipamiento;?>" />
                    <input type="hidden" name="fechaSoli" value="<?php echo $gs[0]->fecha;?>" />
                    <input type="hidden" name="oficina" value="<?php echo $gs[0]->ID_Oficina;?>" />
                    <input type="hidden" name="motivo" value="<?php echo $gs[0]->motivo;?>" />
                    <input type="hidden" name="detalle" value="<?php echo $gs[0]->detalle;?>" />
                    <input type="hidden" name="cantEquip" value="<?php echo $gs[0]->Cantidad_Equipos;?>" />
                    <input type="hidden" name="estado" value="<?php echo $gs[0]->Estado_Solicitud;?>" />
                    <input type="submit" value="Actualizar" class="btn btn-primary" name = "actualizar"/> 
				</form>
			</div>
		</div>
	</div>

	<script type="text/javascript">
function googleTranslateElementInit() {
	new google.translate.TranslateElement({pageLanguage: 'es', includedLanguages: 'en, es', layout: google.translate.TranslateElement.InlineLayout.SIMPLE, gaTrack: true}, 'google_translate_element');
        }
</script>

<script type="text/javascript" src="https://translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
 

	<script src="../estilosProfe/js/jquery-1.10.2.js"></script>
	<script src="../estilosProfe/js/funciones.js"></script>
	<script src="../estilosProfe/js/modernizr-custom.js"></script>
        <!-- polyfiller file to detect and load polyfills -->
    <script src="../estilosProfe/js/polyfiller.js"></script>
	<script>
          webshims.setOptions('waitReady', false);
          webshims.setOptions('forms-ext', {types: 'date'});
          webshims.polyfill('forms forms-ext');
     </script>
</body>
</html>