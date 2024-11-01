document.getElementById('produto-form').addEventListener('submit', function(event) {
    event.preventDefault(); // Evita o recarregamento da página
    // Coletar os valores dos campos
    const nome = document.getElementById('produto-nome').value;
    const codigo = document.getElementById('produto-codigo').value;



    // Buscar o produto na lista simulada
    const produtoEncontrado = produtos.find(produto => produto.id === id && produto.nome.toLowerCase() === nome.toLowerCase() && produto.codigo === codigo);

    if (produtoEncontrado) {
        // Preencher os campos de exibição com os dados do produto
        document.getElementById('exibir-id').textContent = produtoEncontrado.id;
        document.getElementById('exibir-nome').textContent = produtoEncontrado.nome;
        document.getElementById('exibir-codigo').textContent = produtoEncontrado.codigo;
        document.getElementById('exibir-quantidade').textContent = produtoEncontrado.quantidade;

        // Exibir a div com as informações do produto
        document.getElementById('produto-info').style.display = 'block';
    } else {
        // Caso o produto não seja encontrado
        alert('Produto não encontrado. Verifique as informações.');
        document.getElementById('produto-info').style.display = 'none';
    }
});


