
<div id="filtro">

    <h1 id="tdtitle"> DESCRIÇÃO </h1>
    
</div>

<br> <br> <br>
	
    <div id="tudo2">
	<div id="foto">
			
            <br> <img src="<?=$produtos['imagem']?>" alt="imagem" height="130%" width="70%">
		
	</div>
	
	<div id="desc">
	
	<h1> <?=$produtos['nomeproduto']?> </h1>
	
	<p> R$<?=$produtos['preco']?>,00 </p>
	
	<p> Tamanhos disponíveis </p>
	
	<div id="botom">
	<button type="tamanho"> <?=$produtos['tamanho']?> </button>
	</div>
	
	<br> 
	
	<h1> Descrição </h1>
	<p> <?=$produtos['descricao']?> </p>

<br>
    <div class="botao">
     <a class="bottom2" <a href="./carrinho/adicionar/<?=$produtos['idproduto']?>"> Comprar</a>
    </div>
	</div>
	</div>
	
	<br> <br> <br>