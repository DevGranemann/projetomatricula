<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style_matricula.css">
    <title></title>
</head>
<body>
    <h1>CADASTRO DE MATÍCULA</h1>
    <form action="processa_matricula.php" method="post">
        <label for="escolha aluno">Selecione o aluno:</label>
        <select name="escolha_aluno" id="">
            <?php 
            
                include 'conexao.php';

                $consulta = "SELECT * FROM aluno";
                $consulta_aluno = mysqli_query($conexao, $consulta);

                while ($linha = mysqli_fetch_array($consulta_aluno)){
                    print '<option value= "' . $linha['cod_aluno'] . '">' . 
                                               $linha['nome_aluno'] . 
                          '</option>';
                }                                         

            
            ?>
        </select>

        <br><br>

        <label for="escolha curso">Selecione o curso:</label>
        <select name="escolha_curso" id="">
            <?php 
            
                include 'conexao.php';

                $consulta = "SELECT * FROM curso";
                $consulta_curso = mysqli_query($conexao, $consulta);

                while ($linha = mysqli_fetch_array($consulta_curso)){
                    print '<option value= "' . $linha['cod_curso'] . '">' . 
                                               $linha['nome_curso'] . 
                          '</option>';
                }                                         

            
            ?>
        </select>

        <br><br>
        
        <label for="">Insira a data da matrícula: </label>
        <input type="text" name="data" placeholder="Insira a data">
        <br><br>
        <label for="">Insira a sua matrícula: </label>
        <input type="number" name="numero" placeholder="Insira a matrícula">
        <br><br>
        <input type="submit" value="CADASTRAR MATRÍCULA">
    </form>
    
    <br><br>

    <a href="index.html">Voltar ao menu inicial</a>

    
</body>
</html>