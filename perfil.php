<?php 
  include("conexao.php");
  include("banco_times.php");
  include("banco_usuario.php");
  include("logica_usuario.php");
  verificaUsuario();
  $usuario = buscaUsuarioLogado($conexao, usuarioLogado());
  $timeusuario = buscaTimeUsuario($conexao, $usuario['timeID']);
?>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Procure um Time</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/materialize.css">
  <link rel="stylesheet" href="css/style1.css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,400i,700,700i&display=swap" rel="stylesheet">
</head>

<body>
<!-- partial:index.partial.html -->
<?php include("nav.php");?>
<div class="content">
    <div class="row">
        <div class="avatar2"></div>
    </div>
    <div class="row">
        <div class="titulo2">
            <h4><?=$usuario['nome']?></h4><br>
            <h5>Gols feitos: <?=$usuario['gols']?> &nbsp&nbsp Partidas: <?=$usuario['partidas']?></h5>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12">
          <a>Email:</a>  
          <input id="email" value="<?=$usuario['email']?>" type="email" name="email" readonly>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12">
          <input id="password" type="password" class="validate" name="senha">
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12">
          <input id="cpassword" type="password" class="validate" name="confirmasenha">
		  
          <?php if(isset($_GET["senhadif"]) && $_GET["senhadif"]=="true"){ ?>
          <p>Senhas precisam ser iguais!</p>
          <?php
          }
          ?>
        </div>
      </div>
</div>
<!-- partial -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.3/js/materialize.min.js"></script>
<script  src="js/script.js"></script>
</html>