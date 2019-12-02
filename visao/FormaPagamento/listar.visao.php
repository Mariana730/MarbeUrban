<link rel="stylesheet" href="./publico/css/app.css">

<h2> Formas de Pagamento</h2>

<table class="table" border="1">
    <thead>
        <tr>
            <th>Descrição</th>
            <th>Ver Detalhes</th>
            <th>Alterar</th>
            <th>Deletar</th>
            
            
        </tr>
    </thead>
    <?php foreach ($pagamentos as $pagamento): ?>
    <tr>
        <td><?=$pagamento['descricao']?></td>
        <td> <?php if (acessoPegarPapelDoUsuario() == 'admin') {?>  <a href="./FormaPagamento/ver/<?=$pagamento['idFormaPagamento']?>"><button class="bot" type="submit" <strong>DETALHAR</strong></button></a> <?php } ?></td>
        <td> <?php if (acessoPegarPapelDoUsuario() == 'admin') {?>  <a href="./FormaPagamento/editar/<?=$pagamento['idFormaPagamento']?>"><button class="bot" type="submit" <strong>EDITAR</strong></button></a> <?php } ?></td>
        <td><?php if (acessoPegarPapelDoUsuario() == 'admin') {?>  <a href="./FormaPagamento/deletar/<?=$pagamento['idFormaPagamento']?>"><button class="bot" type="submit" <strong>DELETAR</strong></button></a> <?php } ?></td>
    </tr>
    <?php endforeach; ?>
</table>
<br><br><a href="./FormaPagamento/adicionar/" class="btn btn-primary"><button class="botc" type="submit" <strong>CADASTRAR OUTRA</strong></button></a>

