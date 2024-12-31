<?php 

    include 'conexao.php';

    $cod_aluno = $_POST['cod_aluno'];
    $nome_aluno = $_POST['nome_aluno'];
    $idade = $_POST['idade'];
    $cpf = $_POST['cpf'];
    $escolaridade = $_POST['escolaridade']; 

    $edita_aluno = "UPDATE aluno SET nome_aluno = '$nome_aluno',
                                            idade = $idade,
                                            cpf = $cpf,
                                    escolaridade= '$escolaridade'
                                    WHERE cod_aluno = $cod_aluno";
    
    mysqli_query($conexao, $edita_aluno);

    header('location: ver_aluno.php');

?>