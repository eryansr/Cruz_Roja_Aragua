$(document).ready(function() {
	//obtenemos el valor de los input

	$('#adicionar').click(function() {
		var cedulaf = document.getElementById("cedulaf").value;
		var nombref = document.getElementById("nombref").value;
		var apellidof = document.getElementById("apellidof").value;
		var edadf = document.getElementById("edadf").value;
        var sexof = document.getElementById("sexof").value;
        var civilf = document.getElementById("civilf").value;
        var filiacion = document.getElementById("filiacion").value;
        var instruccionf = document.getElementById("instruccionf").value;
        var ocupacionf = document.getElementById("ocupacionf").value;
        var enfermedad = document.getElementById("enfermedad").value;
		var i = 1; //contador para asignar id al boton que borrara la fila

		var fila = '<tr id="row' + i + '"><td><input class="form-control bg-light shadow-sm" type="text" name="cedulaf[]" value="'+ cedulaf +'">' + '</td><td><input class="form-control bg-light shadow-sm" type="text" name="nombref[]" value="'+ nombref +'">' + '</td><td><input class="form-control bg-light shadow-sm" type="text" name="apellidof[]" value="'+ apellidof +'">' + '</td><td><input class="form-control bg-light shadow-sm" type="text" name="edadf[]" value="'+ edadf +'">' + '</td><td><input class="form-control bg-light shadow-sm" type="text" name="sexof[]" value="'+ sexof +'" >' + '</td><td><input class="form-control bg-light shadow-sm" type="text" name="civilf[]" value="'+ civilf +'">' + '</td><td><input class="form-control bg-light shadow-sm" type="text" name="filiacion[]" value="'+ filiacion +'">' + '</td><td><input class="form-control bg-light shadow-sm" type="text" name="instruccionf[]" value="'+ instruccionf +'">' + '</td><td><input class="form-control bg-light shadow-sm" type="text" name="ocupacionf[]" value="'+ ocupacionf +'">' + '</td><td><input class="form-control bg-light shadow-sm" type="text" name="enfermedad[]" value="'+ enfermedad +'">' + '</td><td><button type="button" name="remove" id="' + i + '" class="btn btn-danger btn_remove">Quitar</button></td></tr>';

	//esto seria lo que contendria la fila
	i++;

	$('#mytable tr:last').after(fila);
		$("#adicionados").text(""); //esta instruccion limpia el div adicioandos para que no se vayan acumulando
		var nFilas = $("#mytable tr").length;
		$("#adicionados").append(nFilas - 1);
		//le resto 1 para no contar la fila del header
		  document.getElementById("cedulaf").value ="";
		  document.getElementById("nombref").value ="";
		  document.getElementById("apellidof").value ="";
		  document.getElementById("edadf").value ="";
          document.getElementById("sexof").value ="";
          document.getElementById("civilf").value ="";
          document.getElementById("filiacion").value ="";
          document.getElementById("instruccionf").value ="";
          document.getElementById("ocupacionfcu").value ="";
          document.getElementById("enfermedad").value ="";
		  document.getElementById("cedulaf").focus();
	});

	$(document).on('click', '.btn_remove', function() {
		var button_id = $(this).attr("id");
		  //cuando da click obtenemos el id del boton
		  $('#row' + button_id + '').remove(); //borra la fila
		  //limpia el para que vuelva a contar las filas de la tabla
		  $("#adicionados").text("");
		  var nFilas = $("#mytable tr").length;
		  $("#adicionados").append(nFilas - 1);
		});
	});
	//------------------------ fin de los scripts de la carga familiar --------------------------------//