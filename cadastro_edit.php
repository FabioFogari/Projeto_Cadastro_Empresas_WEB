<!doctype html>
<html lang="pt-br">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <title>Alteração de Cadastro</title>
  </head>
  <body>

    <?php

    include "conexao.php"; 
    $id = $_GET['id'] ??'';
    $sql = "SELECT * FROM empresas WHERE cod_empresa = $id";

    $dados = mysqli_query($conn, $sql);
    $linha = mysqli_fetch_assoc($dados);

    ?>

    <div class="container">
      <div class="row"> 
        <div class="col">
          <h1>Cadastro</h1> 
          <form action="edit_script.php" method="POST">
            <div class="form-group">
             <label for="nome">Nome da Empresa</label>
             <input type="text" class="form-control" name="nome" required value="<?php echo $linha['nome']; ?>">            
            </div>
            <div class="form-group">
             <label for="razao_social">Razão Social</label>
             <input type="text" class="form-control" name="razao_social" value="<?php echo $linha['razao_social']; ?>">            
            </div>
            <div class="form-group">
             <label for="cnpj">CNPJ da Empresa</label>
             <input type="text" class="form-control" name="cnpj" value="<?php echo $linha['cnpj']; ?>">            
            </div>
            <div class="form-group">
             <label for="email">E-mail</label>
             <input type="text" class="form-control" name="email" value="<?php echo $linha['email']; ?>">              
            </div>
            <div class="form-group">
             <label for="endereco">Endereço</label>
             <input type="text" class="form-control" name="endereco" value="<?php echo $linha['endereco']; ?>">            
            </div>
            <div class="form-group">
             <label for="cidade">Cidade</label>
             <input type="text" class="form-control" name="cidade" value="<?php echo $linha['cidade']; ?>">            
            </div>
            <div class="form-group">
             <label for="estado">Estado</label>
             <input type="text" class="form-control" name="estado" value="<?php echo $linha['estado']; ?>">            
            </div>
            <div class="form-group">
             <label for="telefone">Telefone</label>
             <input type="text" class="form-control" name="telefone" value="<?php echo $linha['telefone']; ?>">            
            </div>
            <div class="form-group">
             <label for="data_cadastro">Data do Cadastro</label>
             <input type="date" class="form-control" name="data_cadastro" value="<?php echo $linha['data_cadastro']; ?>">            
            </div>
            <div class="form-group">
             <label for="categoria">Categoria</label>
             <input type="text" class="form-control" name="categoria" value="<?php echo $linha['categoria']; ?>">            
            </div>
            <div class="form-group">
             <label for="situacao">Situação</label>
             <input type="text" class="form-control" name="situacao" value="<?php echo $linha['situacao']; ?>">            
            </div>
            <div class="form-group">
             <label for="agencia_conta">Agencia e Conta</label>
             <input type="text" class="form-control" name="agencia_conta" value="<?php echo $linha['agencia_conta']; ?>">            
            </div>            
            <div class="form-group">
            <input type="submit" class="btn btn-success" value="Salvar Alterações">
            <input type="hidden" name="id" value="<?php echo $linha['cod_empresa'] ?>">            
            </div>
          </form>
          <a href="index.php" class="btn btn-info">Voltar ao Início</a>
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