<h2>Cadastrar categoria:</h2>

<?php
    if (ehPost()){
        foreach ($errors as $erro) {
            echo "$erro <br>";
        }
    }
?>

<form action="" method="POST">
    <input type="text" placeholder="Nome da categoria" name="nomecategoria" value="<?=@$categorias['nomecategoria']?>"><br><br>
    <input type="text" placeholder="Descrição" name="descricaocategoria" value="<?=@$categorias['descricaocategoria']?>"><br><br>

	<button type="submit">Cadastrar</button>
</form>
