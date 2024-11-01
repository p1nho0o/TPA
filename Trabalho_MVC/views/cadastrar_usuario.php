<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Usuário - Controle de Estoque</title>
    <link rel="stylesheet" href="../resources/styles.css">
</head>
<body>
    <header>
        <h1>Cadastro de Usuário</h1>
    </header>
    <main>
        <div class="container">
            <form action="../controller/UsuarioController.php?action=cadastrar" method="POST">
                <label for="nome">Nome:</label>
                <input type="text" id="nome" name="nome" required>

                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>

                <label for="senha">Senha:</label>
                <input type="password" id="senha" name="senha" required>

                <button type="submit">Cadastrar</button>
            </form>
        </div>
    </main>
</body>
</html>
