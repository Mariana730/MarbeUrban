<h2>Cadastre-se para comprar: </h2>

<?php
    if (ehPost()){
        foreach ($errors as $erro) {
            echo "$erro <br>";
        }
    }
?>

<form action="" method="POST">
    <input type="text" placeholder="Nome" name="nomeusuario" value="<?= @$usuarios['nomeusuario']?>"><br><br>
    <input type="text" placeholder="E-mail"  name="email" value="<?= @$usuarios['email']?>"><br><br>
    <input type="password" placeholder="Senha"  name="senha" value="<?= @$usuarios['senha']?>"><br><br>
    <input type="text" placeholder="CPF"  name="cpf" value="<?= @$usuarios['cpf']?>"><br><br>
    <input type="text" placeholder="Data: dd/mm/aaaa"  name="datadenacimento" value="<?= @$usuarios['datadenascimento']?>"><br><br>
	
    <input type="radio" name="sexo" value="M"> Masculino
    <input type="radio" name="sexo" value="F"> Feminino
    <input type="radio" name="sexo" value="O"> Outro <br><br>
    
    <input type="radio" name="tipousuario" value="user"> Usuário
    
	<br><br><button type="submit">Cadastrar</button>
</form>
