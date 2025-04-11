<?php
namespace models;

require_once __DIR__ . '/../autoload.php';

use core\connection;
use PDO;


class Usuario
{

    public function registrarUsuario($email,$nome,$senha)
    {
        $conexao = new connection;
        $pdo = $conexao->conectar();

        $query_verifica_email = "SELECT COUNT(*) FROM usuario WHERE email = :email";

            $tratamento_verifica = $pdo ->prepare($query_verifica_email);
            $tratamento_verifica ->bindParam(':email',$email);
            $tratamento_verifica->execute();

            $colunas_existentes = $tratamento_verifica->fetchColumn();

                if($colunas_existentes > 0)
                {
                    echo    "<script>

                             alert('Usuário já cadastrado!');
                            window.location.href = '?rota=login';

                            </script>";

                    exit;

                } else {
                        $senha_segura = password_hash( $senha,PASSWORD_DEFAULT);
                        $query = "INSERT INTO usuario (email,nome,senha) VALUES (:email,:nome,:senha)";

                        $tratamento = $pdo->prepare($query);
                        $tratamento->bindParam(':email', $email);
                        $tratamento->bindParam(':nome', $nome);
                        $tratamento->bindParam(':senha', $senha_segura);

                            if ($tratamento->execute()) 
                            {
                                echo    
                                    "<script>

                                        alert('Usuário cadastrado com sucesso!');
                                        window.location.href = '?rota=login';

                                    </script>";
                            exit;

                            } else {
                                        echo "<script>alert('Erro ao cadastrar usuário')</script>";
                                    }
                        }

    }

    public function verificaLogin($email,$senha)
    {
        $conexao = new connection;
        $pdo = $conexao->conectar();
        
        $query_verifica_login = "SELECT * FROM usuario WHERE email = :email";

        $tratamento_verifica = $pdo ->prepare($query_verifica_login);
        $tratamento_verifica ->bindParam(':email',$email);
        $tratamento_verifica->execute();
        
        $colunas_existentes = $tratamento_verifica->fetch(PDO::FETCH_ASSOC);

        
            if ($colunas_existentes && password_verify($senha, $colunas_existentes['senha'])) 
            {
                session_start();

                $_SESSION['usuario'] = 
                [
                        'id'   => $colunas_existentes['idusuario'],
                        'nome' => $colunas_existentes['nome'],
                        'email'=> $colunas_existentes['email']
                ];

                        echo    
                        "<script>
                
                        alert('Bem vindo {$colunas_existentes['nome']}!');
                        window.location.href ='?rota=main';
            
                        </script>";
                
                    exit;
        
            }else{

                        echo  

                        "<script>
        
                            alert('Login Invalido');
                            window.location.href = '?rota=login';
                  
                        </script>";
                
                    exit;
                }
    }
}