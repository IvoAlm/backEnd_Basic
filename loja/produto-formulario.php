<?php include('cabecalho.php');
include('conecta.php');
include('banco-categoria.php');
$categorias = listaCategorias($conexao);
?>

<div style=" text-align: center;">
    <h1>Formulário de Produto</h1>
        <form action="adiciona-produto.php" method="post">
            <table class="table">
                <tr>
                    <td>Nome:</td>
                    <td><input class="form-control" type="text" name="nome"></td>
                </tr>
                <tr>
                    <td>Preço:</td>
                    <td><input clas="form-control" type="number" name="preco"></td>
                </tr>
                <tr>
                    <td>Descrição</td>
                    <td><textarea class="form-control" name="descricao"></textarea></td>
                </tr>
                <tr>
                    <td>Categoria</td>
                    <td>
                        <?php foreach ($categorias as $categoria):?>
                        <input type="radio" name="categoria_id" value="<?=$categoria['id']?>">
                        <?=$categoria['nome']?><br>
                        <?php endforeach;?>
                    </td>
                </tr>
                <tr>
                    <td>
                        <button class="btn btn-primary" type="submit" value="cadastra"> Cadastrar</button>
                    </td>
                </tr>
            </table>
        </form>
</div>
<?php include('rodape.php'); ?>
