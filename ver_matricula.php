<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <script>

        function confirmarExclusao(numeroMatricula)
        {
            return confirm("Tem certeza que deseja excluir a matricula " + numeroMatricula + "?");
        }

    </script>
    <title></title>
</head>
<body>
<table border = 1>
        <thead>
            <th>Nome do aluno</th>
            <th>Nome do curso</th>
            <th>Deletar</th>
        </thead>
        <tbody>
            <?php 

            include 'conexao.php';

            $consulta_matricula = "SELECT matricula.cod_matricula, aluno.nome_aluno, curso.nome_curso, matricula.numero_matricula             FROM aluno, curso, matricula
                                    WHERE matricula.cod_aluno = aluno.cod_aluno
                                      AND matricula.cod_curso = curso.cod_curso";  
            $consulta = mysqli_query($conexao, $consulta_matricula);
            while ($linha = mysqli_fetch_array($consulta)){
                
                $numeroMatricula = $linha['numero_matricula'];
                print '<tr><td>' . $linha['nome_aluno'] . '</td>';
                print '<td>' . $linha['nome_curso'] . '</td>';
            ?>

            <td>

                <a href="deleta_matricula.php?cod_matricula= <?php print $linha['cod_matricula'];?>
                        "onclick=" return confirmarExclusao('<?php print $numeroMatricula ?>')">

                    <input type="submit" value="DELETAR MATRÍCULA">

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