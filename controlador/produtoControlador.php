<?php

require_once "modelo/produtoModelo.php";
require_once "modelo/categoriaModelo.php";

/** admin */
function adicionar () {
	if (ehPost ()) {
		$nomeproduto = $_POST ["nomeproduto"];
                $id_categoria = $_POST ["id_categoria"];
		$preco = $_POST ["preco"];
		$descricao = $_POST["descricao"];
                $tamanho = $_POST["tamanho"];
                $quantidade = $_POST["quantidade"];
                $estoque_minimo = $_POST ["estoque_minimo"];
                $estoque_maximmo = $_POST ["estoque_maximmo"];
                $errors = array();
                
                if (strlen(trim($nomeproduto)) == 0){
                $errors[] = "Você deve inserir o nome do produto";
                }
                if (strlen(trim($preco)) == 0){
                $errors[] = "Você deve inserir um preço para o produto";
                }
                if (strlen(trim($descricao)) == 0){
                $errors[] = "Você deve inserir uma descrição";
                }
                if (strlen(trim($tamanho)) == 0){
                $errors[] = "Você deve inserir o(s) tamanho(s) de seu produto";
                }
                 if (strlen(trim($quantidade)) == 0){
                $errors[] = "Você deve inserir uma quantidade";
                }
                if (strlen(trim($estoque_minimo)) == 0){
                $errors[] = "Você deve inserir a quantidade mínima no estoque";
                }
                if (strlen(trim($estoque_maximmo)) == 0){
                $errors[] = "Você deve inserir a quantidade máxima no estoque";
                }
                
                $imagem = $_FILES["imagem"];
                $destino = './publico/imagens/' . $_FILES['imagem']['name'];
                $imagem_tmp = $_FILES['imagem']['tmp_name'];
                   
                move_uploaded_file( $imagem_tmp, $destino );
               
                
            if (count($errors)> 0){
                $dados = array();
                $dados["errors"] = $errors;
                $dados["categorias"] = pegarTodosCategorias();
                exibir ("produtos/formulario", $dados);
            }else {
                $msg = adicionarProduto($nomeproduto, $id_categoria, $preco, $descricao, $tamanho, $destino,$quantidade, $estoque_minimo, $estoque_maximmo );
                redirecionar ("paginas/index");
            }
            
        }else {
            $dados = array();
            $dados["categorias"] = pegarTodasCategorias();
            exibir("produtos/formulario",$dados);	
	}
}

/** anon */
function listar () {
    $dados = array ();
    $dados["produtos"] = pegarTodosProdutos();
    exibir ("produtos/listar", $dados);
}

/** admin */
function ver ($idproduto){
    $dados["produtos"] = pegarProdutoPorId($idproduto);
    exibir ("produtos/visualizar" , $dados);
}

/** admin */
function deletar ($idproduto){
    $msg = deletarProduto($idproduto);
    redirecionar("./produto/listar");
}

/** admin */
function editar($idproduto){
    if (ehPost()) {
        $nomeproduto = $_POST ["nomeproduto"];
        $id_categoria = $_POST ["id_categoria"];
        $preco = $_POST ["preco"];
	$descricao = $_POST["descricao"];
        $tamanho = $_POST["tamanho"];
        $imagem = $_FILES["imagem"];
        $quantidade = $_POST["quantidade"];
        $estoque_minimo = $_POST ["estoque_minimo"];
        $estoque_maximmo = $_POST ["estoque_maximmo"];
        
         $destino = './publico/imagens/' . $_FILES['imagem']['name'];
         $imagem_tmp = $_FILES['imagem']['tmp_name'];
                   
         move_uploaded_file( $imagem_tmp, $destino );
        
        editarProduto($idproduto, $nomeproduto, $id_categoria, $preco, $descricao, $tamanho, $destino, $quantidade, $estoque_minimo, $estoque_maximmo);
        redirecionar ("produto/listar");
    }else {
        $dados["categorias"] = pegarTodasCategorias();
        $dados["produto"] = pegarProdutoPorId($idproduto);
        exibir ("produtos/formulario", $dados);
    }
}

/** anon */
function buscar(){
	if (ehpost()){
            $busca = $_POST["busca"];
            $produto = array();

            $dados["produtos"] = buscarProduto($busca);
            exibir("produtos/listar", $dados);
		
	}
}

/** anon */
function descricao ($idproduto){
    $dados["produtos"] = pegarProdutoPorId($idproduto);
    exibir ("produtos/descricao" , $dados);
}

