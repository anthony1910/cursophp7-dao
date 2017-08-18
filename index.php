<?php

require_once("config.php");

// Carrega um usuario
// $root = new Usuario();
// $root->loadById(1);
// echo $root;

// Carrega uma lista de usuarios
// $lista = Usuario::getList();
// echo json_encode($lista);

// Carrega uma lista de usuarios buscando pelo login
// $search = Usuario::search("d");
// echo json_encode($search);

// Carrega um usuario usando o login e a senha
$usuario = new Usuario();

$usuario->login("anthony", "123456");

echo $usuario;

?>