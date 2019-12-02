<h2>Carrinho</h2>

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
    
    <?php foreach($produtos as $produto): ?>
    <tr>
        <td><?=$produto['nomeproduto']?></td>
        <td><img src="<?=$produto['imagem']?>" alt="imagem" width="10%"></td>
        <td><?=$produto['preco']?></td>
        <td><?=$produto['tamanho']?></td>
        <td><?=$produto['descricao']?></td>
        <td><a href="./carrinho/remover/<?=$produto["idproduto"];?>"> <button class="bot" type="submit" <strong>REMOVER</strong></button></a></td>
        <td><?=$produto['quantidade']?></td>
    </tr>
    <?php endforeach; ?>
</table>


<link rel="stylesheet" href="./publico/css/carrinho.css">	

<div id="comprafinal">
    <h1 class="letrasdesc">RESUMO DA COMPRA</h1>
					
    <div id="cupom">
        <h2 class="letrasdesc">CUPOM DE DESCONTO</h2>
        <form action="carrinho/index" method="POST"> 
            <input class="formspace" name="desconto">
            <button class="botao" type="submit"><strong>CALCULAR</strong></button>
        </form>
    </div>
					
    <div class="frete">
        <h2 class="letrasdesc">FRETE</h2>
        <input class="formspace" type="text" name="Digite seu CEP" placeholder="Digite seu CEP"/>
        <a href="#"><button class="botao" type="submit"><strong>CALCULAR</strong></button></a>
        <a id="naoseicep" href="#"><p>Não sei meu CEP</p></a>
    </div>
					
    <div class="frete">
        <h2 id="letrafrete">FRETE:</h2>
        <h2 class="letrasdesc">SUBTOTAL: <span class="price"><b>R$ <?= number_format($subtotal,2,',','.'); ?></b></span></h2>
        <h2 class="letrasdesc">DESCONTO: <span class="price"><b>R$ <?= number_format($desconto,2,',','.'); ?></b></span></h2>
        <h2 class="letrasdesc">TOTAL DA COMPRA: <span class="price"><b>R$ <?= number_format($total,2,',','.'); ?></b></span></h2>
        <a href="./pedido/salvar/"><button id="finalizabotao" type="submit"><strong>CONTINUAR</strong></button></a>
    </div>
</div>