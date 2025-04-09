<?php


require_once 'UsuarioController.php';


if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['email'],$_POST['nome'],$_POST['senha'])) {

$email = $_POST['email'];
$nome = $_POST['nome'];
$senha = $_POST['senha'];


$resut = new UsuarioController;
$resut ->registrarUsuario($email,$nome,$senha);

}elseif($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['email'],$_POST['senha'])) {

$email = $_POST['email'];
$senha = $_POST['senha'];


$resut = new UsuarioController;
$resut ->verificaLogin($email,$senha);

}
