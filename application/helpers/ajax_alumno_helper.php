<script>
	$(document).ready(function(){
		mostrarAlumnos();
		function mostrarAlumnos(){

			$.ajax({
				type: 'ajax',
				url: '<?= base_url('alumnoC/get_alumno') ?>',
				dataType: 'json',

				success: function(datos){
					var tabla = '';
					var i;
					var n=1;

					for(i=0; i<datos.length; i++){
						tabla +=
						'<tr>'+
						'<td>'+n+'</td>'+
						'<td>'+datos[i].nombres+' '+datos[i].apellidos+'</td>'+
						'<td>'+datos[i].nombre_sexo+'</td>'+
						'<td>'+datos[i].nombre_curso+'</td>'+
						'</tr>';
						n++;
					}
					$('#tabla_alumnos').html(tabla);
				}
			});
		};


	});


</script>