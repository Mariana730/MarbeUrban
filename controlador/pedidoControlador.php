<?php

require_once "modelo/pedidoModelo.php";
require_once "modelo/formaPagamentoModelo.php";
require_once "modelo/enderecoModelo.php";
require_once "modelo/produtoModelo.php";

function salvar() {
    if (ehPost()) {
        $idFormaPagamento = $_POST["idFormaPagamento"];
        $idusuario = acessoPegarUsuarioLogado();
        $idendereco = $_POST["idendereco"];
        $valorcupom = $_SESSION["desconto"];
        $produtosCarrinho = $_SESSION["carrinho"];

        $msg = salvarPedido($idFormaPagamento, $idusuario, $idendereco, $valorcupom, $produtosCarrinho);
        echo $msg;
    } else {
        $_SESSION["quantcarrinho"] = 0;
        if (isset($_SESSION["carrinho"])) {
            $produtosCarrinho = array();
            $soma = 0;
            foreach ($_SESSION["carrinho"] as $produtoSessao) {
                $_SESSION["quantcarrinho"] += $produtoSessao["quantidade"];
                $produtoBanco = pegarProdutoPorId($produtoSessao["id"]);
                $produtosCarrinho[] = $produtoBanco;
                $aux = $produtoSessao["quantidade"] * $produtoBanco["preco"];
                $soma = $soma + $aux;
            }

            $dados["produtos"] = $produtosCarrinho;
        }

        $chamar = acessoPegarUsuarioLogado();
        $dados["pagamentos"] = pegarTodosPagamentos();
        $dados["enderecos"] = pegarEnderecoPorIdUsuario($chamar);

        $preco = $_SESSION["preco"];

        $dados['subtotal'] = $preco['subtotal'];
        $dados['desconto'] = $preco['desconto'];
        $dados['total'] = $preco['total'];

        exibir("pedidos/formulario", $dados);
    }
}

function listar() {
    $dados = array();
    $dados["pedidos"] = pegarTodosPedidos();
    exibir("pedidos/listar", $dados);
}

function ver($idpedido) {
    $dados["pedidosProduto"] = pegarProdutoPorPedido($idpedido);
    $dados["pedidos"] = pegarPedidoPorId($idpedido);
    exibir("pedidos/visualizar", $dados);
}

function adicionar($id) {

    if (!isset($_SESSION["carrinho"])) {
        $_SESSION["carrinho"] = array();
    }
    $alt = false;

    for ($i = 0; $i < count($_SESSION["carrinho"]); $i++) {
        if ($_SESSION["carrinho"][$i]["id"] == $id) {
            $alt = true;
            $_SESSION["carrinho"][$i]["quantidade"] ++;
        }
    }
    if (!$alt) {
        $produtos["id"] = $id;
        $produtos["quantidade"] = 1;
        $_SESSION["carrinho"][] = $produtos;
    }
    redirecionar("carrinho/index");
}
