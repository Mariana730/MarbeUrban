<h2>Cadastrar forma de pagamento :</h2>

<?php
    if (ehPost()){
        foreach ($errors as $erro) {
            echo "$erro <br>";
        }
    }
?>

<form action="" method="POST">
    <input type="text" placeholder="Forma de Pagamento" name="descricao" value="<?= @$pagamentos['descricao']?>"><br><br>

	<button type="submit">Cadastrar</button>
</form>