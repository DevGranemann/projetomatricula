<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <script>
        function confirmarExclusao(nomeCurso)
        {
            return confirm("Tem certeza que deseja excluir o curso '" + nomeCurso + "'?");
        }


    </script>
    <title></title>
</head>
<body>
    <table border="1">
        <thead>

            <th>Nome do Curso</th>
            <th>Descrição</th>
            <th>Carga Horária</th>
            <th>Área</th>
            <th>Editar</th>
            <th>Deletar</th>
        </thead>
        <tbody>

            <?php 
            
                include 'conexao.php';

                $consulta_curso = "SELECT * FROM curso";
                $consulta = mysqli_query($conexao, $consulta_curso);

                while ($linha = mysqli_fetch_array($consulta))
                {
                    $nomeCurso = $linha['nome_curso'];
                    print '<tr><td>' . $linha['nome_curso'] . '</td>';
                    print '<td>' . $linha['descricao'] . '</td>';
                    print '<td>' . $linha['carga_horaria'] . '</td>';
                    print '<td>' . $linha['area'] . '</td>';
                

            ?>
                <td><a href="edita_curso.php?editar= <?php print $linha['cod_curso']; ?>"><input type="submit" value="EDITAR CURSO"></a></td>
                

                <td>

                    <a href="deleta_curso.php?cod_curso= <?php print $linha['cod_curso'];?>
                        "onclick=" return confirmarExclusao('<?php print $nomeCurso; ?>')">
                        <input type="submit" value="DELETAR CURSO">

                    </a>
                </td>
                </tr>

                <?php 
                }
                ?>

        </tbody>
    </table>
    
</body>
</html>