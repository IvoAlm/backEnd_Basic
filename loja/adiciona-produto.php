<?php include('cabecalho.php');
 include('conecta.php');
 include('banco-produto.php');


    $nome = $_GET["nome"];
    $preco = $_GET["preco"];
    $descricao = $_GET["descricao"];


    if (insereProduto($conexao, $nome, $preco, $descricao)){ ?>
        <p class="text-success">Produto <?= $nome;?> com o preço $<?= $preco;?>, adicionado com  sucesso!!</p>
    <?php } else{
        $msg = mysqli_error($conexao);
        ?>
        <p class="text-danger"><b>Produto <?= $nome;?> não foi adicionado:</b><?= $msg; ?> </p>
    <?php }
    include('rodape.php'); ?>