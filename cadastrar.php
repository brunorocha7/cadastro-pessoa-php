<?php
session_start();
require_once('estados.php');
$id = '';
$nome = '';
$idade = '';
$telefone = '';
$endereco = '';
$cidade ='';
$estado ='';

if (count($_GET)){
    $id         = $_GET['id'];
    $nome       = $_SESSION['cadastropessoal'][$id]['nome'];
    $idade      = $_SESSION['cadastropessoal'][$id]['idade'];
    $telefone   = $_SESSION['cadastropessoal'][$id]['telefone'];
    $endereco   = $_SESSION['cadastropessoal'][$id]['endereco'];
    $cidade     = $_SESSION['cadastropessoal'][$id]['cidade'];
    $estado     = $_SESSION['cadastropessoal'][$id]['estado'];
}
?>

<html lang="pt-BR">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.80.0">
      
    <title>Cadastro de pessoas</title>


    <!-- Bootstrap core CSS -->
<link href="/node_modules/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet" >



    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>

    
    <!-- Custom styles for this template -->
    <style>
            body {
          padding-top: 5rem;
        }
    </style>
  </head>
  <body>
    
<nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Cadastro de Pessoas</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarsExampleDefault">
      <ul class="navbar-nav me-auto mb-2 mb-md-0">
        <li class="nav-item">
          <a class="nav-link " aria-current="page" href="listar.php">Listar</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="cadastrar.php">Cadastrar</a>
        </li>
        </ul>
      </div>
  </div>
</nav>  

<main class="container">

  <div class="starter-template text-center py-5 px-3">
      <form style="text-align: left;" method="post" action="salvar.php">
          <input type="hidden" name="id" value="<?php echo $id; ?>">
            <div class="form-group">
                <label for="nome">Nome</label>
              <input type="text" class="form-control" name="nome"
                     id="name" placeholder="Nome da Pessoa" value="<?php echo $nome; ?>">
            </div>
            <div class="form-row">
                  <div class="form-group col-md-4">
                    <label for="idade">Idade</label>
                    <input type="number" class="form-control" name="idade"
                     id="name" placeholder="Idade da Pessoa" value="<?php echo $idade; ?>">
                  </div>
                  <div class="form-group col-md-8">
                    <label for="telefone">Telefone</label>
                    <input type="text" class="form-control" name="telefone"
                     id="telefone" placeholder="Telefone da Pessoa" value="<?php echo $telefone; ?>">
                  </div>
            </div>
                    <div class="form-group">
                        <label for="endereco">Endereço</label>
                    <input type="text" class="form-control" name="endereco"
                             id="endereco" placeholder="Endereço da Pessoa" value="<?php echo $endereco; ?>">
                    </div>
          <div class="form-row">
                    <div class="form-group col-md-8">
                        <label for="nome">Cidade</label>
                    <input type="text" class="form-control" name="cidade"
                             id="cidade" placeholder="Endereço da Pessoa" value="<?php echo $cidade; ?>">
                    </div>
                  <div class="form-group col-md-4">
                        <label for="estado">Estado</label>
                        <select id="estado" name="estado" class="form-control">
<?php               
                    $uf_sel = $estados[0];
                    if ($estado != '')
                     $uf_sel = $estado;
                    foreach($estados as $i => $uf) {
                        if ($i == $uf_sel)
                        echo "<option value=\"$i\" selected>$uf</option>";
                        echo "<option value=\"$i\" seleted>$uf</option>";
                    }
                       
?>                        
                        </select>
                </div>
            </div>
          <br>
          <br>
          <button type="submit" class="btn btn-dark">Salvar</button>
          <button type="reset" class="btn btn-warning">Limpar</button>
         </form>
      </div>
   
  
</main><!-- /.container -->


    <script src="/node_modules/jquery/dist/jquery.slim.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
     <script src="/node_modules/popper.js/dist/umd/popper.min.js"></script>
     <script src="/node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
      
  </body>
</html>
