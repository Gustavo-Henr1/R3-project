<?php
require_once __DIR__ . '/../autoload.php';

use controllers\LoginController;

    $rota = $_GET['rota'] ?? 'login';
    $controller = new LoginController();


    switch ($rota) {

  
        case 'autenticar':

            if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['email'], $_POST['senha'])) 
            {
            $controller->autenticar($_POST['email'], $_POST['senha']);
            }

        break;
       
        case 'registrar':

            if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['email'],$_POST['nome'],$_POST['senha'])) 
            {
                $controller->registrar($_POST['email'], $_POST['nome'], $_POST['senha']);
            }        
            break;

        case 'login':

            include '../views/usuarios/login.php';
            break;

        case 'main':

            include '../views/usuarios/main.php';
            break;
                
        case 'logout':

                session_start();
                session_destroy();
                include '../views/usuarios/login.php';
                exit;
            
        default:
            echo "404 - Página não encontrada";
            break;
}