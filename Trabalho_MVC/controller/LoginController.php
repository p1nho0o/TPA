<?php
session_start();
require_once '../models/Usuario.php';

class LoginController {
    // Método para login do usuário
    public function login() {
        $email = $_POST['email'];
        $senha = $_POST['senha'];

        $usuario = new Usuario();
        $userData = $usuario->buscarUsuarioPorEmail($email);

        if ($userData && password_verify($senha, $userData['senha'])) {
            $_SESSION['usuario_id'] = $userData['id'];
            $_SESSION['usuario_nome'] = $userData['nome'];
            header('Location: ../views/index.php');
            exit;
        } else {
            echo "Login ou senha incorretos.";
        }
    }

    // Método para logout do usuário
    public function logout() {
        session_destroy();
        header('Location: ../views/login.php');
        exit;
    }
}

// Verifica a ação solicitada e chama o método correspondente
if (isset($_GET['action']) && $_GET['action'] == 'login') {
    $controller = new LoginController();
    $controller->login();
} elseif (isset($_GET['action']) && $_GET['action'] == 'logout') {
    $controller = new LoginController();
    $controller->logout();
}
?>
