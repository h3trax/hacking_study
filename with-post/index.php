<?php

if ($_POST){
	if (@$_POST['senha'] == 1020):
		echo "Acessado com sucesso";
	else:
		echo "Senha Inválida";
	endif;
}

?>
<!DOCTYPE html>
<html>
<body>

<h2>Brute-Force POST</h2>

<form action="" method="POST">
	Senha:<br>
	<input type="password" name="senha">
	<br><br>
	<input type="submit" value="Acessar">
</form>

<p>Obtenha acesso ao sistema!</p>

</body>
</html>
