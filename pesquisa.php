<!doctype html>
<html lang="pt-br">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">

    <title>Pesquisar Empresa</title>
  </head>
  <body>

    <?php
       
         $pesquisa = $_POST['busca'] ?? '';        

       include "conexao.php";

      $sql = "SELECT * FROM empresas WHERE nome LIKE '%$pesquisa%'";

      $dados = mysqli_query($conn, $sql);

      ?>      

    <div class="container">
      <div class="row">
        <div class="col">
          <h1>Pesquisar</h1>
          <nav class="navbar navbar-light bg-light">
            <form class="form-inline" action="pesquisa.php" method="POST">
              <input class="form-control mr-sm-2" type="search" placeholder="nome" aria-label="Search" name="busca" autofocus>
              <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Pesquisar</button> 
            </form>
          </nav>

          <table class="table table-hover">
            <thead>
              <tr>                 
                <th scope="col">Nome</th>               
                <th scope="col">Telefone</th>
                <th scope="col">Data do Cadastro</th>
                <th scope="col">Email</th>
                <th scope="col">Endereço</th>
                <th scope="col">Funções</th>
              </tr>
            </thead>
            <tbody>

                <?php 


                while ($linha = mysqli_fetch_assoc($dados) ) {
                  $cod_empresa = $linha['cod_empresa'];
                  $nome = $linha['nome'];
                  $telefone = $linha['telefone'];
                  $data_cadastro = $linha['data_cadastro'];
                  $email = $linha['email'];
                  $endereco = $linha['endereco'];
                  $data_cadastro = mostra_data($data_cadastro); 


                          //*Botões do Menu Pesquisar*//
                  
                  echo "<tr>
                           <th scope='row'>$nome</th>
                           <td>$telefone</td>
                           <td>$data_cadastro</td>  
                           <td>$email</td>
                           <td>$endereco</td>
                           <td width=200px>
                               <a href='cadastro_edit.php?id=$cod_empresa' class='btn btn-success btn-sm'>Editar</a>
                               <a href='#' class='btn btn-danger btn-sm' data-toggle='modal' data-target='#confirma'
                               onclick=" .'"' ."pegar_dados($cod_empresa, '$nome')" .'"' .">Excluir</a>
                           </td>


                           </tr>";
                           //*Fim dos Botões do Menu Pesquisar*// 
                     }

                   ?>

                     <!-- onclick="pegar_dados($id, 'nome')" -->
            
            </tbody>
          </table>
          

          <a href="index.php" class="btn btn-info">Voltar ao Início</a>
        </div>
      </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="confirma" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Confirmação de Exclusão</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <form action="excluir_script.php" method="POST">
            <p>Deseja realmente Excluir <b id="nome_empresa">Nome da empresa</b>?</p>            
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Não</button>
            <input type="hidden" name="nome" id="nome_empresa_1" value="">
            <input type="hidden" name="id" id="cod_empresa" value="">
            <input type="submit" class="btn btn-danger" value="Sim">
            </form>
          </div>
        </div>
      </div>
    </div>


    <script type="text/javascript">
      function pegar_dados(id, nome) {
        document.getElementById('nome_empresa').innerHTML = nome;
        document.getElementById('nome_empresa_1').value = nome;
        document.getElementById('cod_empresa').value = id;
      }


    </script>
    

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>