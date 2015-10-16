<?php
	
	if ( !$_POST ) {

		require_once 'main.html.php';

	}else{

		//ENT_QUOTES es una constante. Todas las constantes van en mayusculas.
		//Hay que filtrar siempre todas las entradas de datos para evitar la inyeción de código.
		$text = htmlspecialchars($_POST['text'], ENT_QUOTES, 'UTF-8');
		$action = htmlspecialchars($_POST['action'], ENT_QUOTES, 'UTF-8');

		//Si el texto es cadena vacía o la acción no es code ni decode
		//vuelvo a cargar el formulario.
		if ( $text == "" || ( $action != "code" && $action != "decode" ) ) {

			require_once 'main.html.php';

		}else{

			require_once 'libs/encrypter.php';
			//Hacemos referencia o instanciamos a la clase Encrypter de esta manera
			//porque es un metodo estático CLASE::METODO(PARAMETRO)
			if( $action == "code" ) {

				$resultText = Encrypter::encrypt($text);

			}elseif ( $action == "decode" ) {

				$resultText = Encrypter::decrypt($text);

			}
			

			require_once 'main.html.php';

		}

	}

?>