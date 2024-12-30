<?php 

    include 'conexao.php';

    $cod_aluno = $_GET['cod_aluno'];

    $deleta_aluno = "DELETE FROM aluno WHERE cod_aluno = $cod_aluno";

    mysqli_query($conexao, $deleta_aluno);

    header('location:ver_aluno.php');
?>