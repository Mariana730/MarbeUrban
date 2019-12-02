<?php

function conn() {
    $local = "biblioteca/manipulacao/local.csv";
    $servidor = "biblioteca/manipulacao/servidor.csv";
    
    $arquivo = $local;
    
    $arq = fopen($arquivo, 'r');
    
    $linha = fgets($arq);
    $dados = explode(',', $linha);
    
    $server = $dados[0];
    $user = $dados[1];
    $password = $dados[2];
    $database = $dados[3];

    fclose($arq);

    $cnx = mysqli_connect($server, $user, $password, $database);
    if (!$cnx) die('Deu errado a conexao!');
    return $cnx;
}