<?php 
	require_once("../../controllers/controller_proveeEquipamiento.php");

	
 ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	
	<title>..:: Ordenes de Compra::..</title>
	<!-- Estilos profe -->
	<link rel="stylesheet" type="text/css" href="../estilosProfe/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="../estilosProfe/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../estilosProfe/css/bootstrap-theme.css">
    <link rel="stylesheet" type="text/css" href="../estilosProfe/css/bootstrap-theme.min.css">

	<!-- Estilos plantilla DeskApp -->
	<!-- Google Font -->
	<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
		<!-- CSS -->
		<link rel="stylesheet" type="text/css" href="../vendors/styles/core.css">
		<link rel="stylesheet" type="text/css" href="../vendors/styles/icon-font.min.css">
		<link rel="stylesheet" type="text/css" href="../vendors/styles/style.css">
	<!-- Site favicon -->
		<link rel="apple-touch-icon" sizes="180x180" href="../vendors/images/apple-touch-icon.png">
		<link rel="icon" type="image/png" sizes="32x32" href="../vendors/images/favicon-32x32.png">
		<link rel="icon" type="image/png" sizes="16x16" href="../vendors/images/favicon-16x16.png">

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
	<!-- Menú IZQUIERDA -->
	<?php //require_once('../partials/menu_informatica.php') ?>
	<div class="container">
		<ol class="breadcrumb">
		  	<li><a href="../../views/view_index_informatica.php">Inicio</a></li>
		  	<li class="active">Generar Orden de Compra</li>
		</ol>
		<div class="panel panel-primary">
			<div class="panel-heading">
				<?php
                if(isset($_GET["m"])){
                    switch($_GET["m"])
                    {
                        case '1':
                            ?>
                            <div class="alert alert-success">
                            <button type="button" class="close" data-dismiss="alert">x</button>
                                El registro se ha ingresado exitosamente
                            </div>
                    <?php
                    	break;
                    	case '2':
                     ?>
                     	<div class="alert alert-success">
                            <button type="button" class="close" data-dismiss="alert">x</button>
                                El registro se ha actualizado exitosamente
                            </div>
                    <?php
                        break;
                        case '3':
                    ?>
                    	<div class="alert alert-success">
                            <button type="button" class="close" data-dismiss="alert">x</button>
                                El registro ha sido eliminado exitosamente
                            </div>
                    <?php
                      }
                	}
                    ?>
				<h3>Ordenes de Compra</h3>
			</div>
			<div class="panel-body">
				<p>
					<a href="agregar.php" class="btn btn-primary"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Agregar</a>
				</p>
				<table class="table table-bordered">	
						<thead>	
							<tr class="info">
								<th>Fecha</th>
								<th>Categoria</th>
								<th>RUT</th>
								<th>Precio</th>
								<th>Método Compra</th>
								<th>Cantidad</th>
							</tr>
						</thead>
						<tbody>
							<?php 
								foreach($tablaProvee as $dato) {
							 ?>
							 <tr>
							 	<td><?php echo $dato->fecha ?></td>
							 	<td><?php echo $dato->categoria ?></td>
							 	<td><?php echo $dato->razon_social ?></td>
							 	<td><?php echo $dato->precio ?></td>
							 	<td><?php echo $dato->metodo_compra ?></td>
							 	<td><?php echo $dato->cantidad ?></td>
							 	
							 	
							 </tr>
							 <?php 
							 	} 
							 ?>
						</tbody>
				</table>
			</div>
		</div>
		
	</div>
	 	<script src="../estilosProfe/js/jquery-1.10.2.js"></script>
        <script src="../estilosProfe/js/bootstrap.min.js"></script>
        <script src="../estilosProfe/js/funciones.js"></script>

		<!-- Scripts DeskApp -->
		<script src="../vendors/scripts/core.js"></script>
		<script src="../vendors/scripts/script.min.js"></script>
		<script src="../vendors/scripts/process.js"></script>
		<script src="../vendors/scripts/layout-settings.js"></script>
</body>
</html>