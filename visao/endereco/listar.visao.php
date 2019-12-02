<link rel="stylesheet" href="./publico/css/app.css">
<h2>Endereços</h2>

<table class="table" border="1">
    <thead>
        <tr>
            <th>Logradouro</th>
            <th>Numero</th>
            <th>Complemento</th>
            <th>Bairro</th>
            <th>Cidade</th>
            <th>CEP</th>
            <th>Ver Detalhes</th>
            <th>Alterar</th>
            <th>Deletar</th>
            
        </tr>
    </thead>
    <?php foreach ($enderecos as $endereco): ?>
    <tr>
        <td><?=$endereco['logradouro']?></td>
        <td><?=$endereco['numero']?></td>
        <td><?=$endereco['complemento']?></td>
        <td><?=$endereco['bairro']?></td>
        <td><?=$endereco['cidade']?></td>
        <td><?=$endereco['cep']?></td>
        <td><a href="./endereco/ver/<?=$endereco['idendereco']?>"><button class="bot" type="submit" <strong>DETALHAR</strong></button></a></td>
        <td><a href="./endereco/editar/<?=$endereco['idendereco']?>"><button class="bot" type="submit" <strong>EDITAR</strong></button></a></td>
        <td><a href="./endereco/deletar/<?=$endereco['idendereco']?>"><button class="bot" type="submit" <strong>DELETAR</strong></button></a></td>
    </tr>
    <?php endforeach; ?>
</table>

