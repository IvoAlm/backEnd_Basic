<?php include('cabecalho.php');
 include('conecta.php');
 include('banco-produto.php');


    $nome = $_POST["nome"];
    $preco = $_POST["preco"];
    $descricao = $_POST["descricao"];
    $categoria_id = $_POST["categoria_id"];

    if (insereProduto($conexao, $nome, $preco, $descricao, $categoria_id)){ ?>
        <p class="text-success">Produto <?= $nome;?> com o preço $<?= $preco;?>, adicionado com  sucesso!!</p>
    <?php } else{
        $msg = mysqli_error($conexao);
        ?>
        <p class="text-danger"><b>Produto <?= $nome;?> não foi adicionado:</b><?= $msg; ?> </p>
    <?php }
    include('rodape.php'); ?>