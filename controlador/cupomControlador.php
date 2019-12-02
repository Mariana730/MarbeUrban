<?php

require_once "modelo/cupomModelo.php";
require_once 'modelo/produtoModelo.php';

/** admin */
function adicionar () {
	if (ehPost ()) {
            $nomecupom = $_POST ["nomecupom"];
            $desconto = $_POST ["desconto"];
	
            $msg = adicionarCupom($nomecupom, $desconto);
            echo $msg;
            
           }else {
                
           }
           exibir ("cupom/formulario");
}

/** admin */
function listar () {
    $dados = array ();
    $dados["cupons"] = pegarTodosCupons();
    exibir ("cupom/listar", $dados);
}

/** admin */
function ver ($idcupom){
    $dados["cupons"] = pegarCupomPorId($idcupom);
    exibir ("cupom/visualizar" , $dados);
}

/** admin */
function deletar ($idcupom){
    $msg = deletarCupom($idcupom);
    redirecionar("./cupom/listar");
}

/** admin */
function editar ($idcupom) {
    if (ehPost()) {
        $nomecupom = $_POST["nomecupom"];
        $desconto = $_POST["desconto"];
        
        editarCupom ($idcupom, $nomecupom, $desconto);
        redirecionar ("cupom/listar");
    }else {
        $dados["cupons"] = pegarCupomPorId ($idcupom);
        exibir ("cupom/formulario", $dados);
    }
}

function desconto ($soma) {
    if (ehPost()) {
        $desconto =  pegarCupomPorNome ($_POST["desconto"]);
        $_SESSION["desconto"] = $desconto;
        $soma= $soma - $desconto;
        $dados["produtos"] = $_SESSION["carrinho"];
        $dados["total"] = $soma;
    }

     $_SESSION["quantcarrinho"]=0;
    if (isset($_SESSION["carrinho"])) {
        $produtosCarrinho = array();
        $soma=0;
        foreach ($_SESSION["carrinho"] as $produtoSessao) {
            $_SESSION["quantcarrinho"]+= $produtoSessao["quantidade"];
            $produtoBanco = pegarProdutoPorId($produtoSessao["id"]);
            $produtosCarrinho[] = $produtoBanco; 
        }
        
        $dados["produtos"] = $produtosCarrinho;
      
        exibir("carrinho/carrinho", $dados);
        
    } else {
        exibir("carrinho/carrinho");
    }
}