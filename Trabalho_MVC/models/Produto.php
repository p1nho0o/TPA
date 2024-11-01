<?php
require_once '../controller/conexao.php';

class Produto {
    private $conn;

    public function __construct() {
        $db = new Conexao();
        $this->conn = $db->getConnection();
    }

    public function cadastrarProduto($nome, $descricao, $codigo, $quantidade, $situacao) {
        $sql = "INSERT INTO produtos (nome, descricao, codproduto, qtdestoque, situacao, data_cadastro) VALUES (?, ?, ?, ?, ?, CURDATE())";
        $stmt = $this->conn->prepare($sql);
        $stmt->bind_param("sssds", $nome, $descricao, $codigo, $quantidade, $situacao);
        return $stmt->execute();
    }
}
?>
