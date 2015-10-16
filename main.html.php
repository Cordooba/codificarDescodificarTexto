<?php
	
	if ( !$_POST ) {

		$action = "code";

	}

?>
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
		<form action="" method="POST">
			<div class="form-group">
    			<textarea name="text" id="text" class ="form-control" cols="30" rows="10"><?php echo ( isset($resultText) ) ? $resultText : "Introduzca el texto..."; ?></textarea>
    		</div>

    		<!--  Mismo name para agruparlos en un grupo
				<?php echo ( isset($action) && $action == "code" ) ? "checked" : ""; ?>
				Disable cache MampPHP en Bitnami -->

    		<div class="radio">
  				<label>
   					<input type="radio" name="action" id="codeRadio" value="code" <?php echo ( isset($resultText) && $action == "code" ) ? "checked" : ""; ?>>
    				Codificar
  				</label>
			</div>
			<div class="radio">
 				<label>
    				<input type="radio" name="action" id="decodeRadio" value="decode" <?php echo ( isset($action) && $action == "decode" ) ? "checked" : ""; ?>>
    				Descodificar
  				</label>
			</div>
				<br>
				<hr>
				<br>
    			<button type="submit" id="procesar" class="btn btn-primary">Procesar</button>
		</form>
		<?php if ( isset($resultText)) : ?>
		<div class="resultText">
		<div class="panel panel-default">
  			<div class="panel-heading">
  				<h3 class="panel-title">Texto Procesado</h3>
 			</div>
 			<div class="panel-body">
 				<?=$resultText?>
 			</div>
		</div>
		</div>
	<?php endif; ?>
	</div>
</body>
</html>