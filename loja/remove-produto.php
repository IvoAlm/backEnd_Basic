<?php include('cabecalho.php');
include('conecta.php');
include('banco-produto.php');
 include('rodape.php');
 $id = $_GET['id'];
 removeProduto($conexao, $id);
 header("location:produto-lista.php?removido=true");
 die();

