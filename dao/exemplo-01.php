<?php
require_once("Config.php");

/*$sql = new Sql();

$usuarios = $sql->select("SELECT * FROM tb_usuarios");
echo json_encode($usuarios);*/

$usuario = new Usuario();

$usuario->loadById(2);

echo $usuario;


?>