<?php
session_start();
date_default_timezone_set('America/Sao_Paulo');
include_once("../../conexao.php");		
require '../../check.php';
	

?>
<?php

    $nome = $_POST["nome"];
    $email = $_POST["email"];
	$senha =  $_POST["senha"];
	

 
	//$id = $_SESSION['usuarioId'];
	//$sql = "UPDATE usuarios SET envios=envios+1 WHERE id = $id";
	//$conn->query($sql);
	
	$sql = "INSERT INTO usuarios(nome, email, senha, situacoe_id, niveis_acesso_id, dias, envios, created, modified) VALUES ('$nome','$email',MD5('$senha'), '1', '2', '999', '0', '2017-02-01 00:00:00','2017-02-01 00:00:00')";
	$conn->query($sql);
	
	//$result_usuario = "SELECT * FROM usuarios WHERE id = $id LIMIT 1";
	//$resultado_usuario = mysqli_query($conn, $result_usuario);
	//$resultado = mysqli_fetch_assoc($resultado_usuario);
	
	//$num = $resultado['envios'];
	
	echo "success|teste";



	


?>