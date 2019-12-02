<?php

function adicionarCliente ($nomeusuario, $email, $senha, $cpf, $datadenascimento, $sexo, $tipousuario) {
    $sql = "INSERT INTO usuario (nomeusuario, email, senha, cpf, datadenascimento, sexo, tipousuario) VALUES ('$nomeusuario', '$email', '$senha', '$cpf', '$datadenascimento', '$sexo', '$tipousuario')"; 
    $resultado = mysqli_query ($cnx = conn(), $sql);
    if(!$resultado) { die('Erro ao cadastrar cliente'.mysqli_error($cnx));}
    return 'Cliente cadastrado com sucesso! <br> <a href="./cliente/adicionar/" class="btn btn-primary">Voltar</a>';
}

function pegarTodosClientes (){
    $sql = "SELECT * FROM usuario";
    $resultado = mysqli_query(conn(), $sql);
    $usuarios = array();
    while ($linha = mysqli_fetch_assoc($resultado)){
        $usuarios[] = $linha;
    }
    return $usuarios; 
}

function pegarClientePorId ($idusuario) {
    $sql = "SELECT * FROM usuario WHERE idusuario = $idusuario";
    $resultado = mysqli_query(conn(), $sql);
    $usuarios = mysqli_fetch_assoc($resultado);
    return $usuarios;
}

function deletarCliente ($idusuario) {
    $sql = "DELETE FROM usuario WHERE idusuario = $idusuario";
    $resultado = mysqli_query($cnx = conn(), $sql);
    if (!$resultado) {
        die ('Erro ao deletar cliente' . mysqli_error($cnx));
    }
    return 'Usuario deletado com sucesso!';
}

function editarCliente ($idusuario, $nomeusuario, $email, $senha, $cpf, $datadenascimento, $sexo, $tipousuario) {
    $sql = "UPDATE usuario SET nomeusuario = '$nomeusuario', email = '$email', senha = '$senha', cpf = '$cpf', datadenascimento = '$datadenascimento', sexo = '$sexo', tipousuario = '$tipousuario' WHERE idusuario = $idusuario";
    $resultado = mysqli_query($cnx = conn(), $sql);
    if (!$resultado) {
        die ('Erro ao alterar usuario' . mysqli_error($cnx));
    }
    return 'Usuario alterado com sucesso!';
    
}

function pegarClientePorEmailSenha($email, $senha) {
    $sql = "SELECT * FROM usuario WHERE email= '$email' and senha = '$senha'";
    $resultado = mysqli_query(conn(), $sql);
    $usuarios = mysqli_fetch_assoc($resultado);
    return $usuarios;
}