<html>
	<head>
		<link rel="stylesheet" type="text/css" href="public/estilo.php" />
		<title>Prueba de PHP</title>
	</head>
	<body>
		<?php echo '<h1>Hola Mundo</h1>'; ?>
		<h2> Su navegador es: </h2>
		<?php echo $_SERVER['HTTP_USER_AGENT']; ?>
		<?php
		if (strpos($_SERVER['HTTP_USER_AGENT'], 'MSIE') !== FALSE) {
			echo '<br /> Está usando Internet Explorer.<br />';
		}
		else{
			echo '<br /> No está usando Internet Explorer.<br />';
		}
		?>
	</body>
</html>
