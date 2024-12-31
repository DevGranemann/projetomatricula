<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>
<body>

    <?php 

        include 'conexao.php';

        $consulta_curso = "SELECT * FROM curso";
        $consulta = mysqli_query($conexao, $consulta_curso);
        while ($linha = mysqli_fetch_array($consulta))
        {
            if ($linha['cod_curso'] == $_GET['editar']){ ?>

                <h1>Edição de Cursos</h1>
                <form action="processa_edCurso.php" method="post">                 
                    <input type="hidden" name="cod_curso" value="<?php print $linha['cod_curso'];?>">
                        <label for="nome do curso">Nome do Curso</label>
                        <input type="text" name="nome_curso" id="idnome_curso" value="<?php print $linha['nome_curso']; ?>">
                        <br><br>
                        <label for="Descrição">Descrição</label>
                        <input type="text" name="descricao" id="iddescricao" value="<?php print $linha['descricao']; ?>">
                        <br><br>
                        <label for="carga horaria">Carga Horária</label>
                        <input type="number" name="carga_horaria" id="idcarga_horaria" value="<?php print $linha['carga_horaria']; ?>">
                        <br><br>
                        <label for="área">Área</label>
                        <input type="text" name="area" id="idarea" value="<?php print $linha['area']; ?>">
                        <br><br>
                        <input type="submit" value="EDITAR CURSO">
                </form>
            <?php 
            }
            ?>
        <?php 
        }
        ?>     
</body>
</html>