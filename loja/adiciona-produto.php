<?php include('cabecalho.php'); ?>
    <?php
    $nome = $_GET["nome"];
    $preco = $_GET["preco"];
    $query = "Insert into produtos(nome, preco) values ('{$nome}',{$preco})";
    $conexao = mysqli_connect('localhost','root','', 'loja');
    mysqli_query($conexao,$query);
    if (mysqli_query($conexao,$query)){ ?>
        <p class="alert-success">Produto <?= $nome;?> com o preço $<?= $preco;?>, adicionado com  sucesso!!</p>
    <?php } else{ ?>
        <p class="alert-danger">Produto <?= $nome;?> não foi adicionado com  sucesso!!</p>
    <?php }
    mysqli_close($conexao);
    include('rodape.php'); ?>