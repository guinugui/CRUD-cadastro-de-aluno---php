<?php 
	$server = "localhost";
	$user = "root";
	$pass = "";
	$bd = "empresa";

	$dir = 'img/'; // Diretório padrão das fotos cadastradas.

	if ( $conn = mysqli_connect($server, $user, $pass, $bd) ) {
		// echo "Conectado!";
	} else
		echo "Erro!";

	function mensagem($texto, $tipo) {
		echo "<div class='alert alert-$tipo' role='alert'> $texto
			</div>";
	}

	function mostra_data($data) {
		$d = explode('-', $data);
		$escreve = $d[2] ."/" .$d[1] ."/" .$d[0];
		return $escreve;
	}	
 ?>