<?php
	require_once('../../controllers/controller_proveedores.php');
	$datos=$proveedores->getDatosId($_GET["id"]);
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>..:: ABM Proveedor::..</title>
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
		  <li class="active">Actualizar PROVEEDOR</li>
		</ol>
		<div class="panel panel-primary">
			<div class="panel-heading">
				<h3 class="panel-title">Actualizar PROVEEDOR</h3>
			</div>
			<div class="panel-body">
				<form name="form" action="" method="post">
					<p>
					<label for="razon_social">Razon Social:</label>
                        <input type="text" name="razon_social" placeholder="Ej: Office 2000" class="form-control" required="true" value="<?php echo $datos[0]->razon_social;?>"/>
                    </p>
                    <hr />
                    <input type="hidden" name="RUT" value="<?php echo $datos[0]->RUT;?>" />
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