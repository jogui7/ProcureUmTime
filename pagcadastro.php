<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Procure um Time</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/materialize.css">
  <link rel="stylesheet" href="css/style2.css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,400i,700,700i&display=swap" rel="stylesheet">

</head>
<body>
<!-- partial:index.partial.php -->
<div class="content">
	<div class="logo"><img src="img/logo.svg" alt="logo"></div>
	<p>Encontre um time para<br> jogar contra o seu</p>
  <div class="row">
    <form class="col s12" action="cadastro.php" method="post">
    <div class="row">
        <div class="input-field col s12">
          <input id="nome" type="text" class="validate" name="nome">
          <label for="nome">Nome</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12">
          <input id="email" type="email" class="validate" name="email">
          <label for="email">Email</label>
          <?php if(isset($_GET["cadastro"]) && $_GET["cadastro"]=="false"){ ?>
          <p>Email já cadastrado!</p>
          <?php
          }
          ?>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12">
          <input id="password" type="password" class="validate" name="senha">
          <label for="password">Digite a sua senha</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12">
          <input id="cpassword" type="password" class="validate" name="confirmasenha">
          <label for="cpassword">Confirme a sua senha</label>
          <?php if(isset($_GET["senhadif"]) && $_GET["senhadif"]=="true"){ ?>
          <p>Senhas precisam ser iguais!</p>
          <?php
          }
          ?>
        </div>
      </div>
    <button class="botao">Cadastrar</button>
		<a href="index.php"><p>Já tem uma conta? Entre com a sua conta aqui</p></a>
    </form>
  </div>
</div>
<!-- partial -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.3/js/materialize.min.js"></script><script  src="js/script.js"></script>

</html>             