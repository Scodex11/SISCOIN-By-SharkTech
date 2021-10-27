<?php
	require_once('../../controllers/controller_proveeEquipamiento.php');
		


 ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>..:: GENERAR Orden de Compra ::..</title>
	<link rel="stylesheet" type="text/css" href="../estilosProfe/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="../estilosProfe/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../estilosProfe/css/bootstrap-theme.css">
    <link rel="stylesheet" type="text/css" href="../estilosProfe/css/bootstrap-theme.min.css">
</head>
<body>
	<div class="container">
		<ol class="breadcrumb">
		  <li><a href="view_ABM_ProveeEquipamiento.php">Ordenes de Compra</a></li>
		  <li class="active">Generar Orden de Compra</li>
		</ol>
		<div class="panel panel-primary">
			<div class="panel-heading">
				<h3 class="panel-title">Agregar Orden de Compra</h3>
			</div>
			<div class="panel-body">
				<form name="form" action="" method="post">
					<p>
					<label for="fechaHoy">Fecha:</label>
						<input class="form-control" placeholder="0000-00-00" type="text" id="fechaHoy" name="fechaHoy" >
                    </p>
<!-- CBX Categoria -->
					<p>
					<label for="cbx_categoria">Categoria:</label>
						<p>
						<select class="form-control" name="cbx_categoria">
										<?php 
											foreach($cat as $datos) { ?>
												<option value="<?php echo $datos['ID']; ?>"><?php echo $datos['categoria']; ?></option>
										<?php } ?> 
									</select>
						</p>		
					</p>

					<label for="cbx_RUT">Proveedor:</label>
						<p>
						<select class="form-control"  name="cbx_RUT">
										<?php 
											foreach($prov as $datos) { ?>
												<option value="<?php echo $datos['RUT']; ?>"><?php echo $datos['razon_social']; ?></option>
										<?php } ?> 
									</select>
						</p>
                    </p>

					<p>
					<label for="precio">Precio:</label>
	                    <p>
							<input type="text" name="precio" placeholder="Ej: 10000" class="form-control" required="true" maxlength="6"/>
						</p>    
					</p>
				
					<p>
					<label for="metodoCompra">Método de Compra:</label>		
						<p>
					<select class="form-control" name ="metodoCompra">
									<option selected="">Seleccione...</option>
									<option value="Compra Directa">Compra Directa</option>
									<option value="Licitacion">Licitacion</option>
							</select>
						</p>
                    </p>
                    
					<p>
					<label for="cantidad">Cantidad:</label>
	                    <p>
							<input type="text" name="cantidad" placeholder="Ej: 20" class="form-control" required="true" maxlength="3"/>
						</p>    
					</p>
					
					
					<hr />
                    <input type="submit" value="Guardar" class="btn btn-primary"/>
				</form>
			</div>
		</div>
	</div>

	<script src="../estilosProfe/js/scriptFecha.js"></script>
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