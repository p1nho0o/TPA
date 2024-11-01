document.getElementById('cadastro-produto-form').addEventListener('submit', function(event) {
    event.preventDefault(); // Evita o recarregamento da página

    // Coletar os valores dos campos
    const codID = document.getElementById('produto-codid').value;
    const nome = document.getElementById('produto-nome').value;
    const codigo = document.getElementById('produto-codigo').value;
    const quantidade = document.getElementById('produto-quantidade').value;
    const situacao = document.getElementById('produto-situacao').value;

    // Simulação de armazenamento do produto (em um sistema real, enviaríamos os dados para o back-end)
    const produto = {
        codID,
        nome,
        codigo,
        quantidade,
        situacao
    };

    console.log('Produto cadastrado:', produto);
    alert('Produto cadastrado com sucesso!');

    // Limpar o formulário
    document.getElementById('cadastro-produto-form').reset();
});
