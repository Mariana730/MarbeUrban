<?php

require_once "modelo/categoriaModelo.php";

/** admin */
function adicionar (){
    if (ehPost ()){
        $nomecategoria = $_POST["nomecategoria"];
        $descricaocategoria = $_POST["descricaocategoria"];
        $errors = array();
        
        if (strlen(trim($nomecategoria)) == 0){
            $errors[] = "Você deve inserir um nome para a categoria";
        }
        if (strlen(trim($descricaocategoria)) == 0){
            $errors[] = "A descrição da categoria criada é obrigatória";
        }
        
        if (count($errors)> 0){
                $dadoserro = array();
                $dadoserro["errors"] = $errors;
                exibir ("categoria/formulario", $dadoserro);
        }else {
                $msg = adicionarCategoria($nomecategoria, $descricaocategoria);
                echo $msg;
        }  
   
    }else {
        exibir ("categoria/formulario");
    }
}

/** admin */
function listar () {
    $dados = array ();
    $dados["categorias"] = pegarTodasCategorias();
    exibir ("categoria/listar", $dados);
}

/** admin */
function ver ($id_categoria){
    $dados["categorias"] = pegarCategoriaPorId($id_categoria);
    exibir ("categoria/visualizar" , $dados);
}

/** admin */
function deletar ($id_categoria){
    $msg = deletarCategoria($id_categoria);
    redirecionar("./categoria/listar");
}

/** admin */
function editar ($id_categoria) {
    if (ehPost()) {
        $nomecategoria = $_POST["nomecategoria"];
        $descricaocategoria = $_POST["descricaocategoria"];
        
        editarCategoria ($id_categoria, $nomecategoria, $descricaocategoria);
        redirecionar ("categoria/listar");
    }else {
        $dados["categorias"] = pegarCategoriaPorId ($id_categoria);
        exibir ("categoria/formulario", $dados);
    }
}