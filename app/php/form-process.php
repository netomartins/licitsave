<?php
session_start();
date_default_timezone_set('America/Sao_Paulo');
include_once("../../conexao.php");		
require '../../check.php';
	

?>
<?php

    $cad_licita_ano = $_POST["cad_licita_ano"];
    $cad_licita_numprocesso = $_POST["cad_licita_numprocesso"];
	$cad_licita_numedital =  $_POST["cad_licita_numedital"];
	$cad_licita_objeto = $_POST["cad_licita_objeto"];
	$cad_licita_modalidade = $_POST["cad_licita_modalidade"];
	$cad_licita_cidade = $_POST["cad_licita_cidade"];
	

 
	//$id = $_SESSION['usuarioId'];
	//$sql = "UPDATE usuarios SET envios=envios+1 WHERE id = $id";
	//$conn->query($sql);
	
	$sql = "INSERT INTO licitacao(ano, num_processo, num_edital, objeto, modalidade, cidade) VALUES ($cad_licita_ano,'$cad_licita_numprocesso','$cad_licita_numedital','$cad_licita_objeto','$cad_licita_modalidade','$cad_licita_cidade')";
	$conn->query($sql);
	
	//$result_usuario = "SELECT * FROM usuarios WHERE id = $id LIMIT 1";
	//$resultado_usuario = mysqli_query($conn, $result_usuario);
	//$resultado = mysqli_fetch_assoc($resultado_usuario);
	
	//$num = $resultado['envios'];
	
	echo "success|teste";



	


?>