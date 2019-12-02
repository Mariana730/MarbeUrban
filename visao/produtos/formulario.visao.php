<h2>Cadastrar um produto:</h2>

<?php
    if (ehPost()){
        foreach ($errors as $erro) {
            echo "$erro <br>";
        }
    }
?>

<form action="" method="POST" enctype="multipart/form-data">
    <input type="text" placeholder="Produto" name="nomeproduto" value="<?= @$produto['nomeproduto'] ?>"> <br><br>
    
    <select name="id_categoria" style="padding: 10px 52px;">
        <?php foreach ($categorias as $categoria):?>
        <option value="<?=$categoria['id_categoria']?>"><?=$categoria['nomecategoria']?></option>
        <?php endforeach;?>
    </select>
    
    <br><br> <input type="text" placeholder="Preço" name="preco" value="<?= @$produto['preco'] ?>"><br><br>
    <input type="text" placeholder="Descrição" name="descricao" value="<?= @$produto['descricao'] ?>"><br><br>
    <input type="text" placeholder="Tamanho" name="tamanho" value="<?= @$produto['tamanho'] ?>" ><br><br>
    <input type="file" placeholder="Imagem" name="imagem" value="<?= @$produto['imagem'] ?>"> <br><br>
     <input type="text" placeholder="Quantidade" name="quantidade" value="<?= @$produto['quantidade'] ?>"> <br><br>
    <input type="text" placeholder="Estoque Mínimo" name="estoque_minimo" value="<?= @$produto['estoque_minimo'] ?>"> <br><br>
    <input type="text" placeholder="Estoque Máximo" name="estoque_maximmo" value="<?= @$produto['estoque_maximmo'] ?>"> <br><br>
    
   
	<button type="submit">Cadastrar</button>
</form>
