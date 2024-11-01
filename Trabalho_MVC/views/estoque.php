<?php
$conn = new mysqli('localhost', 'root', '', 'tpafinal');

if ($conn->connect_error) {
    die("Conexão falhou: " . $conn->connect_error);
}

$message = '';
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id_produto = $_POST['id_produto'];
    $quantidade = $_POST['quantidade'];

    $sql = "INSERT INTO estoque (id_produto, quantidade) VALUES ('$id_produto', '$quantidade')";

    if ($conn->query($sql) === TRUE) {
        $message = "Estoque registrado com sucesso!";
    } else {
        $message = "Erro ao registrar estoque: " . $conn->error;
    }
}

$produtos = $conn->query("SELECT id_produto, nome FROM produtos");
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrar Estoque</title>
    <link rel="stylesheet" href="../resources/styles.css">
</head>
<body>
    <header>
        <h1>Registrar Estoque</h1>
    </header>
    <main>
        <form method="POST">
            <label for="id_produto">Produto:</label>
            <select name="id_produto" required>
                <option value="">Selecione um produto</option>
                <?php while ($row = $produtos->fetch_assoc()): ?>
                    <option value="<?php echo $row['id_produto']; ?>"><?php echo $row['nome']; ?></option>
                <?php endwhile; ?>
            </select>
            
            <label for="quantidade">Quantidade:</label>
            <input type="number" name="quantidade" required>

            <button type="submit">Registrar</button>
        </form>
        <?php if ($message): ?>
            <p><?php echo $message; ?></p>
        <?php endif; ?>
    </main>
</body>
</html>
