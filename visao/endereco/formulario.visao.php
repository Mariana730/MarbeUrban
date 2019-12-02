<h2>Cadastrar um endereco: </h2>

<form action="" method="POST">
    <input type="text" placeholder="Logradouro" name="logradouro" value="<?= @$endereco['logradouro']?>"><br><br>
    <input type="text" placeholder="Numero"  name="numero" value="<?= @$endereco['numero']?>"><br><br>
    <input type="text" placeholder="Complemento" name="complemento" value="<?= @$endereco['complemento']?>"><br><br>
    <input type="text" placeholder="bairro"  name="bairro" value="<?= @$endereco['bairro']?>"><br><br>
    <input type="text" placeholder="cidade"  name="cidade" value="<?= @$endereco['cidade']?>"><br><br>
    <input type="text" placeholder="cep"  name="cep" value="<?= @$endereco['cep']?>"><br><br>
    
	<br><br><button type="submit">Cadastrar</button>
</form>