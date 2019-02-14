<?php include('cabecalho.php'); ?>
    <?php
    $nome = $_GET["nome"];
    $preco = $_GET["preco"];?>
    <p class="alert-success">Produto <?= $nome;?> com o preço $<?= $preco;?>, adicionado com  sucesso!!</p>
<?php
    $query = "Insert into produtos(nome, preco) values ('{$nome}',{$preco})";
    $conexao = mysqli_connect('localhost','root','', 'loja');
    mysqli_query($conexao,$query);
    mysqli_close($conexao);
    include('rodape.php'); ?>