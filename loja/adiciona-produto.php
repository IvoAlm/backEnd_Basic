<?php include('cabecalho.php'); ?>
 <?php
    function insereProduto($conexao, $nome, $preco){
    $query = "Insert into produtos(nome, preco) values ('{$nome}',{$preco})";
    return mysqli_query($conexao,$query);
    }
    $nome = $_GET["nome"];
    $preco = $_GET["preco"];
    $conexao = mysqli_connect('localhost','root','', 'loja');

    if (insereProduto($conexao, $nome, $preco)){ ?>
        <p class="alert-success">Produto <?= $nome;?> com o preço $<?= $preco;?>, adicionado com  sucesso!!</p>
    <?php } else{ ?>
        <p class="alert-danger">Produto <?= $nome;?> não foi adicionado com  sucesso!!</p>
    <?php }
    include('rodape.php'); ?>