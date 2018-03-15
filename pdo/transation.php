<?php 
	$conn = new PDO("mysql:dbname=dbphp7;host=localhost", "root", "");
	$conn->beginTransaction();/// Inicia Transaction
	$stmt = $conn->prepare("INSERT INTO tb_usuarios (deslogin, dessenha) VALUES (?, ?)");
	$login = "Josiwaldo";
	$password = "123";

	$stmt->execute(array($login, $password));
	//$conn->rollback(); //Cancela Transaction
	$conn->commit(); //Confirma Transaction
?>