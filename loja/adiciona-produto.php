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
          Produto <?= $nome;?> com o preço $<?= $preco;?>, adicionado com  sucesso!!
</div>
</body>
</html>