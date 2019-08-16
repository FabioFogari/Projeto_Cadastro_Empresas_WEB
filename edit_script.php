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

    <div class="container">
      <div class="row">
        <?php
        include "conexao.php";
        $id = $_POST ['id'];
        $nome = $_POST ['nome'];
        $razao_social = $_POST ['razao_social'];
        $cnpj = $_POST ['cnpj'];
        $email = $_POST ['email'];
        $endereco = $_POST ['endereco'];
        $cidade = $_POST ['cidade'];
        $estado = $_POST ['estado'];
        $telefone = $_POST ['telefone'];
        $data_cadastro = $_POST ['data_cadastro'];
        $categoria = $_POST ['categoria'];
        $situacao = $_POST ['situacao'];
        $agencia_conta = $_POST ['agencia_conta'];

       // $sql = "INSERT INTO `empresas` ( `nome`, `razao_social`, `cnpj`, `email`, `endereco`, `cidade`, `estado`, `telefone`, `data_cadastro`, `categoria`, `situacao`, `agencia_conta`)  VALUES ('$nome','$razao_social','$cnpj','$email','$endereco','$cidade','$estado','$telefone','$data_cadastro','$categoria','$situacao','$agencia_conta')";

        $sql = "UPDATE `empresas` SET `nome` = '$nome', `razao_social`= '$razao_social', `cnpj`= '$cnpj', `email` = '$email', `endereco` = '$endereco', `cidade` = '$cidade', `estado` = '$estado', `telefone` = '$telefone', `data_cadastro` = '$data_cadastro', `categoria` = '$categoria', `situacao` = '$situacao', `agencia_conta` = '$agencia_conta' WHERE cod_empresa = $id";

        if (mysqli_query($conn, $sql)) {
          mensagem("$nome Alterado com sucesso!", 'success');
        } else
          mensagem("$nome NÂO Alterado!", 'danger');
        

        ?>
        
        <a href="index.php" class="btn btn-primary">Voltar</a>
      </div>
    </div>
    

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>