<?php
require_once("Config.php");

/*$sql = new Sql();

$usuarios = $sql->select("SELECT * FROM tb_usuarios");
echo json_encode($usuarios);

//Trazendo apenas um usuario pelo ID
$usuario = new Usuario();

$usuario->loadById(2);

echo $usuario;*/

/*Trazendo uma lista de usuarios com um metodo estatico
$lista = Usuario::getList();

echo json_encode($lista);
*/

//Carrega uma lista de usuarios buscando pelo login

$search = Usuario::search('u');

echo json_encode($search);
?>