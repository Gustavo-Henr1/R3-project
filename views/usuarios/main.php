<?php 

    session_start();


        if (!isset($_SESSION['usuario'])) 
        {

            echo 

            "<script>

            alert('Faça login!');
            window.location.href = '?rota=login';

            </script>";
            exit;
        } 
?>


<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <link rel="stylesheet" href="/css/style.css">
    <script src="/public/js/main.js" defer></script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="/public/imagens/Favicon.ico" type="image/x-icon">
    <title>R3-Login</title>
 
</head>

    <body>
           
          <div class="content2">

             <h1 class="h1"><?php echo "Bem-vindo, " . $_SESSION['usuario']['nome']; ?></h1>

                <div class="botao-logout-div">

                                
                                    <a href="?rota=logout">
                                    <button class="botao-main">Logout</button>
                                    </a>
                                    </div>
        </div>


    </body>
</html>