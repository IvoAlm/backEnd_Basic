<?php include('cabecalho.php'); ?>
<div style=" text-align: center;">
    <h1>Formulário de Produto</h1>
        <form action="adiciona-produto.php">
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
                    <td>
                        <button class="btn btn-primary" type="submit" value="cadastra"> Cadastrar</button>
                    </td>
                </tr>
            </table>
        </form>
</div>
<?php include('rodape.php'); ?>
