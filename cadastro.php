<!doctype html>
<html lang="pt-br">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">

    <title>Cadastro</title>
  </head>
  <body>

    <div class="container">
      <div class="row">
        <div class="col">
          <br><br>
          <h1>Cadastro</h1> 
          <br><br>
          <form action="cadastro_script.php" method="POST">
            <div class="form-row">
    <div class="col-md-4 mb-3">
      <label for="nome">Nome da Empresa</label>
      <input type="text" class="form-control" name="nome" required>
    </div>
    <div class="col-md-3 mb-3">
      <label for="razao_social">Razão Social</label>
      <input type="text" class="form-control" name="razao_social">
    </div>
    <div class="col-md-3 mb-3">
      <label for="cnpj">CNPJ</label>         
      <input type="text" class="form-control" name="cnpj">      
    </div>
  </div>
  <div class="form-row">
    <div class="col-md-3 mb-3">
      <label for="email">E-mail</label>
      <input type="text" class="form-control" name="email">
    </div>
    <div class="col-md-4 mb-3">
      <label for="endereco">Endereço</label>
      <input type="text" class="form-control" name="endereco">
    </div>
    <div class="col-md-3 mb-3">
      <label for="cidade">Cidade</label>
      <input type="text" class="form-control" name="cidade">
    </div>
     <div class="form-row">
    <div class="col-md-3 mb-3">
      <label for="estado">Estado</label>
      <input type="text" class="form-control" name="estado">
    </div>
    <div class="col-md-4 mb-3">
      <label for="telefone">Telefone</label>
      <input type="text" class="form-control" name="telefone">
    </div>
    <div class="col-md-3 mb-3">
      <label for="data_cadastro">Data do Cadastro</label>
      <input type="date" class="form-control" name="data_cadastro">
    </div>
    <div class="col-md-3 mb-3">
      <label for="categoria">Categoria</label>
      <input type="text" class="form-control" name="categoria">
    </div>
    <div class="col-md-3 mb-3">
      <label for="situacao">Situação</label>
      <input type="text" class="form-control" name="situacao">
    </div>
    <div class="col-md-4 mb-3">
      <label for="agencia_conta">Agencia e Conta</label>
      <input type="text" class="form-control" name="agencia_conta">
    </div>
  </div>
</div>
  <br><br><br><br><br><br>

  <button class="btn btn-primary" type="submit">Cadastrar Empresa</button>
          
        <a href="index.php" class="btn btn-primary" type="submit">Voltar para o Início</a>
        </div>
      </form>
    </div>
        
      </div>
      
    </div>
    

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>