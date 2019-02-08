<?php include('cabecalho.php'); ?>
    <?php
    $nome = $_GET["nome"];
    $preco = $_GET["preco"];?>
    <p class="alert-success">Produto <?= $nome;?> com o preço $<?= $preco;?>, adicionado com  sucesso!!</p></div>
<?php include('rodape.php'); ?>