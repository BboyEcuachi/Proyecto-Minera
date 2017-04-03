<html>
	<head>
		<title>Prueba de PHP-mysql</title>
	</head>
	<body>
		<strong> hola </strong><br>
		<?php
		$mysqli = new mysqli("localhost", "root", "root", "prueba");
		$resultado = $mysqli->query("SELECT name FROM potluck", MYSQLI_USE_RESULT);
		if($resultado){
			while($fila = $resultado->fetch_assoc()){
				echo $fila['name'].PHP_EOL;
			}
		}
		$resultado->close()
		?>
	</body>
</html>
