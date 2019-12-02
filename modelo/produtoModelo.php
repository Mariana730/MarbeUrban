<?php
function adicionarProduto ($nomeproduto, $id_categoria, $preco, $descricao, $tamanho, $imagem,$quantidade, $estoque_minimo, $estoque_maximmo) {
$sql = "INSERT INTO produtos (nomeproduto, id_categoria, preco, descricao, tamanho, imagem, quantidade, estoque_minimo, estoque_maximmo) VALUES ('$nomeproduto', '$id_categoria', '$preco', '$descricao', '$tamanho', '$imagem', '$quantidade', '$estoque_minimo', '$estoque_maximmo')"; 
$resultado = mysqli_query ($cnx = conn(), $sql);
if(!$resultado) { die('Erro ao cadastrar produto'. mysqli_error($cnx));}
return 'Produto cadastrado com sucesso! <br> <a href="./produto/adicionar/" class="btn btn-primary">Voltar</a>';   
}

function pegarTodosProdutos (){
    $sql = "SELECT * FROM produtos";
    $resultado = mysqli_query(conn(), $sql);
    $produtos = array();
    while ($linha = mysqli_fetch_assoc($resultado)){
    $produtos[] = $linha;
    }
    return $produtos; 
}

function pegarProdutoPorId ($idproduto) {
    $sql = "SELECT * FROM produtos WHERE idproduto = $idproduto";
    $resultado = mysqli_query(conn(), $sql);
    $produtos = mysqli_fetch_assoc($resultado);
    return $produtos;
}

function deletarProduto ($idproduto) {
    $sql = "DELETE FROM produtos WHERE idproduto = $idproduto";
    $resultado = mysqli_query($cnx = conn(), $sql);
    if (!$resultado) {
        die ('Erro ao deletar produto' . mysqli_error($cnx));
    }
    return 'Produto deletado com sucesso!';
}

function editarProduto($idproduto, $nomeproduto, $id_categoria, $preco, $descricao, $tamanho, $imagem, $quantidade, $estoque_minimo, $estoque_maximmo) {
    $sql  = "UPDATE produtos SET nomeproduto = '$nomeproduto', id_categoria = '$id_categoria', preco = '$preco', descricao = '$descricao', tamanho = '$tamanho', imagem = '$imagem', quantidade = '$quantidade', estoque_minimo = '$estoque_minimo', estoque_maximmo = '$estoque_maximmo' WHERE idproduto = $idproduto";
    $resultado = mysqli_query($cnx = conn(), $sql);
    if (!$resultado) {
        die ('Erro ao alterar produto' . mysqli_error($cnx));
    }
    return 'Produto alterado com sucesso!';
}

function buscarProduto ($buscar){
	$sql = "SELECT * FROM produtos WHERE nomeproduto LIKE '%$buscar%'";
	$resultado = mysqli_query(conn(), $sql);
	$produtos = array();
            while($linha = mysqli_fetch_assoc($resultado)){
		$produtos[] = $linha;
	}

	return $produtos;
}

function pegarProdutoPorCategoria () {
    $sql = "SELECT produtos.nomeproduto, categoria.nomecategoria, categoria.id_categoria FROM produtos 
    INNER JOIN categoria
    ON produtos.id_categoria = categoria.id_categoria
    ORDER BY categoria.nomecategoria";
    $resultado = mysqli_query(conn(), $sql);
    $produtos = array ();
     while($linha = mysqli_fetch_assoc($resultado)){
		$produtos[] = $linha;
    }
    return $produtos;
}