<?php

require_once "modelo/clienteModelo.php";

/** anon */
function index() {
    if (ehPost()) {
        extract($_POST);
        $usuarios = pegarClientePorEmailSenha($email, $senha);
        
        if (acessoLogar($usuarios)) {
            alert("Bem vindo" . $login);
            redirecionar("paginas/index");
        } else {
            alert("Usuário ou senha invalidos!");
        }
    }
    exibir("login/index");
}

/** anon */
function logout() {
    acessoDeslogar();
    alert("Deslogado com sucesso!");
    redirecionar("paginas");
}
?>