<?php 

    include 'conexao.php';

    $cod_matricula = $_GET['cod_matricula'];
    $deleta_matricula = "DELETE FROM matricula WHERE cod_matricula = $cod_matricula";

    mysqli_query($conexao, $deleta_matricula);

    header('location: ver_matricula.php');

?>