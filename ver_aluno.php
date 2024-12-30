<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabela de Alunos</title>
</head>
<body>
    <table border = 1>
        <thead>
            <th>Nome</th>
            <th>Idade</th>
            <th>CPF</th>
            <th>Escolaridade</th>
        </thead>
        <tbody>
            <?php 
                include 'conexao.php';
                $consulta_aluno = "SELECT * FROM aluno";
                $consulta = mysqli_query($conexao, $consulta_aluno);

                while ($linha = mysqli_fetch_array($consulta))
                {
                    print '<tr><td>' . $linha['nome_aluno'] . '</td>';
                    print '<td>' . $linha['idade'] . '</td>';
                    print '<td>' . $linha['cpf'] . '</td>';
                    print '<td>' . $linha['escolaridade'] . '</td></tr>';
                }
            ?>
        </tbody>
    </table>
    
</body>
</html>