<?php
	$servidor = "localhost";
	$usuario = "neto";
	$senha = "12345";
	$dbname = "licitsave";
	
	//Criar a conexao
	$conn = mysqli_connect($servidor, $usuario, $senha, $dbname);

	
	if(!$conn){
		die("Falha na conexao: " . mysqli_connect_error());
	}else{
		//echo "Conexao realizada com sucesso";
	}	

	
?>