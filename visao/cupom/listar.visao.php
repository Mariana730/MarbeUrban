<link rel="stylesheet" href="./publico/css/app.css">
<h2>Cupons</h2>

<table class="table"border="1">
    <thead>
        <tr>
            <th>Nome</th>
            <th>Desconto</th>
            <th>Ver Detalhes</th>
            <th>Alterar</th>
            <th>Deletar</th>
            
        </tr>
    </thead>
    <?php foreach ($cupons as $cupom): ?>
    <tr>
        <td><?=$cupom['nomecupom']?></td>
        <td><?=$cupom['desconto']?></td> 
        <td> <?php if (acessoPegarPapelDoUsuario() == 'admin') {?> <a href="./cupom/ver/<?=$cupom['idcupom']?>"><button class="bot" type="submit" <strong>DETALHAR</strong></button></a> <?php } ?></td>
        <td> <?php if (acessoPegarPapelDoUsuario() == 'admin') {?><a href="./cupom/editar/<?=$cupom['idcupom']?>"><button class="bot" type="submit" <strong>EDITAR</strong></button></a> <?php } ?></td>
        <td> <?php if (acessoPegarPapelDoUsuario() == 'admin') {?><a href="./cupom/deletar/<?=$cupom['idcupom']?>"><button class="bot" type="submit" <strong>DELETAR</strong></button></a> <?php } ?></td>
    </tr>
    <?php endforeach; ?>
</table>
<br><br><a href="./cupom/adicionar/" class="btn btn-primary"><button class="botc" type="submit" <strong>CADASTRAR OUTRO</strong></button></a>

