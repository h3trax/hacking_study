<?php

if ($_GET){
	if (@$_GET['senha'] == 1020):
		echo "Acessado com sucesso";
	else:
		echo "Senha Inválida";
	endif;
}

?>
<!DOCTYPE html>
<html>
<body>

<h2>Brute-Force GET</h2>

<form action="" method="GET">
	Senha:<br>
	<input type="password" name="senha">
	<br><br>
	<input type="submit" value="Acessa">
</form>

<p>Obtenha acesso ao sistema!</p>

</body>
</html>
