<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CADASTRO</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
</head>
<body>
    <h2>CADASTRO DE ALUNO</h2>
    <?php require ("conexao.php") ?>
    
    <div class="container">
    <form>
  <div class="form-group">
    <label>Nome</label>
    <input type="nome" class="form-control" id="nome" placeholder="Informe seu nome">
    <label>Email</label>
    <input type="email" class="form-control" id="email" placeholder="Informe seu email">
  </div>

  <button type="submit" class="btn btn-primary">Enviar</button>
</form>
</div>
</body>
</html>