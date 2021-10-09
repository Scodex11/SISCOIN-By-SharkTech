//Fecha 

var hoy; 
		
hoy = new Date(); // Accedo a la fecha del sistema
		
		function obtenerFecha(){
		
			// Declaro las variables del bloque
			let dayhoy, monthhoy, yearhoy, fecha;
					
			dayhoy = hoy.getDate(); // Obtengo solo el día
			monthhoy = hoy.getMonth() + 1; // Los meses comienzan en 0 por eso le sumo 1
			yearhoy = hoy.getFullYear(); // Obtengo el año en 4 cifras
			
			// Para meses menores a 10 le agrego el cero a la izquierda
			if(monthhoy<10){ 
				monthhoy = "0" + monthhoy; 
			}
			
			// Armo la fecha en formato DATE para MySQL
			fecha = (yearhoy + "-" + monthhoy + "-" + dayhoy);
			
			return fecha;
		
		}
		
		
		document.getElementById('fechaHoy').value = obtenerFecha(); 
		



