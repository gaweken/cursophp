<?php
	require_once("config.php");
	use Cliente\Cadastro;

	$cad = new Cadastro();
	$cad->nome = "Felipe Anchieta";
	$cad->email = "felipeanchieta@live.com";
	$cad->senha = "123456";

	//$cad->registrarVenda();

	/*$stmt = $conn->prepare("INSERT INTO tb_usuarios (deslogin, dessenha) VALUES (?,?)");
	
	$stmt->bind_param("ss", $login, $pass);
	$login = "user";
	$pass = "12345";
	$stmt->execute();*/

	$result = $conn->query("SELECT * FROM tb_usuarios ORDER BY deslogin");

	$data = array();
	while ($row = $result->fetch_assoc()){ // Tras os dados sem o indice, pode ser fetch_array() para que se traga os indices também
		array_push($data, $row); // Adicionando novos itens em um array
	}

	echo json_encode($data);
?>