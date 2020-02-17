<!DOCTYPE html>
<html>
<head>
	<title>teste</title>
</head>
<body>
	<?php 
		$nomeSala = $_POST["nSala"];
		echo "O nome da sala: $nomeSala";
		$chamarJogadores = $_POST["cJogadores"];
		echo "O $chamarJogadores foi chamado para o grupo";
	?>
</body>
</html>