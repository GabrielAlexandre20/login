<?php
session_start();
require_once('conexao.php');
if(isset($_POST['email'])&& !empty($_POST['email'])){
	$array = array("email"=>$_POST['email'],"senha"=>md5($_POST['senha']));
	$sql = $PDO->prepare("SELECT * FROM usuario WHERE email=:email AND senha=:senha AND situacao='1'");
	$sql->bindParam(":email",$array['email']);
	$sql->bindParam(":senha",$array['senha']);
	$sql->execute();
	if($sql->rowCount()){
		$dados = $sql->fetch();
		$_SESSION['dados'] = $dados;
		header("location:/..curriculo.php");
		}else{
			echo"<script>alert('Dados Incorretos');</script>";
		}
}
?>