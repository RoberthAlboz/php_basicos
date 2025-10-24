<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Cadastro de Produtos</title>
</head>
<body>

<form method="post" action="">
    <label for="nome">Nome do produto:</label>
    <input type="text" name="nome" required><br>

    <label for="preco">Preço:</label>
    <input type="number" min="0.01" step="0.01" name="preco" required><br>

    <button type="submit">Adicionar</button>
</form>

<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nome = $_POST['nome'];
    $preco = $_POST['preco'];

    $servername = "localhost";
    $username = "root";
    $password = "Senai@118";
    $dbname = "exercicio";

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Falha na conexão: " . $conn->connect_error);
    }

    // Use acentos graves (`) no SQL se o nome da coluna tiver acento
    $sql = "INSERT INTO produtos (nome, preco) VALUES ('$nome', '$preco')";

    if ($conn->query($sql) === TRUE) {
        echo "<p style='color: green;'>Produto cadastrado com sucesso!</p>";
    } else {
        echo "<p style='color: red;'>Erro ao cadastrar: " . $conn->error . "</p>";
    }

    $conn->close();
}
?>
</body>
</html>
