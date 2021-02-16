<html>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<title>Página de Validação</title>
<body>
    <p style="text-aling:center">Validação de Login</p>

    <?php
    
        include_once('conexao.php');
        //recuperando
        $usuario = $_POST['usuario'];
        $senha = $_POST['senha'];

        //criando a linha do SELECT
        $sqlvalidarLogin = "select * from usuario where nome_usuario = $usuario and senha = $senha";

        //executando instruções SQL
        $resultado = @mysqli_query($conexao, $sqlvalidarLogin);
        if(!$resultado) {
            echo '<input type="button" onclick="window.location='."'login.php'".';" value="Voltar"><br><br>';
            die('<b>Query Inválida:</b>' . @mysqli_error($conexao));
        } else {
            $num = @mysqli_num_rows($resultado);
            if ($num==0){
                echo "<b>ID: </b>não localizado !!!!<br><br>";
                echo '<input type="button" onclick="window.location='."'index.php'".';" value="Voltar"><br><br>';
                exit;		
            }else{
                $dados=mysqli_fetch_array($resultado);
            }
        }
        mysqli_close($conexao);
    
    ?>

<b>Nome:</b> <input type="text"  maxlength='80' style="width:250px" value="<?php echo $dados['nome']; ?>" readonly ><br><br>

</body>
</html>