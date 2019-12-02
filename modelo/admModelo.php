<?php

function pegarPedidosTempo($data1, $data2) {
	$comando = "SELECT p.idpedido AS id, p.dataCompra AS compra, u.nomeusuario AS usuario, u.cpf AS cpf, fp.descricao AS pagamento 
	FROM pedido p 
	INNER JOIN usuario u 
	ON p.idusuario = u.idusuario 
	INNER JOIN FormaPagamento fp 
	ON p.idFormaPagamento = fp.idFormaPagamento 
	WHERE p.dataCompra BETWEEN '$data1' and '$data2'";
    $cnx = conn();
    $resul = mysqli_query($cnx, $comando);
    $pedidos = array();
    while ($pedido = mysqli_fetch_assoc($resul)) {
        $pedidos[] = $pedido;
    }
    return $pedidos;
}
function pegarPedidosLocalizacao($cidade) {
	$comando = "SELECT u.cpf, p.idpedido AS id, p.dataCompra AS compra, e.cep 
	FROM pedido p 
	INNER JOIN usuario u 
	ON p.idusuario = u.idusuario 
	INNER JOIN endereco e 
	ON p.idEndereco = e.idendereco 
	WHERE e.cidade = '$cidade'";
    $cnx = conn();
    $resul = mysqli_query($cnx, $comando);
    $pedidos = array();
    while ($pedido = mysqli_fetch_assoc($resul)) {
        $pedidos[] = $pedido;
    }
    return $pedidos;
}
function pegarFaturamentoTempo($data1, $data2) {
    $comando = "SELECT pedido.idpedido, pedido.dataCompra, 
    SUM(produtos.descricao) AS valorPedido 
    FROM pedido 
    INNER JOIN pedido_produto on pedido.idpedido = pedido_produto.idPedido 
    INNER JOIN produtos ON pedido_produto.idproduto = produtos.idproduto 
    GROUP BY pedido_produto.idpedido 
    HAVING pedido.dataCompra BETWEEN '$data1' and '$data2';";
    $cnx = conn();
    $resul = mysqli_query($cnx, $comando);
    $pedidos = array();
    while ($pedido = mysqli_fetch_assoc($resul)) {
        $pedidos[] = $pedido;
    }
    return $pedidos;
}
