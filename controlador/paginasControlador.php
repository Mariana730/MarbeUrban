<?php

require_once 'modelo/produtoModelo.php';

function descri() {
    exibir("paginas/sobre");
}

function ilustrar () {
	exibir ("paginas/mapa");
}

/** anon */
function index () {
    $dados = array();
    $dados['produtos'] = pegarTodosProdutos();
    exibir ("paginas/index", $dados);
}