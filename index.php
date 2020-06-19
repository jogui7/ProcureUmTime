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
    <?php if(isset($_GET["cadastro"]) && $_GET["cadastro"]=="true"){ ?>
      <p>Usuário cadastrado com sucesso!</p>
    <?php
    }
    if(isset($_GET["logout"]) && $_GET["logout"]=="true"){ ?>
      <p>Deslogado com sucesso!</p>
    <?php
    }
    ?>
    <form class="col s12" action="login.php" method="post">
      <div class="row">
        <div class="input-field col s12">
          <input id="email" type="email" class="validate" name="email">
          <label for="email">Email</label>
        </div>
      </div>
		
      <div class="row">
        <div class="input-field col s12">
          <input id="password" type="password" class="validate" name="senha">
          <label for="password">Senha</label>
        </div>
      </div>
    <button class="botao">ENTRAR</button>
    <?php if(isset($_GET["login"]) && $_GET["login"]=="false"){ ?>
      <p>Usuário ou senha inválidos!</p>
    <?php
    }
    ?>
		<a href="pagcadastro.php"><p>Cadastre-se clicando aqui</p></a>
    </form>
  </div>
</div>
<!-- partial -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.3/js/materialize.min.js"></script><script  src="js/script.js"></script>

</html>             