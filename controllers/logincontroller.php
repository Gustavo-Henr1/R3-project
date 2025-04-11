<?php
namespace controllers;

use models\Usuario;



class LoginController
{
    public function autenticar($email, $senha)
    {
        $usuario = new Usuario();
        $usuario->verificaLogin($email, $senha);
    }

    public function registrar($email, $nome, $senha)
    {
        $usuario = new Usuario();
        $usuario->registrarUsuario($email, $nome, $senha);
    }
}