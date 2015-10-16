<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Conversor de Texto</title>
	<!-- Cascade Style Sheet, siempre se aplica la ultima hoja de estilo, o estilo definido, si existen 
			las mismas propiedades. -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.5/css/bootstrap.css">
	<link rel="stylesheet" href="css/style.css">
</head>
<body>
	<!-- Toda la web al utilizar Boostrap deben agruparse con la etiqueta <div class="container"> -->
	<div class="container">
		<h1>Introduzca su texto</h1>
		<br>
		<hr>
		<br>
		<form action="" method="">
			<div class="form-group">
    			<textarea name="text" id="text" class ="form-control" cols="30" rows="10">Introduzca su texto...</textarea>
    		</div>
    		<!-- Mismo name para agruparlos en un grupo
    			- Tarea: Botones de radio en la misma linea. -->
    		<div class="radio">
  				<label class="radio-inline">
   					<input type="radio" name="action" id="codeRadio" value="code" checked>
    				Codificar
  				</label>
 				<label class="radio-inline">
    				<input type="radio" name="action" id="decodeRadio" value="decode">
    				Descodificar
  				</label>
			</div>
    			<button type="submit" id="procesar" class="btn btn-primary">Procesar</button>
		</form>
	</div>
</body>
</html>