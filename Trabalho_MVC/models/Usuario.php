<?php
require_once '../controller/conexao.php';

class Usuario {
    private $conn;

    // Construtor para inicializar a conexão com o banco de dados
    public function __construct() {
        $db = new Conexao();
        $this->conn = $db->getConnection();
    }

    // Método para buscar o usuário pelo e-mail
    public function buscarUsuarioPorEmail($email) {
        $sql = "SELECT * FROM usuarios WHERE email = ?";
        $stmt = $this->conn->prepare($sql);
        $stmt->bind_param("s", $email);
        $stmt->execute();
        $result = $stmt->get_result();
        return $result->fetch_assoc();
    }

    // Método para cadastrar um novo usuário
    public function cadastrarUsuario($nome, $email, $senha) {
        $senhaHash = password_hash($senha, PASSWORD_DEFAULT);
        $sql = "INSERT INTO usuarios (nome, email, senha) VALUES (?, ?, ?)";
        $stmt = $this->conn->prepare($sql);
        $stmt->bind_param("sss", $nome, $email, $senhaHash);
        
        return $stmt->execute();
    }
}
?>
