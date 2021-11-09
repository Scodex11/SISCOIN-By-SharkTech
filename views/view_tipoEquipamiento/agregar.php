<?php
	require_once('../../controllers/controller_tipoEquipamiento.php');
		


 ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>..:: ABM TipoEquipamiento ::..</title>
	<link rel="stylesheet" type="text/css" href="../estilosProfe/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="../estilosProfe/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../estilosProfe/css/bootstrap-theme.css">
    <link rel="stylesheet" type="text/css" href="../estilosProfe/css/bootstrap-theme.min.css">

	<!-- Google Font -->
	<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
	<!-- CSS -->
	<link rel="stylesheet" type="text/css" href="../vendors/styles/core.css">
	<link rel="stylesheet" type="text/css" href="../vendors/styles/icon-font.min.css">
	<link rel="stylesheet" type="text/css" href="../src/plugins/datatables/css/dataTables.bootstrap4.min.css">
	<link rel="stylesheet" type="text/css" href="../src/plugins/datatables/css/responsive.bootstrap4.min.css">
	<link rel="stylesheet" type="text/css" href="../vendors/styles/style.css">
</head>
<body>
	
	
	<div class="container">
		
		<ol class="breadcrumb">
			
		  <li><a href="../view_index_informatica.php">Inicio</a></li>
		  <li><a href="view_ABM_tipoEquipamiento.php">Listado de Categorías</a></li>
		  <li class="active">Agregar TipoEquipamiento</li>
		</ol>
		<div class="panel panel-primary">
			<div class="panel-heading">
				<h3 class="panel-title">Agregar TipoEquipamiento</h3>
			</div>
			<div class="panel-body">
				<form name="form" action="" method="post">
					<p>
                        <label for="id">ID:</label>
                        <input type="text" name="id" placeholder="Ej: 12" autofocus="true" class="form-control" required="true" />
                    </p>
                    <p>
                        <label for="categoria">Categoria:</label>
                        <input type="text" name="categoria" placeholder="Ej: Disco Duro HDD" class="form-control" required="true" />
                    </p>
                    <p>
                    <label for="preStock">PreStock:</label>
                        <input type="text" name="preStock" placeholder="Ej: 20" class="form-control" required="true" />
                    </p>
					<p>
                    <label for="cantidadMinima">Cantidad Minima:</label>
                        <input type="text" name="cantidadMinima" placeholder="Ej: 5" class="form-control" required="true" />
                    </p>
                    <hr />
                    <input type="submit" value="Guardar" class="btn btn-primary"/>
				</form>
			</div>
		</div>
	</div>

	<script type="text/javascript" src="https://translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
 
	<script src="../vendors/scripts/core.js"></script>
	<script src="../vendors/scripts/script.min.js"></script>
	<script src="../vendors/scripts/process.js"></script>
	<script src="../vendors/scripts/layout-settings.js"></script>
	<script src="../src/plugins/apexcharts/apexcharts.min.js"></script>
	<script src="../src/plugins/datatables/js/jquery.dataTables.min.js"></script>
	<script src="../src/plugins/datatables/js/dataTables.bootstrap4.min.js"></script>
	<script src="../src/plugins/datatables/js/dataTables.responsive.min.js"></script>
	<script src="../src/plugins/datatables/js/responsive.bootstrap4.min.js"></script>
	<script src="../vendors/scripts/dashboard.js"></script>
	<script src="../estilosProfe/js/jquery-1.10.2.js"></script>
	<script src="../estilosProfe/js/bootstrap.min.js"></script>
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