<link rel="stylesheet" href="./publico/css/app.css">

<h3>Selecione uma forma de pagamento: </h3>

<form action="" method="POST">
<select name="idFormaPagamento" style="padding: 10px 52px;">
        <?php foreach ($pagamentos as $pagamento):?>
        <option value="<?=$pagamento['idFormaPagamento']?>"><?=$pagamento['descricao']?></option>
        <?php endforeach;?>
</select>

<h3>Qual é o seu endereço?</h3>
<select name="idendereco" style="padding: 10px 52px;">
        <?php foreach ($enderecos as $endereco):?>
        <option value="<?=$endereco['idendereco']?>"><?=$endereco['logradouro']?></option>
        <?php endforeach;?>
</select>

<h3>Confira seus produtos</h3>

<table class="table" border="1">
    <thead>
        <tr>
            <th>Produto</th>
            <th>Imagem</th>
            <th>Preço</th>
            <th>Tamanho</th>
             <th>Descrição</th>
            <th> Remover </th>
            <th> Quantidade </th>
        </tr>
    </thead>
    
  
    <?php ($produtos); foreach($produtos as $produto): ?>
    <tr>
        <td><?=$produto['nomeproduto']?></td>
        <td><img src="<?=$produto['imagem']?>" alt="imagem" width="10%"></td>
        <td><?=$produto['preco']?></td>
        <td><?=$produto['tamanho']?></td>
        <td><?=$produto['descricao']?></td>
        <td><a href="./carrinho/remover/<?=$produto["idproduto"];?>">Remover</a></td>
        
        
         
         
    </tr>
    <?php endforeach; ?>
</table>
<h3 class="letrasdesc">TOTAL DA COMPRA: <span class="price"><b>R$ <?= number_format($subtotal,2,',','.'); ?></b></span></h3>
<h3 class="letrasdesc">DESCONTO: <span class="price"><b>R$ <?= number_format($desconto,2,',','.'); ?></b></span></h3>
<h3 class="letrasdesc">TOTAL COM DESCONTO: <span class="price"><b>R$ <?= number_format($total,2,',','.'); ?></b></span></h3>

   <br><br><button class="botc" type="submit">FINALIZAR COMPRA</button>
</form>
