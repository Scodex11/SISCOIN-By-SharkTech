<?php 

/*VALIDACIÓN DE TIPO DE CARGO*/
    session_start(); 
	// Si no existe usuario te redirige al 
	// para que te loguees
	if(empty($_SESSION['usuario'])){
		
		header('location: ../index.php');
		
	
	}else{
		// Validamos que sea de subdireccion A (ID_Cargo = 5)
        // Si es diferente, entra al SWITCH, sino, abre normalmente
		if ($_SESSION['ID_Cargo'] != 5) {
			// Redirige al ID que pertenezca
			switch ($_SESSION['ID_Cargo']) {
                
                case $_SESSION['ID_Cargo'] == 1:
					// No le indicamos nada dentro porque INFORMATICA tiene acceso A TODO
				break;

				case $_SESSION['ID_Cargo'] == 2:
					header('location: view_index_oficina.php');
				break;
				
				case $_SESSION['ID_Cargo'] == 3:
					header('location: view_index_compras.php');
				break;
				
				case $_SESSION['ID_Cargo'] == 4:
					header('location: view_index_auditoria.php');
				break;
				
				case $_SESSION['ID_Cargo'] == 6:
					header('location: view_index_subB.php');
				break;
				
				default:
					header('location: ../index.php');
					break;
			}
		}
		
	}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SUB A</title>
</head>
<body>
    <h1>SUB A</h1>
    <p><?php echo 'Eres: '.$_SESSION['usuario']; ?></p>

    <form action="../index.php" method="POST">
							<!-- <a class="dropdown-item" href="#"><i class="dw dw-user1"></i>Perfil</a>
							<a class="dropdown-item" href="#"><i class="dw dw-settings2"></i>Configuración</a>
							<a class="dropdown-item" href="#"><i class="dw dw-help"></i>Ayuda</a> -->
							<input type="submit" class="dropdown-item" name="cerrar_sesion" value="Cerrar Sesión">
	</form>
</body>
</html>