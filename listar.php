<?php
  session_start();
  require_once('estados.php');
  $pessoas = [];
  if (isset($_SESSION['cadastropessoal']))
    $pessoas = $_SESSION['cadastropessoal'];
?>
<!doctype html>
<html lang="pt-BR">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.80.0">
      
    <title>Cadastro de pessoas</title>


    <!-- Bootstrap core CSS -->
<link href="node_modules/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
<link href="node_modules/font-awesome/css/font-awesome.min.css" rel="stylesheet">



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
        <li class="nav-item active">
          <a class="nav-link active" aria-current="page" href="listar.php">Listar</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="cadastrar.php">Cadastrar</a>
        </li>
        </ul>
      </div>
  </div>
</nav>  

<main class="container">

  <div class="starter-template text-center py-5 px-3">
      <table class="table table-hover">
      <thead>     
      <tr>
        <th scope="col">#</th>
        <th scope="col">Nome</th>
        <th scope="col">Idade</th>
        <th scope="col">Telefone</th>
        <th scope="col">Endereço</th>
        <th scope="col">Cidade</th>
        <th scope="col">Estado</th>
        <th scope="col">Ações</th>
      </tr>
      </thead>
      <tbody>
<?php
      foreach($pessoas as $i => $p) {
        $uf = $estados [ $p['estado']  ];
        echo "<tr>";
        echo '<th scope="row">' . $i . '</th>';
        echo '<td>' . $p['nome'] . '</td>';
        echo '<td>' . $p['idade'] . '</td>';
        echo '<td>' . $p['telefone'] . '</td>';
        echo '<td>' . $p['endereco'] . '</td>';
        echo '<td>' . $p['cidade'] . '</td>';
        echo '<td>' . $uf . '</td>';
        echo '<td>';
        echo '<a class="btn btn-danger" href="apagar.php?id=' . $i . '">Excluir<i class="fas fa-trash-alt"></i></a>';
        echo '<a class="btn btn-warning" href="cadastrar.php?id=' . $i . '">Editar<i class="fas fa-pen-square"></i></a>';
        echo '</td>';
        echo "</tr>"; 
      }
        
?>
      </tbody>
      </table>
  </div>

</main><!-- /.container -->


    <script src="node_modules/jquery/dist/jquery.slim.min.js" ></script>
     <script src="node_modules/popper.js/dist/umd/popper.min.js"></script>
     <script src="node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
      
  </body>
</html>
