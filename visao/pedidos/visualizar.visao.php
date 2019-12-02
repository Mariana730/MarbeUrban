<h2>Detalhes do pedido</h2>

<p>Id Pedido: <?=$pedidos['idpedido']?></p>
<p>Id Usuario: <?=$pedidos['idusuario']?></p>
<p>Id Forma Pagamento: <?=$pedidos['idFormaPagamento']?></p>
<p>Id Endereço: <?=$pedidos['idendereco']?></p>
<p>Valor cupom: <?=$pedidos['valorcupom']?></p>

<h4>PRODUTOS COMPRADOS:</h4>
<?php foreach ($pedidosProduto as $produto) :?>
    <div><?=$produto["nomeproduto"]?><br></div>
<?php endforeach;?>
