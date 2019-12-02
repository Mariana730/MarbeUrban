<link rel="stylesheet" href="./publico/css/app.css">
<h2> Usuarios</h2>

<table class="table" border="1">
    <thead>
        <tr>
            <th>Nome</th>
            <th>E-mail</th>
            <th>Senha</th>
            <th>CPF</th>
            <th>Data de Nascimento</th>
            <th>Sexo</th>
            <th>Ver detalhes</th>
            <th>Alterar Dados</th>
            <th>Deletar o usuario</th>
            
        </tr>
    </thead>
    <?php foreach ($usuarios as $usuario): ?>
    <tr>
        <td><?=$usuario['nomeusuario']?></td>
        <td><?=$usuario['email']?></td>
        <td><?=$usuario['senha']?></td>
        <td><?=$usuario['cpf']?></td>
        <td><?=$usuario['datadenascimento']?></td>
        <td><?=$usuario['sexo']?></td>
        <td>  <?php if (acessoPegarPapelDoUsuario() == 'admin') {?> <a href="./cliente/ver/<?=$usuario['idusuario']?>"><button class="bot" type="submit" <strong>DETALHAR</strong></button></a> <?php } ?> </td>
        <td><a href="./cliente/editar/<?=$usuario['idusuario']?>"><button class="bot" type="submit" <strong>EDITAR</strong></button></a></td>
        <td>  <?php if (acessoPegarPapelDoUsuario() == 'admin') {?> <a href="./cliente/deletar/<?=$usuario['idusuario']?>"><button class="bot" type="submit" <strong>DELETAR</strong></button></a> <?php } ?></td>
    </tr>
    <?php endforeach; ?>
</table>




