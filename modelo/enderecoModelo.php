 <?php
function adicionarEndereco ($idusuario, $logradouro, $numero, $complemento, $bairro, $cidade, $cep) {
$sql = "INSERT INTO endereco (idusuario, logradouro, numero, complemento, bairro, cidade, cep) VALUES ('$idusuario', '$logradouro', '$numero', '$complemento', '$bairro', '$cidade', '$cep')"; 
$resultado = mysqli_query ($cnx = conn(), $sql);
if(!$resultado) { die('Erro ao cadastrar endereco'. mysqli_error($cnx));}
return 'Endereco cadastrado com sucesso! <br> <a href="./endereco/adicionar/" class="btn btn-primary">Voltar</a>';   
}      

function pegarTodosEnderecos (){
    $sql = "SELECT * FROM endereco";
    $resultado = mysqli_query(conn(), $sql);
    $enderecos = array();
    while ($linha = mysqli_fetch_assoc($resultado)){
    $enderecos[] = $linha;
    }
    return $enderecos; 
}

function pegarEnderecoPorId ($idendereco) {
    $sql = "SELECT * FROM endereco WHERE idendereco = $idendereco";
    $resultado = mysqli_query(conn(), $sql);
    $enderecos = mysqli_fetch_assoc($resultado);
    return $enderecos;
}

function pegarEnderecoPorIdusuario ($idusuario) {
    $sql = "SELECT * FROM endereco WHERE idusuario = $idusuario";
    $resultado = mysqli_query(conn(), $sql);
    $enderecos = array();
    while ($linha = mysqli_fetch_assoc($resultado)){
    $enderecos[] = $linha;
    }
    return $enderecos;
}

function deletarEndereco ($idendereco) {
    $sql = "DELETE FROM endereco WHERE idendereco = $idendereco";
    $resultado = mysqli_query($cnx = conn(), $sql);
    if (!$resultado) {
        die ('Erro ao deletar endereco' . mysqli_error($cnx));
    }
    return 'Endereco deletado com sucesso!';
}

function editarEndereco($idendereco, $logradouro, $numero, $complemento, $bairro, $cidade, $cep ) {
    $sql = "UPDATE endereco SET logradouro = '$logradouro', numero = '$numero', complemento = '$complemento', bairro = '$bairro', cidade = '$cidade', cep = '$cep'  WHERE idendereco = $idendereco";
    $resultado = mysqli_query($cnx = conn(), $sql);
    if(!$resultado) { die('Erro ao alterar endereco' . mysqli_error($cnx)); }
    return 'Endereco alterado com sucesso!';
}
 ?>
    