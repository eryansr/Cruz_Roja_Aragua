$('#estados').on('change', function(){
        var estado_id = $(this).val();
        $.ajax({
              type: "get",
              url: "json-ciudads",
              data:{
                estado_id: estado_id
              },
              dataType: "json",
              success: function(data){
                $('#ciudads').empty();
                $('#ciudads').append('<option value="0" disable="true" selected="true"> Seleccionar Ciudad </option>');

                if(!$.isEmptyObject(data)){
                  for(var i = 0; i < data.length; i++){
                    $("#ciudads").append("<option value='"+data[i].id+"'>"+data[i].ciudad+"</option>");
                  }
                }else{
                  $("#ciudads").append("<option value='' disabled>No se encontraron ciudades</option>");
                }
              }
            });
      });

      $('#estados').on('change', function(){
        var estado_id = $(this).val();
        $.ajax({
              type: "get",
              url: "json-municipios",
              data:{
                estado_id: estado_id
              },
              dataType: "json",
              success: function(data){
                $('#municipios').empty();
                $('#municipios').append('<option value="0" disable="true" selected="true"> Seleccionar Municipio </option>');

                if(!$.isEmptyObject(data)){
                  for(var i = 0; i < data.length; i++){
                    $("#municipios").append("<option value='"+data[i].id+"'>"+data[i].municipio+"</option>");
                  }
                }else{
                  $("#municipios").append("<option value='' disabled>No se encontraron municipios</option>");
                }
              }
            });

      });

      $('#municipios').on('change', function(){
        var municipio_id = $(this).val();
        $.ajax({
              type: "get",
              url: "json-parroquias",
              data:{
                municipio_id: municipio_id
              },
              dataType: "json",
              success: function(data){
                $('#parroquias').empty();
                $('#parroquias').append('<option value="0" disable="true" selected="true"> Seleccionar Parroquia </option>');

                if(!$.isEmptyObject(data)){
                  for(var i = 0; i < data.length; i++){
                    $("#parroquias").append("<option value='"+data[i].id+"'>"+data[i].parroquia+"</option>");
                  }
                }else{
                  $("#parroquias").append("<option value='' disabled>No se encontraron parroquias</option>");
                }
              }
            });
      });