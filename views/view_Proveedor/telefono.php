<?php
	require_once('../../controllers/controller_proveedores.php');
	$datos=$proveedores->getDatosId($_GET["id"]);
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>..:: Agregar Teléfono ::..</title>
	<link rel="stylesheet" type="text/css" href="../estilosProfe/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="../estilosProfe/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../estilosProfe/css/bootstrap-theme.css">
    <link rel="stylesheet" type="text/css" href="../estilosProfe/css/bootstrap-theme.min.css">
</head>
<body>
	<div class="container">
		<ol class="breadcrumb">
		  <li><a href="view_ABM_Proveedor.php">Inicio</a></li>
		  <li class="active">Agregar Teléfono</li>
		</ol>
		<div class="panel panel-primary">
			<div class="panel-heading">
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
						break;
						case '4':
							?>
								<div class="alert alert-success">
									<button type="button" class="close" data-dismiss="alert">x</button>
										El teléfono fue registrado con éxito!
									</div>
							<?php
								
                      }
                	}
                    ?>
				<h3>Listado de Proveedores</h3>
			</div>
				<h3 class="panel-title">Agregar Teléfono</h3>
			</div>
			<div class="panel-body">
				<form name="form" action="" method="post">
					<p>
					<label for="telefono">Teléfono:</label>
                        <input type="text" name="telefono" placeholder="Ej: 99096702" class="form-control" required="true"/>
                    </p>
                    <hr />
                    <input type="hidden" name="RUT" value="<?php echo $datos[0]->RUT;?>" />
                    <input type="submit" value="Agregar Teléfono" class="btn btn-primary" name = "agregarTel"/> 
				</form>
			</div>
			<div class="panel-body">
				<table class="table table-bordered">	
						<thead>	
							<tr class="info">
								<th>RUT</th>
								<th>Razon Social</th>
								<th>Telefono</th>
								<th>Acciones</th>
							</tr>
						</thead>
						<tbody>
							<?php 
								foreach($u as $dato) {
							 ?>
							 <tr>
							 	<td><?php echo $dato->RUT ?></td>
							 	<td><?php echo $dato->razon_social ?></td>
							 	<td><?php echo $dato->telefono ?></td>
							 	
							 	<!-- <td>echo Helpers:: //(fecha$dato->fecha) ?></td> -->
							 	<!-- <td>
							 		<a name = "editar" href="editar.php?id=<?php echo $dato->RUT ?>"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></a>

							 		<a name = "eliminar" href="javascript:void(0);"onclick="eliminar('eliminar.php?RUT=<?php echo $dato->RUT ?>');"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a>

									 <a name = "editar" href="telefono.php?id=<?php echo $dato->RUT ?>"><span class="glyphicon glyphicon-earphone" aria-hidden="true"></span></a>
							 	</td> -->
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