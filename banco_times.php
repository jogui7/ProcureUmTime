<?php

function listaTimes($conexao){
$times = array();
$resultado = mysqli_query($conexao, "select * from times");
  while($time = mysqli_fetch_assoc($resultado)){
    array_push($times, $time);
  }
  return $times;
}

function listaTimesPremium($conexao){
    $timespremium = array();
    $resultado = mysqli_query($conexao, "select * from times where premium = '1'");
      while($time = mysqli_fetch_assoc($resultado)){
        array_push($timespremium, $time);
      }
      return $timespremium;
    }


function ehPremium($conexao){
    
}