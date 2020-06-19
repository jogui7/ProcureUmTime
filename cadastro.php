<?php
    include("conexao.php");
    include("banco_usuario.php"); 
    
    if($_POST["senha"] != $_POST["confirmasenha"]){
        header("Location: pagcadastro.php?senhadif=true");
    } else {
        $usuario = confereUsuario($conexao, $_POST["email"]);
        if ($usuario != null){
            header("Location: pagcadastro.php?cadastro=false");
            die();
        } else {
            $usuario = cadastraUsuario($conexao,$_POST["nome"],  $_POST["email"],  $_POST["senha"]);
            header("Location: index.php?cadastro=true");    
        }
    }    
?>