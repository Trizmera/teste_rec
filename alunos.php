<?php

include 'conexao.php';

$sql = "SELECT * FROM alunos WHERE idade > 20";
$resultado = mysqli_query($conexo, $sql);

    while($dados = mysqli_fetch_assoc($resultado)) {
        $nome = $dados['nome'];
        $idade = $dados['idade'];
        $curso = $dados['curso'];

        echo "Nome: $nome, Idade: $idade, Curso: $curso <br>";
    }

mysqli_close($conexao);



