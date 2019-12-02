<?php

function adicionarPagamento ($descricao) {
    $sql = "INSERT INTO FormaPagamento (descricao) VALUES ('$descricao')"; 
    $resultado = mysqli_query ($cnx = conn(), $sql);
    if(!$resultado) { die('Erro ao cadastrar forma de pagamento'.mysqli_error($cnx));}
    return 'Forma de Pagamento cadastrada com sucesso! <br> <a href="./FormaPagamento/adicionar/" class="btn btn-primary">Voltar</a>';
}

function pegarTodosPagamentos (){
    $sql = "SELECT * FROM FormaPagamento";
    $resultado = mysqli_query(conn(), $sql);
    $pagamentos = array();
    while ($linha = mysqli_fetch_assoc($resultado)){
    $pagamentos[] = $linha;
    }
    return $pagamentos; 
}

function pegarPagamentoPorId ($idFormaPagamento) {
    $sql = "SELECT * FROM FormaPagamento WHERE idFormaPagamento = $idFormaPagamento";
    $resultado = mysqli_query(conn(), $sql);
    $pagamentos = mysqli_fetch_assoc($resultado);
    return $pagamentos;
}

function deletarPagamento ($idFormaPagamento) {
    $sql = "DELETE FROM FormaPagamento WHERE idFormaPagamento = $idFormaPagamento";
    $resultado = mysqli_query($cnx = conn(), $sql);
    if (!$resultado) {
        die ('Erro ao deletar forma de pagamento' . mysqli_error($cnx));
    }
    return 'Forma de Pagamento deletada com sucesso!';
}

function editarPagamento ($idFormaPagamento, $descricao){
    $sql = "UPDATE FormaPagamento SET descricao = '$descricao' WHERE idFormaPagamento = '$idFormaPagamento'";
    $resultado = mysqli_query($cnx = conn(), $sql);
    if (!$resultado) {
        die ('Erro ao alterar forma de pagamento' . mysqli_error($cnx));
    }
    return 'Forma de pagamento alterada com sucesso!';        
}







