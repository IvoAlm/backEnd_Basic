<html>
<head>
    <meta charset="utf-8">
    <title>Minha Loja</title>
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/loja.css" rel="stylesheet">
</head>
<body>
<div class="container">
    <?php
    $nome = $_GET["nome"];
    $preco = $_GET["preco"];?>
    <p class="alert-success">Produto <?= $nome;?> com o preço $<?= $preco;?>, adicionado com  sucesso!!</p></div>
</div>
</body>
</html>