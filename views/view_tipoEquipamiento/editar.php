<?php
	require_once('../../controllers/controller_tipoEquipamiento.php');
	$datos=$tipoEquipamiento->getDatosId($_GET["id"]);
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>..:: Listado de Categoria ::..</title>
	<link rel="stylesheet" type="text/css" href="../estilosProfe/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="../estilosProfe/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../estilosProfe/css/bootstrap-theme.css">
    <link rel="stylesheet" type="text/css" href="../estilosProfe/css/bootstrap-theme.min.css">
</head>
<body>
	<div class="container">
		<ol class="breadcrumb">
		  <li><a href="../view_index_informatica.php">Inicio</a></li>
		  <li><a href="view_ABM_tipoEquipamiento.php">Listado de Categorías</a></li>
		  <li class="active">Actualizar Categoria</li>
		</ol>
		<div class="panel panel-primary">
			<div class="panel-heading">
				<h3 class="panel-title">Actualizar Categoria</h3>
			</div>
			<div class="panel-body">
				<form name="form" action="" method="post">
					<p>
					<label for="categoria">Categoria:</label>
                        <input type="text" name="categoria" placeholder="Ej: Disco Duro HDD" class="form-control" required="true" value="<?php echo $datos[0]->categoria;?>"/>
                    </p>
                    <p>
					<label for="preStock">PreStock:</label>
                        <input type="text" name="preStock" placeholder="Ej: 20" class="form-control" required="true" value="<?php echo $datos[0]->PreStock;?>" />
                    </p>
                    <p>
                    <label for="cantidadMinima">Cantidad Minima:</label>
                        <input type="text" name="cantidadMinima" placeholder="Ej: 5" class="form-control" required="true" value="<?php echo $datos[0]->CantidadMinima;?>" />
                    </p>
                    <hr />
                    <input type="hidden" name="id" value="<?php echo $datos[0]->ID;?>" />
                    <input type="submit" value="Actualizar" class="btn btn-primary" name = "actualizar"/> 
				</form>
			</div>
		</div>
	</div>
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