<h2>Add auno</h2>
<form method="POST">
    <label for="nome">Nome:</label>
    <input type="text" name="nome" id="nome" required>

    <label for="idade">Idade:</label>
    <input type="number" name="idade" id="idade" required>

    <label for="curso">Curso:</label>
    <input type="text" name="curso" id="curso" required>

    
    <button name="add_aluno">Cadastrar</button>

<?php 

include 'conexao.php';

    if(isset($_POST["add_aluno"]) ) {
        $nome = $_POST['nome'];
        $idade = $_POST['idade'];
        $curso = $_POST['curso'];

        $sql = "INSERT INTO alunos (nome, idade, curso) VALUES ('$nome', '$idade', '$curso')";

        if (mysqli_query($conexao, $sql)) {
            echo "Aluno adicionado com sucesso!";
        } else {
            echo "erro na operacao!";
        }
    }
?>
</form>