<h2>Cadastrar um cupom: </h2>

<form action="" method="POST">
    <input type="text" placeholder="Nome do Cupom" name="nomecupom" value="<?= @$cupons['nomecupom']?>"><br><br>
    <input type="text" placeholder="Desconto"  name="desconto" value="<?= @$cupons['desconto']?>"><br><br>
    
	<button type="submit">Cadastrar</button>
</form>

