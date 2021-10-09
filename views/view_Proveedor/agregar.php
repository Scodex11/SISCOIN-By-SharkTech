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
</head>
<body>
	<div class="container">
		<ol class="breadcrumb">
		  <li><a href="view_ABM_tipoEquipamiento.php">Inicio</a></li>
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