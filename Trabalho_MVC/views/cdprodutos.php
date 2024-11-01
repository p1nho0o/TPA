<?php
// Conectar ao banco de dados
$conn = new mysqli('localhost', 'root', '', 'tpafinal');

// Verificar a conexão
if ($conn->connect_error) {
    die("Conexão falhou: " . $conn->connect_error);
}

// Mensagem de sucesso ou erro
$message = '';
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST['nome'];
    $descricao = $_POST['descricao'];
    $codproduto = $_POST['codproduto'];
    $qtdestoque = $_POST['qtdestoque'];
    $situacao = ($qtdestoque > 0) ? 'Com estoque' : 'Sem estoque';
    $data_cadastro = date('Y-m-d');

    $sql = "INSERT INTO produtos (nome, descricao, codproduto, qtdestoque, situacao, data_cadastro) 
            VALUES ('$nome', '$descricao', '$codproduto', '$qtdestoque', '$situacao', '$data_cadastro')";

    if ($conn->query($sql) === TRUE) {
        $message = "Produto cadastrado com sucesso!";
    } else {
        $message = "Erro ao cadastrar produto: " . $conn->error;
    }
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar Produto</title>
    <link rel="stylesheet" href="../resources/styles.css">
</head>
<body>
    <header>
        <h1>Cadastrar Produto</h1>
    </header>
    <main>
        <form method="POST">
            <label for="nome">Nome:</label>
            <input type="text" name="nome" required>
            
            <label for="descricao">Descrição:</label>
            <textarea name="descricao"></textarea>
            
            <label for="codproduto">Código do Produto:</label>
            <input type="text" name="codproduto" required>
            
            <label for="qtdestoque">Quantidade em Estoque:</label>
            <input type="number" name="qtdestoque" required>

            <button type="submit">Cadastrar</button>
        </form>
        <?php if ($message): ?>
            <p><?php echo $message; ?></p>
        <?php endif; ?>
    </main>
</body>
</html>
