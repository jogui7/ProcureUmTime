<?php
function buscaUsuario($conexao, $email, $senha){
    $senhamd5 = md5($senha);
    $query = "select * from usuarios where email='{$email}' and senha ='{$senhamd5}'";
    $resultado = mysqli_query($conexao, $query);
    $usuario = mysqli_fetch_assoc($resultado);
    return $usuario;
}

function cadastraUsuario($conexao, $nome, $email, $senha){
    $senhamd5 = md5($senha);
    $query = "insert into usuarios (nome, email, senha) values ('{$nome}','{$email}','{$senhamd5}')";
    $insere = mysqli_query($conexao, $query);
}

function confereUsuario($conexao, $email){
    $query = "select email from usuarios where email='{$email}'";
    $resultado = mysqli_query($conexao, $query);
    $usuario = mysqli_fetch_assoc($resultado);
    return $usuario;
}
