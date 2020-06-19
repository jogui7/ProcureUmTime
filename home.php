<?php 
  include("conexao.php");
  include("banco_times.php");
  include("banco_usuario.php");
  include("logica_usuario.php");
  verificaUsuario();
  $usuario = buscaUsuarioLogado($conexao, usuarioLogado());
  $timeusuario = buscaTimeUsuario($conexao, $usuario['timeID']);
  $premium = $timeusuario['premium']=='1' ? "   Premium" : "";
?>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Procure um Time</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/materialize.css">
  <link rel="stylesheet" href="css/style.css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,400i,700,700i&display=swap" rel="stylesheet">
</head>

<body>
<!-- partial:index.partial.html -->
<?php include("nav.php");?>
<div class="content">
  <p class="titulo">MEU TIME</p>
  <div class="card2">
      <div class="avatar"></div>
      <p><?=$timeusuario['nome'],$premium?><br>
      <small>Vitórias: <?=$timeusuario['vitorias']?> &nbsp&nbsp Empates: <?=$timeusuario['empates']?> &nbsp&nbsp Derrotas: <?=$timeusuario['derrotas']?></small></p>
    </div>
      <p class="titulo" id="marginprocure">PROCURE UM TIME <a href="#" style="float: right; color: #2CC65C;">Ver todos</a></p>
  <?php 
  $timespremium = listaTimesPremium($conexao);
  foreach($timespremium as $time){
    $premium = $time['premium']=='1' ? "   Premium" : "";
  ?>    
  <div class="card2">
      <div class="avatar"></div>
      <p><?=$time['nome'],$premium?><br>
      <small>Vitórias: <?=$time['vitorias']?> &nbsp&nbsp Empates: <?=$time['empates']?> &nbsp&nbsp Derrotas: <?=$time['derrotas']?></small></p>
  </div>
  <?php 
  }
  ?>
</div>
<!-- partial -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.3/js/materialize.min.js"></script>
<script  src="js/script.js"></script>
</html>