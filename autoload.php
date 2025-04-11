<?php 




spl_autoload_register(

function ($classe) 
{

        $caminho = str_replace("\\", DIRECTORY_SEPARATOR, $classe);
        $caminhoDoArquivo = __DIR__.DIRECTORY_SEPARATOR.$caminho.'.php';

        if (file_exists($caminhoDoArquivo)) 
        {
            require_once $caminhoDoArquivo;

        } else {
            die("Autoload não encontrou a classe: $classe");
        }
});









