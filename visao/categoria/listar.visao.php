<link rel="stylesheet" href="./publico/css/app.css">
<h2>Categorias</h2>

<table class="table" border="1">
    <thead>
        <tr>
            <th>Nome</th>
            <th>Descrição</th>
            <th>Ver detalhes</th>
            <th>Alterar</th>
            <th>Deletar</th>
            
        </tr>
    </thead>
    <?php foreach ($categorias as $categoria): ?>
    <tr>
        <td><?=$categoria['nomecategoria']?></td>
        <td><?=$categoria['descricaocategoria']?></td>
        <td> <?php if (acessoPegarPapelDoUsuario() == 'admin') {?> <a href="./categoria/ver/<?=$categoria['id_categoria']?>"><button class="bot" type="submit" <strong>DETALHAR</strong></button></a> <?php } ?></td>
        <td> <?php if (acessoPegarPapelDoUsuario() == 'admin') {?> <a href="./categoria/editar/<?=$categoria['id_categoria']?>"><button class="bot" type="submit" <strong>EDITAR</strong></button></a> <?php } ?></td>
        <td> <?php if (acessoPegarPapelDoUsuario() == 'admin') {?> <a href="./categoria/deletar/<?=$categoria['id_categoria']?>"><button class="bot" type="submit" <strong>DELETAR</strong></button></a> <?php } ?></td>
    </tr> 
    <?php endforeach; ?>
</table>
<br><br><a href="./categoria/adicionar/" class="btn btn-primary"><button class="botc" type="submit" <strong>CADASTRAR OUTRA</strong></button></a>

