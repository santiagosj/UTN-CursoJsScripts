<!DOCTYPE html>
<html>
<head>
<meta charset=utf-8 />


<title>Admin Propiedades</title>

<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,600' rel='stylesheet' type='text/css'>
<link href="styles/general.css" rel="stylesheet" type="text/css" />
<link href="styles/fonts.css" rel="stylesheet" type="text/css" />

<script type="text/javascript" src="scripts/jquery-1.10.1.min.js"></script>
<script type="text/javascript" src="scripts/jquery-ui-1.9.2.custom.js"></script>
<style media="screen">
  img{
    max-width: 210px;
    max-height: 157px;
    float:left;	  
  }
  img:hover{
    cursor: pointer;
  }
</style>

<script>
     $(document).ready(function(){

		 $(".delete").on("click", function (e) {
		   $(this).parent("li").remove();
		 });

     $("#formulario").submit(function(e) {

   		var formObj = $(this);
   		var formURL = formObj.attr("action");
   		var formData = new FormData(this);
   		$.ajax({
   			url: formURL,
   			type: 'POST',
   			data:  formData,
   			mimeType:"multipart/form-data",
   			contentType: false,
   			cache: false,
   			processData:false,
   			success: function(data)
   			{
          $('#photoList #ulDinamica').append(data);
          $(function(){
            var ordenar = $('<a href ="#" class="sort">Ordenar</a>');
	    var eliminar = $('<a href ="#" class="delete">Eliminar</a>')	  
            $('#ulDinamica li').each(function(){
		    $(this).addClass("clearAfter");
                    $(this).append(ordenar, eliminar);
		    $(".delete").on("click", function (e) {
               		  $(this).parent("li").remove();
               		 });
            });
          });
   			}

   		});
   		e.preventDefault();
   	});



	$(function() {
		$( "#photoList #ulDOM" ).sortable({
			placeholder: "space",
			handle: "a.sort",
			axis: "y"
		});
  });

  $(function() {
		$( "#photoList #ulDinamica" ).sortable({
			placeholder: "space",
			handle: "a.sort",
			axis: "y"
		});
  });

});

</script>

</head>
<body id="propiedad">
	<?php
		session_start();
		$_SESSION['seccion']= "propiedades";
	?>

	 <!--Encabezado-->
	<?php
	  include ('includes/admin_header.php');
	?>

  <!------------------------------------------------------------------------>
	<div id="page" class="admin">
		<div class="pageWidth clearAfter">

			<ul id="subNav" class="clearAfter">
				<li class="active"><a href="#">Alquiler</a></li>
				<li><a href="#">Venta</a></li>
			</ul>

<!------------------------------------------------------------------------>
			<div id="ubicacion" class="clearAfter">
				<div class="titulo">
					<input type="text" class="title" placeholder="Calle y altura"/>
					<input type="text" class="entreCalles" placeholder="Entre calle y calle"/>
				</div>
				<input type="text" class="localidad" placeholder="Barrio - Localidad"/>
			</div>
      <br><br>
<!------------------------------------------------------------------------>
			<div id="primaryContent">

				<div id="photoList">
					<ul id="ulDOM">
						<li class="clearAfter">
							<span class="photo" style="background: url(photos/thumb_01.jpg)"></span>
							<a href="#" class="delete">Eliminar</a>
							<a href="#" class="sort">Ordenar</a>
						</li>
						<li class="clearAfter">
							<span class="photo" style="background: url(photos/thumb_02.jpg)"></span>
							<a href="#" class="delete">Eliminar</a>
							<a href="#" class="sort">Ordenar</a>
						</li>
						<li class="clearAfter">
							<span class="photo" style="background: url(photos/thumb_03.jpg)"></span>
							<a href="#" class="delete">Eliminar</a>
							<a href="#" class="sort">Ordenar</a>
						</li>
					</ul>
          <br>
          <hr>
          <h2>Sus imagenes elegidas</h2>
          <br>
          <ul id="ulDinamica">

          </ul>
           <form id="formulario" action="upload.php" method="post" enctype="multipart/form-data">
             <h2>Agregar imagen</h2>
   					<input type="file" name="userfile">

   					<input type="submit" id="addImage" value="Cargar"/>
           </form>

				</div>
<!------------------------------------------------------------------------>
				<input type="submit" id="mainAction" value="Guardar"/>

			</div>

			<div id="secondaryContent" >
        <!--Ficha técnica-->

      </div>


		</div>
	</div>
	<!--Pie-->
	<?php
    	include ('includes/footer.php');
	?>


</body>
</html>
