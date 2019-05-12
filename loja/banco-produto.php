<?php
function insereProduto($conexao, $nome, $preco, $descricao, $categoria_id){
    $query = "Insert into produtos(nome, preco, descricao, categoria_id) 
values ('{$nome}',{$preco}, '{$descricao}', {$categoria_id})";
    return mysqli_query($conexao,$query);
}

function listaProdutos($conexao){
    $produtos = array();
    $query = "SELECT p.*, c.nome as categoria_nome 
FROM loja.produtos as p join categorias as c on c.id = p.categoria_id;";
    $resultado = mysqli_query($conexao,$query);
    while($produto = mysqli_fetch_assoc($resultado)){
        array_push($produtos, $produto);
    }
    return $produtos;
}
function removeProduto($conexao, $id){
    $query ="DELETE FROM produtos WHERE id={$id}";
    return mysqli_query($conexao, $query);
}