<?php
function insereProduto($conexao, $nome, $preco){
    $query = "Insert into produtos(nome, preco) values ('{$nome}',{$preco})";
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