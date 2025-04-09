<?php
require_once '../controllers/UsuarioController.php';

$rota = $_GET['rota'] ?? 'login';

switch ($rota) {

  

 case 'autenticar':
    if($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['email'],$_POST['senha'])) {

        $email = $_POST['email'];
        $senha = $_POST['senha'];
        
        
        $resut = new UsuarioController;
        $resut ->verificaLogin($email,$senha);
        
        }
        break;


        case 'registrar':

            if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['email'],$_POST['nome'],$_POST['senha'])) {

                $email = $_POST['email'];
                $nome = $_POST['nome'];
                $senha = $_POST['senha'];
                
                
                $resut = new UsuarioController;
                $resut ->registrarUsuario($email,$nome,$senha);
                
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