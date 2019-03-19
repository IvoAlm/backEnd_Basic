<?php
include ("cabecalho.php");
include ("conecta.php");

$resultado = mysqli_query($conexao,"selected * from produtos");
while($produto = mysqli_fetch_assoc($resultado)){
    echo $produto['nome']."<br>";
}
include("rodape.php");