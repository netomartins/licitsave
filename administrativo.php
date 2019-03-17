<?php
	session_start();
	require 'check.php';
	echo "Usuario: ". $_SESSION['usuarioNome'];	
	echo "<p>";
	echo "Nivel: ". $_SESSION['usuarioNiveisAcessoId'];	
	//echo $_SESSION['logged_in'];
	
?>
<br>
<a href="sair.php">Sair</a>