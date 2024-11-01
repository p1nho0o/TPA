<?php
require_once '../models/Produto.php';

class ProdutoController {
    public function registrarProduto() {
        $nome = $_POST['produto-nome'];
        $descricao = $_POST['produto-descricao'];
        $codigo = $_POST['produto-codigo'];
        $quantidade = $_POST['produto-quantidade'];
        $situacao = $_POST['produto-situacao'];

        $produto = new Produto();
        $resultado = $produto->cadastrarProduto($nome, $descricao, $codigo, $quantidade, $situacao);

        if ($resultado) {
            header('Location: ../views/index.php');
        } else {
            echo "Erro ao cadastrar o produto.";
        }
    }
}

if (isset($_GET['action']) && $_GET['action'] == 'registrarProduto') {
    $controller = new ProdutoController();
    $controller->registrarProduto();
}
?>
