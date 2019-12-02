<h2>Detalhes do cliente</h2>

<p>Id: <?=$usuarios['idusuario']?></p>
<p>Nome: <?=$usuarios['nomeusuario']?></p>
<p>E-mail: <?=$usuarios['email']?></p>
<p>Senha: <?=$usuarios['senha']?></p>
<p>CPF: <?=$usuarios['cpf']?></p>
<p>Data de Nascimento: <?=$usuarios['datadenascimento']?></p>
<p>Sexo: <?=$usuarios['sexo']?></p>

<br><br><br><a href="./login/logout"><button class="botc">Logout</button></a> <br> <br>
<a href="./endereco/adicionar/<?=$usuarios['idusuario']?>" class="btn btn-primary"><button class="botc">Novo Endereço</button></a></a>