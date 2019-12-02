<?php

function salvarPedido ($idFormaPagamento, $idusuario, $idendereco, $valorcupom, $produtosCarrinho) {
$sql = "INSERT INTO pedido (idFormaPagamento, idusuario, idendereco, valorcupom, dataCompra) VALUES ($idFormaPagamento,$idusuario, $idendereco, $valorcupom, curdate())";
$resultado = mysqli_query ($cnx = conn(), $sql);
$idpedido = mysqli_insert_id($cnx);
foreach ($produtosCarrinho as $produtos) {
    $idproduto = $produtos["id"];
    $quantidade = 1;
    
    $sql = "INSERT INTO pedido_produto (idproduto, idpedido, quantidade) VALUES ('$idproduto', '$idpedido', '$quantidade')";
    $resultado = mysqli_query ($cnx = conn(), $sql);
}
if(!$resultado) { die('Erro ao adicionar um pedido'. mysqli_error($cnx));}
return 'Pedido salvo <br> <a href="./paginas/index/" class="btn btn-primary">Voltar</a>';  
}

function pegarTodosPedidos (){
    $sql = "SELECT formaPagamento.descricao, endereco.logradouro, pedido.* 
FROM pedido
INNER JOIN formaPagamento
ON pedido.idFormaPagamento = formaPagamento.idFormaPagamento
INNER JOIN endereco
ON pedido.idendereco = endereco.idendereco;";
    $resultado = mysqli_query(conn(), $sql);
    $pedidos = array();
    while ($linha = mysqli_fetch_assoc($resultado)){
    $pedidos[] = $linha;
    }
    return $pedidos; 
}

function pegarPedidoPorId ($idpedido) {
    $sql = "SELECT * FROM pedido WHERE idpedido = $idpedido";
    $resultado = mysqli_query(conn(), $sql);
    $pedidos = mysqli_fetch_assoc($resultado);
    return $pedidos;
}

function pegarProdutoPorPedido($id){
    $sql = "SELECT pr.nomeproduto 
FROM produtos pr 
INNER JOIN pedido_produto pp 
ON pr.idproduto = pp.idproduto 
INNER JOIN pedido p 
ON pp.idpedido = p.idpedido 
WHERE p.idpedido = '$id'";
    $resultado = mysqli_query(conn(), $sql);
    $pedidos = array();
    while ($linha = mysqli_fetch_assoc($resultado)) {
        $pedidos[] = $linha;
    }
    return $pedidos;
}