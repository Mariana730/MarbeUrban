<?php

require_once "modelo/enderecoModelo.php";

/** anon */
function adicionar ($idusuario) {
	if (ehPost ()) {
            $logradouro = $_POST ["logradouro"];
            $numero = $_POST ["numero"];
            $complemento = $_POST ["complemento"];
            $bairro = $_POST ["bairro"];
            $cidade = $_POST ["cidade"];
            $cep = $_POST ["cep"];
	
            $msg = adicionarEndereco($idusuario, $logradouro, $numero, $complemento, $bairro, $cidade, $cep);
            echo $msg;
            
           }else {
                
           }
           exibir ("endereco/formulario");
}

/** admin */
function listar () {
    $dados = array ();
    $dados["enderecos"] = pegarTodosEnderecos();
    exibir ("endereco/listar", $dados);
}

/** admin */
function ver ($idendereco){
    $dados["enderecos"] = pegarEnderecoPorId($idendereco);
    exibir ("endereco/visualizar" , $dados);
}

function verusuario ($idusuario) {
    $dados["enderecos"] = pegarEnderecoPorIdUsuario($idusuario);
    exibir ("endereco/visualizar" , $dados);
}

/** anon */
function deletar ($idendereco){
    $msg = deletarEndereco($idendereco);
    redirecionar("./endereco/listar");
}

/** anon */
function editar ($idendereco) {
    if (ehPost()) {
        
        $logradouro = $_POST ["logradouro"];
        $numero = $_POST ["numero"];
        $complemento = $_POST ["complemento"];
        $bairro = $_POST ["bairro"];
        $cidade = $_POST ["cidade"];
        $cep = $_POST ["cep"];
        
        editarEndereco ($idendereco, $logradouro, $numero, $complemento, $bairro, $cidade, $cep );
        redirecionar ("endereco/listar");
    }else {
        $dados["enderecos"] = pegarEnderecoPorId ($idendereco);
        exibir ("endereco/formulario", $dados);
    }
}


