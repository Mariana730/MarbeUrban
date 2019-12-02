<?php

require_once "modelo/admModelo.php";
require_once "modelo/produtoModelo.php";
require_once "modelo/categoriaModelo.php";
require_once "modelo/pedidoModelo.php";

/** admin */
function index () {
    exibir ("adm/formulario");
}

/** admin */
function listaradm () {
    $dados = array ();
    $dados["produtos"] = pegarTodosProdutos();
    exibir ("adm/listaradm", $dados);
}

/** admin */
function pegarCategoria () {
    $dados = array ();
    $dados["categorias"] = pegarProdutoPorCategoria();
    exibir ("adm/listarcategoria", $dados);   
}

/** admin */
function listarPedidosTempo() {
    if (ehPost()) {
        $data1 = $_POST['data1'];
        $data2 = $_POST['data2'];
        $dados = array();
        $erros = array();
        if ($data1 == null) {
            $erros[] = "Informe uma data válida";
        }
        if ($data2 == null) {
            $erros[] = "Informe uma data válida";
        }
        if ($data1 > $data2) {
            $erros[] = "Selecione um intervalo de tempo válido.";
        }
        if (count($erros) == 0) {
            $dados['pedidos'] = pegarPedidosTempo($data1, $data2);
            exibir("adm/listarPedidoTempo", $dados);
        } else {
            $dados['erros'] = $erros;
            exibir("adm/formularioPedidoTempo", $dados);
        }
    } else {
        exibir("adm/formularioPedidoTempo");
    }
}
/** admin */
function listarPedidosLocal() {
    if (ehPost()) {
        $cidade = $_POST['cidade'];
        $dados = array();
        $erros = array();
        if ($cidade == null) {
            $erros[] = "Insira uma cidade";
        }
        if (count($erros) == 0) {
            $dados['pedidos'] = pegarPedidosLocalizacao($cidade);
            $dados['cidade'] = $cidade;
            exibir("adm/listarPedidoLocal", $dados);
        } else {
            $dados['erros'] = $erros;
            exibir("adm/formularioPedidoLocal", $dados);
        }
    } else {
        exibir("adm/formularioPedidoLocal");
    }
}
/** admin */
function calcularFaturamentoTempo() {
    if (ehPost()) {
        $data1 = $_POST['data1'];
        $data2 = $_POST['data2'];
        $dados = array();
        $erros = array();
        if ($data1 == null) {
            $erros[] = "Informe uma data válida";
        }
        if ($data2 == null) {
            $erros[] = "Informe uma data válida";
        }
        if ($data1 > $data2) {
            $erros[] = "Selecione um intervalo de tempo válido.";
        }
        if (count($erros) == 0) {
            $dados['pedidos'] = pegarFaturamentoTempo($data1, $data2);
            $dados['data1'] = $data1;
            $dados['data2'] = $data2;
            exibir("adm/listarFaturamentoTempo", $dados);
        } else {
            $dados['erros'] = $erros;
            exibir("adm/formularioFaturamentoTempo", $dados);
        }
    } else {
        exibir("adm/formularioFaturamentoTempo");
    }
}





