<?php 
session_start();
function usuarioLogado(){
    return $_SESSION["usuario_logado"];
}

function usuarioEstaLogado() {
    return isset($_SESSION["usuario_logado"]);
}

function verificaUsuario(){
    if(!usuarioEstaLogado()){
        header("Location: index.php?falhaDeSeguranca=true");
        die();
    }
}

function logaUsuario($email){
    $_SESSION["usuario_logado"] = $email;
}

function buscaUsuarioLogado($conexao, $email){
    $query = "select * from usuarios where email='{$email}'";
    $resultado = mysqli_query($conexao, $query);
    $usuario = mysqli_fetch_assoc($resultado);
    return $usuario;
}

function buscaTimeUsuario($conexao, $time){
    $query = "select * from times where id ='{$time}'";
    $resultado = mysqli_query($conexao, $query);
    $timeusuario = mysqli_fetch_assoc($resultado);
    return $timeusuario;
}

function deslogaUsuario(){
    session_destroy();
}
