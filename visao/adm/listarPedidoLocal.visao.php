<h2> Listar Pedidos: </h2>

<table class="table" border="1">
    <thead>
        <tr>
            <th>CPF</th>
            <th>Pedido</th>
            <th>Data da compra</th>
            <th>CEP</th>
            <th>Detalhar</th>
            
        </tr>
    </thead>

    <?php foreach ($pedidos as $pedido): ?>
    <tr>
        <td> <?=$pedido['cpf']?></td>
        <td><?=$pedido['id']?></td> 
        <td><?=$pedido['compra']?></td> 
        <td><?=$pedido['cep']?></td> 
        <td> <?php if (acessoPegarPapelDoUsuario() == 'admin') {?> <a href="./pedido/ver/<?=$pedido['id']?>"> DETALHAR <?php } ?></td>
        
    </tr>
    <?php endforeach; ?>
</table>
