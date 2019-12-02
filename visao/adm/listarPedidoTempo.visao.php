<h2> Pedidos por data: </h2>

<table class="table" border="1">
    <thead>
        <tr>
            <th>Id Pedido</th>
            <th>Cpf do Usuário</th>
            <th>Data </th>
            <th>Detalhar</th>
            
        </tr>
    </thead>

    <?php foreach ($pedidos as $pedido): ?>
    <tr>
        <td> <?=$pedido['id']?></td>
        <td><?=$pedido['cpf']?></td> 
        <td><?=$pedido['compra']?></td> 
        <td><a href="./pedido/ver/<?=$pedido['id']?>">DETALHAR</td>
        
    </tr>
    <?php endforeach; ?>
    
</table>


