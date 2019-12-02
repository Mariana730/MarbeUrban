<?php
if (ehPOST()) {
    foreach ($errors as $erro) {
        echo "$erro <br>";
    }
}
?>

<form action="" method="POST">
    <label for="~cidade">Cidade</label>
    <input type="text" name="cidade"><br><br>
    <button class="botc">Enviar</button>
</form>
<a href="cliente/adm"><button class="botc">Voltar</button></a><br><br>

