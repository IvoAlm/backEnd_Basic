<?php
include ("cabecalho.php");
include ("conecta.php");
function listaProdutos($conexao){
    $produtos = array();
    $query = "SELECT * FROM loja.produtos;";
    $resultado = mysqli_query($conexao,$query);
    while($produto = mysqli_fetch_assoc($resultado)){
        array_push($produtos, $produto);
    }
    return $produtos;
}
?>
<table class="table table-striped table-bordered">
    <?php
        $produtos = $this->listaProduto($conexao);
        foreach ($produtos as $produto):
    ?>
    <tr>
        <td><?= $produto['nome'] ?></td>
        <td><?= $produto['preco'] ?></td>
    </tr>
    <?php
        endforeach
    ?>
</table>
<?php include('rodape.php'); ?>






include("rodape.php");