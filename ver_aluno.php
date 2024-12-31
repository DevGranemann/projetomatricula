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
            <th>Editar</th>
            <th>Deletar</th>
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
                    print '<td>' . $linha['escolaridade'] . '</td>';
                ?>  

                    <td><a href="edita_aluno.php?editar= <?php print $linha['cod_aluno']; ?>"><input type="submit" value="EDITAR ALUNO"></a></td>

                    <td><a href="deleta_aluno.php?cod_aluno= <?php print $linha['cod_aluno']; ?>"><input type="submit" value="DELETAR ALUNO"></a></td></tr>
            <?php
                }        
            ?>
        </tbody>
    </table>
    
</body>
</html>
