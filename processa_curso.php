<?php 

    include 'conexao.php';

    $nome_curso = $_POST['nome_curso'];
    $carga_horaria = $_POST['carga_horaria'];
    $descricao = $_POST['descricao'];
    $area = $_POST['area'];

    $insere_curso = "INSERT INTO curso (nome_curso, carga_horaria, descricao, area)
                       VALUES('$nome_curso', $carga_horaria, '$descricao', '$area')";
    
    if (mysqli_query($conexao, $insere_curso))
    {
        print "";
    }
    else 
    {
        print "Falha na inserção: " . mysqli_error($conexao);
    }

    mysqli_close($conexao);

    header('location: ver_curso.php');

?>