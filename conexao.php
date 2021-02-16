<?php

$host = "localhost";
$user = "root";
$pass = "";
$banco = "Login";

$conexao = @mysqli_connect($host, $user, $pass, $banco, 3306)
        or die("Problemas com a conexão do Banco de Dados");
?>
