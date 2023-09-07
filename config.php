<?php

$host = 'localhost';
$username = '';
$password = '';
$database = 'escola';


$conexao = mysqli_connect($host, $username, $password, $database);

if (!$conexao) {
    die("Falha na conexão: " . mysqli_connect_error());
}

if($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nome = $_POST['nome'];
    $idade = $_POST['idade'];
    $curso = $_POST['curso'];

    $sql = "INSERT INTO alunos (nome, idade, curso) VALUES ('$nome', '$idade', '$curso')";

    if (mysqli_query($conexao, $sql)) {
        echo "Registro inserido com sucesso!";
    } else {
        echo "Erro ao inserir registro: " . mysqli_error($conexao);
    }
}

mysqli_close($conexao);

?>


