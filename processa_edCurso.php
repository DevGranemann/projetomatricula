<?php 

    include 'conexao.php';

    $cod_curso = $_POST['cod_curso'];
    $nome_curso = $_POST['nome_curso'];
    $descricao = $_POST['descricao'];
    $carga_horaria = $_POST['carga_horaria'];
    $area = $_POST['area'];

    $edita_curso = "UPDATE curso SET nome_curso = '$nome_curso',
                                      descricao = '$descricao',
                                      carga_horaria = $carga_horaria,
                                      area = '$area'
                                WHERE cod_curso = $cod_curso";

    mysqli_query($conexao, $edita_curso);

    header('location: ver_curso.php');

?>