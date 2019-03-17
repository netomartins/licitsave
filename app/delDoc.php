<?php
session_start();
require '../check.php';
include_once("../conexao.php");	


$id = $_GET['id'];


$sql = "DELETE FROM docs_empresa where id=$id";
$conn->query($sql);


//echo $id;
header("Location: documentos.php");

?>