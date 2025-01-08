<?php 

    include 'conexao.php';
    
    $nome_aluno = $_POST['nome'];
    $idade = $_POST['idade'];
    $cpf = $_POST['cpf'];
    $escolaridade = $_POST['escolaridade'];

    $insere_aluno = "INSERT INTO aluno (nome_aluno, idade, cpf, escolaridade) 
                    VALUES ('$nome_aluno', $idade, $cpf, '$escolaridade')";

    if (mysqli_query($conexao, $insere_aluno))
    {
        print "";
    }
    else
    {
        print "Falha na inserção: " . mysqli_error($conexao);
    }

    mysqli_close($conexao);


    //direciona o usuário para página "ver_aluno", onde se encontra a tabela 
    header('location: ver_aluno.php');  


?>
