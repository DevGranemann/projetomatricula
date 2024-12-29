<?php 

    $servidor = "localhost";
    $usuario = "root";
    $senha = "";
    $banco = "matricula";

    $conexao = mysqli_connect($servidor, $usuario, $senha, $banco);

    if (!$conexao)
    {
        print "Erro na conexão" . mysqli_connect_error();
    }
    else
    {
        print "`";
    }

?>
