<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Santiago Spinetto Jung</title>
    <script src="jquery-1.9.1.js"></script>
    <script src="jquery-ui-1.10.3.custom.js"></script>
    <script type="text/javascript">
      $(document).ready(function(){

      var carreras;
      var materias;

//funcion generica para buscar dentro del json

       var searchIntoJson = function (obj, column, value) {
       var results = [];
       var valueField;
       var searchField = column;
       for (var i = 0 ; i < obj.length ; i++) {
       valueField = obj[i][searchField].toString();
       if (valueField === value) {
       results.push(obj[i]);
       }
       }
       return results;
     };

      $.getJSON('cargarCarreras.php', function(data){
          carreras = data;
      });

      $.getJSON('cargarMaterias.php', function(data){
        materias = data;
        setTimeout(function(){
          if (materias !== undefined) {
            loadCarreras();
          }
        },1000);
      });

    $('#carreras').change(function(){
      var id_carrera = $('#carreras').val();
      loadMaterias(id_carrera)
    })

      var loadCarreras = function () {
          $("#carreras").empty();
          $("#carreras").append('<option value="" selected="selected"></option>');
          $.each(carreras, function (i, valor) {
          $("#carreras").append("<option value='" + valor.id_carrera + "'>" + valor.nombre_carrera + "</option>");
      });
     };

    var loadMaterias = function (id_carrera) {
    var materia = searchIntoJson(materias, "id_carrera", id_carrera);
        $("#materias").empty();
        $("#materias").append('<option value="" selected="selected"></option>');
        $.each(materia, function (i, valor) {
        $("#materias").append('<option value="' + valor.id_materia + '">' + valor.nombre_materia + '</option>');
     });
   };

      });
    </script>
  </head>
  <body>
    <h2>Seleccione una Carrera</h2>
<select id="carreras" class="" name="" onchange="function(materia)">

</select>
<br><br>
<h2>Materias</h2>
<select id="materias" class="" name="">

</select>

  </body>
</html>
