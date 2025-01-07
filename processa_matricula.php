<?php 

    include 'conexao.php';

    $aluno = $_POST['escolha_aluno'];
    $curso = $_POST['escolha_curso'];
    $data = $_POST['data'];
    $numero = $_POST['numero'];

    $insere_matricula = "INSERT INTO matricula (cod_aluno, cod_curso, data_matricula, numero_matricula)                                                                                                 VALUES ($aluno, $curso, '$data', $numero)";

    mysqli_query($conexao, $insere_matricula);

    header('location: ver_matricula.php');

?>
<html>
    <body>
        <a href="matricula.php">Voltar para a área de matrícula</a>
    </body>
</html>