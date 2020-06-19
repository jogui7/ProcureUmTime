<?php
    include("conexao.php");
    include("banco_usuario.php");
    include("logica_usuario.php"); 
    
    $usuario = buscaUsuario($conexao, $_POST["email"],  $_POST["senha"]);
    if($usuario == null){
        header("Location: index.php?login=false");
    } else{
        logaUsuario($usuario["email"]);
        header("Location: home.php?login=true");
    }
?>