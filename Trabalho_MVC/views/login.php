<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Login - Controle de Estoque</title>
    <link rel="stylesheet" href="../resources/styles.css">
</head>
<body>
    <header>
        <h1>Login - Sistema de Estoque</h1>
    </header>
    <main>
        <form action="../controller/LoginController.php?action=login" method="POST">
            <label for="email">Email:</label>
            <input type="email" name="email" required>
            
            <label for="senha">Senha:</label>
            <input type="password" name="senha" required>
            
            <button type="submit">Entrar</button>
        </form>
    </main>
    <p>Não tem uma conta? <a href="cadastrar_usuario.php">Cadastre-se aqui</a></p>

</body>
</html>
