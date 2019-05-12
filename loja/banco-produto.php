<?php
function insereProduto($conexao, $nome, $preco, $descricao){
    $query = "Insert into produtos(nome, preco, descricao) values ('{$nome}',{$preco}, '{$descricao}')";
    return mysqli_query($conexao,$query);
}

function listaProdutos($conexao){
    $produtos = array();
    $query = "SELECT * FROM loja.produtos;";
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