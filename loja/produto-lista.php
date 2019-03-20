<?php
include ("cabecalho.php");
include ("conecta.php");

$query = "SELECT * FROM loja.produtos;";
$resultado = mysqli_query($conexao,$query);

while($produto = mysqli_fetch_assoc($resultado)){
    echo $produto['nome']."<br>";
}

include("rodape.php");