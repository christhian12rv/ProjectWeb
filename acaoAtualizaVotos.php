<?php

include("conexao.php");

function atualizar ($conexao, $id, $votos) {
  $script = 'UPDATE concorrente SET votos = "' . $votos . '" WHERE id = ' . $id;

  $atualizar = $conexao->query($script);
  if(!$atualizar){
    echo "<br>Atualização incorreta! Deu erro!<br>";
    echo $conexao->error;
    echo "<br><br>";
    echo $script;
    echo "<br>";
    echo '<script>alert("Atualização incorreta!")</script>';
    echo '<script>window.location="votacao.php"</script>';
    
    
  }else{
    echo "<br>Atualização Realizada corretamente!";
    echo '<script>alert("Atualização feita com sucesso!")</script>';
    echo '<script>window.location="votacao.php"</script>';
    
  }
}

$id = $_GET['id'];
$votos = $_GET['votos'];

atualizar($conexao, $id, $votos);

?>