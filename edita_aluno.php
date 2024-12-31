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
            $consulta_aluno = "SELECT * FROM aluno";
            $consulta = mysqli_query($conexao, $consulta_aluno);
            while ($linha = mysqli_fetch_array($consulta))
            {
                if($linha['cod_aluno'] == $_GET['editar'])   
                { 
        ?>
                    <h1>Edição de Alunos</h1>
                    <form action="processa_edicao.php" method="post">
                        
                        <input type="hidden" name="cod_aluno" value="<?php print $linha['cod_aluno']; ?>">
                        <label for="nome">Nome</label>
                        <input type="text" name="nome_aluno" id="idnome" value="<?php print $linha['nome_aluno']; ?>">
                        <br><br>
                        <label for="idade">Idade</label>
                        <input type="number" name="idade" id="ididade" value="<?php print $linha['idade']; ?>">
                        <br><br>
                        <label for="cpf">CPF</label>
                        <input type="number" name="cpf" id="idcpf" value="<?php print $linha['cpf']; ?>">
                        <br><br>
                        <label for="escolaridade">Escolaridade</label>
                        <input type="text" name="escolaridade" id="idescolaridade" value="<?php print $linha['escolaridade']; ?>">
                        <br><br>
                        <input type="submit" value="EDITAR ALUNO">

                    </form>
                <?php } ?>    

            <?php } ?>        
    </body>
</html> 