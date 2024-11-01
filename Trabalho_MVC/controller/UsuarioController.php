<?php
require_once '../models/Usuario.php';

class UsuarioController {
    public function cadastrar() {
        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $senha = $_POST['senha'];

        $usuario = new Usuario();
        $resultado = $usuario->cadastrarUsuario($nome, $email, $senha);

        if ($resultado) {
            header('Location: ../views/login.php'); // Redireciona para a página de login após cadastro
            exit;
        } else {
            echo "Erro ao cadastrar o usuário. Tente novamente.";
        }
    }
}

// Verifica se a ação é "cadastrar" e chama o método correspondente
if (isset($_GET['action']) && $_GET['action'] == 'cadastrar') {
    $controller = new UsuarioController();
    $controller->cadastrar();
}
?>
