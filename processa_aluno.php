<?php 
    $nome_aluno = $_POST['nome'];
    $idade = $_POST['idade'];
    $cpf = $_POST['cpf'];
    $escolaridade = $_POST['escolaridade'];
    
    $insere_aluno = "INSERT INTO aluno (nome_aluno, idade, cpf, escolaridade) VALUES ('$nome_aluno', $idade, $cpf, '$escolaridade')";
?>
