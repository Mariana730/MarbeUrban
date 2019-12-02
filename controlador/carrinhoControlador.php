<?php
require_once "modelo/produtoModelo.php";
require_once "modelo/cupomModelo.php";

/** anon */
function index(){
    if(isset($_POST['desconto'])){
        $desconto = pegarCupomPorNome ($_POST["desconto"]);
    }else{
        $desconto = 0;
    }
    
    $_SESSION["quantcarrinho"]=0;
    if (isset($_SESSION["carrinho"])) {
        $produtosCarrinho = array();
        $soma=0;
        foreach ($_SESSION["carrinho"] as $produtoSessao) {
            $_SESSION["quantcarrinho"]+= $produtoSessao["quantidade"];
            $produtoBanco = pegarProdutoPorId($produtoSessao["id"]);
            $produtoBanco["quantidade"]= $produtoSessao["quantidade"];
            $produtosCarrinho[] = $produtoBanco; 
            $aux= $produtoSessao["quantidade"]*$produtoBanco["preco"];
            $soma= $soma + $aux;
        }
        
        if($desconto > 0){
            $desconto = $soma * ($desconto/100);
        }

        $dados["produtos"] = $produtosCarrinho;
        $dados["desconto"] = $desconto;
        $dados["subtotal"] = $soma;
        $dados["total"] = $soma - $desconto;
        
        $preco['subtotal'] = $soma;
        $preco['desconto'] = $desconto;
        $preco['total'] = $soma - $desconto;
        
        $_SESSION['preco'] = $preco;

        exibir("carrinho/carrinho", $dados);
        
    } else {
        exibir("carrinho/carrinho");
    }
}

/** anon */
function adicionar($id){

    if (!isset($_SESSION["carrinho"])) {
        $_SESSION["carrinho"] = array();
    }
    $alt = false ;

    for ($i=0; $i < count($_SESSION["carrinho"]); $i++) {
        if ($_SESSION["carrinho"][$i]["id"] == $id) {
            $alt = true;
            $_SESSION["carrinho"][$i]["quantidade"]++;
        }
    }
    if (!$alt) {
        $produtos["id"] = $id;
        $produtos["quantidade"]= 1;
        $_SESSION["carrinho"][] = $produtos;   
    }
    redirecionar("carrinho/index");    
}

/** anon */
function remover($index){
    
    foreach($_SESSION["carrinho"] as $key => $produtos){
        
     
       if($index==$produtos["id"]){
           echo "Deu certo!!";
           
           echo $produtos["id"];
           unset ($_SESSION["carrinho"][$key]);
       }
       
    }
    
    $_SESSION["carrinho"] = array_values($_SESSION["carrinho"]);
    redirecionar("carrinho/index");   
}

function limpar ()
{
    unset($_SESSION['carrinho']);
    redirecionar('paginas/');
}
