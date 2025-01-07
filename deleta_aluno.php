<?php 

    include 'conexao.php';

    $cod_aluno = $_GET['cod_aluno'];

    $deleta_aluno = "DELETE FROM aluno WHERE cod_aluno = $cod_aluno";

    if (mysqli_query($conexao, $deleta_aluno))
    {
        print "";
    }
    else
    {
        print "Falha na exclusão:" . mysqli_error($conexao);
    }

    header('location:ver_aluno.php');
    
?>