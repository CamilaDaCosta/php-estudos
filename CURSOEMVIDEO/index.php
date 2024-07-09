<!DOCTYPE html>
<html lang="pt">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Php estudos</title>
</head>
<body>
	<?php 
		date_default_timezone_set('America/Sao_Paulo');
		echo "Hoje é dia " . date('d');
		echo " e a hora atual " . date('G:i:s');
	?>
</body>
</html>