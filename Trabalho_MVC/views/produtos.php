<?php
$conn = new mysqli('localhost', 'root', '', 'tpafinal');

if ($conn->connect_error) {
    die("Conexão falhou: " . $conn->connect_error);
}

$nomeProduto = '';
$quantidade = '';
$mensagem = '';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $codproduto = $_POST['codproduto'];

    // Consultar a quantidade e o nome do produto com base no código do produto
    $sql = "SELECT p.nome, e.quantidade 
            FROM produtos p 
            JOIN estoque e ON p.id_produto = e.id_produto 
            WHERE p.codproduto = '$codproduto'";
    
    $resultado = $conn->query($sql);

    if ($resultado->num_rows > 0) {
        $row = $resultado->fetch_assoc();
        $nomeProduto = $row['nome'];
        $quantidade = $row['quantidade'];
    } else {
        $mensagem = "Produto não encontrado.";
    }
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consultar Estoque</title>
    <link rel="stylesheet" href="../resources/styles.css">
</head>
<body>
    <header>
        <h1>Consultar Estoque</h1>
    </header>
    <main>
        <form method="POST">
            <label for="codproduto">Código do Produto:</label>
            <input type="text" name="codproduto" required>
            <button type="submit">Buscar</button>
        </form>
        
        <?php if ($quantidade !== ''): ?>
            <p>Produto: <?php echo htmlspecialchars($nomeProduto); ?> | Quantidade em Estoque: <?php echo $quantidade; ?></p>
        <?php elseif ($mensagem): ?>
            <p><?php echo $mensagem; ?></p>
        <?php endif; ?>
    </main>
</body>
</html>
